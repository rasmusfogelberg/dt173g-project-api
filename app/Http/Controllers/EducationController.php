<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Education;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Education::orderBy('started_at', 'DESC')->paginate(3);

        return view('educations.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('educations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // If ended_at is null it needs to be explcitily set to null
        // This is because Laravel will omit null values
        if ($request['ended_at'] == null) {
            $request['ended_at'] = null;
        }

        // Validateds the input from the from and marks whats required
        $validated = $request->validate([
            'name' => 'required',
            'institution' => 'required',
            'started_at' => 'required|date',
            'ended_at' => 'nullable|date|after_or_equal:started_at',
            'ongoing' => 'required_if:ended_at, null',
            'description' => 'required',
        ]);
  
        // If ended_at is null, set ongoing to true before storing
        if (is_null($validated['ended_at'])) {
            $validated['ongoing'] = 1;
        }

        $education = Education::create($validated);
        return redirect()->route('educations.index')->with('success', "Education '$education->name' successfully created");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        return view('educations.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        $request->validate([
            'name' => 'required',
            'institution' => 'required',
            'started_at' => 'required|date',
            'ended_at' => 'nullable|date|after_or_equal:started_at',
            'ongoing' => 'required_if:ended_at, null',
            'description' => 'required',
        ]);

        // If ended_at is null, set ongoing to true before storing
        if (is_null($request['ended_at'])) {
            $request['ongoing'] = 1;
        }

        $education->update($request->all());
      
        return redirect()->route('educations.index')->with('success', "Education '$education->name' successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->route('educations.index')->with('success', "The education '$education->name' was successfully deleted");
    }
}
