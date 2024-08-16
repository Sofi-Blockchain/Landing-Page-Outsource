<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Mail\MailController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/stream', [IndexController::class, 'stream'])->name('stream');
Route::get('/music', [IndexController::class, 'music'])->name('music');
Route::get('/about-us', [IndexController::class, 'aboutUs'])->name('aboutUs');
Route::get('/lets-talk', [IndexController::class, 'letsTalk'])->name('letsTalk');
Route::get('/blogs', [IndexController::class, 'blog'])->name('blog');
Route::get('/career', [IndexController::class, 'career'])->name('career');
Route::get('/switch-language/{language}', [IndexController::class, 'switchLanguage'])->name('switchLanguage');
Route::get('/switch-mode/{mode}', [IndexController::class, 'switchMode'])->name('switchMode');
Route::post('/send-mail',[MailController::class,'personalContact'])->name('personalContact');
Route::post('/send-brand-mail',[MailController::class,'brandContact'])->name('brandContact');
Route::post('/send-careers-mail',[MailController::class,'careerMail'])->name('careerMail');