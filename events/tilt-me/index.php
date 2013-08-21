  <!doctype html>
<html lang="en">
<head>
	<title>Hive India | TiltMe</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<link rel="stylesheet" media="all" href="http://hive.mozillaindia.org/front-end/splash.css"/>
	<script src="http://connect.facebook.net/en_US/all.js#xfbml=1" id="facebook-jssdk"></script>
	<meta name="description" content="Welcome to Hive India, we promote learning and teaching of web and digital media to the people. We strongly believe in people just like you who are eager to learn the Open and Free Standards of the Web."/>
	<?php
		require_once("../../og.php");
		echo $og;
	?>
</head>
<body>
<?php
	require_once("../../header.php");
	echo $header;
	require_once("../../widget.php");
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
			<div class="mozH-text">
				<h2 style="margin:0;width: 960px;text-align:left;font-size: 18px;border-bottom: 1px solid #eee;">Workshop Partners</h2>
				<p>
					<a href="http://www.3Ding.in/"><img class="mozH-image" src="/img/3ding.png" style="width:150px;box-shadow:none;"/></a>
					<h4>3Ding</h4>
					3D-ing is a part of Redd Robotics focused on bringing 3D printers and 3D printing services to the common man at affordable prices in the country. Sounds amazing? Well they will take you with more amusement on the day of workshop, stay close to them maybe they will make your 3D avatar!
				</p>
				<p align="right"><a href="http://www.3Ding.in/">www.3Ding.in</a></p>
				</div>
				<div class="mozH-text">
				<p>
					<a href="http://www.simplelabs.co.in/"><img class="mozH-image" src="/img/simplelabs.png" style="width:150px;box-shadow:none;"/></a>
					<h4> Simple Labs </h4>
					Simple Labs Work closely with the electronics and the components of it. They will fill you with the coolest learning about electronics upto the brink. Simple Labs work closely with electronics components that will take your fantasy.
					<br/>
				<p align="right"><a href="http://www.simplelabs.co.in/">www.simplelabs.co.in</a></p>
				</p>
			</div>
			<div class="mozH-text">
				<p>
					<a href="http://www.simplelabs.co.in/"><img class="mozH-image" src="/img/niche.png" style="width:150px;box-shadow:none;"/></a>
					<h4>FireFlies | Niche</h4>
					FireFlies is a session on wearable technology by NICHE(<b>N</b>ew <b>I</b>deas <b>I</b>n <b>C</b>hildren's <b>E</b>ducation). In this session we will focus on showing how electronics can be used in clothing and accessories for form and function. Lighting up costumes to adding music and monitoring health, we will show how electronics can be added to wearables. The participants will get a chance to assemble their own electronic clothing.
					<br/>
				</p>
			</div>
			<div class="mozH-text">
				<p>
					<a href="http://www.cycloid.in/"><img class="mozH-image" src="img/cycloid.png" style="width:150px;box-shadow:none;"/></a>
					<h4>Cycloid</h4>
					Cycloid works in the field of 3D printing. Cycloid System has small team of like minded engineers having background various engineering branches such as Instrumentation and Control, Electronics, Mechanical, Mechatronics and Computer.
					<br/>
					<p align="right"><a href="http://www.cycloid.in/">www.cycloid.in</a></p>
				</p>
			</div>
			<h2 style="margin:0;width: 960px;text-align:left;font-size: 18px;border-bottom: 1px solid #eee;">Speaker's</h2>
			<div class="mozH-text">
				<p>
					<a href="http://www.sudarmuthu.com"><img class="mozH-image" src="img/sudar.jpg" style="width:150px;box-shadow:none;"/></a>
					<h4>Sudar Muthu</h4>
					Sudar builds robots as a hobby and Arduino is his playground. Check out his hardware projects at <a href="http://hardwarefun.com">http://hardwarefun.com</a>. The session will help people to build basic electronics circuits and also get an idea about Arduino and Raspberry Pi.
					<br/>
					<p align="right"><a href="http://www.sudarmuthu.com">http://www.sudarmuthu.com</a></p>
				</p>
			</div>
			
			<!-- Social Stuff -->
<?php
	require_once("../../social.php");
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
	require_once("../../footer.php");
	echo $footer;
?>

</body>
</html>
