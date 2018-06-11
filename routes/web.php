<?php
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get(
    '{uri}',
    '\\'.Pallares\LaravelNuxt\Controllers\NuxtController::class
)->where('uri', '.*');