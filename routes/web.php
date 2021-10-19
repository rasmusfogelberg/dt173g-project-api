<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProjectController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('experiences', ExperienceController::class);

    Route::resource('educations', EducationController::class);

    Route::resource('projects', ProjectController::class);
});

require __DIR__.'/auth.php';
