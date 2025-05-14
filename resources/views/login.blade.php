<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Login</h1>
    <form action="login" method="post">

        @csrf

        <label for="email">Email: </label>
        <input type="email" name="email" value="{{old('email')}}">
        @error('email')
            <p style="color:red">{{$message}}</p>
        @enderror

        <br>
        <label for="password">Password: </label>
        <input type="password" name="password">
        @error('password')
            <p style="color:red">{{$message}}</p>
        @enderror
        <br>

        <button type="submit">Login</button>
    </form>
</body>
</html>