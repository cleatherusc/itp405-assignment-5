<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;

class index_controller extends Controller
{
    //
    public function __invoke()
    {
      $tweets = Tweet::orderBy('id', 'DESC')->get();
      return view('index', ['tweets'=>$tweets]);
    }
}
