<!doctype html>
<html>
   <head>
      <title>
         Oamk news
      </title>
      <link rel="icon" href="http://krishna.ipt.oamk.fi/ip/ex1/icont1.ico" type="image/x-icon">
      <link rel="stylesheet" type="text/css" href="css/style1.css">
      <a name="top"></a>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script><script>
         $(document).ready(function(){ 
         $("u").click(function(){  
           $("#content").load("forum.php",function(responseTxt,statusTxt,xhr){  
             if(statusTxt=="success")     
         		/*alert("External content loaded successfully!");  #07B3D3 */
         		/*document.write('<div>Print this after the script tag</div>');*/
             if(statusTxt=="error")        
         		alert("Error: "+xhr.status+": "+xhr.statusText);   
         
         				$("nav").click(function(){ 
         				$("#content").load("contact.php",function(responseTxt,statusTxt,xhr){  
             					if(statusTxt=="success")     
         						/*alert("External content loaded successfully!");  #07B3D3 */
         						/*document.write('<div>Print this after the script tag</div>');*/
             					if(statusTxt=="error")        
         						alert("Error: "+xhr.status+": "+xhr.statusText); 
          	});
          });  
         
         });
         
         });
         });
      </script>
   </head>
   <body>
      <div id="topbar"></div>
      <div id="main">
         <div id="header">
            <a href="index.php"><img src="images/logonews.jpg" height="70" width="110" align="left"></a>
            <div id= "logotext">Oulu University of Applied Sciences</div>
            <form id="search" method="GET" action="index.php">
               <input type="text" class="textinput" name="searchbox" placeholder="search news.." size="21" maxlength="120">
               <input type="submit" name="search" value="search" class="button">
            </form>
            <!--SEARCH here -->
            <div class="clear"></div>
         </div>
         <?php
            include_once('db.php');
            session_start(); 
            if(!$_SESSION['logged']){ 
            header("Location: login.php"); 
            	exit; 
            } else{
            echo "<br />";
            echo 'Welcome, '.$_SESSION['username'];
            
            }
            ?>
         <a href="logout.php" class="logout">Log out</a>
         <div id="menu">
            <a href="index.php" class="nav" style=" float: right; width: 130px; margin-top: -26px; margin-right: 3px; padding-left: 40px; font-size: 30px;}">Home</a><br />
            <u><a href="#" class="nav" style=" float: right;  width: 130px; margin-top: -6px; margin-right: 3px; padding-left: 40px; font-size: 30px;}">Forum</a></u><br />
            <nav><a href="#" class="nav" style=" float: right;  width: 130px; margin-top: 14px; margin-right: -170px; padding-left: 40px;  font-size: 30px;}">Contact</a> </nav>

            <br />
         </div>
         

         <!-- here -->
         <?php
            $search_value =0; 
            if(isset($_GET['search'])){
            	$con = mysql_connect('localhost', 'root', 'mypass');
            	if (!$con)
              {
              die('Could not connect: ' . mysql_error());
              }
            	mysql_select_db("news");
            	
            	$search_value =  $_GET['searchbox'];					
            }
            ?>
         <!-- to here-->
         <div id= "content" >
            <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fkrishna.ipt.oamk.fi%2Fip%2F&amp;width=500&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=80&amp;appId=1406392729622868" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px; height:80px;" allowTransparency="true"></iframe>      
            <!-- here -->
            <?php
               //echo "<font face=\"Segoe UI Light\">Search results for <b>$search_value</b></font>";
               //print "<br>";
               $query = "SELECT * FROM articles WHERE title LIKE '%$search_value%' OR date LIKE '%$search_value%' OR description LIKE '%$search_value%' ORDER BY date DESC";
               if (!$query) { // add this check.
               die('Invalid query: ' . mysql_error());
               }
               $run = mysql_query($query);
               echo "<table>";
               while($row= mysql_fetch_array($run)){
               echo "<tr>";
               echo "<td>"; 
               $title = $row['title'];
               $date = $row['date'];
               $description = $row['description'];
               echo "<font face=\"Segoe UI Light\"><font size='2'><h1>$title</h1></font>";
               echo "<p>$date</p>";
               echo "<p>$description</p>";
               ?>
            <a href="javascript:hideshow(document.getElementById('adiv'))" class="classbeauty">Read More</a> 


               <script type="text/javascript">
                     function hideshow(which){
                     if (!document.getElementById)
                     return
                     if (which.style.display=="block")
                     which.style.display="none"
                     else
                     which.style.display="block"
                     }
               </script>
              <!-- <div id="adiv" style="font:24px bold; display: block">Now you see me</div> -->

            <?php
               echo "</td>";
                             echo "<td>";?><img src="<?php echo $row["image"] ?>" id="img_align" height="200" width="170" padding-right="1px"><?php echo "</td>";
               echo "</tr>";
               
               }
               echo "</table>";
               ?>
            <!-- to here -->
            <!--
               <?php
                  mysql_connect('localhost', 'root', '');
                  mysql_select_db('dvddb');
                  $res=mysql_query("SELECT * FROM articles ORDER BY date DESC");
                  
                  
                  echo "<table>";
                  while($row=mysql_fetch_array($res))
                  {
                  echo "<tr>";
                  echo "<td>"; 
                  echo "<strong>" . $row["title"] . "</strong>";
                  echo "<br />";
                     echo $row["date"];
                  echo "<br />";
                  echo "<article>" . $row["description"] . "</article>"; 
                  ?>
                             <a href="index.php" class="classbeauty">Read More</a>
                          <?php
                  echo "</td>";

                  echo "<td>";?><img src="<?php echo $row["image"] ?>" height="200" width="170" padding-right="1px" style="
                     
                  float: right; right: 0; position: absolute;"><?php echo "</td>";
                  echo "</tr>";
                  }
                  
                  echo "</table>";
                  ?>   
               -->           
         </div>
      </div>
      <div id="footer">
         <a href="#top"><img src="images/round.jpg" height="62" width="82" align="center"></a><br>Copyright © OAMK <br>2015
<table>
      </div>
   </body>
</html>