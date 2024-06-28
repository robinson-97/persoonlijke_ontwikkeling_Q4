<?php

use illuminate\support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\job;


Route::get('/', function () {
    $jobs = Job::all();
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => job::all()
    ]);

});


Route::get('/jobs/{id}', function ($id) {
    $job = job::find($id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
