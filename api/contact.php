<?php

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
// Selecting Database
$db = mysql_select_db("joyfest", $connection);
// SQL query to fetch information of registerd users and finds user match.
$name=$_POST["name"];
$comment=$_POST["comments"];
$email=$_POST["email"];
$query = mysql_query("insert into contact values(NULL,'$name','$email','$comment')", $connection);

$row = mysql_fetch_array($query); 

header("location: admin_users.php"); // Redirecting To Other Page

mysql_close($connection); // Closing Connection
?>