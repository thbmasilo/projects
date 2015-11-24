<?php


	$user = 'root';
	$password = 'coachlab';
	$database = 'coachlabdb';

	$dbConnection = new mysqli('localhost', $user, $password, $database) or die('Unable to connect');


	$_ValidKey = $_POST['KeyValidationButton'];


	$query  = "SELECT * FROM subscriptions WHERE SubscriptionID = '".$_ValidKey."'";

	$result = mysqli_query($dbConnection,$query);
if($result != NULL)
{
	while($row = $result->fetch_assoc()) {
	
		if($_ValidKey == $row['SubscriptionID'] ){
			header('Location: finallogin/Register.html')
			
		}
	}
}