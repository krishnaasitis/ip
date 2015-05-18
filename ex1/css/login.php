<!doctype html>
<html>
   <head>
      <title>Login to OAMK news</title>
      <link rel="icon" href="http://krishna.ipt.oamk.fi/ip/ex1/icont1.ico" type="image/x-icon">
      <link rel="stylesheet" type="text/css" href="css/init.css">
   </head>
   <body>
    <!-- for dialogue -->
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/redmond/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <!-- fd -->
      <div id="header">
         <a href="login.php"><img src="images/logonews.jpg" height="70" width="110" align="left"></a>
         <h1>Login to OAMK news</h1>
      </div>
      <p id="top-text">You will see OAMK news only if you login!</p>
      <div id="cont">

         <p>
            <a href="login.php" style="text-decoration: underline;">Login</a> 	|     <a href="register.php" style="text-decoration: underline;">Register</a>
         </p>

         <form action="login.php" method="POST">
            <span class="un">Username:</span><input type="text" name="username" id="u1"><br />
            <span class="pw">Password:</span><input type="password" name="password" id="p1"><br />
            <input type="submit" value="Login" name="submit" id="submit1"/>
         </form>
         
         <?php
            if(isset($_POST["submit"])){
            $username=$_POST['username'];
            $password=$_POST['password'];
            
            include_once('db.php');
            
            
            	$usrname = mysql_real_escape_string($_POST['username']); 
                $password = md5(mysql_real_escape_string($_POST['password'])); 
                $sql = mysql_query("SELECT * FROM users  
                    WHERE username='$username' AND 
                    password='$password' 
                    LIMIT 1"); 
                if(mysql_num_rows($sql) == 1){ 
                    $row = mysql_fetch_array($sql); 
                    session_start(); 
                    $_SESSION['username'] = $row['username']; 
                    $_SESSION['logged'] = TRUE; 
                    header("Location: index.php"); // Modify to go to the page you would like 
                    exit; 
                }else{ 
                    //header("Location: login.php"); 
            		echo "Wrong username or password.....</p><a href='login.php'>Try again</a>";
            		
                    exit; 
                } 
            }else{    //If the form button wasn't submitted go to the index page, or login page 
                //header("Location: login.php");   
            	//echo "username and password please...<a href='login.php'>Try again</a>";
               // exit; 
            } 
            ?>
      </div>
      <div id="bg-port-icon">

      <div id="krishna-portfolio-image">
<!-- fd -->
                          <a id="OpenDialog" href="#"><img id="info-img" src="http://ilmastoinfo.fi/kevennatonni/wordpress/wp-content/themes/kevennatonni2014/img/info.png"></a>
                          <div id="dialog" title="My current Interests">
                            <p id="dialog-p">1. Mobile applications</p>
                            <p id="dialog-p">2. JS Game Development</p>
                            <p id="dialog-p">3. Website Development</p>
                         </div>
<!-- fd -->
      </div>
      <!-- fd -->
    <script type="text/javascript">
        $(document).ready(function () {
            $("#OpenDialog").click(function () {
                $("#dialog").dialog({modal: true, height: 200, width: 305 });
            });
        });
    </script>

      <!-- //fd -->
      <span class="texti-on-folio">"If you earn more than you require someday, there's always someone in appetite."</span></div>

      <div id="before-footer"><div class="google-maps"><iframe src="https://www.google.com/maps/d/embed?mid=zCYpWXl51G_A.kPIg6vYya5cw" height="350" width="30%" align="right"></iframe></div></div>
      <div id="before-footer-1"></div>
      <div id="before-footer-2"></div>
      <div id="footer">Designed and developed by <a href="#" id="footerlink">Krishna Bagale</a></div>
<!-- fd -->

          <style type="text/css">
.ui-dialog.ui-widget.ui-widget-content.ui-corner-all.ui-draggable.ui-resizable{
  left: 280px !important;
}
#info-img{

}
#dialog-p{
  
}
#before-footer{
  background: url('http://www.loriswebs.com/images/teal-texture-sandstone.gif');
  background-repeat: no-repeat;
  background-size: 100%;
  height: 400px;

}
div#before-footer-1 {
height: 500px;
background-color: #009f9b;
}
.google-maps{
  padding-top: 1em;
}
#before-footer-2{
  display: none;
  height: 440px;
  /*background-color: #e6f5f9;*/
  background: url('http://krishna.ipt.oamk.fi/ip/ex1/images/pouch1.png');
  background-repeat: no-repeat;
  background-size: 100%;
}
    </style>
 <!-- fd -->
   </body>
</html>