<?php


			include 'encryption.php';
			$servername = "localhost";
			$username = "root";
			$password = "coachlab";
			$dbname = "coachlabdb";

			if(isset($_SESSION['id']))
			{
				$loginID = $_SESSION['id'];
			}
			else
			{
				header("location:http://localhost/accounx/index.php");
				exit();
			}

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
				 die("Connection failed: " . $conn->connect_error);
				}
				$OrgID='';


				$sql = "SELECT a.FirstName, a.LastName, b.RegistrationID FROM users a, subscriptions b WHERE a.OrganizationID = b.OrganizationID AND a.UserID=".$loginID;



					//$sql = "SELECT FirstName, LastName,OrganizationID FROM users WHERE UserID=28";
					$result = $conn->query($sql);
						if ($result->num_rows > 0) {

							// output data of each row
							while($row = $result->fetch_assoc()) {
								$name = encrypt_decrypt('decrypt',$row["FirstName"])." ".encrypt_decrypt('decrypt',$row["LastName"]);//Shows the current logged in instructor name

								}
				echo "</table>";
				} else {
					 echo "0 results";
				}


					$result = $conn->query($sql);
						if ($result->num_rows > 0) {
						//echo "<table><tr><th>Name</th><th>Surname</th><th>Organization ID</th></tr>";
							// output data of each row
							while($row = $result->fetch_assoc()) {
								//echo "<tr><td>" . $row["FirstName"]. "</td><td>" . $row["LastName"]. "</td><td> " . $row["OrganizationID"];
								$FName = encrypt_decrypt('decrypt',$row["FirstName"]);
								$LName = encrypt_decrypt('decrypt',$row["LastName"]);
								$OrgID = encrypt_decrypt('decrypt',$row["RegistrationID"]);
							}
				echo "</table>";
				} else {
					 echo "0 results";
				}


		$conn->close();

		echo'

<!DOCTYPE html>

<head>
<link rel="stylesheet" type="text/css" href="css/InstructorStyles.css"/>
<link rel="stylesheet" href="css/Calendarstyle.css">
<link rel="stylesheet" type="text/css" href="css/tablestyle.css"/>
<!--<link rel="stylesheet" type="text/css" href="css/CalendarStyle.css"-->
</head>

<title></title>
<body id="userbody">
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


	<h1> Welcome to the Instructor Portal </h1>
		<h1> '.$name.' <h1>


	  <table>
	<form action="">

				<table>
				<th> Name </th> <th> Surname </th> <th> Registration ID </th>
					<tr>
						<td>' .$FName. '</td>
						<td>' .$LName. '</td>
						<td>' .$OrgID. '</td>
					</tr>
				</table>






		</form>
	  </table>
    </table>




</section>


</body>

<html>';
?>
