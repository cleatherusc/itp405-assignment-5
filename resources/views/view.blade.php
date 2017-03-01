<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
  <body>
    @if (session('success_status'))
    <div class='alert alert-success' role='alert'>{{session('success_status')}}</div>
    @endif
    <br>
    <div class='container'>
    <div class='alert alert-info'>
      Id: {{$tweet->id}} <br><br>
      Tweet: {{$tweet->tweet}} <br><br>
      <form action='/tweets/{{$tweet->id}}/delete/' method='post'>{{csrf_field()}}
        <button class = 'btn' type='submit'>Delete</button>
      </form>
      <a href='/tweets/{{$tweet->id}}/edit/'>Edit</a>
    </tr>
  </table>
  <br>
  <a href='/'>Back</a>
</div>
</div>
</body>
</html>
