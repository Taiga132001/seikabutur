<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus_stop;
use App\Models\Bus_information;

class PostController extends Controller
{
     public function index(Bus_stop $bus_stop)
    {
        return view('posts.index')->with(['bus_stops' => $bus_stop->get()]);  
    }

     public function favorite()
    {
        return view('posts.favorite');  
    }

     public function konzatu()
    {
        return view('posts.konzatu');  
    }

    public function show(Bus_stop $aaa,bus_information $bus_information)
    {
        return view('posts.show')->with(['bus_stop' => $aaa]);  
    }

}