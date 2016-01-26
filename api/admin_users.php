<?php
include("functiona.php");
$f = new functiona();
session_start();
$admin=0;
if(isset($_SESSION["admin"]))
	$admin=$_SESSION["admin"];

$sql = "select * from contact";
$result = $f->tabledata($sql);

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
              <li><a href="admin_gallery.php">Gallery</a></li>
              <li><a href="admin_events.php">Events</a></li>
              <li class="active"><a href="#">User</a></li>
            </ul>


        </div><!--/span-->

        <div class="col-sm-9 col-md-10 main">

          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>


          <div class="row placeholders">

          </div>

          <hr>

          <h2 class="sub-header">Messages</h2>
          <?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "joyfest";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$re="select * from contact order by request_id desc";
			echo "<div class=\"container\">  
  <table class=\"table table-hover\">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
		<th>Message</th>
      </tr>
    </thead>
    <tbody>";
		
		$rs = mysqli_query($conn,$re);
while ($row=mysqli_fetch_array($rs))
	{
		$p=$row['name'];
	$p2=$row['email'];
	$p3=$row['message'];
	echo '<tr>
  <td>'.$p.'</td>
  <td>'.$p2.'</td>
  <td>'.$p3.'</td>
  <td><a href="deleteuser.php?id='.$row['name'].'">Delete</a> </td>
  </tr>';
	}
	echo "</tbody></table></div>";
?>



      </div><!--/row-->
	</div>
</div><!--/.container-->



	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/admin.js"></script>
	</body>
</html>
