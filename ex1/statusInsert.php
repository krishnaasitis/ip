<html>
   <head>
      <title>Status Insert</title>
      <head>
   </head>
   <body>
<?php 
session_start(); 
if(!$_SESSION['logged']){ 
    header("Location: login.php"); 
    exit; 
} 
?>
<?php
		include_once('db.php');
		
		$id = null;
		//$id_users = null;

		//$username = $_SESSION['username']
		$status = $_POST['status'];
		//$date = date('Y-m-d H:i:s');
		//$date = date('Y-m-d');
		$date = date('Y-m-d H:i:s', strtotime('+2 hour'));
		if(mysql_query("INSERT INTO status VALUES('$id', '$status', '$date')"))
			echo "Successfully Inserted";
		else
			echo "Failed to insert values";
			echo "<br />";
			
?>
<a href='index.php'>Click here to reach the main page</a><br/>
<p>And come back to our forum</p>
 <script src="script/redirect.js"></script>
</body>
</html>