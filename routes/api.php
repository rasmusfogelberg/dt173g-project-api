<?php

use App\Http\Resources\EducationCollection;
use App\Http\Resources\EducationResource;
use App\Http\Resources\ExperienceCollection;
use App\Http\Resources\ExperienceResource;
use App\Http\Resources\ProjectCollection;
use App\Http\Resources\ProjectResource;
use App\Models\Education;
use App\Models\Project;
use App\Models\Experience;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/experiences', function () {
    return new ExperienceCollection(Experience::all());
});

Route::get('/experiences/{id}', function ($id) {
    return new ExperienceResource(Experience::findOrFail($id));
});

Route::get('/projects', function () {
    return new ProjectCollection(Project::all());
});

Route::get('/projects/{id}', function ($id) {
    return new ProjectResource(Project::findOrFail($id));
});

Route::get('/educations', function () {
    return new EducationCollection(Education::all());
});

Route::get('/educations/{id}', function ($id) {
    return new EducationResource(Education::findOrFail($id));
});
