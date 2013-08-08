  <!doctype html>
<html lang="en">
<head>
	<title>Hive India | COMIC STORYBOARD</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<link rel="stylesheet" media="all" href="../front-end/splash.css"/>
	<script src="http://connect.facebook.net/en_US/all.js#xfbml=1" id="facebook-jssdk"></script>
	<meta http-equiv="description" content="Welcome to Hive India, we promote learning and teaching of web and digital media to the people. We strongly believe in people just like you who are eager to learn the Open and Free Standards of the Web."/>
</head>
<body>
<?php
	require_once("/header.php");
	echo $header;
?>
	<div class="mozH-banner-wrap mozH-topMost mozH-smallBlock">
		<div class="mozH-banner">
			<div class="mozH-bannerTag mozH-fixBanner">
				<h1>Pop-Up Event | COMIC STORYBOARD</h1>
				Let you creativity flows!
			</div>
			<img src="../8540340754_31b3ac8161_b.jpg"/>
		</div>
	</div>
	<div class="mozH-content-wrap">
		<div class="mozH-content">
			<div class="mozH-heading">
				COMIC STORYBOARD
			</div>
			<div class="mozH-text">
			<p><img class="mozH-image" src="http://www.hiveathens.org/media/k2/items/cache/ffee2447b152494b43d9816faaea83c8_M.jpg"/>
			Invent, mix and compile your own narratives through comics!</p>
			<p>The art of comics is a narrative medium, combining image and why, in a unique way. And as a separate art has this secret codes and techniques. These codes and techniques we explore with them playing and creating stories comics taking inspiration from the world's greatest lie!</p>
			</div>
			<!-- Social Stuff -->
<?php
	require_once("./social.php");
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
	require_once("/footer.php");
	echo $footer;
?>

</body>
</html>