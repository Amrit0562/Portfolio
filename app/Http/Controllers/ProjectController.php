<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
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

        $project = DB::transaction(function () use ($data) {
            return Project::create($data);
        });

        // Store the selected tools in the pivot table
        if ($request->has('tools_used')) {
            $project->projectTools()->sync($request->input('tools_used'));
        }

        if ($request->hasFile('image')) {
            $project->addMedia($request->file('image'))->toMediaCollection('project_images');
        }
        if ($request->hasFile('company_logo')) {
            $project->addMedia($request->file('company_logo'))->toMediaCollection('company_logos');
        }


        return redirect()->route('dashboard')->with('success', 'Project created successfully!');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $projectTools = ProjectTool::all();
        $selectedTools = $project->projectTools->pluck('id')->toArray();

        return view('admin.project.edit', compact('project', 'projectTools', 'selectedTools'));
    }

    public function update(UpdateProjectRequest $request, $id)
    {
        $project = Project::findOrFail($id);
        $data = $request->validated();

        $project->update($data);

        // Sync selected tools
        if ($request->has('tools_used')) {
            $project->projectTools()->sync($request->input('tools_used'));
        } else {
            $project->projectTools()->detach(); // Remove all if none selected
        }

        if ($request->hasFile('image')) {
            $project->clearMediaCollection('project_images');
            $project->addMedia($request->file('image'))->toMediaCollection('project_images');
        }

        if ($request->hasFile('company_logo')) {
            $project->clearMediaCollection('company_logos');
            $project->addMedia($request->file('company_logo'))->toMediaCollection('company_logos');
        }

        return redirect()->route('dashboard')->with('success', 'Your Project Updated Successfully.');
    }
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('dashboard')->with('success', 'Project deleted Successfully!!');
    }
}
