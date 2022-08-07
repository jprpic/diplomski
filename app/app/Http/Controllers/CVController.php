<?php

namespace App\Http\Controllers;

use App\Models\CV;
use App\Models\CV\Contact;
use App\Models\CV\Skill;
use App\Models\Postcode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;

class CVController extends Controller
{
    function show(){
        $availableContacts = Contact::all();
        $availablePostcodes = Postcode::all();
        return Inertia::render('Create', [
            'postcodes' => $availablePostcodes,
            'availableContacts' => $availableContacts,
        ]);
    }

    function store(Request $request){
        $reqCV = $request->json()->all();
        $validator = Validator::make($reqCV, CV::VALID_RULES, CV::VALID_MSGS);
        if ($validator->stopOnFirstFailure()->fails()) {
            return Redirect::route('cv.show')->withErrors($validator);
        }
        CV::store($reqCV);
        return Redirect::route('cv.show');
    }

    function update(Request $request){
        $reqCV = $request->json()->all();
        $validator = Validator::make($reqCV, CV::VALID_RULES, CV::VALID_MSGS);
        if ($validator->stopOnFirstFailure()->fails()) {
            return Redirect::route('cv.show')->withErrors($validator);
        }
        CV::edit($reqCV);
        return Redirect::route('cv.show')->with('status', 'CV successfully updated!');
    }

}
