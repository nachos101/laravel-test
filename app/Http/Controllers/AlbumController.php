<?php

namespace App\Http\Controllers;
use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
        return view('album');
    }

    public function showAllAlbums(Request $request){
        $albums = Album::all();
        return view('album',compact('albums'));
    }
}
