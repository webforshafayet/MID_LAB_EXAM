<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product List</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <center>

    <h1>ALl content list</h1>
    <a href="/home">Back</a> |
    <a href="/logout">logout</a> |

    <a href="/home/contentcreate">Insert new product</a> |


    <br>

    <br>
    <form action="{{url('/home/contentlist/search')}}" method="get">
        <input type="text" name="search">
        <input type="submit" name="" value="search">

    </form>
    <br>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>content name</td>
            <td>Catagory</td>

            <td>details</td>
            <td>status</td>
            <td>Action</td>
        </tr>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['userid'] }}</td>
            <td>{{ $list[$i]['productname'] }}</td>
            <td>{{ $list[$i]['catagory'] }}</td>

            <td>{{ $list[$i]['details'] }}</td>
            <td>{{ $list[$i]['status'] }}</td>
            <td>
                <a href="/home/contentedit/{{ $list[$i]['userid'] }}">Edit</a> |
                <a href="/home/contentdelete/{{ $list[$i]['userid'] }}">Delete</a> |
                <a href="/home/contentdetails/{{ $list[$i]['userid'] }}">Details</a>
            </td>
        </tr>
        @endfor
    </table>
</center>
</body>
</html>
