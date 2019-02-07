<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Blood Donation</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="blooddonation.css" rel="stylesheet" type="text/css">
<link href="overlay.css" rel="stylesheet" type="text/css">
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="respond.min.js"></script>


<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
 <link rel="stylesheet" href="css/styles.css">
 <link href="css/imageeffect.css" rel="stylesheet" type="text/css">
 <link href="css/social.css" rel="stylesheet" type="text/css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
</head>
<body>

<div class="gridContainer clearfix">
<div id="topcover">
<!---topbanner--->
<div id="topbanner">
  <div id="topstriff">
    <div id="call"> - (808)888-777-555</div>
    <div id="email"> - <a href="mailto:info@yourdomain.com">info@yourdomain.com</a></div>
  </div>
  <div id="logobanner">
    <div id="logo"><img src="images/logo.png" usemap="#Map">
      <map name="Map">
        <area shape="rect" coords="2,3,255,83" href="index.html">
      </map>
    </div>
    <div id="menubar">
    <div id="cssmenu">
<ul>
   <li class='home'><a href='index.html'><span>Home</span></a></li>
       <li><a><span  style="cursor:pointer"  onclick="openNav2()">Find A Donor</span></a></li>
   <li class='last'><a href='#'><span>Blood Services</span></a>
   	<ul>
    	<li><a href="typesofdonation.html">Types of Donation</a></li>
    	<li><a href="tipsonblooddonating.html">Tips on Blood Donating</a></li>
    	<li><a href="bloodservicesanddisorders.html">Blood Diseases and Disorders</a></li>
    	<li><a href="eligibilitytodonate.html">Eligibility to donate</a></li>
    	<li><a href="bloodfacts.html">Blood Facts</a></li>
    </ul>
   </li>
   <li class='last'><a href='contactus.html'><span>Contact Us</span></a></li>
    <li class='last'><a href='aboutus.html'><span>About Us</span></a></li>
    <li><a href="index.html">LOGOUT</a></li>
</ul>
</div>
    </div>
  </div>
</div>
<!---topbanner end--->
<!---middle--->
<h1 align="center" style="margin-top:140px;">Donors</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood donation";

// Create conection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check conection
if (!$con) {
    die("conection failed: " . mysqli_conect_error());
}
if(isset($_POST['find']))
{
$group = $_POST['bloodgroup'];
$loc= $_POST['location'];
$query = "SELECT * FROM details WHERE bloodgroup='$group' AND location='$loc'";
$result = mysqli_query($con, $query);
if($result)
{
	while($row = mysqli_fetch_array($result))
	{
		$username=$row['username'];
		$emailid=$row['emailid'];
		$location=$row['location'];
		$phoneno=$row['phoneno'];
?>
<table align="center" cellpadding="7" cellspacing="7" width="500">
  <tr><td width="82" valign="top"><div align="left">Username:</div></td><td width="165" valign="top"><?php echo $username ?></td></tr>
  <tr><td valign="top"><div align="left">Emailid:</div></td><td valign="top"><?php echo $emailid ?></td></tr>
  <tr><td valign="top"><div align="left">location:</div></td><td valign="top"><?php echo $location ?></td></tr>
  <tr><td valign="top"><div align="left">phoneno: </div></td><td valign="top"><?php echo $phoneno ?></td></tr>
  <tr><td><a href="msg.php"><input type="button" name="send" value="send msg"></a></td></tr>
</table>
<?php
}
}
}
?>
<!---middle end--->
<!---footer--->
<div id="footer">
  <div id="socialmedia">
  <div id="socialheading">Follow Us</div>
<div class="footer-social-icons">
  <ul class="social-icons">
        <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
    </ul>
</div>
  </div>
  <div id="socialmedia">
 
 
  </div>
  <div id="socialmedia">
  <div id="socialheading">Help Center</div>
  <div id="footcont">
      <li><a href="#">Help center </a></li>
      <li><a href="#">Support</a></li>
      <li><a href="#"> Donate terms</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">Sitemap</a></li>
  </div>
  </div>
  <div id="thanks">
    <div id="footimg"><img src="images/photo-about.jpg"></div>
    <div id="fooimgcont"> <span class="foothead">Thanks you for your donate....</span> <br>
      Usu soleat omnesque te, eius nominavi sadipscing vis, no Meis vituperata cu his. Ex qui ignota percipit temporibus. Quis <hr>
virtute ut eum, option sita suavitate rationibus sea ut. </div>
      <div id="footbutten"><a href="#">Readmore...</a></div>
  </div>
  <div id="copyrights">Copyright © 2017 - Blood Donation Online All Rights Reserved</div>
</div>
<div id="slideshow"><img src="images/image1.jpg" alt="Slideshow Image 1" class="active" />
    <img src="images/image2.jpg" alt="Slideshow Image 2" />
    <img src="images/image3.jpg" alt="Slideshow Image 3" />
</div>
</div>
<blockquote>&nbsp;</blockquote>
</body>
</html>
