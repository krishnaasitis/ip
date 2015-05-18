<?php
session_start();

if (isset($_POST['submit']))
	{
	$dbHost = "localhost";
	$dbUser = "root";
	$dbPass = "mypass";
	$dbDatabase = "admin";
	$db = mysql_connect($dbHost, $dbUser, $dbPass) or die("Error connecting to database.");
	mysql_select_db($dbDatabase, $db) or die("Couldn't select the database.");
	$usr = mysql_real_escape_string($_POST['username']);
	$pas = md5(mysql_real_escape_string($_POST['password']));
	$sql = mysql_query("SELECT * FROM admin_log  
        WHERE username='$usr' AND 
        password='$pas' 
        LIMIT 1");
	if (mysql_num_rows($sql) == 1)
		{
		$row = mysql_fetch_array($sql);
		session_start();
		$_SESSION['username'] = $row['username'];
		$_SESSION['logged'] = TRUE;
		header("Location: main.php");
		exit;
		}
	  else
		{

		// header("Location: adminlogin.php");

		echo "Wrong username or password.....<a href='adminlogin.php'>Try again</a>";
		exit;
		}
	}
  else
	{
	header("Location: adminlogin.php");
	exit;
	}

?>