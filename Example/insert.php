<?php
	$name = $_POST['name']; // alias for echo=$name//
	$email = $_POST['email'];
	
	
	$con = mysqli_connect('localhost','root','','inseartdb');
	
	$query = "INSERT INTO `student`( `Name`, `class`, `Add.`) VALUES ([$name],[value-3],[$email])";
	
	$run = mysqli_query($con,$query);
	
	if($run == TRUE)
		echo"Data insert successful";
		
	else
		echo "error !";	

?>