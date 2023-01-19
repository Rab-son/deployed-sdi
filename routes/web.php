<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CMSController;
use App\Http\Controllers\FrontController;

// Website routes
Route::get('/',[FrontController::class, 'home']);
Route::get('/team',[FrontController::class, 'team']);
Route::get('/training',[FrontController::class, 'program']);
Route::get('/training/details/{id}',[FrontController::class, 'programDetails']);
Route::get('/training/info/{id}',[FrontController::class, 'programInformation']);


Route::get('/apply', [FrontController::class, 'viewRegister']);
Route::post('apply/store', [FrontController::class, 'store']);
Route::post('/subscribe', [FrontController::class, 'subscribe']);
Route::post('/send-contact', [FrontController::class, 'contact']);
Route::post('/donation', [FrontController::class, 'donation']);

Route::get('/about', function(){return view('frontend.about');});
Route::get('/contact', function(){return view('frontend.contact');});

Route::get('/donate', function(){return view('frontend.donate');});
Route::get('/gallery', function(){return view('frontend.gallery');});


// Registration and Login for Administrators
Route::get('/admin/login', [AdminController::class, 'login'])->name('login')->middleware('guest');// Log in page
Route::post('/admin/authenticate', [AdminController::class, 'authenticate']);// Log in administrator
Route::get('/admin/register', [AdminController::class, 'create'])->middleware('guest');// Register page
Route::post('/admin/store', [AdminController::class, 'store']);// Create New User
Route::get('/admin/logout', [AdminController::class, 'logout'])->middleware('auth');// Log User Out

Route::get('/admin/reset', [AdminController::class, 'viewReset'])->middleware('guest');// Reset Page
Route::post('/admin/forgot', [AdminController::class, 'resetPassword'])->middleware('guest');// Resetting password

// Admin Panel
Route::get('/dashboard', [CMSController::class, 'dashboard'])->middleware('auth');
//programs routes
Route::get('/forms', [AdminController::class, 'getForms'])->middleware('auth');
Route::get('/admin-programs', [AdminController::class, 'getPrograms'])->middleware('auth');
Route::post('/program-store', [AdminController::class, 'programStore'])->middleware('auth');
Route::get('/program/delete/{id}', [AdminController::class, 'deleteProgram'])->middleware('auth');
Route::post('/program/edit/{id}', [AdminController::class, 'editProgram'])->middleware('auth');
//team routes
Route::get('/get-teams', [AdminController::class, 'getTeams'])->middleware('auth');
Route::post('/team-store', [AdminController::class, 'teamStore'])->middleware('auth');
Route::get('/team/delete/{id}', [AdminController::class, 'deleteTeam'])->middleware('auth');
Route::post('/team/edit/{id}', [AdminController::class, 'editTeam'])->middleware('auth');
//consultancies routes
Route::get('/get-cons', [AdminController::class, 'getConsultancy'])->middleware('auth');
Route::post('/cons-store', [AdminController::class, 'consultancyStore'])->middleware('auth');
Route::get('/cons/delete/{id}', [AdminController::class, 'deleteConsultancy'])->middleware('auth');
Route::post('/cons/edit/{id}', [AdminController::class, 'editConsultancy'])->middleware('auth');
//advocancies routes
Route::get('/get-advocancy', [AdminController::class, 'getAdvocancy'])->middleware('auth');
Route::post('/advocancy-store', [AdminController::class, 'advocancyStore'])->middleware('auth');
Route::get('/advocancy/delete/{id}', [AdminController::class, 'deleteAdvocancy'])->middleware('auth');
Route::post('/advocancy/edit/{id}', [AdminController::class, 'editAdvocancy'])->middleware('auth');
//contact us forms
Route::get('/inquiry', [AdminController::class, 'getContactUs'])->middleware('auth');
Route::get('/contact-us/delete/{id}', [AdminController::class, 'deleteContactUs'])->middleware('auth');
Route::get('/view-newsletter', [AdminController::class, 'getNewsLetter'])->middleware('auth');
Route::get('/newsletter/delete/{id}', [AdminController::class, 'deleteNewsLetter'])->middleware('auth');
//cms routes
//about
Route::get('/get-about', [AdminController::class, 'getAbout'])->middleware('auth');
Route::post('/about-store', [AdminController::class, 'aboutStore'])->middleware('auth');
Route::get('/about/delete/{id}', [AdminController::class, 'deleteAbout'])->middleware('auth');
Route::post('/about/edit/{id}', [AdminController::class, 'editAbout'])->middleware('auth');
//home
Route::get('/get-home', [AdminController::class, 'getHome'])->middleware('auth');
Route::post('/home-store', [AdminController::class, 'homeStore'])->middleware('auth');
Route::get('/home/delete/{id}', [AdminController::class, 'deleteHome'])->middleware('auth');
Route::post('/home/edit/{id}', [AdminController::class, 'editHome'])->middleware('auth');
//core values
Route::get('/get-corevalue', [AdminController::class, 'getCoreValue'])->middleware('auth');
Route::post('/corevalue-store', [AdminController::class, 'coreValueStore'])->middleware('auth');
Route::get('/corevalue/delete/{id}', [AdminController::class, 'deleteCoreValue'])->middleware('auth');
Route::post('/corevalue/edit/{id}', [AdminController::class, 'editCoreValue'])->middleware('auth');
