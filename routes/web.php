<?php

use App\Http\Controllers\ExperienceController;
use Illuminate\Support\Facades\Route;

/* 
 * Place holder for controller code I am going to test.
 * Have it commented out here for now so I can easily
 * copy paste it later when I need it.
 - use App/Http/Controllers/EducationController;
 - use App/Http/Controllers/ProjectController;
 */

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

Route::get('/', function () {
    return view('login');
});

// Route::get('experiences', [ExperienceController::class, 'index']);

Route::resource('experiences', ExperienceController::class)->only([
    'index', 'store'
]);