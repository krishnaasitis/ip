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
<!--
      <div id="before-footer" style="clear:both;"><br>Greetings!<br>
            <span id="alignlftp" style="float:left;position:absolute;">Born December 1, 1993 I was an absolutely unberable child and still I am. I don't believe in other people's idiology. I don't even believe in the theory of evolution
            . Come on, a monkey became a man later :) Monkey's origin is monkey, man's man and so on. We better understand things before we believe. And understanding is very simple.
            No creature's mind will ever understand the nature to it's totality. <br><br>
            <br>
            When I was a kid, I used to think that everything is possible in life, I can do absolutely anything. Gradually I grew up and I realize that I can do absolutely 
            nothing. I was blank. I couldn't find any framework or a model to put my reality of life. But I have enjoyed the difference so majestically. <br>

            <br>
            See, everybody is unlucky, somebody's got to be so damn lucky to balance this, and I am the luckiest man. I am so pide of that. I have been torchered. I have seen
            people doing nasty work and making other people other creatures their slave and making miserable. I am a silent person, but I have a feeling that these people are 
            absolutely ridiculous. 

            <br>
            <br>
            I don't care a hoot. I don't care what other people think about me. I am a free, happy fellow. I deserve to live this life to it's extreme peak peacefully. 

          </span>

-->

<!-- 
        <div class="google-maps" ><iframe src="https://www.google.com/maps/d/embed?mid=zCYpWXl51G_A.kPIg6vYya5cw" height="350" width="30%" align="right"></iframe></div></div>
   
  <div id="before-footer-1"><a class="twitter-timeline" href="https://twitter.com/RajBagat7" data-widget-id="528174251228925953">Tweets by @RajBagat7</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>
      
      <div id="before-footer-2"></div>
-->
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
  /*background: url('images/img-bg-bf');*/
  /*background-color: #f8f8f8; #16a085*#c7eee6*/
  background-color:gray;
  background-repeat: no-repeat;
  background-size: 100%;
  height: 400px;
  color: #fff;
}
div#before-footer-1 {
height: 500px;
/*background-color: #009f9b;*/
/*background: #212121 url("../images/black_paper.jpg") repeat;*/
background-color: #EDF0F5;
color: #dbdbdb;
}
.google-maps{
  padding-top: 1em;
}
#before-footer-2{
  /*display: none; #e6f5f*/
  height: 440px;
  background-color: rgb(230, 245, 249);
 /* background: url('http://krishna.ipt.oamk.fi/ip/ex1/images/pouch1.png');*/

  background-repeat: no-repeat;
  background-size: 100%;
}
#helicopter{
  width: 630px;
  height:500px; 
}
    </style>
 <!-- fd -->
   </body>
</html>