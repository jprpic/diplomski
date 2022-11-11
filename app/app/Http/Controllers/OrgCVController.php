<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\OrgCV;
use App\Models\Postcode;
use App\Models\Role;
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
        return Redirect::route('org-cv.create')->with('status', '\'O nama\' uspješno kreiran!');
    }

    function update(Request $request){

        $reqCV = $request->json()->all();
        $user = $request->user();
        $orgCv = OrgCV::find($reqCV['id']);
        if(!$orgCv){
            return redirect('dashboard');
        }
        if($orgCv->user_id == $user->id || $user->role_id == Role::ROLE_ADMIN){
            $validator = Validator::make($reqCV, OrgCV::VALID_RULES, OrgCV::VALID_MSGS);
            if ($validator->stopOnFirstFailure()->fails()) {
                return redirect()->back()->withErrors($validator);
            }
            $newCv = OrgCV::edit($reqCV, $orgCv->user_id);
            return Redirect::route('org-cv.edit', $newCv->id)->with('status', 'O nama uspješno ažuriran!');
        }
        return redirect()->back()->with('status', "Nemate prava uređivanja!");
    }

    function edit(Request $request, $id) {
        $user = $request->user();
        $orgCv = OrgCV::with(['location', 'contacts', 'jobAds', 'contactInfo'])->find($id);
        if(!$orgCv) {
            return Redirect::route('dashboard');
        }
        if($user->role_id == Role::ROLE_ADMIN || $user->id == $orgCv->user_id){
            return Inertia::render('OrgCV/Edit',[
                'postcodes' => Postcode::all(),
                'availableContacts' => Contact::all(),
                'propOrgCv' => $orgCv->toJson()
            ]);
        }
        return Redirect::route('dashboard');
    }

    public function show(Request $request, $id){
        $orgCv = OrgCV::with(['location', 'contacts', 'jobAds', 'contactInfo'])->find($id);
        if(!$orgCv){
            return Redirect::route('dashboard');
        }
        return Inertia::render('OrgCV/Show', [
           'orgCv' => $orgCv
        ]);
    }

    public function delete(Request $request, $id){
        $orgCv = OrgCV::find($id);
        if(!$orgCv){
            return response()->noContent()->setStatusCode(404);
        }

        // Only Admin can delete and that is covered by middleware
        $jobAds = $orgCv->jobAds;
        foreach($jobAds as $jobAd){
            $jobAd->delete();
        }
        $orgCv->delete();

        return response()->json($jobAds->toJson())->setStatusCode(204);

    }
}
