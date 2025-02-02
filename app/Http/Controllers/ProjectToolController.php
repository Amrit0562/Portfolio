<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectToolRequest;
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
}
