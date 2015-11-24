<?php
// AJAX CALLS THIS CODE TO EXECUTE


	include 'connection.php';
	include 'encryption.php';
	$db_conx = mysqli_connect($host,$user,$pass);
	mysqli_select_db($db_conx,$db);

	if(!isset($_POST['e'])){
		header("location:http://maganaprepaidmeter.co.za/accounx/index.php");
		exit();
	}

	$e = encrypt_decrypt('encrypt',mysqli_real_escape_string($db_conx, $_POST['e']));

	$sql = "SELECT users.UserID, users.FirstName FROM users INNER JOIN organization ON users.organizationID = organization.organizationID INNER JOIN subscriptions ON organization.organizationID = subscriptions.organizationID WHERE users.UserEmail ='$e' AND subscriptions.Status=true";
	$query = mysqli_query($db_conx, $sql);

	if( mysqli_num_rows($query) > 0)
	{
		while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
			$id = $row["UserID"];
			$u = encrypt_decrypt('decrypt',$row["FirstName"]);
		}
		$email = mysqli_real_escape_string($db_conx, $_POST['e']);
		$emailcut = substr($email, 0, 4);
		$randNum = rand(10000,99999);
		$tempPass = "$emailcut$randNum";

		$enddate = date("d,m,Y"); //setting the expiry date for the link.


		error_reporting(E_ALL);
		require("PHPMailer_5.2.4/class.phpmailer.php");
		$mail = new PHPMailer();
		$mail->IsSMTP(); // set mailer to use SMTP
		$mail->SMTPDebug  = 2;
		$mail->From = "cowcash7@gmail.com";
		$mail->FromName = "ACCOUNX.COM";
		$mail->Host = "smtp.gmail.com"; // specif smtp server
		$mail->SMTPSecure= "ssl"; // Used instead of TLS when only POP mail is selected
		$mail->Port = 465; // Used instead of 587 when only POP mail is selected
		$mail->SMTPAuth = true;
		$mail->Username = "cowcash7@gmail.com"; // SMTP username
		$mail->Password = "cashcow123"; // SMTP password
		$mail->AddAddress("$email", "$u"); //replace myname and mypassword to yours
		$mail->AddReplyTo("cowcash7@gmail.com", "Cash Cow");
		$mail->WordWrap = 50; // set word wrap


		$mail->IsHTML(true); // set email format to HTML
		$mail->Subject = 'ACCOUNX.COM password reset';
		$mail->Body = '<h2>Hello '.$u.'</h2><p>This is an automated message from our site. If you did not initiate the Forgot Password process, please disregard this email.</p>
				<p>You indicated that you forgot your login password. We have generate a temporary password for you to log in with, please ensure that you change your password once you login with it.</p>
				<p>After you click the link below your password to login will be:<br /><b>'.$tempPass.'</b></p><p><a href="http://maganaprepaidmeter.co.za/accounx/savenewpass.php?u='.encrypt_decrypt('encrypt',$u).'&p='.encrypt_decrypt('encrypt',$tempPass).'&id='.encrypt_decrypt('encrypt',$id).'&d='.encrypt_decrypt('encrypt',$enddate).'">Click here now to apply the temporary password shown above to your account</a></p><p>If you do not click the link in this email, no changes will be made to your account.</p>';

			if($mail->Send())
			{
				return true;
			}
			else
			{
				return false;
			}
    } else {

		return false;
    }
    exit();

?>
