<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "joyfest";


$til =$_POST["article_head"];

$body =$_POST["article_body"];
 
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
$sql="INSERT INTO article VALUES (NULL,'$til','$body',CURRENT_TIMESTAMP)";
 
if (mysqli_query($conn, $sql)) {
    header('Location: admin_home.php');    

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 
mysqli_close($conn);
?>