<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index() {
        $experiences = \DB::table('experiences')->get();
        
        return view('experiences', ['experiences' => $experiences]);
    }
}
