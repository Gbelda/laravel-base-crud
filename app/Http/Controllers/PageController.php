<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function comic(){

        $comics = Comic::all();

        return view('comic.main', compact('comics'));
    }
}
