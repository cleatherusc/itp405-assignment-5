<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
  <body>
    <h1>Edit</h1>
    @if (count($errors)>0)
      @foreach($errors->all() as $error)
      <div class='alert alert-danger' role='alert'>{{$error}}</div>
      @endforeach
    @endif
    <form action="/tweets/{{$tweet->id}}" method="post">
      {{csrf_field() }}
      <div class='form-group'>
        <label for='tweet'>Tweet</label>
        @if (null!==session('error'))
          <textarea name='tweet' id ='tweet' class='form-control has-error'>{{session('bad_input')}}</textarea>

        @else
          <textarea name='tweet' id ='tweet' class='form-control'>{{$tweet->tweet}}</textarea>

        @endif

      </div>
      <button type='submit' class='btn btn-primary'>Save</button>
    </form>
  <a href='/'>Back</a>
</div>
</div>
</body>
</html>
