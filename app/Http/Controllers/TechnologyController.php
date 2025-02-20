<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTechnologyRequest;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TechnologyController extends Controller
{
    public function create()
    {
        return view('admin.technology.create');
    }

    public function store(StoreTechnologyRequest $request)
    {
        $data = $request->validatedData();

        $techUsed = DB::transaction(function () use ($data) {
            return Technology::create($data);
        });

        if ($request->hasFile('image')) {
            $techUsed->addMedia($request->file('image'))->toMediaCollection('images');
        }

        return redirect()->route('dashboard')->with('success', 'Your Technology Image Stored Successfully.');
    }

    public function delete() {}
}
