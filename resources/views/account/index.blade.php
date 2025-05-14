<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h1>All accounts</h1>


    @if(session('success'))
        <p style="color:green">{{session('success')}}</p>
    @endif
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>


    <table>
        <tr>
            <td>FirstName</td>
            <td>Lastname</td>
            <td>Email</td>
            <td>Age</td>
            <td>Edit</td>
            <td>Delete</td>
            <td>Created at</td>
            <td>Updated at</td>
        </tr>

        @foreach($accounts as $account)
            <tr>
                <td>{{$account->fname}}</td>
                <td>{{$account->lname}}</td>
                <td>{{$account->email}}</td>
                <td>{{  \Carbon\Carbon::parse($account->birthdate)->age}}</td>
                <td><a href="{{route('edit', $account->id)}}">Edit</a></td>
                <td>
                    <form action="{{route('delete', $account->id)}}" method="post">

                        @csrf
                        
                        <button type="submit">Delete</button>
                    </form>
                </td>
                <td>{{$account->created_at}}</td>
                <td>{{$account->updated_at}}</td>


            </tr>

        @endforeach
    </table>
</body>
</html>