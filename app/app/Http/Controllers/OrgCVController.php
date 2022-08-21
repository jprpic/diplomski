<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\OrgCV;
use App\Models\Postcode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class OrgCVController extends Controller
{
    public function create(){
        return Inertia::render('OrgCV/Create',[
            'postcodes' => Postcode::all(),
            'availableContacts' => Contact::all()
        ]);
    }

    public function store(Request $request){
        $reqCV = $request->json()->all();
        $validator = Validator::make($reqCV, OrgCV::VALID_RULES, OrgCV::VALID_MSGS);
        if ($validator->stopOnFirstFailure()->fails()) {
            return Redirect::route('org-cv.create')->withErrors($validator);
        }
        OrgCV::store($reqCV);
        return Redirect::route('org-cv.create')->with('status', 'About us successfully created!');
    }

    function update(Request $request){
        $reqCV = $request->json()->all();
        $validator = Validator::make($reqCV, OrgCV::VALID_RULES, OrgCV::VALID_MSGS);
        if ($validator->stopOnFirstFailure()->fails()) {
            return Redirect::route('org-cv.create')->withErrors($validator);
        }
        OrgCV::edit($reqCV);
        return Redirect::route('org-cv.create')->with('status', 'About us successfully updated!');
    }
}
