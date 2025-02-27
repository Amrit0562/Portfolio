<?php

use App\Models\Experience;
use App\Models\Project;
use App\Models\Technology;
use App\Models\UserInformation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

require 'admin.php';

$userInfo = UserInformation::first();
$technologies = Technology::all();
$experiences = Experience::orderBy('created_at', 'desc')->get();
$totalExperienceYears = DB::table('experiences')->sum('experience_time');
$projects = Project::orderBy('created_at', 'desc')->get();
Route::view('/', 'frontend.dashboard', compact('userInfo', 'technologies', 'experiences', 'totalExperienceYears', 'projects'))->name('home');
