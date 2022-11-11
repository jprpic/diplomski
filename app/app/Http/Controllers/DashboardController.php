<?php

namespace App\Http\Controllers;

use App\Models\CV;
use App\Models\JobAd;
use App\Models\OrgCV;
use App\Models\Role;
use App\Models\User;
use http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(Request $request){
        $role = $request->user()->role->id;

        if($role == Role::ROLE_ADMIN){
            return Inertia::render('Dashboard/Admin');
        }

        else if($role == Role::ROLE_ORGANIZATION){
            $orgCv = $request->user()->orgCv;
            return Inertia::render('Dashboard/Organization',[
                'jobAds' => $orgCv?->jobAds
            ]);
        }
        else if($role == Role::ROLE_EMPLOYEE){
            $cv =  $request->user()->cv;
            $suggestedJobAds = null;
            if(isset($cv)){
                $skills = $cv->skillProficiencies->toArray();
                $skillIds = array_column($skills, 'skill_id');

                // Get all Job Ads and extract their wanted Skill IDS
                $jobAds = JobAd::all(['id','skills'])->toArray();
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
                    if($matchingSkillIds){
                        return array(
                            "matchingSkills" => $matchingSkillIds,
                            "differentSkills" => $differentSkillsIds
                        );
                    }
                    return null;
                }, $matchingSkillIds, $differentSkillsIds);

                $matchingJobAds = array_filter($skillInfo, function($skills) {
                    return isset($skills);
                });

                $suggestedJobAds = [];
                foreach(array_keys($matchingJobAds) as $index){
                    $jobAd = array(
                        "jobAd" => JobAd::with(['orgCv' => function ($query) {
                            $query->select('id', 'name', 'img_url');
                        }])->select(['id','name','org_c_v_s_id'])->find($jobAds[$index]['id'])->toArray(),
                        "skills" => $matchingJobAds[$index]
                    );
                    $suggestedJobAds[] = $jobAd;
                }


                usort($suggestedJobAds, function($a, $b) {
                    $matchPercentageFirst = count($a["skills"]["matchingSkills"]) / ( count($a["skills"]["matchingSkills"]) + count($a["skills"]["differentSkills"]));
                    $matchPercentageSecond = count($b["skills"]["matchingSkills"]) / ( count($b["skills"]["matchingSkills"]) + count($b["skills"]["differentSkills"]));

                    return $matchPercentageFirst < $matchPercentageSecond;
                });

            }
            return Inertia::render('Dashboard/User',[
                'suggestedJobAds' => $suggestedJobAds
            ]);
        }
        return Inertia::render('Dashboard');
    }

    public function getUsers(){
        $users = User::all()->toJson();
        return response($users);
    }

    public function getCVs(){
        $cvs = CV::all()->toJson();
        return response($cvs);
    }

    public function getOrgCVs(){
        $orgCVs = OrgCV::with(['location'])->get()->toJson();
        return response($orgCVs);
    }

    public function getJobAds(){
        $jobAds = JobAd::with(['orgCv'])->get()->toJson();
        return response($jobAds);
    }
}
