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
        return Inertia::render('JobAdCreate',[
            'postcodes' => Postcode::all(),
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
}
