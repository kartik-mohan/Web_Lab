<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Update Profile</title>
<style>
	body {
	background-color: #f6f6f7;
	color: #252426;
	font-family: ubuntu;
	}
</style>
</head>
<body>
<div style="padding-left: 40%;">

<h2>Enter your personal details:</h2>
<form action="details.jsp" method="get">
  
  
  <label for="name" style="padding-left: 8%;">Name:</label><br><br>
  <input type="text" id="name" name="name" placeholder="Your full name"><br><br>
  
  <label for="age" style="padding-left: 8%;">Age:</label><br><br>
  <input type="text" id="age" name="age" placeholder="Your age in years"><br><br>
  
  <label for="address" style="padding-left: 8%;">Address:</label><br><br>
  <input type="text" id="address" name="address" value="" placeholder="Flat no, Street, 
 Area, City, PIN"><br><br><br>
  
  <input type="submit" value="Submit" style="margin-left: 7%;">
  
</form> 
</div>
</body>
</html>
