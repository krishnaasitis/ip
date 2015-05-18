<html>
   <head>
      <title>Log out</title>
      <link rel="icon" href="http://krishna.ipt.oamk.fi/ip/icont1.ico" type="image/x-icon">
      <link rel="stylesheet" type="text/css" href="css/init.css">
   </head>
   <body>
      <div id="header">
         <a href="register.php"><img src="images/logonews.jpg" height="70" width="110" align="left"></a>
         
         <h1>Login to OAMK news</h1>
      </div>
      <?php 
         session_start();
         if (isset($_SESSION['username'])) {
            session_destroy();
            echo "<br> you are logged out successufuly!";
         } 
            echo "<br/><a href='login.php'>login</a>";
         ?>
   </body>
</html>