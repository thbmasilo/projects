<?php

	include 'encryption.php';
	
	$user = 'magana0_coachlab';
	$password = 'coachlabdb12';
	$database = 'magana0_coachlabdb';

	$dbConnection = new mysqli('localhost', $user, $password, $database) or die('Unable to connect');
	
	$_useremail=  $_POST['useremail'];
	$_userpassword = $_POST['userpassword'];
	$_lastname =  $_POST['lastname'];
	$_Firstname =  $_POST['Firstname'];
	$_Institution = $_POST['Institution'];
	
	$Organisationquery = "SELECT OrganizationID FROM organization WHERE Name = '".$_Institution."'";
	
	$Organisationresult = mysqli_query($dbConnection,$Organisationquery);
	
	if($Organisationresult != NULL)
	{
		$row = $Organisationresult->fetch_assoc();
		$_Institution = $row['OrganizationID'];
	
		$_useremail = encrypt_decrypt('encrypt',$_useremail);
		$_userpassword = encrypt_decrypt('encrypt',$_userpassword);
		$_lastname = encrypt_decrypt('encrypt',$_lastname);
		$_Firstname = encrypt_decrypt('encrypt',$_Firstname);
		
		$Subscriptionquery = "INSERT INTO users(OrganizationID, UserEmail, Password, LastName, FirstName, UserType) VALUES (".$_Institution.",'".$_useremail."','".$_userpassword."','".$_lastname."','".$_Firstname."','Instructor')";

		$Instructorresult = mysqli_query($dbConnection,$Subscriptionquery);

		echo $Instructorresult;

	}else{
		echo '-1';
	}
?>