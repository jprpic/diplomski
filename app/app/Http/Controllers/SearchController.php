<?php

namespace App\Http\Controllers;

use App\Models\CV;
use App\Models\CV\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class SearchController extends Controller
{
    //

    public function index(Request $request){
        $options = $request->query->all();
        if(!$options){
            return Inertia::render('Search');
        }
        $targets = self::filterCVs($options);

        return Inertia::render('Search', [
            'targets' => $targets
        ]);
    }

    private function filterCVs($options){
        $searchedSkills = $options['skills'];

        dd($options);
        $targets = [];
        foreach(CV::all() as $cv){
            // Calculate ratio of found user skills and all user'\s skills.
            // Calculate average proficiency level among found skills.
            $userSkills = $cv->skillProficiencies->toArray();
            $foundSkills = $cv->skillProficiencies->whereIn('skill_id', $searchedSkills)->all();
            array_push($targets, [
                'cv' => [
                    'id' => $cv->id,
                    'name' => $cv->name,
                ],
                'skillRatio' => count($foundSkills)/count($userSkills),
                'avgProficiency' => array_sum(array_column($foundSkills, 'proficiency')) / (count($foundSkills) ?: 1),
                'skills' => array_column($foundSkills, 'skill_id')
            ]);
        }

        return $targets;
    }

}
