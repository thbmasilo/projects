<?php

	include 'encryption.php';
	
	$user = 'magana0_coachlab';
	$password = 'coachlabdb12';
	$database = 'magana0_coachlabdb';

	$dbConnection = new mysqli('localhost', $user, $password, $database) or die('Unable to connect');

	$_startDate = $_POST['startDate'];
	$_endDate = $_POST['endDate'];
	$_status = $_POST['status'];
	$_organisation = $_POST['organisation'];
	
	$Organisationquery = "SELECT OrganizationID FROM organization WHERE Name = '".$_organisation."'";

	$Organisationresult = mysqli_query($dbConnection,$Organisationquery);
	
	if($Organisationresult != NULL)
	{
		$row = $Organisationresult->fetch_assoc();
		
		if($_status == 'Active'){
			$_status = true;
		}else{
			$_status = 0;
		}
		
		$Subscriptionquery = "INSERT INTO subscriptions(OrganizationID, StartDate, EndDate, Status) VALUES (".$row['OrganizationID'].",'".$_startDate."','".$_endDate."',".$_status.")";
		$Subscriptionresult = mysqli_query($dbConnection,$Subscriptionquery);
		
		echo $Subscriptionresult;
	}else{
		echo '-1';
	}
?>