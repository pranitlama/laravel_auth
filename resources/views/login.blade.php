<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
  <h1>login</h1>
  @if(Session::has('fail'))
    <span>{{Session::get('fail')}}</span>
    @endif
  <form action="{{route('loginusers')}}" method="post">
    @csrf
    <input type="text" name="email" placeholder="email">
    <span>@error('email'){{$message}}@enderror</span>
    <input type="password" name="pass" placeholder="pass">
    <span>@error('password'){{$message}}@enderror</span>
    <button type="submit">login in</button>
  </form>
</body>
</html>