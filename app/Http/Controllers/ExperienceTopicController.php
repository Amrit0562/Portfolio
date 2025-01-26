<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExperienceTopicRequest;
use App\Http\Requests\UpdateExperienceTopicRequest;
use App\Models\Experience;
use App\Models\ExperienceTopic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// class ExperienceTopicController extends Controller
// {
//     public function create()
//     {
//         return view('admin.experienceTopic.create');
//     }

//     public function store(StoreExperienceTopicRequest $request)
//     {
//         $data = $request->validatedData();
//         DB::transaction(function () use ($data) {
//             return ExperienceTopic::create($data);
//         });

//         return redirect()->route('dashboard')->with('success', 'Your Experience Topic Created Successfully!!');
//     }
//     public function edit($id)
//     {
//         $experiences = Experience::all();
//         $experienceTopic = ExperienceTopic::findOrFail($id); // Fetch a single experience by ID
//         $currentYear = date('Y');
//         $years = range($currentYear, 1950);

//         return view('admin.experienceTopic.edit', compact('experiences', 'experienceTopic', 'years'));
//     }

//     public function update(UpdateExperienceTopicRequest $request, $id)
//     {
//         $experienceTopic = ExperienceTopic::findOrFail($id);

//         $data = $request->validatedData();

//         $experienceTopic->update($data);

//         return redirect()->route('dashboard')->with('success', 'Your Experience Topic Updated Successfully.');
//     }

//     public function destroy(ExperienceTopic $experienceTopic)
//     {

//         $experienceTopic->delete();
//         return redirect()->route('dashboard')->with('success', 'Experience Topic deleted Successfully!!');
//     }
// }
