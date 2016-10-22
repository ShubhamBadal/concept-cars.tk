<?php
session_start();
// store session data
$_SESSION['flag']=0;
?>

<html>
<body>

<!DOCTYPE html>
<head>
		<meta name="concept cars" content="concept cars - the cars of future" charset="utf-8">
  		<title>Concept Cars</title>
		
		<!-- Attach our CSS -->
	  	<link rel="stylesheet" href="../css/orbit.css">
        <link rel="stylesheet" href="../css/loggedin.css">
        
        <link rel="icon" type="image/png" href="../images/images_icons/favicon.gif">
	  	
		<!-- Attach necessary JS -->
		<script type="text/javascript" src="../js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="../js/jquery.orbit-1.2.3.min.js"></script>	
		
		<!-- Run the plugin -->
		<script type="text/javascript">
			$(window).load(function() {
				$('#featured').orbit();
			});
		</script>

</head>


<body>
<center>
	
	<div class="container">
    
    	<div id="headtape">
        <a href="http://www.concept-cars.tk/home.php"><img src="../images/images_wel/cc.png"></a>
        </div>
        
		<div id="featured"> 
			<img src="../images/images_welcome/a.jpg" />
			<img src="../images/images_welcome/b.jpg" />
			<img src="../images/images_welcome/c.jpg"  />
            <img src="../images/images_welcome/d.jpg"  />
            <img src="../images/images_welcome/e.jpg" />
			<img src="../images/images_welcome/f.jpg"  />
            <img src="../images/images_welcome/g.jpg"  />
		</div>
        
        
        <?php

$un = trim($_POST['username']);
$pw = trim($_POST['pwd']);

if (($un=="publicuser") and ($pw=="publicpass"))
{
$_SESSION['flag'] = 1;
echo "<h1> Your login was successful!</h1>";
echo "You entered username as '".$un."' and password '".$pw."'<br><br>";

echo ' 
<html><center>
<a href="../home.php"><img src="../images/images_wel/enter.gif"></a></center>
</html>
';

}

else
{
$_SESSION['flag'] = -1;
echo "<h1> Invalid username or password! Try again!</h1>";
echo "You entered username as '".$un."' and password as '".$pw."'<br><br>";

echo ' 
<html><center>
<a href="http://www.concept-cars.tk/index.html"><img src="../images/images_wel/loginbutton.png"></a>
</center></html>
';

}

?>
        
       
<div id="blankspace" style="height:500px; background-color:lightgreen">
</div>


<div id="footer">
        
    <h2>
    © Copyright 2013 | <a href="http://www.concept-cars.tk">www.concept-cars.tk</a> | All Rights Reserved.
    </h2>
    <a id="hook" href="http://www.facebook.com/gt.concept">
    <img title="Facebook Page" class="footicon" src="../images/images_icons/fb.png" height=50px width=50px alt="facebook"></a>
    <a href="http://www.twitter.com/cars">
    <img title="Twitter" class="footicon" src="../images/images_icons/tw.png" height=50px width=50px alt="twitter"></a>
    <a href="mailto:shubham.badal@live.com">
    <img title="Email & Feedback" class="footicon" src="../images/images_icons/mail.png" height=60px width=60px alt="Email"></a>
    <a href="http://www.youtube.com/user/autocar">
    <img title="YouTube Channel" class="footicon" src="../images/images_icons/youtube.png" height=50px width=50px alt="youtube"></a>
    <a href="http://plus.google.com/112107230844134280632">
    <img title="Google Plus" class="footicon" src="../images/images_icons/gplus.png" height=50px width=50px alt="gplus"></a>
    
    <h2>
    Designed by <a href="http://shubhambadal.wordpress.com">Shubham Badal</a> | NITK Surathkal
    <br>
    </h2>
    </div>
        
</div>	
</center>
</body>
</html>

