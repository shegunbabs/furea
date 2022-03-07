<?php

use App\Http\Livewire\Pages\About;
use App\Http\Livewire\Pages\ContactUs;
use App\Http\Livewire\Pages\Esg;
use App\Http\Livewire\Pages\Home;
use App\Http\Livewire\Pages\InnovativeSolutions;
use App\Http\Livewire\Pages\Opportunities;
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

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/innovative-solutions', InnovativeSolutions::class)->name('innovative-solutions');
Route::get('/esg', Esg::class)->name('esg');
Route::get('/partnership', Opportunities::class)->name('opportunities');
Route::get('contact-us', ContactUs::class)->name('contact-us');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

//require __DIR__.'/auth.php';
