<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', [\App\Http\Controllers\IndexController::class, 'show']);
Route::get('/', 'IndexController@index');

/*Route::get('/', function () {
    return 'Hello World';
});*/
