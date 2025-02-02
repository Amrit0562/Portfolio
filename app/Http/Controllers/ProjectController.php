<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Models\Project;
use App\Models\ProjectTool;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function create(Project $project)
    {
        $projectTools = ProjectTool::all(); // Fetch all available project tools
        return view('admin.project.create', compact('projectTools'));
    }

    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        DB::transaction(function () use ($data) {
            $project = Project::create($data);
            // $project->addMedia($request->file('image'))->toMediaCollection('images');
            if (!empty($data['tools_used'])) {
                $project->projectTools()->attach($data['tools_used']);
            }
        });

        return redirect()->route('dashboard')->with('success', 'Project created successfully!');
    }
}
