<?php

use App\Livewire\ContactUs;
use App\Livewire\ShowAboutUs;
use App\Livewire\ShowHome;
use App\Livewire\ShowServices;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ShowHome::class)->name('home');
Route::get('/about', ShowAboutUs::class)->name('about-us');
Route::get('/service', ShowServices::class)->name('services');
Route::get('/contact', ContactUs::class)->name('contact');