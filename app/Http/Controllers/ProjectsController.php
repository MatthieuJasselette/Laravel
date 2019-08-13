<?php

namespace App\Http\Controllers;

// Imports the model
use App\Project;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // with the model imported
        $projects = Project::where('owner_id', auth()->id())->get();
        // Uses eloquent syntax instead of sql to query datas


        // return view('projects.index', ['projects'=>$projects]);
        // or
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        $this->authorize('view', $project);
        return view('projects.show', compact('project'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3']
        ]);

        Project::create($attributes + ['owner_id' => auth()->id()]);

        return redirect('/projects');
    }
    
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }
    
    public function update(Project $project)
    {
        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }

}
