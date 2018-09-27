<!DOCTYPE html>
<html>
<head>
	<title>Enter Your Passion</title>
</head>
<body style="font-family: verdana">
	<h1>Fill Your Happiness</h1>
	<form action=" " method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td width="100px">Hobby</td>
				<td>
					<input type="checkbox" name="hobby[]" value="Sleep">Sleeping
					<input type="checkbox" name="hobby[]" value="Eat">Eating
					<input type="checkbox" name="hobby[]" value="Basket Ball">Basket Ball
				</td>
				<td></td>
			</tr>
		</table>
		<table>
			<tr>
				<td width="100px">Genre</td>
				<td>
					<input type="checkbox" name="genre[]" value="Horror">Horror
					<input type="checkbox" name="genre[]" value="Thriller">Thriller
					<input type="checkbox" name="genre[]" value="Comedy">Comedy
				</td>
				<td></td>
			</tr>
		</table>
		<table>
			<tr>
				<td width="100px">Destination</td>
				<td>
					<input type="checkbox" name="destination[]" value="Heaven">Heaven
					<input type="checkbox" name="destination[]" value="Hell">Hell
					<input type="checkbox" name="destination[]" value="U.S.">U.S.
				</td>
				<td></td>
			</tr>
		</table>
		<table>
			<tr>
				<td width="100px">Photos</td>
				<td>
					<input type="file" name="photo">
				</td>
				<td></td>
			</tr>
		</table>
		<table>
			<tr>
				<td width="100px"><<a href="login.php">Kembali</a></td>
				<td align="right"><input type="submit" name="submit"></td>
				<td></td>
			</tr>
		</table>
		<hr>
	</form>
	<?php
		if (isset($_POST['submit'])) {
			$hobby = $_POST['hobby'];
			$genre = $_POST['genre'];
			$destination = $_POST['destination'];
			# code...
		}
		$upload = 'photos/';
		$uploadFile = $upload. basename($_FILES['photo']['name']);
		if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile)) {
			# code...
		}	
	?>
	<h1>Happiness That You Chosen</h1>
	<table>
		<tr>
			<td width="300px">Your Hobby/ies is</td>
			<td>:
				<?php
					foreach ($hobby as $showHobby) {
						echo $showHobby.". ";
						# code...
					}
				?>
			</td>
		</tr>
		<tr>
			<td width="300px">Your Genre that/s you choosen</td>
			<td>:
				<?php
					foreach ($genre as $showGenre) {
						echo $showGenre.". ";
						# code...
					}
				?>
			</td>
		</tr>
		<tr>
			<td width="300px">Destination/s</td>
			<td>:
				<?php
					foreach ($destination as $showDestination) {
						echo $showDestination.". ";
						# code...
					}
				?>
			</td>
		</tr>
		<tr>
			<td width="300px">Photos</td>
			<td>
				<img src="photo/$namePhoto">
			</td>
		</tr>
	</table>
</body>
</html>