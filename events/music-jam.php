<!doctype html>
<html lang="en">
<head>
	<title>Hive India | Music JAM</title>
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
				<h1>Projects | Music Jam</h1>
				Create together your own musical instruments
			</div>
			<img src="http://hive.mozillaindia.org/img/8540340754_31b3ac8161_b.jpg"/>
		</div>
	</div>
	<div class="mozH-content-wrap">
		<div class="mozH-content">
			<div class="mozH-heading">
				Music JAM
			</div>
			<div class="mozH-text">
			<p><img class="mozH-image" src="http://www.hiveathens.org/media/k2/items/cache/ada9a09acea936d776a6f55c82778c43_M.jpg"/>
			On MusicJam we create together our own musical instruments and will be for awhile a complex different from the other.
			</p>
			<p>The keys, percussion, guitar and other experimental instruments reside within computers. "We ourselves" musical instruments in the real world and "play" music with the movement of our bodies.</p>
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