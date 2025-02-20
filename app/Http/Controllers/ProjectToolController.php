<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectToolRequest;
use App\Http\Requests\UpdateProjectToolRequest;
use App\Models\ProjectTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectToolController extends Controller
{
    public function create()
    {
        return view('admin.project.tool.create');
    }
    public function store(StoreProjectToolRequest $request)
    {
        $data = $request->validatedData();

        DB::transaction(function () use ($data) {
            ProjectTool::create($data);
        });

        return redirect()->route('dashboard')->with('success', 'Your Project Tool Created Successfully!!');
    }


    public function edit($id)
    {
        $projectTool = ProjectTool::findOrFail($id);

        return view('admin.project.tool.edit', compact('projectTool'));
    }

    public function update(UpdateProjectToolRequest $request, $id)
    {
        $projectTools = ProjectTool::findOrFail($id);

        $data = $request->validated();

        $projectTools->update($data);

        return redirect()->route('dashboard')->with('success', 'Your Project Tool Updated Successfully.');
    }
    public function destroy(ProjectTool $projectTool)
    {
        $projectTool->delete();
        return redirect()->route('dashboard')->with('success', 'Project Tool deleted Successfully!!');
    }
}
