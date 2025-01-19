<?php

use App\Http\Controllers\AdminSessionsController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\UserInformationController;
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
            $userInformations = UserInformation::all();
            $technologies = Technology::all();
            return view('admin.dashboard.index', compact('userInformations', 'technologies'));
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
        Route::get('technology/index', [TechnologyController::class, 'index'])->name('technology.index');
        Route::delete('technology/{technology}', [TechnologyController::class, 'destroy'])->name('technology.delete');
    });
});
