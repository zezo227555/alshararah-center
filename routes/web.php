<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardConroller;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardConroller::class, 'main'])->name('main');

Route::get('/maneger-word', function () {
    return view('maneger_word');
})->name('maneger_word');

Route::get('service-details/vocational-training', function (){
    return view('services.vocational-training');
})->name('vocational_training');

Route::get('service-details/tourism', function (){
    return view('services.tourism');
})->name('tourism');

Route::get('service-details/it', function (){
    return view('services.it');
})->name('it');

Route::get('service-details/hosting-events', function (){
    return view('services.hosting-events');
})->name('hosting_events');

Route::get('service-details/corporate-training', function (){
    return view('services.corporate-training');
})->name('corporate_training');

Route::get('service-details/administrative-training', function (){
    return view('services.administrative-training');
})->name('administrative_training');

Route::get('course/administrative', function (){
    return view('course.client.administrative');
})->name('course.administrative');

Route::get('course/english', function (){
    return view('course.client.english');
})->name('course.english');

Route::get('course/vocational', function (){
    return view('course.client.vocational');
})->name('course.vocational');

Route::resource('message', MessageController::class);

Route::get('login-form', [AuthenticatedSessionController::class, 'create'])->name('auth.login.create');

Route::middleware(['IsUserLoged'])->group(function () {
    Route::get('admin/dashboard', [DashboardConroller::class, 'dashboard'])->name('dashboard');
    Route::resource('user', UserController::class);
    Route::resource('news', NewsController::class);
    Route::resource('course', CourseController::class);
});

require __DIR__.'/auth.php';
