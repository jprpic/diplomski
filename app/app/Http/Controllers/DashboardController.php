<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(Request $request){
        $orgCv = $request->user()->orgCv;
        $role = $request->user()->role->id;
        if($role == Role::ROLE_ORGANIZATION){
            return Inertia::render('Dashboard/Organization',[
                'jobAds' => $orgCv?->jobAds
            ]);
        }
        return Inertia::render('Dashboard');
    }
}
