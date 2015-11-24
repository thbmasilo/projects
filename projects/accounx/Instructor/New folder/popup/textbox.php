<!DOCTYPE html>
<?php
$variable = "";
$variable1 = "";
$variable2 = "";
$variable3 = "";
$variable4 = "";
	if(isset($_POST['submitProfile'])){
		$variable = "0";
		$variable1 = "1";
		$variable2 = "2";
		$variable3 = "3";
	$variable4 = "4";
	if(1==2)
	{
	
			
		echo '<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Here i am</h2>
		<a class="close" href="#">×</a>
		<div class="content">
			Thank to pop me out of that button, but now im done so you can close this window.
		</div>
	</div>
</div>';
	}}
?>
<html>
<head>
  <link href="css.css" rel="stylesheet" />
</head>
<body>

<h1>Popup/Modal Windows without JavaScript</h1>
<div class="box">
	<a class="button" href="#popup1">Let me Pop up</a>
</div>
<form action="" method="POST" class="form-horizontal">
								<div class="form-group">
									<label><h3>Instructor</h3></label>
								</div>
								<div class="form-group">
									<label for="username" class="col-sm-2 control-label">User Email</label>
									<div class="col-sm-10">
									<input type="input" id="username" class="form-control" class="textfield"  name="useremail" value= '<?php echo $variable;?>' placeholder="Enter Text">
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
								<button id="submitProfile" name="submitProfile" type="submit" href="#popup1" class="btn btn-default">Save</button>
							</form>


</body>
</html>


