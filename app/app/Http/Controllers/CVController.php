<?php

namespace App\Http\Controllers;

use App\Models\CV;
use App\Models\CV\Contact;
use App\Models\CV\Skill;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CVController extends Controller
{
    function create(){
        $availableSkills = Skill::all();
        $availableContacts = Contact::all();
        return Inertia::render('Create', [
            'user' => Auth()->user(),
            'availableSkills' => $availableSkills,
            'availableContacts' => $availableContacts
        ]);
    }

    function store(Request $request){
        $reqCV = $request->json()->all();
        CV::store($reqCV);
    }

}
