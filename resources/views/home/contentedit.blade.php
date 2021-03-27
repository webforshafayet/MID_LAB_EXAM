<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit  content</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <center>
    <h1>Edit  content, {{ $user['id'] }}</h1>
    <a href="/home/productlist"> Back</a>

    <form method="post" enctype="multipart/form-data">
    	@csrf
		<fieldset>
			<legend>Edit Product</legend>
			<table>
				<tr>
					<td>content</td>
					<td><input type="text" id="username" name="productname" value="{{$user['productname']}}" onkeyup="f5()"></td>
                    <td><p id="Username" class="form-forget"> </p></td>
				</tr>
				<tr>
					<td>Catagory</td>
					<td><input type="text" id="catagory" name="catagory" value="{{ $user['catagory'] }}" onkeyup="f51()"></td>
                    <td><p id="Catagory" class="form-forget"> </p></td>
				</tr>

                <tr>
					<td>details</td>
					<td><input type="text" id="details" name="details" value="{{ $user['details'] }}" onkeyup="f54()"></td>
                    <td><p id="Details" class="form-forget"> </p></td>
				</tr>



                <tr>

					<td>status</td>
					<td>
						<select name='status'>
							<option value="exist" @if($user['status'] == 'exist') selected @endif > Exist </option>
							<option value="Upcoming"  @if($user['status'] == 'Upcoming') selected @endif > Upcoming </option>
						</select>
					</td>
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
