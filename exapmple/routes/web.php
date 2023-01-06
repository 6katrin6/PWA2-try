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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/first', function () {
    return view('first');
});

/* Z CONTROLLERA */
Route::get('second',[App\Http\Controllers\SimpleController::class, 'view']);

/* Z CONTROLLERA pomocou premennej */
Route::get('third',[App\Http\Controllers\SimpleController::class, 'viewData']);

/* Z CONTROLLERA vypisanie pola */
Route::get('/fourth',[App\Http\Controllers\SimpleController::class, 'viewData2']);

/* Z CONTROLLERA vypisanie cisla v URL adrese parameter fifth/8 vysledokm je 16 */
Route::get('fifth/{parameter}', [App\Http\Controllers\SimpleController::class, 'viewParameter']);

/* posielat data metodou (send) */
Route::post('send', [App\Http\Controllers\SimpleController::class, 'sendData']);

Route::get('/six', function () {
    return view('sixView');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('departments', [App\Http\Controllers\DepartmentController::class,
'index']);