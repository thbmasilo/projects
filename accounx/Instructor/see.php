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


					$sql = "SELECT UserEmail, Password, FirstName, LastName, Cellphone FROM users WHERE UserID=16";
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

										$sql = "UPDATE users SET UserEmail='".$variablemail."', Password='".$variable1Password."', FirstName='".$variable2FirstName. "', LastName='".$variable3LastName."', Cellphone='".$variable4Cellphone."'  WHERE UserID=16";
										$result	 = $conn->query($sql);

										$sql = "SELECT UserEmail, Password, FirstName, LastName, Cellphone FROM users WHERE UserID=16";
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
?>
</table>
<html>
<head>

	<link href="c.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

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
	
	<script src="popup/dist/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="popup/dist/sweetalert.css">
	<script type="text/javascript">
		$(document).ready(function(){
		$('#menu a').each(function(){
			id = $(this).attr('href');
			id = id.substring(id.lastIndexOf('/'));
			id = id.substring(0,id.indexOf('.'));
			$(this).attr('rel',id);
		});
		$('#Organization').show();
		$('#menu a').click(function(e){
			e.preventDefault();
			$('.content').hide();
			$('#'+$(this).attr('rel')).show();
			location.hash = '#!/'+$(this).attr('rel');
			return false;
		});
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
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">The Tool</a></li>
            <li><a href="#">About The Tool</a></li>
          </ul>          
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Logout</a></li>          
          </form>
        </div>
      </div>
    </nav>
	
	<div id="container">
	
		<div id="sideMenu">
			<div id="menu">
				<ul class="menu">
					<li>Management Utility</li>
					<li><a href="Organization.html">Organization</a> </li>
					<li><a href="Instructor.html">Instructor</a></li>
					<li><a href="Subscription.html">Subscription</a></li>
				</ul>
				<ul class="menu">
					<li>Statistics</li>
					<li><a href="Statistics.html">Subscription</a> <span class="notification">4</span></li>
				</ul>
			</div>
		</div>
		
		<div id="content" class="text-muted">
			<div id="titleBar">
				<div id="profilePic">
					<img src="http://s3-us-west-2.amazonaws.com/s.cdpn.io/153917/profile/profile-512_1.jpg" />
				</div>
				<span class="controls activeControl">Admin</span>        
			</div>
			<div class="mainChart">
				<div id="Organization" class="content">
					<h1>Students</h1>
										
					<?php
				
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
					
					
					
				</div>
				
				<div id="Instructor" class="content">
					<div class="row">
						<div class="col-md-4">							
							<form action="" method="POST">
								<div class="form-group">
									<label><h3>Instructor</h3></label>
								</div>
								<div class="form-group">
									<label>First Name</label>
									<input type="input" id="fname" class="form-control" class="textfield"  name="firstname" value= '<?php echo $variable;?>' placeholder="Enter Text">
								</div>
								<div class="form-group">
									<label>Last Name</label>
									<input type="input" id="lname" class="form-control" class="textfield"  name="lastname" value= '<?php echo $variable1;?>' placeholder="Enter Text">
								</div>
								<div class="form-group">
									<label>Email address</label>
									<input type="input" id="username" class="form-control" class="textfield"  name="useremail" value= '<?php echo $variable2;?>' placeholder="Enter Text">
								</div>
								<div class="form-group">
									<label>Cell Phone</label>
									<input type="number" id="cellPhone" class="form-control" class="textfield"  name="cellPhone" value= '<?php echo $variable3;?>' placeholder="Enter Text">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" id="password" class="form-control" class="textfield"  name="password" value= '<?php echo $variable4;?>' placeholder="Enter Text">
								</div>
								<button id="submitProfile" name="submitProfile" type="submit" class="btn btn-default">Save</button>
							</form>
						</div>
						
						<div class="col-md-8">
							<form>
								<div class="form-group">
									<label><h3>Search</h3></label>
								</div>
							</form>
							<form class="form-inline">
								<div class="form-group">
									<label class="sr-only" for="txtInstructorSearchFormLastName">LName</label>
									<input type="password" class="form-control" id="txtInstructorSearchFormLastName" placeholder="Last Name">
								</div>
								<div class="form-group">
									<label class="sr-only" for="txtInstructorSearchFormFirstname">FName</label>
									<input type="password" class="form-control" id="txtInstructorSearchFormFirstname" placeholder="First Name">
								</div>
								<div class="form-group">
									<label class="sr-only" for="txtInstructorSearchFormEmail">Email address</label>
									<input type="email" class="form-control" id="txtInstructorSearchFormEmail" placeholder="Enter email">
								</div>
								<div class="form-group">
									<label class="sr-only" for="txtInstructorSearchFormInstitution">Institution</label>
									<input type="password" class="form-control" id="txtInstructorSearchFormInstitution" placeholder="Institution">
								</div> 
								<button type="submit" id="cmdInstructorSearchFormSearch" class="btn btn-default">Search</button>								
							</form>
						</div>						
					</div>
				</div>
				
				<div id="Subscription" class="content">
					<form>
						<div class="col-md-4">
							<div class="form-group">
								<label><h3>Subscription</h3></label>
							</div>
							<div class="form-group">
								<label>Organization</label>
								<input type="text" class="form-control" id="txtSubscriptionFormOrganisation" placeholder="Organisation Name">
							</div>
							<div class="form-group">
								<label>Start Date</label>
								<input type="date" class="form-control" id="txtSubscriptionFormStartDate" >
							</div>
							<div class="form-group">
								<label>End Date</label>
								<input type="date" class="form-control" id="txtSubscriptionFormEndDate">
							</div>
							<div class="form-group">
								<label>Status</label>
								<select class="form-control" id="slctSubscriptionFormStatus">
									<option value="">Select Status</option>
									<option value="">Active</option>
									<option value="">Inactive</option>
								</select>
							</div>								
							<button id="cmdSubscriptionSubmit" type="submit" class="btn btn-default">Save</button>
						</div>
					</form>
				</div>
				
				<div id="Statistics" class="content">
					Three content.
				</div>
			</div>
		</div>		
	</div>
</body>
</html>