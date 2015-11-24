<?php
session_start();
if(isset($_SESSION['id']))
			{
				$loginID = $_SESSION['id'];
			}
			else
			{
				header("Location:../index.php");
				exit();
			}
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="icon" href="http://maganaprepaidmeter.co.za/accounx/pictures/title_pic.png" type="image/png">

	<link href="c.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<!--<meta http-equiv="refresh" content="5"> -->
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<style type="text/css">
		.content {
			display: none;
		}
	</style>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.js"></script>

	
  <script src="popup/jquery-2.1.3.min.js"></script>

  <!-- This is what you need -->
  <script src="popup/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="popup/dist/sweetalert.css">
	
	<script type="text/javascript">
		$(document).ready(function(){
			navTo = '#ViewStudent';
		$('#menu a').each(function(){
			id = $(this).attr('href');
			id = id.substring(id.lastIndexOf('/'));
			id = id.substring(0,id.indexOf('.'));
			$(this).attr('rel',id);
		});
		$(navTo).show();
		$('#menu a').click(function(e){
			e.preventDefault();
			$('.content').hide();
			$('#'+$(this).attr('rel')).show();
			location.hash = '#!/'+$(this).attr('rel');
			return false;
		});
			function isNumberKey(evt){
			var charCode = (evt.which) ? evt.which : event.keyCode
			if (charCode > 31 && (charCode < 48 || charCode > 57))
				return false;
				return true;
			}

	});
	</script>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AccounX</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar">
            <li><a href="../Instructor/index.php">Dashboard</a></li>
            <li><a href="../board/masterpage/bootstrap-slider.php">The Tool</a></li>
            <li><a href="../board/masterpage/about.html">About The Tool</a></li>
          </ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="../index.php">Logout</a></li>
          </form>
        </div>
      </div>
    </nav>

	<div id="container">

		<div id="sideMenu">
		<div id="titleBar">

					<img src="images/accounxlogo.jpg" width="150px" />

			</div>

			<div id="menu">
				<ul class="menu">
					<li><a href="ViewStudent.html" >View Student</a> </li>
					<li><a href="InstructorProfile.html" >Instructor Profile</a></li>
				</ul>
			</div>
		</div>

		<div id="content" class="text-muted">
			<div id="titleBar">
				<div id="profilePic">
					<img src="images/spinning_pic.JPG" />
				</div>
				<span class="controls activeControl">Instructor</span>
			</div>
			<div class="mainChart">
				<div id="ViewStudent" class="content">
					<h1>Students</h1>

					<?php
					
					
			
					
					
				include 'encryption.php';
				$servername = "localhost";
			$username = "magana0_coachlab";
			$password = "coachlabdb12";
			$dbname = "magana0_coachlabdb";
			
			
			
				$conn = new mysqli($servername, $username, $password, $dbname);

				if ($conn->connect_error) {
				 die("Connection failed: " . $conn->connect_error);
				}

				$Xsql = "SELECT OrganizationID FROM users WHERE UserID=".$loginID;
					$Xresult = $conn->query($Xsql);

					$Xrow = $Xresult->fetch_assoc();

					//$sql = "SELECT UserID, FirstName, LastName, UserEmail,UserType, CellPhone FROM users WHERE UserType='Student' AND OrganizationID=".$Xrow["OrganizationID"];

					$sql = "SELECT UserID, FirstName, LastName, UserEmail,UserType, CellPhone FROM users WHERE UserType='Student' AND OrganizationID=".$Xrow["OrganizationID"];;
					$result = $conn->query($sql);
						if ($result->num_rows > 0) {

						echo "<table class='table'><tr><th id='tableTd'>Name</th><th>Surname</th>  <th>Email</th><th>Contact No.</th><th></th><th>Delete</th></tr><tbody>";
							// output data of each row

							while($row = $result->fetch_assoc()) {
								$test = encrypt_decrypt('decrypt',$row["FirstName"]);
								echo "<tr><td id='tableTd'>" .encrypt_decrypt('decrypt',$row["FirstName"]). "</td><td id='tableTd'>" . encrypt_decrypt('decrypt',$row["LastName"]). "</td>  <td> " . encrypt_decrypt('decrypt',$row["UserEmail"]). "</td><td>" . encrypt_decrypt('decrypt',$row["CellPhone"]). "</td><td>". encrypt_decrypt('decrypt',$row["UserType"]);
								echo "<td><form action='".$_SERVER['PHP_SELF']."' method='post'> <input type='hidden' id='UserID' name='UserID' value='$row[UserID]' /> <input type='submit' name='formDelete' id='formDelete' value='Delete'/></form></td></tr>";

									}
						echo "</tbody></table>";
						} else {
							 echo "0 results";
						}

				$conn->close();


					if(isset($_POST['formDelete'])){
					if(isset($_POST['UserID']) && !empty($_POST['UserID'])){

					$conn = new mysqli($servername, $username, $password, $dbname);

					$quoteid = $_POST['UserID'];

					$result = $conn->query("DELETE FROM users WHERE UserID=".$quoteid);
					
					echo '<script type="text/javascript">
							$(document).ready(function(){
								swal( "Student Deleted Successfully!");
								});window.location.href = window.location.href;
						</script>';
						
						//header("Location: http://www.google.com");
					
		}
					}


		?>

		
		<?php

			/*include 'encryption.php';*/
			$servername = "localhost";
			$username = "magana0_coachlab";
			$password = "coachlabdb12";
			$dbname = "magana0_coachlabdb";
			$variable='';
			
			
			
			if(isset($_SESSION['id']))
			{
				$loginID = $_SESSION['id'];
			}
			else
			{
				header("../index.php");
				exit();
			}
				$conn = new mysqli($servername, $username, $password, $dbname);


				if (!$conn->connect_error) {
				//


					$sql = "SELECT UserEmail, Password, FirstName, LastName, CellPhone FROM users WHERE UserID=".$loginID;
					$result = $conn->query($sql);


					while($row = $result->fetch_assoc()) {
								 $variable =  encrypt_decrypt('decrypt',$row["UserEmail"]);
								 $variable1 = encrypt_decrypt('decrypt', $row["Password"]);
								 $variable2 = encrypt_decrypt('decrypt',$row["FirstName"]);
								 $variable3 = encrypt_decrypt('decrypt',$row["LastName"]);
								 $variable4 = encrypt_decrypt('decrypt',$row["CellPhone"]);
								 $variable4 = encrypt_decrypt('decrypt',$row["CellPhone"]);

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
								$variable4Cellphone = $_POST['cellPhone'];

								$variablemail = encrypt_decrypt('encrypt',$variablemail);
								$variable1Password = encrypt_decrypt('encrypt',$variable1Password);
								$variable2FirstName = encrypt_decrypt('encrypt',$variable2FirstName);
								$variable3LastName = encrypt_decrypt('encrypt',$variable3LastName);
								$variable4Cellphone = encrypt_decrypt('encrypt',$variable4Cellphone);

								if (!$conn->connect_error) {

										$sql = "UPDATE users SET UserEmail='".$variablemail."', Password='".$variable1Password."', FirstName='".$variable2FirstName. "', LastName='".$variable3LastName."', Cellphone='".$variable4Cellphone."'  WHERE UserID=".$loginID;
										$result	 = $conn->query($sql);

										$sql = "SELECT UserEmail, Password, FirstName, LastName, Cellphone FROM users WHERE UserID=".$loginID;
										$result = $conn->query($sql);

										
										while($row = $result->fetch_assoc()) {
													 $variable =  encrypt_decrypt('decrypt',$row["UserEmail"]);
													 $variable1 = encrypt_decrypt('decrypt',$row["Password"]);
													 $variable2 = encrypt_decrypt('decrypt',$row["FirstName"]);
													 $variable3 = encrypt_decrypt('decrypt',$row["LastName"]);
													 $variable4 = encrypt_decrypt('decrypt',$row["Cellphone"]);
												echo '<script type="text/javascript">
												$(document).ready(function(){
													swal("", "'.$variable2.' was updated successfully!", "success");
												});
											</script>';
														}
								 }
							}
		$conn->close();
?>


				</div>

				<div id="InstructorProfile" class="content">
					<div class="row">
						<div class="col-md-8">
							<form action="index.php" method="POST" class="form-horizontal">
								<div class="form-group">
									<label><h3>Instructor</h3></label>
								</div>
								<div class="form-group">
									<label for="username" class="col-sm-2 control-label">User Email</label>
									<div class="col-sm-10">
									<input type="email" id="username" class="form-control" class="textfield"  name="useremail" value= '<?php echo $variable;?>' placeholder="Enter Text">
									</div>
								</div>
								<div class="form-group">
									<label for="password" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-10">
									<input type="password" id="password" class="form-control" class="textfield"  name="password" value= '<?php echo $variable1;?>' placeholder="Enter Text">
									</div>
								</div>
								<div class="form-group">
									<label for="Fname" class="col-sm-2 control-label">First Name</label>
									<div class="col-sm-10">
									<input type="text" id="Fname" class="form-control" class="textfield"  name="firstname" value= '<?php echo $variable2;?>' placeholder="Enter Text">
									</div>
								</div>
								<div class="form-group">
									<label for="Lname" class="col-sm-2 control-label">Last Name</label>
									<div class="col-sm-10">
									<input type="text" id="Lname" class="form-control" class="textfield"  name="lastname" value= '<?php echo $variable3;?>' placeholder="Enter Text">
									</div>
								</div>
								<div class="form-group">
									<label for="cellPhone" class="col-sm-2 control-label">CellPhone</label>
									<div class="col-sm-10">
									<input type="number" id="cellPhone" class="form-control" class="textfield"  name="cellPhone" value= '<?php echo $variable4;?>' placeholder="Enter Text" onkeypress="isNumberKey(event)">
									</div>
								</div>
								<button id="submitProfile" name="submitProfile" type="submit"  class="btn btn-default">Save</button>
							</form>
						</div>
					</div>
				</div>





				<div id="Statistics" class="content">
					Three content.
				</div>
			</div>
		</div>
	</div>
</body>
</html>