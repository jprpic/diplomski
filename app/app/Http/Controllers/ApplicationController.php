<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\CV;
use App\Models\JobAd;
use App\Models\Role;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ApplicationController extends Controller
{
    public function store(Request $request) {
        $data = $request->json()->all();
        $user_id = $data['user_id'];
        $job_id = $data['job_id'];
        if($request->user()->role_id == Role::ROLE_ADMIN || $request->user()->id == $user_id) {
            $app = Application::where('job_id',$job_id)->where('user_id', $user_id)->first();

            if($app) {
                Application::where('job_id',$job_id)->where('user_id', $user_id)->delete();
                return response('Successfully deleted application!')->setStatusCode(203);
            }
            $app = new Application;
            $app->job_id = $job_id;
            $app->user_id = $user_id;
            $app->save();
            return response('Successfully stored application!')->setStatusCode(201);
        }
        return response()->noContent()->setStatusCode(403);
    }


    public function index(Request $request) {
        return Application::with(['user','jobAd'])->get()->toJson();
    }

    public function userIndex(Request $request) {
        $cv =  $request->user()->cv;
        $user_id = $request->user()->id;
        $suggestedJobAds = null;
        $applications = Application::where('user_id', $user_id)->get()->toArray();

        if(isset($cv)){
            $skills = $cv->skillProficiencies->toArray();
            $skillIds = array_column($skills, 'skill_id');
            // Get all Job Ads and extract their wanted Skill IDS
            $jobAds = JobAd::whereIn('id',array_column($applications, 'job_id'))->get(['id','skills'])->toArray();
            $jobAdSkillIds = array_column($jobAds, 'skills');


            // Expand Users skills to apply array functions
            // Get matching and different skills
            $intersectSkillIds = array_fill(0, count($jobAdSkillIds), $skillIds);
            $matchingSkillIds = array_map(function ($jobAdSkillIds, $skillIds) {
                return array_intersect($jobAdSkillIds, $skillIds);
            }, $jobAdSkillIds, $intersectSkillIds);

            $differentSkillsIds = array_map(function ($jobAdSkillIds, $skillIds) {
                return array_diff($jobAdSkillIds, $skillIds);
            }, $jobAdSkillIds, $intersectSkillIds);

            $skillInfo = array_map(function ($matchingSkillIds, $differentSkillsIds) {
                return array(
                    "matchingSkills" => $matchingSkillIds,
                    "differentSkills" => $differentSkillsIds
                );
            }, $matchingSkillIds, $differentSkillsIds);

            $matchingJobAds = array_filter($skillInfo, function($skills) {
                return isset($skills);
            });

            $suggestedJobAds = [];
            foreach(array_keys($matchingJobAds) as $index){
                $jobAdInfo = JobAd::with(['orgCv' => function ($query) {
                    $query->select('id', 'name', 'img_url');
                }])->select(['id','name','org_c_v_s_id'])->find($jobAds[$index]['id'])->toArray();
                $jobAd = array(
                    "jobAd" => $jobAdInfo,
                    "skills" => $matchingJobAds[$index],
                    "isApplied" => Application::where('job_id', $jobAdInfo['id'])->where('user_id', $request->user()->id)->first()
                );
                $suggestedJobAds[] = $jobAd;

            }
            usort($suggestedJobAds, function($a, $b) {
                $matchPercentageFirst = count($a["skills"]["matchingSkills"]) / ( count($a["skills"]["matchingSkills"]) + count($a["skills"]["differentSkills"]));
                $matchPercentageSecond = count($b["skills"]["matchingSkills"]) / ( count($b["skills"]["matchingSkills"]) + count($b["skills"]["differentSkills"]));

                return $matchPercentageFirst < $matchPercentageSecond;
            });

        }
        return Inertia::render('User/Applications',[
            'suggestedJobAds' => $suggestedJobAds
        ]);
    }

    public function applicantsIndex(Request $request, $job_id){
        $applications = Application::where('job_id', $job_id)->get('user_id')->toArray();
        $users = CV::with(['location','skillProficiencies'])->whereIn('user_id',array_column($applications, 'user_id'))->get()->toJson();
        return response()->json($users);
    }


}
