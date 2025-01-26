<?php

use App\Http\Controllers\AdminSessionsController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\UserInformationController;
use App\Models\Experience;
use App\Models\Technology;
use App\Models\UserInformation;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminSessionsController::class, 'loginForm'])->name('admin.login');
    Route::post('/login', [AdminSessionsController::class, 'store'])->name('admin.store');
    Route::post('/logout', [AdminSessionsController::class, 'destroy'])->name('admin.logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', function () {
            $experiences = Experience::all();
            $userInformations = UserInformation::all();
            $technologies = Technology::all();
            return view('admin.dashboard.index', compact('userInformations', 'technologies', 'experiences'));
        })->name('dashboard');
        // Route::get('/profile', [AdminProfileController::class, 'index'])->name('profile.index');

        /*
        |--------------------------------------------------------------------------
        | UserInformation CRUD Routes
        |--------------------------------------------------------------------------
        */
        Route::get('userInfo/create', [UserInformationController::class, 'create'])->name('userInfo.create');
        Route::post('userInfo/store', [UserInformationController::class, 'store'])->name('userInfo.store');
        Route::get('userInfo/index', [UserInformationController::class, 'index'])->name('userInfo.index');
        Route::get('admin/userInfo/edit/{id}', [UserInformationController::class, 'edit'])->name('userInfo.edit');

        Route::put('admin/userInfo/edit/{id}', [UserInformationController::class, 'update'])->name('userInfo.update');

        Route::delete('userInfo/{userInformation}', [UserInformationController::class, 'destroy'])->name('userInfo.delete');
        // Route::delete('blog/{blog}', [UserInformationController::class, 'destroy'])->name('blog.delete');


        /*
        |--------------------------------------------------------------------------
        | Technology CRUD Routes
        |--------------------------------------------------------------------------
        */
        Route::get('technology/create', [TechnologyController::class, 'create'])->name('technology.create');
        Route::post('technology/store', [TechnologyController::class, 'store'])->name('technology.store');
        // Route::get('technology/index', [TechnologyController::class, 'index'])->name('technology.index');
        Route::delete('technology/{technology}', [TechnologyController::class, 'destroy'])->name('technology.delete');

        /*
        |--------------------------------------------------------------------------
        | ExperienceTopic CRUD Routes
        |--------------------------------------------------------------------------
        */

        // Route::get('experienceTopic/create', [ExperienceTopicController::class, 'create'])->name('experienceTopic.create');
        // Route::post('experienceTopic/store', [ExperienceTopicController::class, 'store'])->name('experienceTopic.store');
        // Route::get('experienceTopic/edit/{id}', [ExperienceTopicController::class, 'edit'])->name('experienceTopic.edit');

        // Route::put('experienceTopic/edit/{id}', [ExperienceTopicController::class, 'update'])->name('experienceTopic.update');
        // // Route::get('experienceTopic/index', [ExperienceTopicController::class, 'index'])->name('ExperienceTopic.index');
        // Route::delete('experienceTopic/{experienceTopic}', [ExperienceTopicController::class, 'destroy'])->name('experienceTopic.delete');

        /*
        |--------------------------------------------------------------------------
        | Experience CRUD Routes
        |--------------------------------------------------------------------------
        */

        Route::get('experience/create', [ExperienceController::class, 'create'])->name('experience.create');
        Route::post('experience/store', [ExperienceController::class, 'store'])->name('experience.store');

        Route::get('experience/edit/{id}', [ExperienceController::class, 'edit'])->name('experience.edit');

        Route::put('experience/edit/{id}', [ExperienceController::class, 'update'])->name('experience.update');
        // Route::get('experience/index', [ExperienceController::class, 'index'])->name('experience.index');
        Route::delete('experience/{experience}', [ExperienceController::class, 'destroy'])->name('experience.delete');
    });
});
