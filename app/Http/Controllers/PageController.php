<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index (){




        return view('home',compact('trains'));
    }


    public function contacts (){
        return view('contacts');
    }


    public function about (){
        return view('about');
    }


    public function trains (){


        $trains = Train::orderBy('id')->get();




        return view('home',compact('trains'));
    }
}
