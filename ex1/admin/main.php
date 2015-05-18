<html>
   <head>
      <title>Modify</title>
      <head>
   </head>
   <body>

    <STYLE TYPE="text/css">
      .rightt{
        float: right;
      }
    </STYLE>

      <h1>Private use only!</h1>
      <link rel="stylesheet" type="text/css" href="theme.css">
      <?php 
         session_start(); 
         if(!$_SESSION['logged']){ 
             header("Location: adminlogin.php"); 
             exit; 
         } 
         ?>
      <?php
         echo 'Welcome, '.$_SESSION['username'];
         echo '&nbsp;';
         echo "<a href='logout.php'>Logout</a><br /><a href='http://krishna.ipt.oamk.fi/ip/ex1'>Go to public page</a><br /><a href='http://krishna.ipt.oamk.fi/ip/ex1/admin'>Root directory for admin</a> need to add more news? <a href='insert_page.php'>Add</a>";

         echo "<p style='float:right;'><a href='viewmessages.php'>View Messages</a></p><hr>";          
        
          include_once('database.php');
          
          $res = mysql_query("SELECT * FROM articles ORDER BY date DESC");
          
           while( $row = mysql_fetch_array($res) )
         	  echo "$row[id]. $row[title]. $row[date]. $row[description]. $row[image]<a href='modify.php?edit=$row[id]'>Modify</a><li><a href='delete.php?clear=$row[id]'>DELETE</a></li><hr>";
         	  
         ?>
   </body>
</html>