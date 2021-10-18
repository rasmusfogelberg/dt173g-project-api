<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Experience;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display listing of the resource
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $experiences = Experience::orderBy('started_at', 'DESC')->paginate(3);

        return view('experiences.index', compact('experiences'));
    }

    /** 
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
    */
    public function store(Request $request) 
    {
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
    
        $experience = Experience::create($validated);
        return redirect()->route('experiences.index')->with('success', 'Created experience successfully');
    }

    public function create()
    {
        return view('experiences.create');
    }

    /** 
     * Show the form for editing the specified resource.
     * @param  App\Models\Experience  $experience
    */
    public function edit(Experience $experience)
    {
        return view('experiences.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'title' => 'required',
            'company' => 'required',
            'started_at' => 'required|date',
            'ended_at' => 'nullable|date|after_or_equal:started_at',
            'ongoing' => 'required_if:ended_at, null',
            'description' => 'required',
        ]);

        $experience->update($request->all());

        return redirect()->route('experiences.index')->with('success', 'Experience successfully updated');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();

        return redirect()->route('experiences.index')->with('success', 'Experience successfully deleted');
    }
}
