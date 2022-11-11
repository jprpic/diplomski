<?php

namespace App\Http\Controllers;
use App\Models\JobAd;
use App\Models\OrgCV;
use App\Models\Postcode;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class JobAdController extends Controller
{
    public function create(Request $request){
        return Inertia::render('JobAd/Create',[
            'postcodes' => Postcode::all(),
        ]);
    }

    public function store(Request $request){
        $options = $request->json()->all();
        $validator = Validator::make($options, JobAd::VALID_RULES, JobAd::VALID_MSGS);
        if ($validator->stopOnFirstFailure()->fails()) {
            return Redirect::route('job-ad.create')->withErrors($validator);
        }
        JobAd::store($options);
        return Redirect::route('dashboard')->with('status', 'Oglas za posao uspješno kreiran!');
    }

    public function index(Request $request){
        return Inertia::render('JobAd/Index',[
            'jobAds' => $request->user()->orgCv?->jobAds
        ]);
    }

    public function show(Request $request, $id){
        $jobAd = JobAd::find($id);
        if(!$jobAd){
            return Redirect::route('dashboard');
        }
        if($jobAd->org_c_v_s_id !== $request->user()->orgCv->id){
            return response('Unauthorized.')->setStatusCode(401)->send();
        }
        return Inertia::render('JobAd/Show',[
            'jobAd' => $jobAd
        ]);
    }

    public function details(Request $request, $id){
        $jobAd = JobAd::with('orgCv')->find($id);
        if(!$jobAd){
            return Redirect::route('dashboard');
        }
        return Inertia::render('JobAd/Details',[
            'jobAd' => $jobAd,
        ]);
    }

    public function remove(Request $request, $id){
        $jobAd = JobAd::find($id);
        if($jobAd->orgCv->user_id == $request->user()->id || $request->user()->role_id == Role::ROLE_ADMIN){
            $jobAd->delete();
            return redirect()->back()->with('status', 'Oglas za posao uspješno obrisan!');
        }
        return response()->noContent()->setStatusCode(403);
    }

    public function removeAdmin(Request $request, $id){
        $jobAd = JobAd::find($id);
        if($jobAd->orgCv->user_id == $request->user()->id || $request->user()->role_id == Role::ROLE_ADMIN){
            $jobAd->delete();
            return response()->noContent()->setStatusCode(204);
        }
        return response()->noContent()->setStatusCode(403);
    }

    public function edit(Request $request, $id){
        $jobAd = JobAd::find($id);
        if($jobAd->orgCv->user_id == $request->user()->id || $request->user()->role_id == Role::ROLE_ADMIN){
            return Inertia::render('JobAd/Edit',[
                'jobAdData' => $jobAd->toArray(),
                'postcodes' => Postcode::all(),
            ]);
        }
        return redirect('/dashboard');
    }

    public function update(Request $request, $id){
        $jobAd = JobAd::find($id);
        if($jobAd->orgCv->user_id == $request->user()->id || $request->user()->role_id == Role::ROLE_ADMIN){
            $data = $request->all();
            $validator = Validator::make($data, JobAd::VALID_RULES, JobAd::VALID_MSGS);
            if ($validator->stopOnFirstFailure()->fails()) {
                return redirect()->back()->withErrors($validator);
            }
            $jobAd->name = $data['name'];
            $jobAd->description = $data['description'];
            $jobAd->minAge = $data['minAge'];
            $jobAd->maxAge = $data['maxAge'];
            $jobAd->minExp = $data['minExp'];
            $jobAd->maxExp = $data['maxExp'];
            $jobAd->county = $data['county'] ?? null;
            $jobAd->city = $data['city'] ?? null;
            $jobAd->skills = $data['skills'];
            $jobAd->responsibilities = $data['responsibilities'];
            $jobAd->save();
            return redirect()->back()->with('status', "Oglas za posao $jobAd->name uspješno ažuriran!");

        }
        return response()->noContent()->setStatusCode(401);
    }

}
