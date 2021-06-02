<?php
	$host="localhost";
	$username="root";
	$passwd="";
	$dbname="student";
	$conn=mysqli_connect($host,$username,$passwd,$dbname);
	if ($_POST) {

		$name=$_POST['txt1'];
		$gender=$_POST['txt2'];
		$dob=$_POST['txt3'];
		$email=$_POST['txt4'];
		$mobile=$_POST['txt5'];
		$address=$_POST['txt6'];
		$password=$_POST['txt7'];
		$area=$_POST['txt8'];
		$bloodgrp=$_POST['txt9'];
		$q=mysqli_query($conn,"insert into std(id, name, gender, dob, email, mobile, address, password, area, bloodgrp) values ('$name','$gender','$dob','$email','$mobile','$address','$password','$area','$bloodgrp')") or die(mysqli_error($conn));
		if ($q) {
			echo "<script>alert('record instered');</script>";
		}

	}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Student from</title>
</head>
<body>
	<form method="post">
		<table border="1">
			<tr>
				<td>Name:</td>
				<td><input type="text" name="txt1"></td>
			</tr>
			<tr><td>gender:</td>
				<td><select name="txt2">
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select></td></tr>
		
		<tr><td>Date of birth:</td>
			<td><input type="date" name="txt3"></td></tr>
		<tr><td>Email:</td><td><input type="email" name="txt4"></td></tr>
		<tr><td>Mobile no:</td><td><input type="number" name="txt5"></td></tr>
		<tr><td>Address:</td><td><textarea name="txt6" rows="4" cols="5"></textarea></td></tr>
		<tr><td>password:</td><td><input type="password" name="txt7"></td></tr>
		<tr><td>Area:</td><td><input type="text" name="txt8"></td></tr>
		<tr><td>Bloodgrp:</td><td><input type="text" name="txt9"></td></tr>
		<tr><td><input type="submit" value="Submit"></td></tr>
		</table>
	</form>
</body>
</html>