<?php


	if (isset($_POST['submit'])) {


	$data = mysqli_connect("localhost", "root", "", "innovizdata");
	
	$name = mysqli_real_escape_string($data, $_POST['name']);
	$college = mysqli_real_escape_string($data, $_POST['college']);
	$branch = mysqli_real_escape_string($data, $_POST['branch']);
	$email = mysqli_real_escape_string($data, $_POST['email']);
	$phone = mysqli_real_escape_string($data, $_POST['phone']);

	$insert = "INSERT INTO 	loginform(name, college, branch, email, phone)VALUES('$name', '$college', '$branch', '$email', '$phone')";

	$query = mysqli_query($data, $insert);

	if($query) 
	{
		include 'ss-modal.html';
	}
	else
	{
		echo "data has not been submitted successfully";
	}

}

?>