<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Experience;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display listing of the resource
     */
    public function index() {
        return view('experiences', ['experiences' => Experience::get()]);
    }

    /** 
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
    */
    public function store(Request $request) {
        // Actually store something

        $validated = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'started_at' => 'required|date',
            'ended_at' => 'nullable|date|after_or_equal:started_at',
            'ongoing' => 'required_if:ended_at, null',
            'description' => 'required',
        ]);

        // If ended_at is null, set ongoing to true before storing
        if (is_null($validated['ended_at'])) {
            $validated['ongoing'] = 1;
        }
        // HERE
    
        $experience = Experience::create($validated);
        return back()->with('success', 'Created experience successfully');
    }
}
