<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ApplicantController;
use Illuminate\Support\Facades\Route;
use App\Models\Applicant;
use App\Models\Application;


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/applicant', function () {
    return view('create');
});

Route::post('/create', function () {
    $applicant = new Applicant();
    $applicant->application_id = request('application_id');
    $applicant->first_name = request('first_name');
    $applicant->middle_name = request('middle_name');
    $applicant->last_name = request('last_name');
    $applicant->sex = request('sex');
    $applicant->address = request('address');
    $applicant->email = request('email');
    $applicant->phone = request('phone');
    $applicant->save();
    return view('create_success');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
