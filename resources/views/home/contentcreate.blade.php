<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert content</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

</head>
<body>
    <center>
    <h1>Insert content</h1>
    <a href="/home/contentlist"> Back</a>

    <form method="post"  enctype="multipart/form-data">
    	@csrf
		<fieldset>
			<legend>Add</legend>
			<table>
				<tr>
					<td>content:</td>

					<td><input type="text" id="username" name="productname" value="{{old('productname')}}" onkeyup="f5()"></td>
                    <td><p id="Username" class="form-forget"> </p></td>
				</tr>
				<tr>
					<td>Catagory</td>

					<td><input type="text" id="catagory" name="catagory" value="{{old('catagory')}}" onkeyup="f51()"></td>
                    <td><p id="Catagory" class="form-forget"> </p></td>
				</tr>


				<tr>
					<td>details</td>
					<td><input type="text" id="details" name="details" value="{{old('details')}}" onkeyup="f54()"></td>
                    <td><p id="Details" class="form-forget"> </p></td>
				</tr>

                <tr>

					<td>status</td>
					<td>
						<select name='status'>
							<option value="exist"> Exist </option>
							<option value="Upcoming"> Upcoming </option>
						</select>
					</td>
				</tr>
                <tr>
					<td>Image</td>
					<td>
						<input type="file" id="image" name="myfile" onkeyup="f5()">
                        <td><p id="Image" class="form-forget"> </p></td>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Save"></td>
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
