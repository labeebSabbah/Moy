<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
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

    Route::middleware('standard:1')->group(function () {
        Route::get('/1', function () {
            return view('1');
        });
    });
    
    Route::middleware('standard:2')->group(function () {
        Route::get('/2', function () {
            return view('2');
        });
    });

    Route::middleware('standard:3')->group(function () {
        Route::get('/3', function () {
            return view('3');
        });
    });

    Route::middleware('standard:4')->group(function () {
        Route::get('/4', function () {
            return view('4');
        });
    });

    Route::middleware('standard:5')->group(function () {
        Route::get('/5', function () {
            return view('5');
        });
    });

    Route::middleware('standard:6')->group(function () {
        Route::get('/6', function () {
            return view('6');
        });
    });

    Route::middleware('standard:7')->group(function () {
        Route::get('/7', function () {
            return view('7');
        });
    });

    Route::put('/task/update', [TaskController::class, 'update'])->name('task.update');

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

});

Route::get('/clear-all', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return 'Application has been cleared';
});
