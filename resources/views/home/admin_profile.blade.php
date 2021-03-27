<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_profile</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>

<center>


    <h1>Admin Profile</h1>


    <br>

    <table border="4">
        <tr>

            <td>NAME</td>
            <td>EMAIL</td>
            <td>USERNAME</td>
            <td>PASSWORD</td>
            <td>NATIONALITY</td>
            <td>ADDRESS</td>
            <td>.........ACTION........</td>

        </tr>

        @for($i=0; $i < count($list); $i++)
        <tr>

            <td>{{ $list[$i]['fullname'] }}</td>
            <td>{{ $list[$i]['email'] }}</td>
            <td>{{ $list[$i]['username'] }}</td>
            <td>{{ $list[$i]['password'] }}</td>
            <td>{{ $list[$i]['nationality'] }}</td>
            <td>{{ $list[$i]['address'] }}</td>
            <td>
                <a href="/home/admin_profile_edit/{{ $list[$i]['userid'] }}">Edit</a>


            </td>
        </tr>
        @endfor
    </table>
    <a href="/home">Back</a> |

    <a href="/logout">logout</a>
    </center>
</body>
</html>
