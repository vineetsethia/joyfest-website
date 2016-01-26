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
		<link href="../css/styles.css" rel="stylesheet">

		 <!-- Plugin CSS -->
		<link rel="stylesheet" href="../startbootstrap-creative-1.0.0/css/animate.min.css" type="text/css">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="../startbootstrap-creative-1.0.0/css/creative.css" type="text/css">

		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/normalize.css">
			<link rel="stylesheet" href="../css/style1.css">

		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

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
          <a class="navbar-brand" href="index.php">Home</a>
		      <a class="navbar-brand" href="admin_home.php">Admin Panel</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">

          </ul>
          <a href="admin_logout.php"><img src="../img/logout.png" class="navbar-right img-responsive" height="3%" width="3%" style="margin:2px;"></a>
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

						<form action="uploadgallery.php" enctype="multipart/form-data" method="post" class="form col-md-12 center-block">
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
	              <input type="file" name="img" class="form-control input-lg" >
	            </div>
				<div class="form-group">
	              <input type="year" name="gallery_date" class="form-control input-lg" placeholder="Year" >
	            </div>
				<div class="form-group">
	              <input type="submit" name="cmd" value="Insert" class="btn btn-primary btn-xl btn-block">


	            </div>
	          </form>

          </div>

          <hr>
          <h2 ><a href="galley.php">Gallery</a></h2>
          <div class="table-responsive">
            <?php
							$sql="select * from images order by year desc";
							$result= $f->tabledata($sql);

							echo '
										<div class="container">
										<div class="table-responsive">

										<table class="table">
										<tr>
											<th>Title</th><th>Description</th>
											<th>image path</th><th>Year</th>
											<th></th>

										</tr>';

							foreach($result as $article){


									echo '<tr>
										<td>'.$article[0].'</td>
										<td>'.$article[1].'</td>
										<td>'.$article[2].'</td>
										<td>'.$article[3].'</td>
                    <td><a href="deleteimage.php?id='.$article[0].'">Delete</a> </td>';


							}
							echo '		  </table>
									</div>
								</div>

									';



							?>
          </div>






      </div>
	</div>
</div>



	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/admin.js"></script>
	</body>
</html>
