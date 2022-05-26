<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CVController extends Controller
{
    function create(){
        return Inertia::render('Create');
    }
}
