<?php 
session_start(); 
if(!$_SESSION['logged']){ 
    header("Location: adminlogin.php"); 
    exit; 
} 
?>
<?php
		include_once('database.php');
		
		$id = null;
		$title = $_POST['title'];
		//$date = date('Y-m-d H:i:s');
		//$date = date('Y-m-d');
		$date = date('Y-m-d H:i:s', strtotime('+2 hour'));
		$description = $_POST['description'];
		$image = $_POST['image'];
		if(mysql_query("INSERT INTO articles VALUES('$id', '$title', '$date','$description', '$image')"))
			echo "Successfully Inserted";
		else
			echo "Failed to insert values";
			
?>		