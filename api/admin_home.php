<?php
include("functiona.php");
$f = new functiona();
session_start();
$admin=0;
if(isset($_SESSION["admin"]))
	{
		$admin=$_SESSION["admin"];
		echo "true";
	}
	function truncate($mytext,$id) {
	    //Number of characters to show
	    $chars =30 ;
	    $mytext = substr($mytext,0,$chars);
	    $mytext = substr($mytext,0,strrpos($mytext,' '));
	  //  $mytext = $mytext." <a href='read.php?id=$id'>read more...</a>";
	    return $mytext;
	}



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
	<body style="overflow:auto;">
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
					<?php

							if($_SESSION["admin"]){

									echo '<a href="logout.php"><span class="glyphicon glyphicon-off" style="color:white" aria-hidden="true"></span></a>';
							}

					 ?>
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
              <li class="active"><a href="#">Articles</a></li>
              <li><a href="admin_gallery.php">Gallery</a></li>
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
            Articles

          </h1>

        <div class="row placeholders">
            <h3>Upload an article</h3>

            <form action="uploadapost.php" method="post" class="form col-md-12 center-block">
  		  <div class="form-group">
                <input type="text" name="article_head" class="form-control input-lg" placeholder="Title of the article" required>
              </div>
              <div class="form-group">

  						<textarea type="text" name="article_body" rows="10" class ="form-control input-lg ckeditor" id="editor1" placeholder="Body of the article" required ></textarea>
    <script type="text/javascript">
      CKEDITOR.replace('editor1');
    </script>
  						</div>

  			<div class="form-group">
                <input type="submit" name="cmd" value="Upload article" class="btn btn-primary btn-xl btn-block">
                <
  			  <span><br></span>
              </div>
            </form>






        </div>

          <hr>

          <h2 ><a href="articles.php">All Articles</a></h2>
          <div class="table-responsive">
            <?php
							$sql="select * from article";
							$result= $f->tabledata($sql);

							echo '
										<div class="container">
										<div class="table-responsive">

										<table class="table">
										<tr>
											<th>ArticeID</th><th>Article_Title</th>
											<th>Article_body </th><th>Article_date</th>
											<th></th>

										</tr>';

							foreach($result as $article){


									echo '<tr>
										<td>'.$article[0].'</td>
										<td>'.$article[1].'</td>
										<td>'.$article[2].'</td>
										<td>'.$article[3].'</td>
                    <td><a href="deletepost.php?id='.$article[0].'">Delete</a> </td>';


							}
							echo '		  </table>
									</div>
								</div>

									';



							?>
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
