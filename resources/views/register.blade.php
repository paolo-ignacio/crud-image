<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Register data</h1>
    <form action="{{route('registration')}}" method="post" enctype="multipart/form-data">
        @csrf


        <label for="fname">First name: </label>
        <input type="text" name="fname" value="{{old('fname')}}">
        @error('fname')
            <p style="color:red">{{$message}}</p>
        @enderror
        <br>

        <label for="lname">Last name: </label>
        <input type="text" name="lname" value="{{old('lname')}}">
        @error('lname')
        <p style="color:red">{{$message}}</p>
        @enderror
        <br>
        <label for="email">Email: </label>
        <input type="email" name="email" value="{{old('email')}}">
        @error('email')
        <p style="color:red">{{$message}}</p>
        @enderror
        <br>
        <label for="password">Password: </label>
        <input type="password" name="password" value="{{old('password')}}">
        @error('password')
        <p style="color:red">{{$message}}</p>
        @enderror
        <br>
        <label for="image">Image: </label>
        <input type="file" name="image" value="{{old('image')}}">
        @error('image')
            <p style="color:red">{{$message}}</p>
        @enderror
        <br>
        <label for="birthdate">Birthdate:</label>
        <input type="date" name="birthdate" value="{{old('birthdate')}}">
        @error('birthdate')
            <p style="color:red">{{$message}}</p>
        @enderror
        <br>
        <label for="receipt">Receipt</label>
        <input type="checkbox" name="receipt">
        <br>
        <button type='submit'>Register</button>
    </form>
</body>
</html>