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
    
    <h1>Edit data</h1>
    <form action="{{route('edit', $account->id)}}" method="post" enctype="multipart/form-data">
        @csrf


        <label for="fname">First name: </label>
        <input type="text" name="fname" value="{{$account->fname}}">
        @error('fname')
            <p style="color:red">{{$message}}</p>
        @enderror
        <br>

        <label for="lname">Last name: </label>
        <input type="text" name="lname" value="{{$account->lname}}">
        @error('lname')
        <p style="color:red">{{$message}}</p>
        @enderror
        <br>
       
        <br>
        <label for="image">Image: </label>
        <input type="file" name="image" value="{{$account->file}}">
        @error('image')
            <p style="color:red">{{$message}}</p>
        @enderror
        <br>
        <label for="birthdate">Birthdate:</label>
        <input type="date" name="birthdate" value="{{$account->birthdate}}">
        @error('birthdate')
            <p style="color:red">{{$message}}</p>
        @enderror
        <br>

        <button type='submit'>Edit</button>
    </form>
</body>
</html>