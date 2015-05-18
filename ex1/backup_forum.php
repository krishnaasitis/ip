<html>
   <head>
      <title></title>
      <style type="text/css">
         #forunContent{
	  margin-top: 0px;
         margin-left: 5px;
         margin-right: 5px;
         ::-webkit-input-placeholder { /* WebKit browsers */
         color:    #999;
         }
         :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
         color:    #999;
         }
         ::-moz-placeholder { /* Mozilla Firefox 19+ */
         color:    #999;
         }
         :-ms-input-placeholder { /* Internet Explorer 10+ */
         color:    #999;
         }
         input:-ms-input-placeholder{color:#999}
         }
         status{
         border-color: #0095cd;
         }

}
      </style>
   </head>
   <body>
      <?php 
         session_start(); 
         if(!$_SESSION['logged']){ 
             header("Location: login.php"); 
             exit; 
         } 
         ?>
      <br />
      <div id="forunContent">
         <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fkrishna.ipt.oamk.fi%2Fip%2F&amp;width=500&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=80&amp;appId=1406392729622868" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px; height:80px;" allowTransparency="true"></iframe>      
         <h1>Post your status or queries</h1>
         <!-- statusInsert.php no name -->
         <form id="myStatusForm" name="status" action="action.php" method="post">
            <textarea name="status" placeholder="What's Best For Business?? :)" cols="3" rows="4" font-color="#0095cd" border-color="#0095cd" maxlength="200" size="90" style="background-color: #fff; width: 99.5%; height: 135; color: #c63; background: url('http://krishna.ipt.oamk.fi/ip/ex1/images/status-icon.png'); background-repeat: no-repeat; background-position: right;background-size: 13%; font-size: 1.2em;"></textarea>
            <br /></p>
         
         <!--   <button id="post" style="background-color:#0095cd;color:#fff;width:75;height:35" onClick="history.go(-1)">Post</button> -->
        <!-- <input type="button" name="button1" value="Post" id="post" style="background-color:#0095cd;color:#fff;width:75;height:35" onClick="bb();"><br> -->
        <button id="sub" style="background-color:#0095cd;color:#fff;width:75;height:35">Post</button>
        </form>
<span id="result"></span>
         <div id="d2"></div>
            <span id="posted"></span>
            <hr color="#005580">
            <h2>See all the posts</h2>





         
         <?php
            include_once('db.php');
            //here
            
            //here
            $res = mysql_query("SELECT * FROM status ORDER BY date DESC");
       

              while( $row = mysql_fetch_array($res) )
            	  echo "<mark style='color:#ff6600;font-family: 'PT Sans', sans-serif;font-weight: bold;'>$row[id]</mark>: <strong>$row[status]</strong><br />$row[date]<br />";
            //here
            	/*		$usr = mysql_query("SELECT * FROM users WHERE username='$username'");
            			while( $row = mysql_fetch_array($usr) )
            
            			$_SESSION['username'] = $usr;
            	  			echo "<p>$row[username]</p>";
                        */
            	  
            ?>
         

      </div>
      <!-- <script src="script/my_script2.js"></script><script> -->
      <script src="http://code.jquery.com/jquery-1.8.1.min.js" type="text/javascript"></script>
      <script src="http://code.jquery.com/jquery-1.10.1.js" type="text/javascript"></script>
      <script src="my_scriptkrish.js" type="text/javascript"></script>
   </body>
</html>