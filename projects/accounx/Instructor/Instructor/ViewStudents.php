<!DOCTYPE html>

<head>
<link rel="stylesheet" type="text/css" href="css/InstructorStyles.css"/>
<link rel="stylesheet" type="text/css" href="css/tablestyle.css"/>
  <meta http-equiv="refresh" content="5" >
</head>
<title></title>

<body class='default'>


		<section>

				<circle>
					<img src="pictures/Logo.jpg"  height="40" width="100" ></img>
				</circle>


		<div class="example">
				<div class="menuholder">
					<ul class="menu slide">
						<li><a href="Home.php" class="yellow">Home</a>
						<li><a href="ViewStudents.php" class="orange">View Students</a>
						<li><a href="ProfilePage.php" class="red">Edit Profile</a></li>
						<!--<li><a href="ViewSubscriptions.html" class="yellow">Subsciption</a>-->

						<!--<li><a href="http://www.script-tutorials.com/" class="orange">Help</a>-->
				  </ul>
					<div class="back"></div>
					<div class="shadow"></div>
				</div>
				<div style="clear:both"></div>
		</div>


	<h1> Students List </h1>


	<?php
			include 'encryption.php';
			$servername = "localhost";
			$username = "root";
			$password = "coachlab";
			$dbname = "coachlabdb";

				$conn = new mysqli($servername, $username, $password, $dbname);

				if ($conn->connect_error) {
				 die("Connection failed: " . $conn->connect_error);
				}

					$sql = "SELECT UserID, FirstName, LastName, UserEmail, CellPhone, UserType FROM users";
					$result = $conn->query($sql);
						if ($result->num_rows > 0) {

						echo "<table><tr><th>Name</th><th>Surname</th><th>Email</th><th>Contact No.</th><th>User Type</th><th>Delete</th></tr>";
							// output data of each row

							while($row = $result->fetch_assoc()) {
								$test = encrypt_decrypt('decrypt',$row["FirstName"]);
								echo "<tr><td>" .encrypt_decrypt('decrypt',$row["FirstName"]). "</td><td>" . encrypt_decrypt('decrypt',$row["LastName"]). "</td><td> " . encrypt_decrypt('decrypt',$row["UserEmail"]). "</td><td>" . encrypt_decrypt('decrypt',$row["CellPhone"]). "</td><td>". encrypt_decrypt('decrypt',$row["UserType"]);
								echo "<td><form action='".$_SERVER['PHP_SELF']."' method='post'> <input type='hidden' id='UserID' name='UserID' value='$row[UserID]' /> <input type='submit' name='formDelete' id='formDelete' value='Delete'/></form></td></tr>";
								
							}
				echo "</table>";
				} else {
					 echo "0 results";
				}

		$conn->close();


			if(isset($_POST['formDelete'])){
			if(isset($_POST['UserID']) && !empty($_POST['UserID'])){

			$conn = new mysqli($servername, $username, $password, $dbname);

			$quoteid = $_POST['UserID'];

			$result = $conn->query("DELETE FROM Users WHERE UserID=".$quoteid);
}
			}


?>
</section>

</body>

<html>
