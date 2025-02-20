<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserInformationRequest;
use App\Http\Requests\UpdateUserInformationRequest;
use App\Models\User;
use App\Models\UserInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserInformationController extends Controller
{
    public function create()
    {
        return view('admin.userInformation.create');
    }
    public function store(StoreUserInformationRequest $request)
    {
        $data = $request->validatedData();

        $userInformation = DB::transaction(function () use ($data) {
            return UserInformation::create($data);
        });

        if ($request->hasFile('image')) {
            $userInformation->addMedia($request->file('image'))->toMediaCollection('images');
        }

        return redirect()->route('dashboard')->with('success', 'Your Info Stored Successfully.');
    }

    public function edit($id)
    {
        $userInfo = UserInformation::find($id);

        if (!$userInfo) {
            return redirect()->route('dashboard')->with('error', 'User Information not found.');
        }

        return view('admin.UserInformation.edit', compact('userInfo'));
    }



    public function update(UpdateUserInformationRequest $request, $id)
    {
        $userInfo = UserInformation::findOrFail($id);

        $userInfo->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        if ($request->hasFile('image')) {
            $userInfo->clearMediaCollection('images');
            $userInfo->addMedia($request->file('image'))->toMediaCollection('images');
        }

        return redirect()->route('dashboard')->with('success', 'Your Info Updated Successfully.');
    }

    public function destroy(UserInformation $userInformation)
    {
        $userCount = UserInformation::count();
        if ($userCount == 1) {
            return redirect()->route('dashboard')->with('error', "You can't delete me, Admin!");
        }

        $userInformation->delete();
        return redirect()->route('dashboard')->with('success', 'User deleted Successfully!!');
    }
}
