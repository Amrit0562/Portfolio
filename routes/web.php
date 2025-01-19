<?php

use App\Models\Technology;
use App\Models\UserInformation;
use Illuminate\Support\Facades\Route;

require 'admin.php';

$userInfo = UserInformation::first();
$technologies = Technology::all();
Route::view('/', 'frontend.dashboard', compact('userInfo', 'technologies'))->name('home');
