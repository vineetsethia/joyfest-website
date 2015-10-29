<?php 
include("functiona.php");
$f = new functiona();
session_start();
$admin=0;
if(isset($_SESSION["admin"]))
	$admin=$_SESSION["admin"];

$sql = "select * from events order by eventid desc";
$result = $f->tabledata($sql);
//print_r($result);
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

  <div class="container">
		<?php
				foreach($result as $event){
					echo '
					<div class="card" >
						<img  style="width:20%;height:20%;" src="'.$event[3].'">
						<div style="float:right;">
						<h3>'.$event[1].'</h3>
						<p>'.$event[2].'</p>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-js="'.$event[2].'" class="btn btn-success">More Details</a>
						</div>

					</div>
					';

				}

		?>

    <div class="col-xs-6">
      <div class="row">
        <h2 align="center">Previous Events</h2>
        <div class="prev-events" style="width:100%;height:450px;overflow:auto;">
          <div class="card" >
            <img  style="width:40%;height:40%;" src="http://thumb7.shutterstock.com/display_pic_with_logo/524773/149992595/stock-photo-the-word-events-in-cut-out-magazine-letters-pinned-to-a-cork-notice-board-events-may-refer-to-news-149992595.jpg">
            <div style="float:right;">
            <h3 >Title of event</h3>
            <p>Brief description of Events</p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="btn btn-success">More Details</a>
            </div>

          </div>
          <div class="card" >
            <img style="width:40%;height:40%;" src="http://thumb7.shutterstock.com/display_pic_with_logo/524773/149992595/stock-photo-the-word-events-in-cut-out-magazine-letters-pinned-to-a-cork-notice-board-events-may-refer-to-news-149992595.jpg">
            <div style="float:right;">
            <h3 >Title of event</h3>
            <p>Brief description of Events</p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="btn btn-success">More Details</a>
            </div>

          </div>

          <div class="card" >
            <img style="width:40%;height:40%;" src="http://thumb7.shutterstock.com/display_pic_with_logo/524773/149992595/stock-photo-the-word-events-in-cut-out-magazine-letters-pinned-to-a-cork-notice-board-events-may-refer-to-news-149992595.jpg">
            <div style="float:right;">
            <h3 >Title of event</h3>
            <p>Brief description of Events</p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="btn btn-success">More Details</a>
            </div>

          </div>


        </div>

      </div>

    </div>

    <div class="col-xs-6">
      <h2 align="center">
          <div class="row">
          Upcomming Events</h2>
          <div class="upcomming-events" style="height:450px;overflow:auto;">
            <div class="card" >
            <img style="width:40%;height:40%;" src="http://thumb7.shutterstock.com/display_pic_with_logo/524773/149992595/stock-photo-the-word-events-in-cut-out-magazine-letters-pinned-to-a-cork-notice-board-events-may-refer-to-news-149992595.jpg">
            <div style="float:right;">
            <h3 >Title of event</h3>
            <p>Brief description of Events</p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="btn btn-success">More Details</a>
            </div>

          </div>
          <div class="card" >
            <img style="width:40%;height:40%;" src="http://thumb7.shutterstock.com/display_pic_with_logo/524773/149992595/stock-photo-the-word-events-in-cut-out-magazine-letters-pinned-to-a-cork-notice-board-events-may-refer-to-news-149992595.jpg">
            <div style="float:right;">
            <h3 >Title of event</h3>
            <p>Brief description of Events</p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="btn btn-success">More Details</a>
            </div>

          </div>
          </div>
        </div>


    </div>
    </div>

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


  </body>
</html>
