<?php

use Illuminate\Support\Facades\Route;

/* -------------------------------------------------------------------------- */
/*                               Frontend Routes                              */
/* -------------------------------------------------------------------------- */

/* ------------------------------ Landing Page ------------------------------ */

Route::get('/', function () {
    return view('pages.frontend.index');
});

/* ----------------------------- Features Page ------------------------------ */
Route::get('/fitur', function () {
    return view('pages.frontend.feature');
});

/* ------------------------------- About Page ------------------------------- */
Route::get('/tentang', function () {
    return view('pages.frontend.about');
});

/* ------------------------------- Team Page -------------------------------- */
Route::get('/team', function () {
    return view('pages.frontend.team');
});

/* ------------------------------ Contact Page ------------------------------ */
Route::get('/kontak', function () {
    return view('pages.frontend.contact');
});

/* -------------------------------------------------------------------------- */
/*                               Backend Routes                               */
/* -------------------------------------------------------------------------- */

Route::prefix('dashboard')
    ->middleware(['auth'])
    ->group(function () {
        /* -------------------------- Dashboard Index Pages ------------------------- */
        Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
        /* ------------------------- Jadwal Pelajaran Pages ------------------------- */
        Route::get('/jadwal-pelajaran', 'App\Http\Controllers\ScheduleController@index');
        Route::get('/jadwal-pelajaran/atur-jadwal', 'App\Http\Controllers\ScheduleController@create');
        Route::resource('schedules', 'App\Http\Controllers\ScheduleController');
        /* ------------------------- Catatan Pelajaran Pages ------------------------ */
        Route::get('/catatan-pelajaran', 'App\Http\Controllers\NoteController@index');
        Route::get('/catatan-pelajaran/tambah-catatan', 'App\Http\Controllers\NoteController@create');
        Route::resource('notes', 'App\Http\Controllers\NoteController');
        /* ---------------------------- Galeri Foto Pages --------------------------- */
        Route::get('/galeri-foto', 'App\Http\Controllers\GalleryController@index');
        Route::get('/galeri-foto/tambah-foto', 'App\Http\Controllers\GalleryController@create');
        Route::resource('galleries', 'App\Http\Controllers\GalleryController');
        /* ----------------------------- Bookmarks Pages ---------------------------- */
        Route::get('/bookmarks', 'App\Http\Controllers\BookmarkController@index');
        Route::get('/bookmarks/tambah-bookmarks', 'App\Http\Controllers\BookmarkController@create');
        Route::resource('bookmarks', 'App\Http\Controllers\BookmarkController');
        /* ---------------------------- File Tugas Pages ---------------------------- */
        Route::get('/file-tugas', function () {
            return view('pages.backend.files.index');
        });
        /* ----------------------------- Todolist Pages ----------------------------- */
        Route::get('/todolist', 'App\Http\Controllers\TodolistController@index');
        Route::resource('todolist', 'App\Http\Controllers\TodolistController');
        Route::get('todolist/delete/{id}', 'App\Http\Controllers\TodolistController@doneviadashboard')
            ->name('todolist.done');
        /* ----------------------------- Calendar Pages ----------------------------- */
        Route::get('/calendar', function () {
            return view('pages.backend.calendar.index');
        });
        /* ---------------------------- Whiteboard Pages ---------------------------- */
        Route::get('/whiteboard', function () {
            return view('pages.backend.whiteboard.index');
        });
        /* ---------------------------- Pomodoro section ---------------------------- */
        Route::get('/pomodoro/pomofocus', function () {
            return view('pages.backend.pomodoro.pomofocus');
        });
        Route::get('/pomodoro/lifeat', function () {
            return view('pages.backend.pomodoro.lifeat');
        });
        /* ------------------------------ Audio Section ----------------------------- */
        Route::get('/audio/moodly', function () {
            return view('pages.backend.audio.moodly');
        });
        Route::get('/audio/shhhnoise', function () {
            return view('pages.backend.audio.shhhnoise');
        });
        Route::get('/audio/poolsuite', function () {
            return view('pages.backend.audio.poolsuite');
        });
        /* ------------------------- Virtual Meeting Section ------------------------ */
        Route::get('/virtual-meeting/skyoffice', function () {
            return view('pages.backend.virtual_meeting.skyoffice');
        });
        Route::get('/journal', function () {
            return view('pages.backend.journal.index');
        });
        Route::get('/e-book', function () {
            return view('pages.backend.journal.e-book');
        });
    });

/* -------------------------------------------------------------------------- */
/*                         Laravel File Manager Routes                        */
/* -------------------------------------------------------------------------- */

/* -------------------- Laravel File Manager Main Routes -------------------- */
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


require __DIR__ . '/auth.php';
