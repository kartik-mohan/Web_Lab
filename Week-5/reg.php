<?php
    session_start();
	
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost','root','','login_sys');
	if($conn->connect_error)
	{
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	
	else 
	{
		$u = "SELECT username FROM signup WHERE username='$username' ";
		$user = mysqli_query($conn,$u);
		 
		$e = "SELECT email FROM signup WHERE email='$email' ";
		$id = mysqli_query($conn,$e);
		
		if(mysqli_num_rows($user) > 0)
	   	{   echo "Username exists";  }
	
	    else if(mysqli_num_rows($id) > 0)
		{ echo "Email exists"; 	}
	
	    else {		
		$stmt = $conn->prepare("insert into signup(name, username, email, password) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $name, $username, $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		
		header('Location: http://localhost/login/');
		echo "Registration successful";
		$stmt->close();
		$conn->close();
	    }
	}
?>
