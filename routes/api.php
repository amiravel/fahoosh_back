<?php


use App\Http\Controllers\RoomsController;
use Illuminate\Support\Facades\Route;

Route::prefix('/rooms')->name('rooms.')->controller(RoomsController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});
