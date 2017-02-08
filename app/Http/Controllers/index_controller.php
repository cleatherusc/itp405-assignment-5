<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet as TweetModel;

class index_controller extends Controller
{
    //
    public function __invoke()
    {
      $tweets = TweetModel::orderBy('id', 'DESC')->get();
      return view('index', ['tweets'=>$tweets]);
    }
}
