  <!doctype html>
<html lang="en">
<head>
	<title>Hive India | TiltMe</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<link rel="stylesheet" media="all" href="http://hive.mozillaindia.org/front-end/splash.css"/>
	<script src="http://connect.facebook.net/en_US/all.js#xfbml=1" id="facebook-jssdk"></script>
	<meta http-equiv="description" content="Welcome to Hive India, we promote learning and teaching of web and digital media to the people. We strongly believe in people just like you who are eager to learn the Open and Free Standards of the Web."/>
</head>
<body>
<?php
	require_once("../header.php");
	echo $header;
	require_once("../widget.php");
	echo $widget;
?>
	<div class="mozH-banner-wrap mozH-topMost mozH-smallBlock">
		<div class="mozH-banner">
			<div class="mozH-bannerTag mozH-fixBanner">
				<h1>Projects | TiltMe</h1>
				Resistor + Capacitor = Voltage Regulator
			</div>
			<img src="http://hive.mozillaindia.org/img/8540340754_31b3ac8161_b.jpg"/>
		</div>
	</div>
	<div class="mozH-content-wrap">
		<div class="mozH-content">
			<div class="mozH-heading">
				Electronics TiltMe
			</div>
			<div class="mozH-text">
			<p><img class="mozH-image" src="http://www.hiveathens.org/media/k2/items/cache/9caa2793658f3cc387f216157300b1ce_M.jpg"/>
			LEDs, resistors, cables, batteries ... A sensor. Concepts encoded, words lost in kyklwtikis hyperstimulation neural network profiles or a simple creative electronic application;</p>
			<p>Take part in a workshop designed for the robotixlab Hive, invented the inventor that you hiding inside yourself and learn the basics of an electronic circuit making the tiltMe. The tiltMe is a DIY night light to light enough not to press a switch. Improvised creatively and modified the building making it unique.</p>
			<p>This workshop contains all the necessary parts, tools and instructions to construct and modify the tiltMe. Leaving you will get with you making that cake!</p>
			</div>
			<!-- Social Stuff -->
<?php
	require_once("../social.php");
	echo $social;
?>
			<!-- Upto Here -->
		</div>
	</div>
<?php
	/*
		Looking to add partner or change footer?
		Open footer.php, look for class mozH-partner,
		add an image wrapped in the link, just as the jaaga one.
	*/
	require_once("../footer.php");
	echo $footer;
?>

</body>
</html>
