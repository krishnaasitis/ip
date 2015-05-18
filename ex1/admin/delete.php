
<?php 
session_start(); 
if(!$_SESSION['logged']){ 
    header("Location: adminlogin.php"); 
    exit; 
} 
?>
<?php
		include_once('database.php');
		if( isset($_GET['clear']))
		{
			$id = $_GET['clear'];
			$sql = "DELETE FROM articles WHERE id='$id'";
			$res = mysql_query($sql) or die("Failed to delete".mysql_error());
			echo "<meta http-equiv='refresh' content='0;url=main.php'>";
		}
		
		


?>