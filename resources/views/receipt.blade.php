<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <p> First name: {{$data->fname}}</p>
    <p> Last name: {{$data->lname}}</p>
    <p> Email: {{$data->email}}</p>
    <p> Birthdate: {{$data->birthdate}}</p>
    <p> Age: {{$age}}</p>
    <p> Image: </p>
    <img src="{{asset('images/' . $data->image)}}">

</body>
</html>