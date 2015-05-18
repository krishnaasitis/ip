<html>
   <head>
      <title>Modify</title>
      <head>
   </head>
   <body>
      <style type="text/css">
         #desc{
         width: 100%;
         height: 40px;
         }
         #title{
         width: 400px;
         height: 30px;
         }
      </style>
      <?php 
         session_start(); 
         if(!$_SESSION['logged']){ 
             header("Location: adminlogin.php"); 
             exit; 
         } 
         ?>
      <?php
         include_once('database.php');
         
         if( isset($_GET['edit']) )
         {
         	$id = $_GET['edit'];
         	$res= mysql_query("SELECT * FROM articles WHERE id='$id'");
         	$row= mysql_fetch_array($res);
         	//$row[0] = "date";      null is also undefined
         	//$row[1] = "title";
         	//$row[3] = "description";
         }
         if( isset($_POST['newTitle']) )
         {
         		$newTitle = $_POST['newTitle'];
         		$newDescription = $_POST['newDescription'];
         		$id       = $_POST['id'];
         		$newImage    = $_POST['newImage'];
         		$sql      = "UPDATE articles SET title='$newTitle', description='$newDescription', image='$newImage' WHERE id='$id'";
         		$res      = mysql_query($sql) or die("Could not update".mysql_error());
         		echo "<meta http-equiv='refresh' content='0;url=main.php'>";
         		
         }
         
         
         
         ?>
      <form id="myForm" action="modify.php" method="post">
         <p>Title: <input type="text" id="title" cols="1" rows="1" name="newTitle" value="<?php echo $row[1]?>"/><br /></p>
         <p>Description:  </p>
         <input type="text" id="desc" cols="3" rows="4" width="500px" name="newDescription" value="<?php echo $row[3]?>"/></p>
         <p>Image Path:  
         <div id="img" width="250"><input type="text" id="img" name="newImage" value="<?php echo $row[4]?>"/></div>
         </p>
         <p>Id: <input type="hidden" name="id" value="<?php echo $row[0]; ?>"/><br /></p>
         <p>and Date will be generated automatically</p>
         <br />
         <input type="submit" value="update"></input>
      </form>
      <a href="main.php">Main page</a>
   </body>
</html>