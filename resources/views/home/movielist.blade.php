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

    <h1>movie list</h1>
    <a href="/home">Back</a> |
    <a href="/logout">logout</a> |

    <a href="/home/productcreate">Insert new product</a> |


    <br>

    <br>
    <form action="{{url('/home/movielist/search')}}" method="get">
        <input type="text" name="search">
        <input type="submit" name="" value="search">

    </form>
    <br>

    <table border="1">
        <tr>
            <td>ID</td>
            <td> name</td>


            <td>details</td>

            <td>Action</td>
        </tr>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['userid'] }}</td>
            <td>{{ $list[$i]['moviename'] }}</td>


            <td>{{ $list[$i]['details'] }}</td>

            <td>
                <a href="/home/movieedit/{{ $list[$i]['userid'] }}">Edit</a> |
                <a href="/home/moviedelete/{{ $list[$i]['userid'] }}">Delete</a> |
                <a href="/home/moviedetails/{{ $list[$i]['userid'] }}">Details</a>
            </td>
        </tr>
        @endfor
    </table>
</center>
</body>
</html>
