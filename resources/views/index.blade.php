<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
  <body>
    <br>
    <div class='container'>
      @if (session('success_status'))
      <div class='alert alert-success' role='alert'>{{session('success_status')}}</div>
      @endif
      @if (count($errors)>0)
        @foreach($errors->all() as $error)
        <div class='alert alert-danger' role='alert'>{{$error}}</div>
        @endforeach
      @endif
    </div>
    <div class='container'>
    <form action='/tweets/new/' method='post'>
      Create a new tweet:
      {{csrf_field()}}
      <textarea name='tweet' class='form-control'></textarea>
      <br>
      <input type='submit' class = 'btn'>
      <br>
    </form>
    <br>
    @if(count($tweets)>0)
    <table class='table'>
      <tr>
        <th>ID</th>
        <th>Tweet</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>Detailed View</th>
      </tr>
    @foreach($tweets as $tweet)
    <tr>
      <td>{{$tweet->id}}</td>
      <td>{{$tweet->tweet}}</td>
      <td><a href='/tweets/{{$tweet->id}}/edit/'>Edit</a></td>
      <td>
        <form action='/tweets/{{$tweet->id}}/delete/' method='post'>
          {{csrf_field()}}
          <button class = 'btn' type='submit'>Delete</input>
        </form>
      </td>
      <td><a href = '/tweets/{{$tweet->id}}/'>See tweet</a></td>
    </tr>
    @endforeach
  </table>
  @else
  <p>There are no posts</p>
  @endif
</div>
</body>
</html>
