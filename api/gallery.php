<?php
include("functiona.php");
$f = new functiona();
session_start();
$admin=0;
if(isset($_SESSION["admin"]))
	$admin=$_SESSION["admin"];

$yr=2015;
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Joyfest</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
<!--Css files-->

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/style1.css">
      <style>
         .navbar-default{
            background-color: blue;
         }
      </style>
    <!---->
  </head>

  <body>

    <nav class="navbar navbar-default" style="background-color:blue;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Joyfest</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav" >

	    <li><a href="index.php">Home</a></li>
        <li><a href="event.php">Events</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="articles.php">Articles</a></li>

      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
   
<div class="wrapper">
  <div class="wrapper_inner">
    <!-- Gallery -->
		<form method="post" id="report_filter" action="gallery.php" >
			<select name="name" onchange="document.getElementById('report_filter').submit();">

					
					<option value="2015">2015</option>
					<option value="2014">2014</option>
					<option value="2013">2013</option>
			<select>


	</form>
		<section class="gallery">

			<?php

				$yr=$_POST['name'];

				$sql = "select * from images where year=".$yr;
				$result = $f->tabledata($sql);

					echo '<h1>'.$yr.'</h1>';

					foreach($result as $item){
						echo '<div class="gallery_item">
							<!-- Gallery  item preview -->
							<span class="gallery_item_preview">
								<a href="#" data-js="1">
									<img src="'.$item[2].'" alt="" height="40px" width="40px" /><span>
									<h3>'.$item[0].'</h3>
									<p>'.$item[1].'</p>

									</span></a>        </span>
							<!-- Gallery  item full -->
							<div data-lk="1" class="gallery_item_full">
								<div class="box">
									<img src="'.$item[2].'" alt="" />
									<h3>'.$item[0].'</h3>
									<p>'.$item[1].'</p>
									</div>
							</div>
						</div>
';


					}
			?>

		</section>
		<hr>


  </div>
</div>
</body>
<!--Js files-->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="../js/imagenav.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript" src="../js/custom.js"></script>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="../js/index.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="../js/index1.js"></script>




  </body>
</html>
