<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit admin_profile</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <center>

    <h1>Edit Admin Profile</h1>




    <a href="/logout">logout</a>

    <form method="post">
    	@csrf
		<fieldset>
			<legend>Edit</legend>
			<table>
                <tr>
					<td>Full Name</td>
					<td><input type="text" id="name" name="fullname" value="{{ $user['fullname'] }}" onkeyup="f1()"></td>
                    <td><p id="head" class="form-forget"> </p></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" id="username" name="username" value="{{$user['username']}}" onkeyup="f5()"></td>
                    <td><p id="Username" class="form-forget"> </p></td>
				</tr>
                <tr>
					<td>Email</td>
					<td><input type="text" id="email" name="email" value="{{ $user['email'] }}" onkeyup="f4()"></td>
                    <td><p id="emailjs" class="form-forget"> </p></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password" value="{{ $user['password'] }}" onkeyup="f3()"></td>
                    <td><p id="passwordjs" class="form-forget"> </p></td>
				</tr>
                <tr>
					<td>Nationality</td>
					<td><input type="text" id="nationality" name="nationality" value="{{ $user['nationality'] }}" onkeyup="f52()"></td>
                    <td><p id="Nationality" class="form-forget"> </p></td>
				</tr>
                <tr>
					<td>ADDRESS</td>
					<td><input type="text" id="unitprice" name="address" value="{{ $user['address'] }}" onkeyup="f53()"></td>
                    <td><p id="Unitprice" class="form-forget"> </p></td>
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
<a href="/home/admin_profile">Back</a> |
</center>
<script type="text/javascript" src="{{asset('js/resposive_script.js')}}"></script>
</body>
</html>
