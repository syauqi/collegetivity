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

        Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

        Route::get('/jadwal-pelajaran', 'App\Http\Controllers\ScheduleController@index');
        Route::get('/jadwal-pelajaran/atur-jadwal', 'App\Http\Controllers\ScheduleController@create');
        Route::resource('schedules', 'App\Http\Controllers\ScheduleController');

        Route::get('/catatan-pelajaran', 'App\Http\Controllers\NoteController@index');
        Route::get('/catatan-pelajaran/tambah-catatan', 'App\Http\Controllers\NoteController@create');
        Route::resource('notes', 'App\Http\Controllers\NoteController');

        Route::get('/galeri-foto', 'App\Http\Controllers\GalleryController@index');
        Route::get('/galeri-foto/tambah-foto', 'App\Http\Controllers\GalleryController@create');
        Route::resource('galleries', 'App\Http\Controllers\GalleryController');

        Route::get('/file-tugas', function () {
            return view('pages.backend.files.index');
        });

        Route::get('/todolist', function () {
            return view('pages.backend.todolist.index');
        });

        Route::get('/calendar', function () {
            return view('pages.backend.calendar.index');
        });
    });

require __DIR__ . '/auth.php';
