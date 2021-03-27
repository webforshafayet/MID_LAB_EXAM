<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create modarator</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <center>
    <h1>Create New modarator</h1>
    <a href="/home/modaratoruserlist">Back</a> |

    <form method="post">
    	@csrf
		<fieldset>
			<legend>Add</legend>
			<table>
                <tr>
					<td>Full Name</td>
					<td><input type="text" id="name" name="fullname" value="{{old('fullname')}}" onkeyup="f1()"></td>
                    <td><p id="head" class="form-forget"> </p></td>
				</tr>
				<tr>
					<td>Username</td>

					<td><input type="text" id="username" name="username" value="{{old('username')}}" onkeyup="f5()"> </td>
                    <td><p id="Username" class="form-forget"> </p></td>
				</tr>
				<tr>
					<td>Password</td>

					<td><input type="text" id="password" name="password" value="{{old('password')}}" onkeyup="f3()"></td>
                    <td><p id="passwordjs" class="form-forget"> </p></td>
				</tr>
                <tr>
					<td>Email</td>
					<td><input type="email" id="email" name="email" value="{{old('email')}}" onkeyup="f4()"></td>
                    <td><p id="emailjs" class="form-forget"> </p></td>
				</tr>

				<tr>
					<td>Nationality</td>
					<td><input type="text" id="nationality" name="nationality" value="{{old('nationality')}}" onkeyup="f52()"></td>
                    <td><p id="Nationality" class="form-forget"> </p></td>
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
