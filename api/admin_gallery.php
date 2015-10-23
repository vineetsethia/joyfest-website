<?php
include("functiona.php");
$f = new functiona();
session_start();
$admin=0;
if(isset($_SESSION["admin"]))
	$admin=$_SESSION["admin"];



?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Dashboard </title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="../css/admin_style.css" rel="stylesheet">
	</head>
	<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Joyfest Admin Panel</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">

          </ul>
          <!-- Optional Search -->
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        <!---->
        </div>
      </div>
</nav>

<div class="container-fluid">

      <div class="row row-offcanvas row-offcanvas-left">

         <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">

            <ul class="nav nav-sidebar">
              <li ><a href="admin_home.php">Articles</a></li>
              <li class="active"><a href="#">Gallery</a></li>
              <li><a href="admin_events.php">Events</a></li>
              <li ><a href="admin_users.php">User</a></li>
            </ul>


        </div><!--/span-->

        <div class="col-sm-9 col-md-10 main">

          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>

		  <h1 class="page-header">
            Gallery

          </h1>

          <div class="row placeholders">

						<form action="../api/login.php" method="post" class="form col-md-12 center-block">
			  <div class="form-group">
	              <input type="text" name="gallery_title" class="form-control input-lg" placeholder="Title" >
	            </div>
	            <div class="form-group">
	            <textarea type="text" name="gallery_description" rows="5" placeholder="Description" class ="form-control input-lg ckeditor" id="editor1" placeholder="Description" required ></textarea>
	  <script type="text/javascript">
	    CKEDITOR.replace('editor1');
	  </script></div>
	      Select image to upload:
	    		<div class="form-group">
	              <input type="file" class="form-control input-lg" name="img[]" accept="image/*" multiple>
	            </div>
				<div class="form-group">
	              <input type="year" name="gallery_date" class="form-control input-lg" placeholder="Year" >
	            </div>
				<div class="form-group">
	              <input type="submit" name="cmd" value="Insert" class="btn btn-primary btn-xl btn-block">
	              <!--<span class="pull-right"><a href="login.html">Log In</a></span><span><a href="startbootstrap-creative-1.0.0/index.html">Already Registered?</a></span>-->

	            </div>
	          </form>






          </div>

          <hr>

          <h2 class="sub-header">Section title</h2>
          <div class="table-responsive">

          </div>



      </div><!--/row-->
	</div>
</div><!--/.container-->



	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/admin.js"></script>
	</body>
</html>
