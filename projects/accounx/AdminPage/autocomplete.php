<?php
	session_start();;
	if(isset($_SESSION['id']))
	{
		$loginID = $_SESSION['id'];
	}
	else
	{
		echo 'security error';
		exit();
	}	
	
	$user = 'magana0_coachlab';
	$password = 'coachlabdb12';
	$database = 'magana0_coachlabdb';

	$dbConnection = new mysqli('localhost', $user, $password, $database) or die('Unable to connect');
	
	$securityQuery = "SELECT * FROM users WHERE UserID=".$loginID;
	$securityResult = mysqli_query($dbConnection,$securityQuery);
		
	if($securityResult != NULL){		
		
		$autoCompleteQuery = "SELECT * FROM organization";
		$autoCompleteResult = mysqli_query($dbConnection,$autoCompleteQuery);
		
		$OrgArray = array();
		
		if($autoCompleteResult != NULL)
		{
			while($_row = $autoCompleteResult->fetch_assoc()) {
				$OrgArray[$_row['OrganizationID']] = $_row['Name'];
			}
		}	
		echo json_encode($OrgArray);
	}else{echo 'security error';}

?>