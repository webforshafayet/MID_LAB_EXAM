<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Product</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <center>
    <h1>Delete movie</h1>
    <a href="/home/movielist"> Back</a>
			<table>
				<tr>
					<td>content: </td>
					<td>{{$user['moviename']}}</td>
				</tr>


                <tr>
					<td>details</td>
					<td>{{ $user['details'] }}</td>
				</tr>

				<tr>
					<td>
						<h3>Are you sure?</h3>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<form method="post">
							@csrf
							<input type="submit" name="submit" value="Confirm">
						</form>
					</td>
					<td></td>
				</tr>
			</table>
        </center>
</body>
</html>
