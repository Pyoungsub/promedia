<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire;
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

Route::get('/', Livewire\Main\Index::class)->name('home');
Route::prefix('intro')->group(function () {
    Route::name('intro.')->group(function () {
        Route::get('/greetings', Livewire\Intro\Greetings::class)->name('greetings');
        Route::get('/articles-of-incorporation', Livewire\Intro\ArticlesOfIncorporation::class)->name('articles-of-incorporation');
        Route::get('/history', Livewire\Intro\History::class)->name('history');
        Route::get('/member', Livewire\Intro\Member::class)->name('member');
        Route::get('/location', Livewire\Intro\Location::class)->name('location');
    });
});
Route::prefix('member')->group(function () {
    Route::name('member.')->group(function () {
        Route::get('/company', Livewire\Member\Companies::class)->name('company');
    });
});
Route::prefix('executive')->group(function () {
    Route::name('executive.')->group(function () {
        Route::get('/history', Livewire\Executive\History::class)->name('history');
    });
});
Route::get('/pdf', Livewire\Pdf\Index::class)->name('pdf');
Route::prefix('events')->group(function () {
    Route::name('events.')->group(function () {
        Route::get('/photos', Livewire\Events\Photos::class)->name('photos');
        Route::get('/schedules', Livewire\Events\Schedules::class)->name('schedules');
    });
});
Route::prefix('boards')->group(function () {
    Route::name('boards.')->group(function () {
        Route::get('/references', Livewire\Boards\References::class)->name('references');
        Route::get('/press-passes', Livewire\Boards\PressPasses::class)->name('press-passes');
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});