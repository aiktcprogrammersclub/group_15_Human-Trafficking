<?php

include_once("db.php")
session_start();?>
<?php
	$uname = $_POST['name'];
	$pass = $_POST['pwd'];
	


	$sql = "SELECT count(*) FROM phplogin WHERE username='$uname' and password ='$pass'";

	#SELECT count(*) FROM phplogin WHERE(
	#username='".$uname."' and password ='".$pass."')";

	$query =mysql_query($sql);
	
	$result = mysql_fetch_array($query);

	if($result [0]>0)
	{
	echo "successfully Login!";
	$_SESSION['userName'] = $uname;
	echo "<br />Wellcome".$_SESSION['userName']."!";
	echo "<br /><a href ='index.html#section-register'>Sign Up</a>";
	echo "<br /><a href ='index.html#section-login'>Sign In</a>";
	echo "<br /><a href ='logout.php'>Logout</a>"; 
	if($_SESSION['username'])
	 {	echo "$_SESSION['username']";
	}
	else
	{
	echo "Login Failed";
	echo "<br /><a href ='index.html#section-register'>Sign Up</a>";
	echo "<br /><a href ='index.html#section-login'>Sign In</a>"; 
	}
?>
