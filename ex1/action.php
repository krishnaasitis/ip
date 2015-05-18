<?php 
         session_start(); 
         if(!$_SESSION['logged']){ 
             header("Location: login.php"); 
             exit; 
         } 
         ?>


<?php
 		include_once('db.php');
ini_set('display_errors','1');
 
		$id_test=$_SESSION['username'];
 		$id = null;
		$status = $_POST['status'];
 		$date = date('Y-m-d H:i:s', strtotime('+2 hour'));
		
		
		//$username_post = mysql_query("SELECT username FROM news.users WHERE users.username=status.username_post");
		
		$username_post = $_SESSION['username'];


// what can we do so that this id_users is an id from table users INNER JOIN users ON status.id_user=users.id
		//$id_users =  $test_id;


		if(mysql_query("INSERT INTO status VALUES('$id', '$status', '$date', '$username_post')"))
		  echo "Status posted, Click to forum menu again to see your status";
		else
		  echo "Insertion Failed";
		
?>