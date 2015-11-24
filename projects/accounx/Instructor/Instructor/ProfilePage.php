<?php
			include 'encryption.php';
			$servername = "localhost";
			$username = "root";
			$password = "coachlab";
			$dbname = "coachlabdb";
			$variable='';

				$conn = new mysqli($servername, $username, $password, $dbname);


				if (!$conn->connect_error) {
				//


					$sql = "SELECT UserEmail, Password, FirstName, LastName, Cellphone FROM users WHERE UserID=28";
					$result = $conn->query($sql);


					while($row = $result->fetch_assoc()) {
								 $variable =  encrypt_decrypt('decrypt',$row["UserEmail"]);
								 $variable1 = encrypt_decrypt('decrypt', $row["Password"]);
								 $variable2 = encrypt_decrypt('decrypt',$row["FirstName"]);
								 $variable3 = encrypt_decrypt('decrypt',$row["LastName"]);
								 $variable4 = encrypt_decrypt('decrypt',$row["Cellphone"]);

									}

				echo "</table>";

				}
				else {
					 echo "0 results";
					 die("Connection failed: " . $conn->connect_error);
					 echo("Outside");
				}


				if(isset($_POST['submitProfile']))
							{
								$variablemail = $_POST['useremail'];
								$variable1Password = $_POST['password'];
								$variable2FirstName = $_POST['firstname'];
								$variable3LastName = $_POST['lastname'];
								$variable4Cellphone = $_POST['cellphone'];

								$variablemail = encrypt_decrypt('encrypt',$variablemail);
								$variable1Password = encrypt_decrypt('encrypt',$variable1Password);
								$variable2FirstName = encrypt_decrypt('encrypt',$variable2FirstName);
								$variable3LastName = encrypt_decrypt('encrypt',$variable3LastName);
								$variable4Cellphone = encrypt_decrypt('encrypt',$variable4Cellphone);

								if (!$conn->connect_error) {

										$sql = "UPDATE users SET UserEmail='".$variablemail."', Password='".$variable1Password."', FirstName='".$variable2FirstName. "', LastName='".$variable3LastName."', Cellphone='".$variable4Cellphone."'  WHERE UserID=28 ";
										$result	 = $conn->query($sql);

										$sql = "SELECT UserEmail, Password, FirstName, LastName, Cellphone FROM users WHERE UserID=28";
										$result = $conn->query($sql);


										while($row = $result->fetch_assoc()) {
													 $variable =  encrypt_decrypt('decrypt',$row["UserEmail"]);
													 $variable1 = encrypt_decrypt('decrypt',$row["Password"]);
													 $variable2 = encrypt_decrypt('decrypt',$row["FirstName"]);
													 $variable3 = encrypt_decrypt('decrypt',$row["LastName"]);
													 $variable4 = encrypt_decrypt('decrypt',$row["Cellphone"]);

														}

								 }
							}
		$conn->close();


		echo '
<!DOCTYPE html>



<head>
<link rel="stylesheet" type="text/css" href="css/InstructorStyles.css"/>

<script>


</script>




</head>




<title></title>

<body id="userbody">

<section id="Profilesection">

		<circle>
			<img src="pictures/Logo.jpg"  height="40" width="100" ></img>
		</circle>

		<div class="example">
		<div class="pmenuholder">
			<ull class="menu slide">
				<lli><a href="Home.php" class="yellow">Home</a></lli>
				<lli><a href="ViewStudents.php" class="orange">View Students</a></lli>
				<lli><a href="ProfilePage.php" class="red">Edit Profile</a></lli>

			</ull>
	<div class="back"></div>
		<div class="shadow"></div>
		</div>
		</div>
    <div style="clear:both"></div>
	</div>


	<h1> Instructor Profile </h1>
	<table>
	<form action="" method="POST">

		<tr>
		<th lass="textlabel">User Email:</th>
		<td><input type="input" id="username" class="textfield"  name="useremail" value= '.$variable.' placeholder="Enter Text"></td>
		</tr>

		<tr >
		<th class="textlabel">Password:</th>
		<td><input type="input" id="password" class="textfield" name="password" value= '.$variable1.' placeholder="Enter Text"></input></td>
		</tr>

		<tr>
		<th class="textlabel">First Name:</th>
		<td><input type="input" id="Fname" class="textfield" name="firstname" value= '.$variable2.'  ></input></td>
		</tr>

		<tr>
		<th class="textlabel">Last Name:</th>
		<td><input type="input" id="Lname" class="textfield" name="lastname"  value= '.$variable3.' placeholder="Enter Text"></input></td>
		</tr>

		<tr>
		<th class="textlabel">Cellphone:</th>
		<td><input type="input" id="cellPhone" class="textfield"  name="cellphone" value= '.$variable4.' Placeholder ="Enter Text"></input></td>
		</tr>

		<tr>
		<th></th>
		<td><button type="submit" id="UpdateButton" name="submitProfile">Update Profile</button></td>
		</tr>


	</tr>
	</form>

	</table>

</section>


</body>

<html>';

?>
