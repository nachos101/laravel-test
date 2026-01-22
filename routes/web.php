<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AlbumController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pop',[AlbumController::class, 'showAllAlbumsPop']);
Route::get('/trap',[AlbumController::class, 'showAllAlbumsTrap']);
Route::get('/rock_nacional',[AlbumController::class, 'showAllAlbumsRockNacional']);
Route::get('/rock_alternativo',[AlbumController::class, 'showAllAlbumsRockAlternativo']);