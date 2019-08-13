<?php

namespace App\Http\Controllers;

// Imports the model
use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    // public function __contruct()
    // {
    //     $this->middleware('auth')->except(['index', 'show']);
    // }

    public function index()
    {
        // with the model imported
        $projects = Project::all();
        // Uses eloquent syntax instead of sql to query datas

        // without the imported model
        // $projects = \App\Project::all();

        return view('projects.index', ['projects'=>$projects]);
        // or
        // return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
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

        $attributes['owner_id'] = auth()->id();

        Project::create($attributes);

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
