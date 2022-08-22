<?php

namespace App\Http\Controllers;
use App\Models\JobAd;
use App\Models\Postcode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class JobAdController extends Controller
{
    public function create(){
        $orgCv = Auth()->user()->orgCv;
        return Inertia::render('JobAd/Create',[
            'postcodes' => Postcode::all(),
            'hasOrgCv' => (boolean) $orgCv
        ]);
    }

    public function store(Request $request){
        $options = $request->json()->all();
        $validator = Validator::make($options, JobAd::VALID_RULES, JobAd::VALID_MSGS);
        if ($validator->stopOnFirstFailure()->fails()) {
            return Redirect::route('job.create')->withErrors($validator);
        }
        JobAd::store($options);
        return Redirect::route('job.create')->with('status', 'Job Ad successfully created!');
    }

    public function index(Request $request){
        return Inertia::render('JobAd/Index',[
            'jobAds' => Auth()->user()->orgCv?->jobAds
        ]);
    }

    public function show(Request $request, $id){
        $jobAd = JobAd::find($id);
        if($jobAd->org_c_v_s_id !== Auth()->user()->orgCv->id){
            return response('Unauthorized.')->setStatusCode(401)->send();
        }
        return Inertia::render('JobAd/Show',[
            'jobAd' => $jobAd
        ]);
    }
}
