<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>View User List</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <center>

    <br>
    <br>
        <form action="{{url('/home/userlist/search')}}" method="get">
            <input type="text" name="search">
            <input type="submit" name="" value="search">

        </form>
        <br>

    <h1>User list</h1>


    <br>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>EMAIL</td>
            <td>USERNAME</td>
            <td>PASSWORD</td>
            <td>NATIONALITY</td>
            <td>.........ACTION........</td>

        </tr>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['userid'] }}</td>
            <td>{{ $list[$i]['fullname'] }}</td>
            <td>{{ $list[$i]['email'] }}</td>
            <td>{{ $list[$i]['username'] }}</td>
            <td>{{ $list[$i]['password'] }}</td>
            <td>{{ $list[$i]['nationality'] }}</td>
            <td>
                <a href="/home/useredit/{{ $list[$i]['userid'] }}">Edit</a> |
                <a href="/home/userdelete/{{ $list[$i]['userid'] }}">Delete</a> |
                <a href="/home/userdetails/{{ $list[$i]['userid'] }}">Details</a>
            </td>
        </tr>
        @endfor
    </table>
    <a href="/home">Back</a> |
    <a href="/home/usercreate">Create user</a> |
    <a href="/logout">logout</a>
</center>
</body>
</html>
