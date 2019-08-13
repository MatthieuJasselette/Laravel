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
        $this->authorize('update', $project);
        // optionnal, use abort_if / abort_unless & \Gate::denies / ::allows
        return view('projects.show', compact('project'));
    }

    public function create()
    {
        $this->authorize('update', $project);
        return view('projects.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3']
        ]);

        $this->authorize('update', $project);
        Project::create($attributes + ['owner_id' => auth()->id()]);

        return redirect('/projects');
    }
    
    public function edit(Project $project)
    {
        vreturn view('projects.edit', compact('project'));
    }
    
    public function update(Project $project)
    {
        $this->authorize('update', $project);
        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $this->authorize('update', $project);
        $project->delete();

        return redirect('/projects');
    }

}
