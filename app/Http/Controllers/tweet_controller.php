<?php

namespace App\Http\Controllers;
use App\Tweet;
use Illuminate\Http\Request;
use Validator;
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
    $tweet = Tweet::find($id);
    return view('view', ['tweet'=>$tweet]);
  }

  public function edit($id)
  {
    $tweet_input = request('tweet');
    $validation = Validator::make(['tweet'=>$tweet_input],['tweet'=>'required|max:140']);
    if ($validation->passes()) {
      $tweet = Tweet::find($id);
      $tweet->tweet = $tweet_input;
      $tweet->save();
    } else {
      return redirect("/tweets/$id/edit/")->withErrors($validation)->with('bad_input', $tweet_input)->with('error', 1);
    }
    $tweet = Tweet::find($id);
    return redirect("/tweets/$id/")->with('success_status', 'Tweet was edited successfully.');
  }
  public function edit_view($id)
  {
    $tweet = Tweet::find($id);
    return view('edit', ['tweet'=>$tweet]);
  }

  public function delete($id)
  {
    $tweet = Tweet::find($id);
    $tweet->delete();
    return redirect('/')->with('success_status', 'Tweet was deleted successfully.');
  }
}
