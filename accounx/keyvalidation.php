<?php

include 'connection.php';
include 'encryption.php';
mysqli_select_db($db_conx,$db);

//protectin against MySQL injection
$key = stripslashes($_POST['key']);
$_ValidKey = mysqli_real_escape_string($db_conx,$key);

$query = "SELECT `SubscriptionID`, HEX(`RegistrationID`), `StartDate`, `EndDate`, `Status` FROM `subscriptions` WHERE HEX(`RegistrationID`) = '".$_ValidKey."'";

$result = mysqli_query($db_conx,$query);

if(mysqli_num_rows($result) > 0)
{
	while($row = $result->fetch_assoc()) {
		$today = date("Y-m-d");
		//echo $row['EndDate'];
		if($row['EndDate'] > $today){
			echo encrypt_decrypt('encrypt',$row['SubscriptionID']);
		}
		else
		{
			echo 'false';
		}
	}
}
else{
	echo 'false';
}

?>
