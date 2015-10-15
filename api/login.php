<?php
//opening page
include("functiona.php");
session_start();
$f = new functiona();
//received values from form
if(isset($_POST["uname"])) $u_name=$_POST["uname"];
if(isset($_POST["password"])) $password=$_POST["password"];
if(isset($_POST["article_head"])) $article_head=$_POST["article_head"];
if(isset($_POST["article_body"])) $article_body=$_POST["article_body"];
if(isset($_POST["title"])) $title=$_POST["title"];
if(isset($_POST["content"])) $content=$_POST["content"];
if(isset($_POST["event_date"])) $date=$_POST["event_date"];
if(isset($_POST["email"])) $email=$_POST["email"];
if(isset($_POST["comment"])) $comment=$_POST["comment"];
if(isset($_POST["cmd"])) $cmd=$_POST["cmd"];
if($cmd=='Log In')
{
	if(!isset($u_name) || !isset($password)) 
	{
		header("Location: ../html/login.html");
	}
	else
	{
		$row=array();
		$sql = "Select admin_id, admin_password from login where admin_name = '$u_name'";
		$result = $f->tabledata($sql);
		$result = $result[0];
		$encrypted_password=md5($password);
		if($result[1]==$encrypted_password)
		{
			$_SESSION['admin'] = $row[0];			
   			header("Location: index.php");
		}
		else 
		{
			//$q="Wrong username or password.";
			//header("Location: ../html/login.html");
		}
	}
}

else if($cmd=='Upload article')
{
	$today = getdate();
	$date=$today[year]."-".$today[mon]."-".$today[mday];
	$sql = "insert into article values ('','$article_head','$article_body','$date')";
	$f->exe($sql);
	header("Location: index.php");
}
else if($cmd=='Create event')
{
	$sql = "insert into article values ('','$article_head','$article_body','$date')";
	$f->exe($sql);
	header("Location: index.php");
}
else if($cmd=='Create event')
{
	$path=$todir.basename($_FILES['img']['name']);
	$path1=$todir.$_FILES['img']['name'];
         move_uploaded_file( $_FILES['img']['tmp_name'],$path1);
	$sql = "insert into article values ('','$title','$path1','$content','$date')";
	$f->exe($sql);
	header("Location: index.php");
}
else if($cmd=='Comment')
{
	$sql = "insert into comment values ('','$u_name','$email','$comment')";
	$f->exe($sql);
	header("Location: index.php");
}
/*else if($cmd=='Save blog')
{
	if(!$_SESSION['log'])
	{
		header("Location: ../html/login.html");
	}
	$today = getdate();
	$date=$today[year]."-".$today[mon]."-".$today[mday];
	$sql = "select uname from user where userid=$userid";
	$uname = $f->tabledata($sql);
	$uh = $uname[0][0];
	$sql = "insert into blog values ('','$date','$uh','$bloghead','$blogbody','1')";
	$f->exe($sql);
	
	$sql="select max(blog_id) from blog";
	$temp=$f->tabledata($sql);
	$h = $temp[0][0];
	foreach($_FILES["img"]["tmp_name"] as $key=>$tmp_name)
	{
	    $imagename=$_FILES["img"]["name"][$key];
 	    $file_tmp=$_FILES["img"]["tmp_name"][$key];
		if(!file_exists("../img/".$imagename))
    	{
        	move_uploaded_file($file_tmp=$_FILES["img"]["tmp_name"][$key],"../images/$imagename");
	        $path = "../img/$imagename";
    	    $sql = "INSERT INTO image (image, blog_id) VALUES ('$path','$h')";
			$f->exe($sql);
        }	
    	else
    	{
        	$ext=end(explode(".",$imagename));
        	$filename=current(explode(".",$imagename));
        	$newFileName=$filename.time().".".$ext;
	        move_uploaded_file($file_tmp=$_FILES["img"]["tmp_name"][$key],"../images/".$newFileName);
    	    $path = "../img/$newFileName";
        	$sql = "INSERT INTO image (image, blog_id) VALUES ('$path','$h')";
			$f->exe($sql);
		}
	}
	header("Location: home1.php");
}
else if($cmd=='Edit blog')
{
	if(!$_SESSION['log'])
	{
		header("Location: ../html/login.html");
	}
	$sql = "update blog set values bloghead='$bloghead', body='$blogbody'";
	$f->exe($sql);
	
	header("Location: home1.php");
}

else if($cmd=='Update')
{
	$sql = "update user set uname='$u_name', email='$email', name='$name' where userid=$userid";
	$f->exe($sql);
	header("Location: home1.php");
}
else
{
	session_destroy();
	header("Location: home1.php");
}*/
?>
