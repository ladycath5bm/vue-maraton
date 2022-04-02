<?php

use App\Http\Controllers\Api\ToDoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', function () {
    return view('app');
});

Route::post('/import','ToDoController@import')->name('import');
Route::get('/export','ToDoController@export')->name('export');
