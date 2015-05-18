
      <?php 
         session_start(); 
         if(!$_SESSION['logged']){ 
             header("Location: adminlogin.php"); 
             exit; 
         } 
         ?>
         <div id="topheader" style="color: #fff; background-color: #56bbb7; border-bottom: 1px solid #409e9b;">
         <?php
         echo 'Welcome, '.$_SESSION['username'];
         echo "<br>";
         ?>
         <p style="color:#000;">
         <?php
         echo "see messages from your contact me page"
         ?>    
         </p>  
         <strong><a href="http://krishna.ipt.oamk.fi/ip/ex1/admin/main.php">Go Back to main page</a></strong>
</div>
<div id="messagebody" style="background-color: #d9534f; border-style: solid; border-color: #d43f3a; color:#fff; " > 
<?php

include_once('database.php');

$res = mysql_query("SELECT * FROM comments ORDER BY date DESC");

while( $row = mysql_fetch_array($res))

echo "$row[id] . $row[name]  -------->  $row[comment] . ---------> $row[date] <br> ";

?>
</div>