<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExperienceRequest;
use App\Http\Requests\UpdateExperienceRequest;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExperienceController extends Controller
{
    public function create()
    {
        $experience = new Experience();
        $currentYear = date('Y');
        $years = range($currentYear, 1950);
        // dd($experience);

        return view('admin.experience.create', compact('years', 'experience'));
    }

    public function store(StoreExperienceRequest $request)
    {
        $data = $request->validatedData();

        DB::transaction(function () use ($data) {
            Experience::create($data);
        });

        return redirect()->route('dashboard')->with('success', 'Your Experience Created Successfully!!');
    }

    public function edit($id)
    {
        $experience = Experience::findOrFail($id); // Fetch a single experience by ID
        $currentYear = date('Y');
        $years = range($currentYear, 1950);

        return view('admin.experience.edit', compact('experience', 'years'));
    }



    public function update(UpdateExperienceRequest $request, $id)
    {
        $experience = Experience::findOrFail($id);

        $data = $request->validatedData();

        $experience->update($data);

        return redirect()->route('dashboard')->with('success', 'Your Experience Updated Successfully.');
    }

    public function destroy(Experience $experience)
    {
        // $userCount = Experience::count();
        // if ($userCount == 1) {
        //     return redirect()->route('dashboard')->with('error', "You can't delete me, Admin!");
        // }

        $experience->delete();
        return redirect()->route('dashboard')->with('success', 'Experience on' . $experience->position . 'deleted Successfully!!');
    }
}
