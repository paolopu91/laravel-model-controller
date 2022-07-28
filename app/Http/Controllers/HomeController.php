<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index () {
        $data = Movie::all();

        if(!$data){
            abort(404);
        }

        return view('home', [
            "movies"=>$data
        ]);
    }
}
