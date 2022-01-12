<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Here</h1>
    <form action="{{url('login')}}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email Here"></br></br>
        <input type="password" name="password" placeholder="Password"></br></br>
        <input type="submit" value="Login">
    </form>
</body>
</html>