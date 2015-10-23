<?php
include("functiona.php");
$f = new functiona();
session_start();
$admin=0;
if(isset($_SESSION["admin"]))
	$admin=$_SESSION["admin"];

$sql = "select * from article";
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


				<link rel="stylesheet" href="../css/landing.css">




  </head>

  <body>
		<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
					<div class="container topnav">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand topnav" href="#">Joyfest</a>
									<?php
									if(isset($_SESSION["admin"])){
										echo '<a href="admin_home.php">Admin Panel</a>' ;
									}

									 ?>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav navbar-right">
											<li>
													<!--<a href="#about">About</a>-->
											</li>
											<li>
													<a href="#about">About</a>
											</li>
											<li>
													<a href="#contact">Contact</a>
											</li>
									</ul>
							</div>
							<!-- /.navbar-collapse -->
					</div>
					<!-- /.container -->
			</nav>


			<!-- Header -->
			<!--<a name="about"></a>-->
			<div class="intro-header">
					<div class="container">

							<div class="row">
									<div class="col-lg-12">
											<div class="intro-message">
													<h1>Joyfest</h1>
													<h3>NIT Surat</h3>
													<hr class="intro-divider">
													<ul class="list-inline intro-social-buttons">
															<li>
																	<a href="../api/gallery.php" class="btn btn-default btn-lg"> Gallery</a>
															</li>
															<li>
																<a href="../api/event.php" class="btn btn-default btn-lg"> Events</a>
															</li>
															<li>
																	<a href="../api/articles.php" class="btn btn-default btn-lg"> Articles</a>
															</li>
													</ul>
											</div>
									</div>
							</div>

					</div>
					<!-- /.container -->

			</div>
			<!-- /.intro-header -->

			<!-- Page Content -->

		<a  name="about"></a>
			<div class="content-section-a">

					<div class="container">
							<div class="row">
									<div class="col-lg-5 col-sm-6">
											<hr class="section-heading-spacer">
											<div class="clearfix"></div>
											<h2 class="section-heading">What is Joyfest?</h2>
											<p class="lead">Joy Fest is a national movement where students do acts of giving, and get together as one for the underprivileged.Colleges students, teachers, principals, and NGOs come together for a noble cause. 500,000 students will be part of the Largest Youth Movement. Volunteers in 20 cities and 500 colleges!</p>

									</div>
									<div class="col-lg-5 col-lg-offset-2 col-sm-6">
										<hr class="section-heading-spacer">
										<div class="clearfix"></div>
										<h2 class="section-heading">Our Aim</h2>
										<p class="lead">The main aim of JOYFEST, an initiative of JAM Magazine is to sensitise the youth to the issues related to the underprivileged and to connect to them at a human level. JOYFEST will bring together the youth of India in the spirit of the Joy of Giving.</p>

									</div>
							</div>

					</div>
					<!-- /.container -->

			</div>
			<!-- /.content-section-a -->
			<!--
			<div class="content-section-b">

					<div class="container">

							<div class="row">
									<div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
											<hr class="section-heading-spacer">
											<div class="clearfix"></div>
											<h2 class="section-heading">3D Device Mockups<br>by PSDCovers</h2>
											<p class="lead">Turn your 2D designs into high quality, 3D product shots in seconds using free Photoshop actions by <a target="_blank" href="http://www.psdcovers.com/">PSDCovers</a>! Visit their website to download some of their awesome, free photoshop actions!</p>
									</div>
									<div class="col-lg-5 col-sm-pull-6  col-sm-6">
											<img class="img-responsive" src="img/dog.png" alt="">
									</div>
							</div>

					</div>


			</div>
			-->
			<!-- /.content-section-b -->
			<a  name="contact"></a>
			<div class="content-section-a">

					<div class="container">

							<div class="row">
									<div class="col-lg-5 col-sm-6">
											<hr class="section-heading-spacer">
											<div class="clearfix"></div>
											<h2 class="section-heading">Where we Are???</h2>
											<p class="lead">This is the place we would me mostly would be conducting our activities...</p>
									</div>
									<div class="col-lg-5 col-lg-offset-2 col-sm-6">
											<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14883.097210042662!2d72.7855616!3d21.1613784!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x238a612304b01088!2sSardar+Vallabhbhai+National+Institute+of+Technology!5e0!3m2!1sen!2sin!4v1445519799867" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
							</div>

					</div>
					<!-- /.container -->

			</div>
			<!-- /.content-section-a -->

			<!--Contact form -->
			<div class="content-section-b">

					<div class="container">
						<hr class="section-heading-spacer">
						<div class="clearfix"></div>
						<h2 class="section-heading">Contact Us</h2>



						<form action="login.php" method="post" class="form col-md-12 center-block">
						<input type="text" class="form-control input-lg" name="uname" placeholder="Your name" required><br>
						<input type="text" class="form-control input-lg" name="email" placeholder="Your Email" required><br>
						<textarea name="comment" rows="3" class ="form-control input-lg ckeditor" id="editor1" placeholder="Comment here"></textarea><br>
						<input type="submit" name="cmd" class="btn btn-primary btn-xl btn-block" value="Submit">
						</form>

					</div>


			</div>

			<!--Contact form ends-->
			<!-- Footer -->
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
											</ul>
											<p class="copyright text-muted small">Copyright <a href="../html/login.html">&copy;</a>	Joyfest, NIT Surat </p>
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




  </body>
</html>
