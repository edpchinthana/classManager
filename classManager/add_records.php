<?php
include('includes/database.php');
//Security system
session_start();
$count=$_SESSION['varname'];
if($count==0){
	header ("Location:login.php");
}
if($_POST){
	$nwi=$_POST['nwi'];
	$name=$_POST['name'];
	$birth_year=$_POST['birth_year'];
	$birth_month=$_POST['birth_month'];
	$birth_day=$_POST['birth_day'];
	$al=$_POST['al'];
	$school=$_POST['school'];
	$email=$_POST['email'];
	$number=$_POST['cnumber'];
	$district=$_POST['district'];
	
	//Create the insert query
	$query="INSERT INTO `student` (`name_with_initials`, `name`, `birth_year`, `birth_month`, `birth_day`, `district`, `school`, `al_index`, `email_address`, `contact_number`) VALUES ('$nwi', '$name', '$birth_year', '$birth_month', '$birth_day', '$district', '$school', '$al', '$email', '$number');";
	
	//Run query
	$mysqli->query($query);
	$message = 'Your record was submitted';
	echo "<script type='text/javascript'>alert('$message');</script>";
}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Records</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap2.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<!--menu bar-->
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="menu.php">Menu</a></li>
            <li role="presentation" class="active" ><a href="login.php">Logout</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Add Records</h3>
      </div>

<!--body-->
    <div class="jumbotron">
        <h4><b><span style="color:#DF5537;"><u>Enter student's information</u></span></b></h4>
		<br>
<!--Input fields-->		
	<form role="form" method="post" action="add_records.php">
		<div class="form-group">
			<label>Name with initials :</label>
			<input name="nwi" type="text" class="form-control" placeholder="Name with initials">
		</div>
		<div class="form-group">
			<label>Name :</label>
			<input name="name" type="text" class="form-control" placeholder="Name">
		</div>
		
		<div class="form-group"> 
			<fieldset>
			<!--Importing birth years-->
				&nbsp;&nbsp;&nbsp;
				<label>Birth year :</label>
				<select name = "birth_year">
					<option value="0">Select</option>
					<?php
					$query="SELECT * FROM birth_year;";
					$result1=$mysqli->query($query);
					while($rows = $result1->fetch_assoc()){
						$id1=$rows['id'];
						$birth_year=$rows['year'];
						echo "<option value='$id1'>$birth_year</option>";
					}
					?>
				</select>
			<!--importing birth months-->
				&nbsp;&nbsp;&nbsp;
				<label>Birth month :</label>
				<select name = "birth_month">
					<option value = "0">Select</option>
					<?php
				
					$query="SELECT * FROM birth_month;";
					$result2=$mysqli->query($query);
					while($rows = $result2->fetch_assoc()){
						$id2=$rows['id'];
						$birth_month=$rows['month'];
						echo "<option value='$id2'>$birth_month</option>";
					}
					
					
					?>
				</select>
			<!--importing birth days-->
				&nbsp;&nbsp;&nbsp;
				<label>Birth day :</label>
				<select name = "birth_day">
					<option value = "0">Select</option>
					<?php
					$count1=1;
					while($count1<32){
						echo "<option value='$count1'>$count1</option>";
						$count1++;
					}
					?>
				</select>
				<br><br>
			<!--Importing schools-->
				&nbsp;&nbsp;&nbsp;
				<label>School :</label>
				<select id="school"name = "school">
					<option value = "0">Select</option>
					<?php
					$query="SELECT * FROM school;";
					$result3=$mysqli->query($query);
					while($rows = $result3->fetch_assoc()){
						$id3=$rows['id'];
						$school=$rows['school_name'];
						echo "<option value='$id3'>$school</option>";
					}
					?>
				</select>
			<!--This is for refresh option-->
				
			<!--To add new schools-->
				&nbsp;&nbsp;&nbsp;
				<a class="btn btn-default" href="add_school.php" target="_blank" role="button">Add a school</a>
				<a class="btn btn-warning" href="add_records.php" role="button">Refresh</a>

			
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<!--Importing districts-->
				<label>District :</label>
				<select name = "district">
					<option value = "0">Select</option>
					<?php
					$query="SELECT * FROM districts;";
					$result4=$mysqli->query($query);
					while($rows = $result4->fetch_assoc()){
						$id4=$rows['id'];
						$district=$rows['district'];
						echo "<option value='$id4'>$district</option>";
					}
					?>
				</select>
			</fieldset>
		</div>
		
		<div class="form-group">
			<label>A/L Index number :</label>
			<input name="al" type="number" class="form-control" placeholder="A/L index number">
		</div>
		<div class="form-group">
			<label>Email Address :</label>
			<input name="email" type="email" class="form-control" placeholder="Email address">
		</div>
		<div class="form-group">
			<label>Contact Number :</label>
			<input name="cnumber" type="number" class="form-control" placeholder="Contact number">
		</div>
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" class="btn btn-default" value="Reset"/>
		&nbsp;&nbsp;&nbsp;
		<input class="btn btn-warning" type="submit" value="Submit"/> 
		
	</form>
    </div>

    
<!--footer-->
      <footer class="footer">
        <p>&copy; 2019 Project01.</p>
      </footer>
    </div>

    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
