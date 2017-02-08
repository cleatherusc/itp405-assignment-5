<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
  <body>
    <br>
    <div class='container'>
    <div class='alert alert-info'>
      Id: {{$tweets[0]->id}} <br><br>
      Tweet: {{$tweets[0]->tweet}} <br><br>
      <form action='/tweets/{{$tweets[0]->id}}/delete/' method='post'>{{csrf_field()}}
        <button class = 'btn' type='submit'>Delete</button>
      </form>
    </tr>
  </table>
  <br>
  <a href='/'>Back</a>
</div>
</div>
</body>
</html>
