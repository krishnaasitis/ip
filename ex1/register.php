<!doctype html>
<html>
   <head>
      <title>Register to OAMK news</title>
      <link rel="icon" href="http://krishna.ipt.oamk.fi/ip/icont1.ico" type="image/x-icon">
      <link rel="stylesheet" type="text/css" href="css/init.css">
   </head>
   <body>
      <div id="header">
         <a href="register.php"><img src="images/logonews.jpg" height="70" width="110" align="left"></a>
         <h1>Register to OAMK news</h1>
      </div>
      <div id="cont">
         <p><a href="register.php">Register</a>  | <a href="login.php">Login</a>
         </p>
         <form action="register.php" method="POST">
            Username: <input type="text" name="username" id="username"><br />
            Password: <input type="password" name="password" id="password"><br />
            Confirm-Password: <input type="password" name="rpass" id="rpass"><br />
            <input type="submit" value="Register" name="Submit"/>
         </form>
         <h2> and Log In </h2>
         <p> If your credentials are acceptable, you will be redirected to Login page  </p>
         <?php
            session_start();
            
            $con = mysql_connect('localhost', 'root', 'mypass') or die(mysql_error());
            $db = mysql_select_db('news', $con) or die(mysql_error());
            
            if (isset($_POST['Submit'])) {
                
                $username = $_POST['username'];
                $password = $_POST['password'];
            	$rpass = $_POST['rpass'];
                
            
                if ($username == '') {
                    echo"<script>alert('Please Enter Your Name')</script>";
                    exit();
                }
                if ($password == '') {
                    echo "<script>alert('Please Enter a Password')</script>";
                    exit();
                }
             
               if ($_POST["password"] == $_POST["rpass"]) {
               echo "success!";
            	header("Location: login.php");
            	}
            	if ($_POST["password"] != $_POST["rpass"])  {
               echo "failed to register. Please take a time";
            	}

            	else {
                    $que = "insert into users (username, password, rpass) values('$username', md5('$password'), md5('$rpass'))";
            
                    if (mysql_query($que)) {
                        echo "<script><alert('Registration Successful')</script>";
                        //echo "<script>window.open('login.php','_self')</script>";
            		header("Location: login.php");
                    }
            		else{
            			echo "<script><alert('Registration Failed')</script>";
            		}
                }
            }
            ?>
      </div>
   </body>
</html>