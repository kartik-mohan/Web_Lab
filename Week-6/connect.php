<?php
	$username = $_POST['username1'];
	$password = $_POST['password1'];

	// Database connection
	$conn = new mysqli('localhost','root','','login_sys');
	if($conn->connect_error) 
	{
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	
	else 
	{
		$stmt = $conn->prepare("select * from signup where username = ?");
		$stmt->bind_param("s", $username);
		$stmt->execute();
	    $stmt_result = $stmt->get_result();
		if($stmt_result -> num_rows > 0) 
		{
			$data = $stmt_result -> fetch_assoc();
			if($data['password'] == $password) 
			{   echo "Login Successful";	} 
		   
            else
			{  echo "Invalid email or password";	}
		} 
		
		else
		{  echo "Invalid email or password";	}
	}
?>
