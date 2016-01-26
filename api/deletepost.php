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

 $id=$_REQUEST['id'];
 echo $id;
	$sql = "DELETE from article where article_id='$id'";

   if (mysqli_query($conn, $sql) ) {
    header('Location: admin_home.php');

   }
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


       mysqli_close($conn);

?>
