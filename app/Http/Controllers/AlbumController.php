<?php

namespace App\Http\Controllers;
use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
        return view('album');
    }

    public function showAllAlbumsPop(Request $request){
        $albums = Album::where('genre', 'Pop')->get();
        return view('album', compact('albums'));
    }

    public function showAllAlbumsTrap(Request $request){
        $albums = Album::where('genre', 'Trap')->get();
        return view('album', compact('albums'));
    }

    public function showAllAlbumsRockNacional(Request $request){
        $albums = Album::where('genre', 'Rock Nacional')->get();
        return view('album', compact('albums'));
    }

    public function showAllAlbumsRockAlternativo(Request $request){
        $albums = Album::where('genre', 'Rock Alternativo')->get();
        return view('album', compact('albums'));
    }
}