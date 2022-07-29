<?php

namespace App\Http\Controllers;

use App\Models\CV\Skill;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CVController extends Controller
{
    function create(){
        $availableSkill = Skill::all();
        return Inertia::render('Create', [
            'user' => Auth()->user(),
            'availableSkills' => $availableSkill
        ]);
    }
}
