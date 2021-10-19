<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('updated_at', 'DESC')->paginate(3);

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validateds the input from the from and marks whats required

        $validated = $request->validate([
            'title' => 'required',
            'url' => 'required|url',
            'description' => 'required',
        ]);

        $project = Project::create($validated);
        return redirect()->route('projects.index')->with('success', "Project '$project->title' successfully created");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // TODO: look up if I will need this to shows single "post" for client webpage
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required',
            'url' => 'required|url',
            'description' => 'required',
        ]);

        $project->update($request->all());

        return redirect()->route('projects.index')->with('success', "Project '$project->title' successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('success' ,"The project '$project->title' was successfully deleted");
    }
}
