<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\CV;
use App\Models\Postcode;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class CVController extends Controller
{
    function create(){
        $availableContacts = Contact::all();
        $availablePostcodes = Postcode::all();
        return Inertia::render('CV/Create', [
            'postcodes' => $availablePostcodes,
            'availableContacts' => $availableContacts,
        ]);
    }

    function edit(Request $request, $id){
        $availableContacts = Contact::all();
        $availablePostcodes = Postcode::all();
        $cv = CV::with(['skillProficiencies', 'experiences', 'contacts', 'location'])->find($id);
        return Inertia::render('CV/Edit', [
            'postcodes' => $availablePostcodes,
            'availableContacts' => $availableContacts,
            'propCv' => $cv->toJson()
        ]);
    }

    function store(Request $request){
        $reqCV = $request->json()->all();
        $validator = Validator::make($reqCV, CV::VALID_RULES, CV::VALID_MSGS);
        if ($validator->stopOnFirstFailure()->fails()) {
            return Redirect::route('cv.create')->withErrors($validator);
        }
        CV::store($reqCV);
        return Redirect::route('cv.create')->with('status', 'Životopis uspješno napravljen!');
    }

    function show(Request $request, $id){
        $CV = CV::with(['contacts','contactInfo', 'experiences','skills', 'skillProficiencies','location'])->find($id);
        if(!$CV){
            return Redirect::route('dashboard');
        }
        return Inertia::Render('CV/CV',[
            'CV' => $CV,
            'location' => Postcode::find($CV->postcode)
        ]);
    }

    function update(Request $request){
        $reqCV = $request->json()->all();
        $cv = CV::find($reqCV['id']);
        $user = $request->user();
        if(!$cv || !($cv->user_id == $user->id || $user->role_id == Role::ROLE_ADMIN)){
            return Redirect::route('dashboard');
        }
        $validator = Validator::make($reqCV, CV::VALID_RULES, CV::VALID_MSGS);
        if ($validator->stopOnFirstFailure()->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $newCv = CV::edit($reqCV, $cv->user_id);
        if($user->role_id == Role::ROLE_ADMIN){
            return Redirect::route('cv.edit', $newCv->id)->with('status', 'Životopis uspješno ažuriran!');
        }
        return redirect()->back()->with('status', 'Životopis uspješno ažuriran!');
    }

    function remove(Request $request, $id){
        $cv = CV::find($id);
        $user = $request->user();
        if(!$cv || !($cv->user_id == $user->id || $user->role_id == Role::ROLE_ADMIN)){
            return response()->noContent()->setStatusCode(403);
        }
        else{
            $cv->delete();
            return response()->noContent()->setStatusCode(204);
        }

    }

}
