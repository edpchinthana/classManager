<!--Security system-->
<?php
 $count=0;
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap2.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

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
	
	<!--Menu bar-->
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" ><a href="index.php">Home</a></li>
            <li role="presentation" ><a href="about.php">About</a></li>
            <li role="presentation" class="active"><a href="login.php">Login</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Login</h3>
      </div>

	<!--Body-->
	<div class="jumbotron">
        <p class="lead">Please enter username and password</p>
	<div>
	</div>
	<style type="text/css">
		.wrapperImage
		{
			position : fixed;
			top:90px;
			left:700px;
			width:340px;
			height:340px
		}
	</style>
		<form role="form" method="post" action="login.php">
			<img src="res/images/icon1.png" class="img-responsive  float-right col-xs-4"></img>
			<div class="form-group  col-xs-7">
				<label>Username</label><br>
				<input name="username" type="username" class="form-control" placeholder="Username">
			</div><br><br><br>
			<div class="form-group  col-xs-7">
				<label>Password</label><br>
				<input name="password" type="password" class="form-control" placeholder="Password">
				
			</div><br><br><br><br><br>
			
			<input type="submit" class="btn btn-warning col-lg-2 col-xs-12 col-md-2 col-sm-2 pull-right" value="Login"/>
			
		<!--php codes for checking the username and password-->
		<?php
			include('includes/database.php');
			session_start();
			if($_POST){
				//submitting values
				$username =$_POST['username'];
				$password =$_POST['password'];
				$count=0;
	
				//Create login query
				$query="SELECT password FROM admin where username='$username';"; 
				//Get results
				$result=$mysqli->query($query);
				//Check if the end of the results
				if($result->num_rows>0){
					//Loop through results
					while($row = $result->fetch_assoc()){
						if($row['password']==$password){
						$count=1;
					}
				}
				if($count==0){
					//Printing the error
					echo '<span style="color:red;">'."Incorrect username or password.".'</span>';	
				}else if($count==1){
					//If the username and password are matched then proceed to menu.php
					$count=3;
					header("Location:menu.php");
					}
				}
			else{
				//Printing the error
				echo '<span style="color:red;">'."Incorrect username or password.".'</span>';
			}
			}
			//Passing the count to next page-for security
			$_SESSION['varname']=$count;
		?><br><br>
		</form>
		<br><br><br><br>
    </div>    
	<!--Footer-->
      <footer class="footer">
	  <?php
	  echo $count;
	  ?>
        <p>&copy; 2019 Project02.</p>
      </footer>
    </div> 
  </body>
</html>
