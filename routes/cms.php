<?php

use App\Http\Controllers\CMS\BlogController;
use App\Http\Controllers\CMS\CandidateController;
use App\Http\Controllers\CMS\CareersController;
use App\Http\Controllers\CMS\CaseStudyController;
use App\Http\Controllers\CMS\DirectorController;
use App\Http\Controllers\CMS\EcoSystemController;
use App\Http\Controllers\CMS\FAQController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CMS\IndexController;
use App\Http\Controllers\CMS\MusicController;
use App\Http\Controllers\CMS\MilestonesController;
use App\Http\Controllers\CMS\PartnerController;
use App\Http\Controllers\CMS\SettingController;
use App\Http\Controllers\CMS\StreamController;
use App\Http\Controllers\CMS\UserController;
use \UniSharp\LaravelFilemanager\Lfm;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Login
Route::middleware(['ifAuthenticated.cms'])->name('cms.')->group(function () {
  Route::get('/login', [IndexController::class, 'login'])->name('login');
  Route::post('/login', [IndexController::class, 'loginProgress'])->name('loginProgress');
});


// Require logged routes
Route::middleware(['auth.cms'])->name('cms.')->group(function () {
  // Root
  Route::get('/', [IndexController::class, 'index'])->name('index');
  Route::get('/logout', [IndexController::class, 'logout'])->name('logout');

  // Laravel file management
  Route::prefix('/finder')->name('finder.')->group(function () {
    Lfm::routes();
  });

  // System
  Route::prefix('/system')->name('system.')->group(function () {
    Route::get('/', [SettingController::class, 'index'])->name('index');
    Route::post('/store', [SettingController::class, 'store'])->name('store');
  });

  // File management
  Route::get('/file-manager', [IndexController::class, 'fileManager'])->name('fileManager');

  // User
  Route::prefix('/user')->name('user.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::post('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'update'])->name('update');
    Route::get('/form/{id?}', [UserController::class, 'form'])->name('form');
    Route::get('/datatable', [UserController::class, 'datatable'])->name('datatable');
    Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('destroy');
  });
  // Director
  Route::prefix('/director')->name('director.')->group(function () {
    Route::get('/', [DirectorController::class, 'index'])->name('index');
    Route::post('/create', [DirectorController::class, 'create'])->name('create');
    Route::post('/store', [DirectorController::class, 'update'])->name('update');
    Route::get('/form/{id?}', [DirectorController::class, 'form'])->name('form');
    Route::get('/datatable', [DirectorController::class, 'datatable'])->name('datatable');
    Route::get('/delete/{id}', [DirectorController::class, 'destroy'])->name('destroy');
  });
  // Partner
  Route::prefix('/partner')->name('partner.')->group(function () {
    Route::get('/', [PartnerController::class, 'index'])->name('index');
    Route::post('/create', [PartnerController::class, 'create'])->name('create');
    Route::post('/store', [PartnerController::class, 'update'])->name('update');
    Route::get('/form/{id?}', [PartnerController::class, 'form'])->name('form');
    Route::get('/datatable', [PartnerController::class, 'datatable'])->name('datatable');
    Route::get('/delete/{id}', [PartnerController::class, 'destroy'])->name('destroy');
  });
  // Ecosystem
  Route::prefix('/ecosystem')->name('ecosystem.')->group(function () {
    Route::get('/', [EcoSystemController::class, 'index'])->name('index');
    Route::post('/create', [EcoSystemController::class, 'create'])->name('create');
    Route::post('/store', [EcoSystemController::class, 'update'])->name('update');
    Route::get('/form/{id?}', [EcoSystemController::class, 'form'])->name('form');
    Route::get('/datatable', [EcoSystemController::class, 'datatable'])->name('datatable');
    Route::get('/delete/{id}', [EcoSystemController::class, 'destroy'])->name('destroy');
  });
  // Music
  Route::prefix('/music')->name('music.')->group(function () {
    Route::get('/', [MusicController::class, 'index'])->name('index');
    Route::post('/create', [MusicController::class, 'create'])->name('create');
    Route::post('/store', [MusicController::class, 'update'])->name('update');
    Route::get('/form/{id?}', [MusicController::class, 'form'])->name('form');
    Route::get('/datatable', [MusicController::class, 'datatable'])->name('datatable');
    Route::get('/delete/{id}', [MusicController::class, 'destroy'])->name('destroy');
  });
  //// Stream
  Route::prefix('/stream')->name('stream.')->group(function () {
    Route::get('/', [StreamController::class, 'index'])->name('index');
    Route::post('/create', [StreamController::class, 'create'])->name('create');
    Route::post('/store', [StreamController::class, 'update'])->name('update');
    Route::get('/form/{id?}', [StreamController::class, 'form'])->name('form');
    Route::get('/datatable', [StreamController::class, 'datatable'])->name('datatable');
    Route::get('/delete/{id}', [StreamController::class, 'destroy'])->name('destroy');
  });

  // Blog
  Route::prefix('/blog')->name('blog.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::post('/create', [BlogController::class, 'create'])->name('create');
    Route::post('/store', [BlogController::class, 'update'])->name('update');
    Route::get('/form/{id?}', [BlogController::class, 'form'])->name('form');
    Route::get('/datatable', [BlogController::class, 'datatable'])->name('datatable');
    Route::get('/delete/{id}', [BlogController::class, 'destroy'])->name('destroy');
  });

  // Careers
  Route::prefix('/careers')->name('careers.')->group(function () {
    Route::get('/', [CareersController::class, 'index'])->name('index');
    Route::post('/create', [CareersController::class, 'create'])->name('create');
    Route::post('/store', [CareersController::class, 'update'])->name('update');
    Route::get('/form/{id?}', [CareersController::class, 'form'])->name('form');
    Route::get('/datatable', [CareersController::class, 'datatable'])->name('datatable');
    Route::get('/delete/{id}', [CareersController::class, 'destroy'])->name('destroy');
  });
  // Candidate
  Route::prefix('/candidate')->name('candidate.')->group(function () {
    Route::get('/', [CandidateController::class, 'index'])->name('index');
    Route::get('/datatable', [CandidateController::class, 'datatable'])->name('datatable');
    Route::get('/delete/{id}', [CandidateController::class, 'destroy'])->name('destroy');
  });
  // milestones
  Route::prefix('/milesstones')->name('milesstones.')->group(function () {
    Route::get('/', [MilestonesController::class, 'index'])->name('index');
    Route::post('/create', [MilestonesController::class, 'create'])->name('create');
    Route::post('/store', [MilestonesController::class, 'update'])->name('update');
    Route::get('/form/{id?}', [MilestonesController::class, 'form'])->name('form');
    Route::get('/datatable', [MilestonesController::class, 'datatable'])->name('datatable');
    Route::get('/delete/{id}', [MilestonesController::class, 'destroy'])->name('destroy');
  });
  // FAQ
  Route::prefix('/faq')->name('faq.')->group(function () {
    Route::get('/', [FAQController::class, 'index'])->name('index');
    Route::post('/create', [FAQController::class, 'create'])->name('create');
    Route::post('/store', [FAQController::class, 'update'])->name('update');
    Route::get('/form/{id?}', [FAQController::class, 'form'])->name('form');
    Route::get('/datatable', [FAQController::class, 'datatable'])->name('datatable');
    Route::get('/delete/{id}', [FAQController::class, 'destroy'])->name('destroy');
  });
  // Case study
  Route::prefix('/casestudy')->name('casestudy.')->group(function () {
    Route::get('/', [CaseStudyController::class, 'index'])->name('index');
    Route::post('/create', [CaseStudyController::class, 'create'])->name('create');
    Route::post('/store', [CaseStudyController::class, 'update'])->name('update');
    Route::get('/form/{id?}', [CaseStudyController::class, 'form'])->name('form');
    Route::get('/datatable', [CaseStudyController::class, 'datatable'])->name('datatable');
    Route::get('/delete/{id}', [CaseStudyController::class, 'destroy'])->name('destroy');
  });
});
