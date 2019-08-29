
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap2.min.css">

  <body>

	<!--Menu bar-->
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="about.php">About</a></li>
            <li role="presentation"><a href="login.php">Login</a></li>
          </ul>
        </nav>
        <h2><span style="color : #239B56;text-decoration : underline;">Oasis Institiute</span></h2>
      </div>
	<!--Body-->
      <div class="jumbotron">
        
		<!--Carousel-->
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="res/images/slide01.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
          <p><span style="color : #F4D03F;"> Welcome to Oasis Institute official site</span></p>
        </div>
			</div>
			<div class="carousel-item">
				<img src="res/images/slide02.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="res/images/slide03.jpg" class="d-block w-100" alt="...">
			</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<div class="d-flex justify-content-center">
        <p class="lead">Please login to access the database</p>
		</div>
		<div class="d-flex justify-content-center">
		<a class="btn btn-lg btn-primary" href="login.php" role="button">Login</a></div>
		<br><br>
	
      </div>
	  	
	  	
	  
	
	<!--Footer-->
      <footer class="footer">
        <p>&copy; 2019 Project02.</p>
      </footer>

    </div>  
		<!--Javascript CDN-->
	<script src="js/jquery.min.js"></script>
	
	<script src="js/bootstrap.min.js"></script>
  </body>
</html>
