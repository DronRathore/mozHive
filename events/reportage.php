 <!doctype html>
<html lang="en">
<head>
	<title>Hive India | Reportage</title>
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
				<h1>Pop-Up Event | Reportage</h1>
				Hi all i am Mozilla!
			</div>
			<img src="../8540340754_31b3ac8161_b.jpg"/>
		</div>
	</div>
	<div class="mozH-content-wrap">
		<div class="mozH-content">
			<div class="mozH-heading">
				Reportage
			</div>
			<div class="mozH-text">
			<p><img class="mozH-image" src="http://www.hiveathens.org/media/k2/items/cache/94d43e327d9303539cb1e2aac7032668_M.jpg"/>
			We take cameras and microphones and will become reporters for the Hive.</p><p> With the guidance of experienced journalists, we want to show in the most simple way how information can become news. Through our own previous reportage, narratives and adventures will talk about the basic principles of journalism and all the ingredients that make a reportage to discuss!</p>
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