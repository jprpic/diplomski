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

    public function index(){
        return Inertia::render('Search');
    }

    public function search(Request $request){
        // Get CVs by ID, proficiencySum and
        $searchParams = $request->json()->all();
        $skillIDs = [];
        foreach([...$searchParams['skills']] as $skill){
            array_push($skillIDs, $skill['id']);
        }
        $targets = [];
        foreach(CV::all() as $cv){
            $skills = $cv->skillProficiencies->whereIn('skill_id',$skillIDs)->toArray();
            array_push($targets, [
                'cv' => [
                    'id' => $cv->id,
                    'name' => $cv->name,
                    'address' => $cv->address
                ],
                'proficiencySum' => array_sum(array_column($skills, 'proficiency')),
                'skills' => $skills
            ]);
        }
        usort($targets, function ($a, $b) { return $a['proficiencySum']<$b['proficiencySum'];});

        return Inertia::render('Search',[
            'targets' => $targets
        ]);
    }

}
