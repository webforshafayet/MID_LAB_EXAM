<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit  Product</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <center>
    <h1>Edit  movie, {{ $user['id'] }}</h1>
    <a href="/home/softwarelist"> Back</a>

    <form method="post" enctype="multipart/form-data">
    	@csrf
		<fieldset>
			<legend>Edit software</legend>
			<table>
				<tr>
					<td>name</td>
					<td><input type="text" id="username" name="productname" value="{{$user['moviename']}}" onkeyup="f5()"></td>
                    <td><p id="Username" class="form-forget"> </p></td>
				</tr>


                <tr>
					<td>details</td>
					<td><input type="text" id="details" name="details" value="{{ $user['details'] }}" onkeyup="f54()"></td>
                    <td><p id="Details" class="form-forget"> </p></td>
				</tr>





				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
    @foreach($errors->all() as $err)
    {{$err}} <br>
@endforeach
</center>

</body>
</html>
