<style type="text/css">
   body{
   background-color: #f6f7f0;
   }
   #oamk{
   margin-left: 5px;
   margin-right: 5px;
   }
   h1{
   color: #fa5c54;
   }
   h5{
   color: #fa5c54;
   }
   h6{
   float: right;
   }
                  
</style>
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fkrishna.ipt.oamk.fi%2Fip%2F&amp;width=500&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=80&amp;appId=1406392729622868" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px; height:80px;" allowTransparency="true"></iframe>      
<div id="height" height="300"></div>
      <?php 
         session_start(); 
         if(!$_SESSION['logged']){ 
             header("Location: login.php"); 
             exit; 
         } 
         ?>
<div id="oamk">
   <h1>Contact me</h1>
   

   <?php
      echo "<font face=\"Segoe UI Light\"><font size='3'><p>I am here to answer any questions you may have about my Oamk experiences. Reach out to me and I'll respond as soon as I can.";
      ?>
	<h6><a href="http://krishna.ipt.oamk.fi/ip/ex1/"> - Admin</a></h6><br />
	<hr>
   <h5>I am a drug free vegeterian who is beyond any kind of social, religious, political norms. I love and respect every creatures on this planet. I don't watch games, I play games.</h5>
<h5>give me a place to stand and I can move the world.</h5>
   <h5>
   EMAIL: </h3>
   <p>t1bakr00@students.oamk.fi</p>
   <h5>TELEPHONE</h5>
   <p>+358 401 438 609</p>
   <h5>SKYPE</h5>
   <p>oceanbg_man</p>
   <h5>ADDRESS</h5>
   <p>OAMK News.</p>
   <p>Kotkantie 1</p>
   <p>Oulu</p>
   <p>Finland</p>
 <!--  <img src="images/1.jpg" alt="krishna" align="right" height="345" width="270"/> -->
   <a href="https://www.facebook.com/krishna.bagale1" target="_blank"><img src="images/fb1.jpg" width="82" height="82"></a><br />
   <a href="http://www.linkedin.com/profile/view?id=205541493&trk=nav_responsive_tab_profile" target="_blank"><img src="images/lin.jpg" width="82" height="82"></a><br />
   <a href="http://www.pinterest.com/krishnabagale1/" target="_blank"><img src="images/pin.jpg" width="82" height="82"></a><br />
   <a href="https://twitter.com/RajBagat7" target="_blank"><img src="images/tw.jpg" width="82" height="82"></a><br />

</div>
<?php
   echo "</font>";
   ?>

<div id="responses">
   <h2>Leave your message here</h2>
<form name="form1" action="" method="post" onsubmit="return validateForm();">

   Name:
<input type="text" id="t1" size="20" name="t1"><br><br>
   Message: <br>
<textarea type="text" id="t2" name="t2" rows="4" cols="50"></textarea><br>

<input type="button" name="button1" value="Send" onClick="aa();"><br>
<div id="d1"></div>
</form>
</div>
<script type="text/javascript">
   function aa() {
      var xmlhttp=new XMLHttpRequest();
      xmlhttp.open("GET", "mail/contact-form.php?name="+document.getElementById("t1").value+"&comment="+document.getElementById("t2").value, false);
      xmlhttp.send(null);

      //this is useful for store response
      document.getElementById("d1").innerHTML = xmlhttp.responseText;
   }
   //these t1 t2 are input name not id
</script>

   <script>
function validateForm() {
    var x = document.forms["form1"]["t1"].value;

    if (x==null || x=="") {
        alert("Name must be filled out");
        return false;
    }
}
</script>

<!-- here is image slider -->
      <script type="text/javascript">
      
      var Image = new Array("images/jolla.jpg", "images/laugh.jpg","images/class.jpg", "images/1.jpg", "images/Appetite-Suppressant-pills-tablets.jpg", "images/guava.jpg", "images/go-vegan.jpg", "images/pear-papaya-celery.JPG", "images/cat-eating-broccoli.jpg", "images/cucumber-celery-juice.jpg", "images/corn-field.jpg", "images/Celery-colors.jpg", "images/marigold.jpeg", "images/oat.JPG", "images/umbrella.jpg", "images/v.jpg", "images/nice.jpg", "images/yu.jpg", "images/origami.jpg", "images/westinghouse.jpg", "images/Kurihama-fp.jpg", "images/Kurihama-Flower-Park.jpg", "images/Kurihama-f-p.jpg", "images/Kurihama.jpg", "images/normal_oranssikurpitsa.jpg", "images/world-ballon.jpg", "images/Vietnamese-Noodle-Soup.jpg", "images/broth.jpg", "images/Paasitorni-hakaniemi.jpg", "images/Olive-baboon-troop-on-a-road.jpg", "images/pmkins-patches.jpg", "images/static_phone_crap_.jpg", "images/wow.jpg");
      
      var Image_Number = 0;
      var Image_Length = Image.length - 1

      
      function change_image(num){
      
         Image_Number = Image_Number + num;
      
         if (Image_Number > Image_Length){

            Image_Number = 0;
            
         }
         
         if (Image_Number < 0){
         
            Image_Number = Image_Length;
            
         }
         
         document.slideshow.src = Image[Image_Number];
     //if we want next functioning in every images     
      //return false;
         
         
         if(Image_Number == Image_Length){
            document.getElementById('next').style.display = 'none';
         }
         else {
            document.getElementById('next').style.display = 'block';
         }
         
         if(Image_Number == 0){
            
            document.getElementById('previous').style.display = 'none';
         }
         else {
            document.getElementById('previous').style.display = 'block';
         }
         
         
      
      
      }
      
      function auto() {
      
         setInterval("change_image(1)", 3000);
      
      }
/*
      function autostop(){
         var refreshIntervalId = setInterval(fname, 10000);

/* later 
         clearInterval(refreshIntervalId);
      }
*/
      
   </script>

<iframe width="420" height="315" src="//www.youtube.com/embed/66yUo9Ahwxk" frameborder="0" allowfullscreen></iframe><br>
<iframe width="420" height="315" src="//www.youtube.com/embed/_wO8toxinoc" frameborder="0" allowfullscreen></iframe>
   
  <div id="gallery"> 
   <h2>Check out the gallery</h2>
   <img src="images/jolla.jpg" name="slideshow" style="width: 400px; height: 400px;" />
   <div>
 <div id="previous">  <a href="javascript:change_image(-1)">Previous</a></div>
 <div id="auto"><div class="autoslideanim" onclick="auto()">

   <svg width="240" height="150" fill="#46A28D">
  <g transform="translate(60,96)">
    <text id="TextElement" x="-50" y="-49" style="font-family:Verdana;font-size:24">Auto slide :)
      <animateMotion path="M 0 0 L 100 100" dur="5s" fill="freeze"></animateMotion>
    </text>
  </g>
</svg></div></div>
<div id="next"><a href="javascript:change_image(1)">Next</a></div>
<iframe width="400" height="320" src="//www.youtube.com/embed/jSUSFow70no" frameborder="0" allowfullscreen></iframe>
<!-- videos -->


   
<style type="text/css">
#previous {display:none;}
#next {display:inline;}
#previous{ float: left;
left: 55.6%;
bottom: 28%;
/* margin-top: 16px; */
position: absolute;
background-color: #eef;
color: #fff;
}
#next{ float: right;
right: 0%;
bottom: 28%;
/* margin-top: 16px; */
position: absolute;
background-color: #eef;
color: #fff;
}
#auto{ float: center;
right: 3%;
bottom: 36.5%;
/* margin-top: 16px; */
position: absolute;
/*background-color: #eef;*/
color: #fff;
}
#gallery{
   margin-top: -53%;
   float: right;
}
.autoslideanim{
   cursor: pointer;
}

.autoslideanim:hover{
   cursor: pointer;
   color: #30917b;
   font-weight: 400;
}
.ss-footer{
   display: none !important;
}
#responses {
margin-top: -13.5em;
margin-left: 6em;
float: center;
float: left;
position: absolute;
}
.ss-logo-container{
   display: none;
}
#t1{
   margin-left: 29px;
   color: #87C71D;
}
#t2{
   color: #555555;
}
</style>



