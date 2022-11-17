<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
</head>
<body>
    <h1>SIGN UP</h1>
    @if(Session::has('fail'))
    <span>{{Session::get('fail')}}</span>
    @endif
<form action="{{route('registerusers')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name">
    <span>@error('name'){{$message}}@enderror</span>
    <input type="text" name="email" placeholder="email">
    <span>@error('email'){{$message}}@enderror</span>
    <input type="password" name="pass" placeholder="pass">
    <span>@error('password'){{$message}}@enderror</span>
    <button type="submit">login in</button>
  </form>
</body>
</html>