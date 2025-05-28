<?php

use App\Http\Controllers\KelurahanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix("admin")->group(function () {
    Route::get("/", function () {
        return view("admin.index");
    });
    Route::resource("kelurahan", KelurahanController::class);
});
