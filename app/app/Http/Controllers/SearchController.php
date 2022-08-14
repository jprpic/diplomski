<?php

namespace App\Http\Controllers;

use App\Models\CV;
use App\Models\Postcode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class SearchController extends Controller
{
    public function index(Request $request){
        $options = $request->query->all();
        if(!$options){
            return Inertia::render('Search',[
                'postcodes' => Postcode::all()
            ]);
        }

        $targets = self::filterCVs($options);
        return Inertia::render('Search', [
            'targets' => $targets,
            'postcodes' => Postcode::all()
        ]);
    }

    public function apiSearch(Request $request){
        $options = $request->query->all();
        if(!$options){
           return response('Missing search params.', 400)
                ->header('Content-Type', 'text/plain');
        }

        $targets = self::filterCVs($options);
        return response()->json($targets);

    }

    private function filterCVs($options){
        $targets = [];

        $locationClauses = [];
        if(isset($options['county'])){
            array_push($locationClauses, ['postcodes.county', '=', $options['county']]);
        }
        if(isset($options['city'])){
            array_push($locationClauses, ['postcodes.name', '=', $options['city']]);
        }
        $cvs = DB::table('cvs')
            ->join('postcodes', 'cvs.postcode', '=', 'postcodes.code')
            ->select('cvs.*', 'postcodes.name as postcodes.name', 'postcodes.county as postcodes.county')
            ->where([
                ['cvs.birthdate', '<', Carbon::now()->subYears($options['ageRange']['bot'])],
                ['cvs.birthdate', '>', Carbon::now()->subYears($options['ageRange']['top'])],
                ['cvs.years_of_exp', '>=', $options['expRange']['bot']],
                ['cvs.years_of_exp', '<=', $options['expRange']['top']],
                ...$locationClauses
            ])->get()->toArray();

        // Transform DB Query Collection to Model Objects
        $cvs = CV::hydrate($cvs);
        // Calculate age on backend
        foreach($cvs as $cv){
            $cv->age = Carbon::now()->diffInYears($cv->birthdate);
        }
        $searchedSkills = array_key_exists('skills', $options) ? $options['skills'] : null;
        if($searchedSkills){
            foreach($cvs as $cv){
                // Calculate ratio of found user skills and all user'\s skills.
                // Calculate average proficiency level among found skills.
                $userSkills = $cv->skillProficiencies->toArray();
                $foundSkills = $cv->skillProficiencies->whereIn('skill_id', $searchedSkills)->all();
                $targetSkills = [
                    'skillRatio' => count($foundSkills)/count($userSkills),
                    'avgProficiency' => array_sum(array_column($foundSkills, 'proficiency')) / (count($foundSkills) ?: 1),
                    'skills' => array_column($foundSkills, 'skill_id')
                ];
                if(count($targetSkills['skills'])){
                    array_push($targets, $cv->toArray() + $targetSkills);
                }
            }
            // Sort by amount of found skill / amount of searched skills
            usort($targets, function ($a, $b) {
                if($a['skillRatio'] != $b['skillRatio']){
                    return $a['skillRatio'] < $b['skillRatio'];
                }
                else{
                    return $a['avgProficiency'] < $b['avgProficiency'];
                }
            });
        }else {
            $targets = $cvs->toArray();
        }

        if(isset($options['page'])){
            $targets = array_splice($targets, $options['page']*15, 15);
        }

        return $targets;
    }

}
