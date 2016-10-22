<?php 
session_start();
if (($_SESSION['flag'])==-1)
header("Location:welcome.html");
else
{
}
?>
 


<!doctype html>
<html>
<head>
	<meta name="concept cars" content="concept cars - the cars of future" charset="utf-8">
  	<title>Concept Cars</title>
    <base href="images/">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" type="text/css" href="images_icons/favicon.ico">
</head>

<body>
<div id="container">

	<div id="header">

    <img id="back" alt="Concept Cars" src="images_header/mercover.jpg"
    onmouseover="this.src='images_header/murcie.jpg'" onmouseout="this.src='images_header/mercover.jpg'"/>
    
    <a href="http://www.concept-cars.tk/"><img title="www.concept-cars.tk" alt="Concept Cars" id="logo" src="images_header/logoa.jpg"
    onmouseover="this.src='images_header/logob.jpg'" onmouseout="this.src='images_header/logoa.jpg'"/></a>
    
    <img id="website" src="images_header/website.gif" title="Your destination for the toys of future">
    </div>

	<center>  

    <div id="menu"> 	
    <a href="http://www.concept-cars.tk">
    <img class="button" src="images_text/home.png"></a>
        
    <a href="http://www.roadandtrack.com/go/news/concept-cars/‎">
    <img class="button" src="images_text/news.png"></a>
    
    <a href="http://reviews.cnet.com/2300-10863_7-10016544.html">
    <img class="button" src="images_text/top10.png"></a>
    
    <a href="http://www.youtube.com/watch?v=e2LxFt33qpI/‎">
    <img class="button" src="images_text/timeline.png"></a>
    
    <a href="http://www.conceptcarz.com/wallpaper/">
    <img class="button" src="images_text/downloads.png"></a>
    
    <a href="http://www.greencarcongress.com/">
    <img class="button" src="images_text/green.png"></a>
    
    <a href="http://www.t3.com/features/concept-cars-hottest-motors-we-want-now/">
    <img class="button" src="images_text/hot.png"></a>
    
    <a href="mailto:shubham.badal@live.com?Subject=Feedback">
    <img class="button" src="images_text/feedback.png"></a>
    
    <a href="http://www.concept-cars.tk/home.html#hook">    
    <img class="button" src="images_text/contact.png"></a>
    </div>	
    
    

	<div id="leftbar">
    <marquee direction="down" height="1540px" onMouseOver="this.stop()" onMouseOut="this.start()" behavior="scroll">
    	<a href="http://www.bmw.com/">
        <img src="images_logos/bmw.png" alt="BMW i8" height="200" width="200"></a>
        <a href="http://www.mercedes.com/">
        <img src="images_logos/mercedes.jpg" alt="amg" height="200" width="200"></a>    	
        <a href="http://www.hyundai.com/">
        <img src="images_logos/hyun.jpg" alt="hyundai" height="200" width="200"></a>                
        <a href="http://www.volvo.com/">
        <img src="images_logos/volvo.png" alt="volvo" height="200" width="200"></a>        
        <a href="http://www.honda.com/">
        <img src="images_logos/honda.png" alt="honda" height="200" width="200"></a>    	
        <a href="http://www.peugeot.com/">
        <img src="images_logos/pe.png" alt="pegeot" height="200" width="200"></a>
        <a href="http://www.vw.com/">
        <img src="images_logos/vw.gif" alt="vw" height="200" width="200"></a>    	
        <a href="http://www.jaguar.com/">
        <img src="images_logos/jaguar.png" alt="jaguar" height="200" width="200"></a>        
        <a href="http://www.lamborghini.com/">
        <img src="images_logos/lamborgh.png" alt="lamborghini" height="200" width="200"></a>        
        <a href="http://www.porsche.com/">
        <img src="images_logos/porsche.png" alt="posche" height="200" width="200"></a>
    </marquee>
    </div>
    
    <div id="rightbar">
   		<a href="http://www.naias.com/" target="_blank">
        <img class="s" src="images_as/as1.jpg" alt="NAIAS" height="200" width="200"></a>
        <a href="http://oica.net/barcelona-international-motor-show-2013/" target="_blank">
        <img class="s" src="images_as/as2.jpg" alt="volvo" height="200" width="200"></a>
    	<a href="http://www.autoexpo.in/" target="_blank">
        <img class="s" src="images_as/as3.jpg" alt="autoexpo" height="200" width="200"></a>
    	<a href="http://www.iaa.de" target="_blank">
        <img class="s" src="images_as/as4.jpg" alt="iaa" height="100" width="200"></a>
        <a href="http://www.mondial-automobile.com/" target="_blank">
        <img class="s" src="images_as/as5.jpg" alt="mondial" height="100" width="200"></a>
        <a href="http://autosalon.be/" target="_blank">
        <img class="s" src="images_as/as6.jpg" alt="european" height="200" width="200"></a>
        <a href="http://www.salon-auto.ch/" target="_blank">
        <img class="s" src="images_as/as7.jpg" alt="autosalon" height="200" width="200"></a>
        <a href="http://en.wikipedia.org/wiki/British_International_Motor_Show‎" target="_blank">
        <img class="s" src="images_as/as8.jpg" alt="bims" height="100" width="200"></a>
        <a href="http://www.tokyo-motorshow.com/" target="_blank">
        <img class="s" src="images_as/as9.jpg" alt="tokyo" height="200" width="200"></a>
        </div>
<p class="intro">
  Concept cars are a look into the showrooms of tomorrow, and into the world of cars that never were. Most concept cars are
  one-of-a-kind jewels built to brighten a carmaker's auto show display.  
  <br><br><b>
  Concept cars are created by automakers to showcase new technologies and designs, but they are not mass-produced.
  Explore the future of automotive and see what you might be driving in a few years.
  </b><br><br>
  Link to the articles below for picture-packed profiles of some of wildest concept cars ever.<br>
  Enjoy this ride though the fantastic world of concept cars.
</p>

<!--Google Custom Search-->
<form name="cse" id="cse" action="http://www.google.com/cse">
  <input type="hidden" name="cref" value="" />
  <input type="hidden" name="ie" value="utf-8" />
  <input type="hidden" name="hl" value="" />
  <input name="q" type="text" size="40" />
  <input type="submit" name="sa" value="Search" />
</form>
<script type="text/javascript" src="http://www.google.com/cse/tools/onthefly?form=searchbox_demo&lang="></script>

	<h1><span></span>New Thinking | New Possibilities</h1>
    
    <div id="showroom">
    <marquee direction="right" behavior="alternate" scrollamount="3" onMouseOver="this.stop()" onMouseOut="this.start()">
		<img src="images_cars/i8.jpg" alt="BMW i8" height="180" width="250">
		<img src="images_cars/merc.jpg" alt="merc" height="180" width="250">
		<img src="images_cars/dash.jpg" alt="astar" height="180" width="250">
		<img src="images_cars/suv.jpg" alt="lambo" height="180" width="250">
        <img src="images_cars/bmwi8.jpg" alt="BMW i8" height="180" width="250">
		<img src="images_cars/merced.jpg" alt="merc" height="180" width="250">
		<img src="images_cars/spy.jpg" alt="bmwspy" height="180" width="250">
		<img src="images_cars/leaf.jpg" alt="nissan" height="180" width="250">
        <img src="images_cars/i3.jpg" alt="BMW i3" height="180" width="250">
		<img src="images_cars/merc.jpg" alt="merc" height="180" width="250">
		<img src="images_cars/volt.jpg" alt="gm" height="180" width="250">
		<img src="images_cars/pe1.jpg" alt="peugeot" height="180" width="250">
        <img src="images_cars/ven.jpg" alt="lamb" height="180" width="250">
		<img src="images_cars/pe2.jpg" alt="peugeot" height="180" width="250"> 
	</marquee>
    </div>
    
    <p class="details">
    A concept car fulfills many important roles in the automotive industry. Concepts can be used by manufacturers to gauge public opinion of a new model, or even an entire design philosophy. Or they can be used as experimental design projects, called styling exercises. Ultimately vehicle manufacturers use concept cars to push forward the boundary's of manufacturing and production techniques, while showcasing their more advanced technology.
    <br><br>

	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Some concept cars although important, are rather uninteresting. Face-lift concepts where the basic structure of the car remains unchanged from previous years but minor styling cues are altered for the new model year might fall into this category.
	<br><br>
    
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Compiled here is a list of interesting and important concept cars, 4x4 vehicles and motorbikes. The concept vehicles covered were selected because they are slightly out of the ordinary, either in their design and appearance or their engineering. When compared with other concept vehicles they stand out. Fortunately owing to the many auto shows which take place every year, and the imagination of car design professionals and students the list is ever growing.
	</p>
        
    <div id="list">
    <hr><hr>
    <p id="tabletitle">A list of most popular concept cars</p>
    <hr><hr>  
    <table>
<tr>
  <th>Concept</th>
  <th>Manufacturer</th>
  <th>Expected Release</th>
</tr>
<tr class="alt">
<td>Urus</td>
<td>Lamborghini</td>
<td>Released</td>
</tr>
<tr class="alt">
<td>Volt</td>
<td>GM</td>
<td>Released</td>
</tr>
<tr class="alt">
<td>i3 & i8</td>
<td>BMW</td>
<td>2014</td>
</tr>
<tr class="alt">
<td>i.oniq</td>
<td>Hyundai</td>
<td>2015</td>
</tr>
<tr class="alt">
<td>Vision ConnectedDrive</td>
<td>BMW</td>
<td>2016</td>
</tr>
<tr class="alt">
<td>HND-9</td>
<td>Hyundai</td>
<td>2017</td>
</tr>
<tr class="alt">
<td>Gina</td>
<td>BMW</td>
<td>2018</td>
</tr>
<tr class="alt">
<td>HCD-14 Genesis</td>
<td>Hyundai</td>
<td>2019</td>
</tr>
<tr class="alt">
<td>Gloria</td>
<td>Alfa Romeo</td>
<td>2020</td>
</tr>

</table>
</div>
	
    <div id="footer">
    <h2>
    © Copyright 2013 | <a href="http://www.concept-cars.tk">www.concept-cars.tk</a> | All Rights Reserved.
    </h2>
    <a id="hook" href="http://www.facebook.com/gt.concept">
    <img title="Facebook Page" class="footicon" src="images_icons/fb.png" height=50px width=50px alt="facebook"></a>
    <a href="http://www.twitter.com/cars">
    <img title="Twitter" class="footicon" src="images_icons/tw.png" height=50px width=50px alt="twitter"></a>
    <a href="mailto:shubham.badal@live.com">
    <img title="Email & Feedback" class="footicon" src="images_icons/mail.png" height=60px width=60px alt="Email"></a>
    <a href="http://www.youtube.com/user/autocar">
    <img title="YouTube Channel" class="footicon" src="images_icons/youtube.png" height=50px width=50px alt="youtube"></a>
    <a href="http://plus.google.com/112107230844134280632">
    <img title="Google Plus" class="footicon" src="images_icons/gplus.png" height=50px width=50px alt="gplus"></a>
    
    <h2>
    Designed by <a href="http://shubhambadal.wordpress.com">Shubham Badal</a> | NITK Surathkal
    <br>
    </h2>
    </div>

</div>
</center>
</body>
</html>