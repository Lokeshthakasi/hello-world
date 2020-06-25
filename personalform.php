<!DOCTYPE html>
<html>
<head>
	<title>Personal Details Form</title>
</head>
<body>
	<form action = "input.php" style = "text-align: left;">
		<b>Name:</b><br><br>
		 <input type="text" name="firstname"><br><br>
		<b>Phone Number:</b>
		<br><br><input type="number" name="phone"><br><br>
		<b>Choices of Courses:</b><br><br>
		<input type="radio" value = "B" name="id1">Bachelor's<br><br>
		<input type="radio" value = "M" name="id1">Master's<br><br>
		<b>Description:</b><textarea  name = "comment" rows="5" cols="10"></textarea><br><br>
		<b>Subject Interests:</b><br><br>
		<input type="checkbox" value = "c1" name="chk">C<br><br>
		<input type="checkbox" value = "c2" name="chk">C++<br><br>
		<input type="checkbox" value = "c3" name="chk">Java<br><br>
		<input type="checkbox" value = "c4" name="chk">Python<br><br>
		<input type="submit" value="submit">
	</form>

</body>
</html>