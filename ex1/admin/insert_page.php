<html>
   <head>
      <title>Insert News</title>
      <head>
   </head>
   <body>
      <?php
         session_start();
         
         if (!$_SESSION['logged'])
         	{
         	header("Location: adminlogin.php");
         	exit;
         	}
         
         ?>
      <?php
         echo '<h1>Insert news details here </h1>';
         echo 'Welcome, ' . $_SESSION['username'];
         echo '&nbsp;';
         echo "<a href='logout.php'>Logout</a>";
         echo '&nbsp;';
         echo '&nbsp;';
         echo '&nbsp;';
         echo '&nbsp;';
         echo '&nbsp;';
         echo '&nbsp;';
         echo "<a href='main.php'>Ready for Edit and Delete?</a>";
         echo '<link rel="stylesheet" type="text/css" href="theme.css">
         <form id="myForm" action="articledetails.php" method="post">
         <p>Title: <input type="text" id="title" name="title" /><br /></p>
         <p>Description:  </p><textarea type="text" id="desc" cols="3" rows="4" name="description"></textarea></p><br />
         <p>Image Path:  <input type="text" id="img" name="image" /></p><br />
         Date will be generated automatically<br />
         Provide Image Path. <br />
         <button id="sub">Save</button>
         <hr color="#005580">
         </form>
         <span id="result"></span>
         <script src="script/jquery-1.8.1.min.js" type="text/javascript"></script>
         <script src="script/my_script1.js" type="text/javascript"></script>';
         ?>
   </body>
</html>