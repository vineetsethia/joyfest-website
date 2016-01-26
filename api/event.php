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
      <link href='../css/rotating-card.css' rel='stylesheet' />
      <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

      <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
      <link rel="stylesheet" href="../css/style.css">
      <style>
         .navbar-default{
            background-color: blue;
         }
      </style>

  </head>

<body>
    <nav class="navbar navbar-default" style="background-color:blue;">
      <div class="container-fluid">
      <!--Brand and toggle get grouped for better mobile display -->
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
                echo '<div class="row">
          <div class="col-md-12 col-sm-6">
                  <div class="card-container manual-flip">
                      <div class="card">
                        <div class="front">
                          <div class="cover">
                              <img src="'.$event[3].'"/>
                          </div>
                          <div class="content">
                            <div class="main">
                                  <h3 class="name" >'.$event[1].'"</h3>
                            </div>
                            <div class="footer">
                                <button class="btn btn-simple" onclick="rotateCard(this)">
                                    <i class="fa fa-mail-forward"></i> Description
                                </button>
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">Joyfest</h5>
                            <h3 class="motto">'.$event[1].'"</h3>
                        </div> 
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Description</h4>
                                <p>'.$event[2].'</p>
  
                            </div>
                        </div>
                        <div class="footer">
                            <button class="btn btn-simple" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                <i class="fa fa-reply"></i> Back
                            </button>
                        </div>
                    </div> <!-- end back panel -->
                    </div> <!-- end card -->
      </div> <!-- end card-container -->
    </div>
            ';
          }
        ?>
        
        </div> 
        </div>

    </div>
    </div>
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
      <!--Js files-->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="../js/imagenav.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript" src="../js/custom.js"></script>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="../js/index.js"></script>


    <!-- files for rotate the card-->


<script src="../js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
  
<script type="text/javascript">
    $().ready(function(){
        $('[rel="tooltip"]').tooltip();
        
    });
    
    function rotateCard(btn){
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if($card.hasClass('hover')){
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
        }
    }
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46172202-4', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html>
