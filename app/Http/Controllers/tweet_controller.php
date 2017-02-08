<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tweet_controller extends Controller
{
  public function add_tweet(Request $request)
  {
    $tweet = $request->input('tweet');
    $validation = \Validator::make($request->all(), [
      'tweet' => 'required|max:140'
    ]);
    if ($validation->fails())
    {
      return redirect('/')->withErrors($validation);
    }
    $results_insert = \DB::insert("insert into tweets (tweet) VALUES (?);", [$tweet]);
    if ($results_insert==1){
      $results_insert = 'successfully created tweet';
    }
    //return view('index', ['tweets'=>$results_select, 'message'=>$results_insert]);
    return redirect('/')->with('success_status', 'Tweet was created successfully.');
  }

  public function view($id)
  {
    $results = \DB::select('select * from tweets where id = ?;', [$id]);
    return view('view', ['tweets'=>$results]);
  }

  public function delete($id)
  {
    $results_delete = \DB::delete('delete FROM tweets Where id = ?', [$id]);
    $results_select = \DB::select('select * from tweets;');
    return redirect('/')->with('success_status', 'Tweet was deleted successfully.');
  }
}
