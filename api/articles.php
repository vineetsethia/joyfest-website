<?php
include("functiona.php");
$f = new functiona();
session_start();
$admin=0;
if(isset($_SESSION["admin"]))
	$admin=$_SESSION["admin"];

$sql = "select * from article order by article_id desc";
$result = $f->tabledata($sql);
//print_r($result);
function truncate($mytext,$id) {
    //Number of characters to show
    $chars = 200;
    $mytext = substr($mytext,0,$chars);
    $mytext = substr($mytext,0,strrpos($mytext,' '));
  //  $mytext = $mytext." <a href='read.php?id=$id'>read more...</a>";
    return $mytext;
}
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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



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

			<div class="wrapper">
			  <div class="wrapper_inner">
			    <!-- Gallery -->
			    <section class="gallery">
<?php
foreach($result as $article)
{
	echo '
	<section>
	<div class="card" >
	<div class="gallery_item">
		<!-- Gallery  item preview -->
		<span class="gallery_item_preview">


				<h3 align="center" style="font:red">'.$article[1].'</h3>
				<p>'.truncate($article[2],$article[0]).'</p>
				<a href="#" data-js="'.$article[0].'">Read More...</a>
				<br>

		<div data-lk="'.$article[0].'" class="gallery_item_full">
			<div class="box">
				<h3>'.$article[1].'</h3>
				<p>'.$article[2].'</p>
			</div>
		</div>
	</div>
	</div>
	</section>';

}
?>
</section>
</div>
</div>


  </div>


   <!-- Footer of the webpage-->
    <footer>
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <ul class="list-inline">
                          <li>
                              <a href="#">Home</a>
                          </li>
                          <li class="footer-menu-divider">&sdot;</li>
                          <li>
                              <a href="#about">About</a>
                          </li>
                          <li class="footer-menu-divider">&sdot;</li>
                          <li>
                              <a href="#services">Services</a>
                          </li>
                          <li class="footer-menu-divider">&sdot;</li>
                          <li>
                              <a href="#contact">Contact</a>
                          </li>
                          <li class="footer-menu-divider">&sdot;</li>
                          <li>
                              <a href="devlopers.html">Members</a>
                          </li>
                          <li class="footer-menu-divider">&sdot;</li>
                          <li>
                              <a href="devlopers.html">Devlopers</a>
                          </li>
                      </ul>
                      <p class="copyright text-muted small">Copyright <a href="../html/login.html">&copy;</a> Joyfest, NIT Surat </p>
                  </div>
              </div>
          </div>
      </footer>

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
<script type="text/javascript" src="../js/jquery.js"></script>




  </body>
</html>