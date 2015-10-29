<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "joyfest";

$todir = "../img/";
$todir1="../img/";

$til =$_POST["gallery_title"];

$body =$_POST["gallery_description"];
$year=$_POST["gallery_date"];

$path=$todir.basename($_FILES['img']['name']);
$path1=$todir.$_FILES['img']['name'];
echo $path1;
         move_uploaded_file( $_FILES['img']['tmp_name'],$path1);
 
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
$sql="INSERT INTO images VALUES ('$til','$body','$path1',$year)";
 
 if (mysqli_query($conn, $sql)) {
 header('Location: admin_gallery.php');    

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 
mysqli_close($conn);
?>