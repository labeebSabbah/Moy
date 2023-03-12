<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

use App\Models\Standard;

use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function() {

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::post('/login', [UserController::class, 'login'])->name('login');

    // Route::get('/register', function () {
    //     return view('auth.register');
    // });

    // Route::post('/register', [UserController::class, 'store']);

});

Route::middleware('auth')->group(function() {

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware('standard:1')->group(function () {
        Route::get('/1', function () {
            $standard = Standard::where('name', '1')->first();
            return view('1', compact('standard'));
        })->name('1');
    });
    
    Route::middleware('standard:2')->group(function () {
        Route::get('/2', function () {
            $standard = Standard::where('name', '2')->first();
            return view('2', compact('standard'));
        })->name('2');
    });

    Route::middleware('standard:3')->group(function () {
        Route::get('/3', function () {
            $standard = Standard::where('name', '3')->first();
            return view('3', compact('standard'));
        })->name('3');
    });

    Route::middleware('standard:4')->group(function () {
        Route::get('/4', function () {
            $standard = Standard::where('name', '4')->first();
            return view('4', compact('standard'));
        })->name('4');
    });

    Route::middleware('standard:5')->group(function () {
        Route::get('/5', function () {
            $standard = Standard::where('name', '5')->first();
            return view('5', compact('standard'));
        })->name('5');
    });

    Route::middleware('standard:6')->group(function () {
        Route::get('/6', function () {
            $standard = Standard::where('name', '6')->first();
            return view('6', compact('standard'));
        })->name('6');
    });

    Route::middleware('standard:7')->group(function () {
        Route::get('/7', function () {
            $standard = Standard::where('name', '7')->first();
            return view('7', compact('standard'));
        })->name('7');
    });

    Route::post('/attachments', [AttachmentController::class, 'store'])->name('attachments.store');

    Route::get('/attachments/{task}', [AttachmentController::class, 'index'])->name('attachments.index');

    Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');
    
    Route::get('/notes/{task}', [NoteController::class, 'index'])->name('notes.index');

    Route::put('/note/update', [NoteController::class, 'update'])->name('notes.update');

    Route::get('/note/{note}/destroy', [NoteController::class, 'destroy'])->name('notes.destroy');

    Route::put('/task/update', [TaskController::class, 'update'])->name('task.update');

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

});

Route::get('/clear-all', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return 'Application has been cleared';
});
