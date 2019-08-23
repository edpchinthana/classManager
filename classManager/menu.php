<?php
//Security system
session_start();
$count=$_SESSION['varname'];
if($count==0){
	header ("Location:login.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Menu</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap2.min.css">
    
  </head>
  <body>

	<!--Menu bar-->
    <div class="container">
		<div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="login.php">Logout</a></li>
          </ul>
        </nav>
       
      </div>
	  
	<style type="text/css">
		.wrapperImage
		{
			position : fixed;
			top:90px;
			left:500px;
			width:600px;
			height:314px
		}
		
		@media all and (max-width: 1000px) {
		#image02 {display: none;}
		}
		
	</style>
	
	<!--Body-->
      <div class="jumbotron">
	  
        <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menu</h1>
		
   <!--Buttons-->
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <div class="btn-group-vertical btn-group-lg ">
		
		<a class="btn btn-lg btn-success" href="add_records.php" role="button">Add Records</a>
		<br>
	
		<a class="btn btn-lg btn-success" href="edit_records.php" role="button">Edit Records</a>
		<br>

		<a class="btn btn-lg btn-success" href="view_records.php" role="button">View Records</a>
		<br> 
		
		<a class="btn btn-lg btn-success" href="view_records.php" role="button">Add Attendence Records</a>
		<br>
		
		<a class="btn btn-lg btn-success" href="view_records.php" role="button">View Attendence Summary</a>
		</div>
		<!--Importing the image-->

	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img id="image02" src="res/images/image02.jpg" style="width:50%"></img>
		<br><br>
      </div>
	

	<!--Footer-->
      <footer class="footer">
        <p>&copy; 2019 Project01.</p>
		<?php
	  echo $count;
	  ?>
      </footer>
    </div>
	<script src="js/jquery.min.js"></script>
	
	<script src="js/bootstrap.min.js"></script>
  </body>
</html>

