<?php

namespace App\Http\Controllers;

use App\Models\CV;
use App\Models\CV\Contact;
use App\Models\CV\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class CVController extends Controller
{
    function create(){
        $availableSkills = Skill::all();
        $availableContacts = Contact::all();
        return Inertia::render('Create', [
            'availableSkills' => $availableSkills,
            'availableContacts' => $availableContacts
        ]);
    }

    function edit(){
        $availableSkills = Skill::all();
        $availableContacts = Contact::all();
        return Inertia::render('Create', [
            'availableSkills' => $availableSkills,
            'availableContacts' => $availableContacts,
            'isEdit' => true,
        ]);
    }

    function store(Request $request){
        $reqCV = $request->json()->all();
        CV::store($reqCV);
        return Redirect::route('cv.edit');
    }

    function update(Request $request){
        $reqCV = $request->json()->all();
        CV::edit($reqCV);
        return Redirect::route('cv.edit');
    }

}
