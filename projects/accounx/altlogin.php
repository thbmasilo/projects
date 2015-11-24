<?php

session_start();
include 'connection.php';
include 'encryption.php';
mysqli_select_db($db_conx,$db);

if((!isset($_POST['password']))||(!isset($_POST['email']))){
	header("location:http://maganaprepaidmeter.co.za/accounx/index.php");
	exit();
}
//protectin against MySQL injection
$email = stripslashes($_POST['email']);
$password = stripslashes($_POST['password']);
$_email = encrypt_decrypt('encrypt', mysqli_real_escape_string($db_conx, $email));
$_password = encrypt_decrypt('encrypt', mysqli_real_escape_string($db_conx,$password ));


$query  = "SELECT UserID, OrganizationID, UserType, CONCAT(FirstName,' ',LastName) as name FROM users WHERE UserEmail = '".$_email."' AND Password = '".$_password."'";

$rows = mysqli_query($db_conx,$query);

if(mysqli_num_rows($rows) > 0)
{

	$row = mysqli_fetch_row($rows);
	$_UserType = $row[2];
	$_OrgID = $row[1];
	$_name = $row[3];
	$_userID = $row[0];
	if($_UserType === 'Administrator')
	{
		$_SESSION['login_user']=$_name;
		$_SESSION['id']= $_userID; // Initializing Session
	  echo "Administrator";
	}
	else
	{
		$SubscriptionQuery  = "SELECT subscriptions.EndDate FROM subscriptions INNER JOIN organization ON subscriptions.organizationID = organization.organizationID INNER JOIN users ON organization.organizationID = users.organizationID WHERE users.organizationID =".$_OrgID." LIMIT 1";
		$SubscriptionResult = mysqli_query($db_conx,$SubscriptionQuery);
		if(mysqli_num_rows($SubscriptionResult) > 0){
			while($SubscriptionRow = $SubscriptionResult->fetch_assoc()) {
				$SubscriptionEndDate = $SubscriptionRow['EndDate'];
				if(strtotime($SubscriptionEndDate) >= date('d,m,y')){
					if($_UserType === 'Student'){
						$_SESSION['login_user']=$_name;
						$_SESSION['id']= $_userID;// Initializing Session
						echo $_UserType;
					}elseif($_UserType === 'Instructor'){
						$_SESSION['login_user']=$_name; // Initializing Session
						$_SESSION['id']= $_userID;

						echo $_UserType;
					}
				}
				else
				{
					echo "false";
				}
			}
		}else{
			echo "false";
		}
	}
}
else
{
	echo "false";
}

?>
