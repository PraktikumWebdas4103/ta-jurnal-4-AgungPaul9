<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body style="font-family: verdana">
	<h1>LOGIN FOR VACATION</h1>
	<form action=" " method="POST">
		<center>
		<table>
			<tr>
				<td>USERNAME</td>
				<td>:</td>
				<td><input type="text" name="username[]"></td>
			</tr>
			<tr>
				<td>PASSWORD</td>
				<td>:</td>
				<td><input type="password" name="password[]"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="LOGIN"></td>
			</tr>
		</table>
		</center>
	</form>
	<hr>
</body>
</html>
<?php
	session_start();
	$user = array(
		array(
			"username" => "agung",
			"password" => "agung"

		),
		array(
			"username" => "paul",
			"password" => "paul"
		)
	);
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['[password]'];
		if ($_POST['password'] == $user['password'] && $_POST['username'] == $user['username'] ) {
			$_SESSION['username'] = $username;
			# code...
		}else{
			header("location:form.php");
		}
		# code...
	}
?>