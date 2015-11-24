<?php
	
	include 'encryption.php';
	
	$user = 'magana0_coachlab';
	$password = 'coachlabdb12';
	$database = 'magana0_coachlabdb';

	$dbConnection = new mysqli('localhost', $user, $password, $database) or die('Unable to connect');

	$organisation = $_POST['organisation'];
	$contactNumber = $_POST['contactNumber'];
	$email = $_POST['email'];
	$address = ""; 
		
	/*$organisation = encrypt_decrypt('encrypt',$organisation);
	$contactNumber = encrypt_decrypt('encrypt',$contactNumber);
	$email = encrypt_decrypt('encrypt',$email);
	$address = encrypt_decrypt('encrypt',$address);*/
	
	$Organisationquery = "INSERT INTO organization( Name, ContactNum, Email, Address) VALUES ('".$organisation."',".$contactNumber.",'".$email."','".$address."')";

	$Organisationresult = mysqli_query($dbConnection,$Organisationquery);
	
	$OrgInsertBool = $Organisationresult;
	
	if(isset($_POST['startDate']) && isset($_POST['endDate'])){
		$XOrganisationquery = 'Select * FROM organization WHERE Name="'.$organisation.'"';
		$XOrganisationresult = mysqli_query($dbConnection,$XOrganisationquery);
		
		if($XOrganisationresult != Null){
			$row = $XOrganisationresult->fetch_assoc();
			//echo $row["OrganizationID"];
			
			$startDate = $_POST['startDate'];
			$endDate = $_POST['endDate'];
			
			$subscriptionsquery = "INSERT INTO subscriptions( OrganizationID, StartDate, EndDate) VALUES (".$row["OrganizationID"].",".$startDate.",'".$endDate."')";
			$subscriptionsresult = mysqli_query($dbConnection,$subscriptionsquery);
			if($subscriptionsresult == $OrgInsertBool){
				echo $subscriptionsresult;
			}else{
				echo 0;
			}
		}
	}else{
		echo $OrgInsertBool;
	}
?>