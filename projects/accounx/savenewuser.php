<?php
if((!isset($_POST['name']))||(!isset($_POST['surname']))||(!isset($_POST['cell_num']))||(!isset($_POST['email']))||(!isset($_POST['password']))||(!isset($_POST['sub_id']))){
	header("location:http://maganaprepaidmeter.co.za/accounx/index.php");
	exit();
}
include 'connection.php';
include 'encryption.php';
mysqli_select_db($db_conx,$db);

$_name = encrypt_decrypt('encrypt',mysqli_real_escape_string($db_conx, $_POST['name']));
$_surname = encrypt_decrypt('encrypt',mysqli_real_escape_string($db_conx, $_POST['surname']));
$_cell_num = encrypt_decrypt('encrypt',mysqli_real_escape_string($db_conx, $_POST['cell_num']));
$_email = encrypt_decrypt('encrypt',mysqli_real_escape_string($db_conx, $_POST['email']));
$_password = encrypt_decrypt('encrypt',mysqli_real_escape_string($db_conx, $_POST['password']));
$_sub_id = encrypt_decrypt('decrypt',mysqli_real_escape_string($db_conx, $_POST['sub_id']));
$_userType ="Student";

$query  = "SELECT UserEmail FROM users WHERE UserEmail= '".$_email."'";

$rows = mysqli_query($db_conx,$query);

if( mysqli_num_rows($rows) > 0)
{
	echo "false";
	exit();
}

$query  = "SELECT OrganizationID FROM subscriptions WHERE SubscriptionID= '".$_sub_id."'";

$rows = mysqli_query($db_conx,$query);

if( mysqli_num_rows($rows) > 0)
{
	$row = mysqli_fetch_row($rows);
	$_OrgID = $row[0];
	$query = "INSERT INTO users ( OrganizationID, UserEmail, Password, UserType, FirstName, LastName, CellPhone) VALUES (".$_OrgID.",'".$_email."','".$_password."','Student','".$_name."','".$_surname."','".$_cell_num."')";
	$result = mysqli_query($db_conx, $query);
	if ( false===$result ) {
		echo "false";
	}
	else {
  	echo "true";
	}
}
else
{
	echo "false";
}

?>
