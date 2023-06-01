<?php

namespace App\Http\Controllers;

use App\Http\Requests\Projects\CreateProjectRequest;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = ProjectResource::collection(Project::with('skill')->get());
        return Inertia::render('Project/Index', compact('projects'));
    }

    public function create()
    {
        $skills = Skill::all();

        return Inertia::render('Project/Create', compact('skills'));
    }

    public function store(CreateProjectRequest $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('projects');
            Project::create([
                'skill_id'          => $request->skill_id,
                'name'              => $request->name,
                'image'             => $image,
                'project_url'       => $request->project_url,
            ]);

            return Redirect::route('projects.index')->with('message', 'Project created successfully');
        }

        return Redirect::back();
    }

    public function edit(Project $project)
    {
        $skills = Skill::all();
        return Inertia::render('Project/Edit', compact('project', 'skills'));
    }

    public function update(Request $request, Project $project)
    {
        $image = $project->image;
        $request->validate([
            'name'  => ['required', 'min:3'],
        ]);

        if ($request->hasFile('image')) {
            Storage::delete($project->image);
            $image = $request->file('image')->store('projects');
        }
      
        $project->update([
            'name'          => $request->name,
            'image'         => $image,
            'skill_id'      => $request->skill_id,
            'project_url'   => $request->project_url,
        ]);

        return Inertia::location(route('projects.index'));
    }

    public function destroy(Project $project)
    {
        Storage::delete($project->image);
        $project->delete();

        Redirect::back();
    }
}
