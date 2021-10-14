<?php

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

/* -------------------------------------------------------------------------- */
/*                               Frontend Routes                              */
/* -------------------------------------------------------------------------- */

Route::get('/', function () {
    return view('pages.frontend.index');
});

Route::get('/fitur', function () {
    return view('pages.frontend.feature');
});

Route::get('/tentang', function () {
    return view('pages.frontend.about');
});

Route::get('/team', function () {
    return view('pages.frontend.team');
});

Route::get('/kontak', function () {
    return view('pages.frontend.contact');
});

/* -------------------------------------------------------------------------- */
/*                               Backend Routes                               */
/* -------------------------------------------------------------------------- */

Route::prefix('dashboard')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/', function () {
            return view('pages.backend.index');
        })->name('dashboard');
        Route::get('/jadwal-pelajaran', 'App\Http\Controllers\ScheduleController@index');
        Route::get('/jadwal-pelajaran/atur-jadwal', 'App\Http\Controllers\ScheduleController@create');
        Route::get('/jadwal-pelajaran/atur-jadwal/simpan', 'App\Http\Controllers\ScheduleController@store');
        Route::resource('schedules', 'App\Http\Controllers\ScheduleController');
    });

require __DIR__ . '/auth.php';
