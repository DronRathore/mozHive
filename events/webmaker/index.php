 <!doctype html>
<html lang="en">
<head>
	<title>Hive India | Remixing Web</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<link rel="stylesheet" media="all" href="http://hive.mozillaindia.org/front-end/splash.css"/>
	<script src="http://connect.facebook.net/en_US/all.js#xfbml=1" id="facebook-jssdk"></script>
	<meta http-equiv="description" content="Welcome to Hive India, we promote learning and teaching of web and digital media to the people. We strongly believe in people just like you who are eager to learn the Open and Free Standards of the Web."/>
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
				<h1>Projects | Remixing Web</h1>
				So whats in your mind thats going to be awesome?
			</div>
			<img src="http://hive.mozillaindia.org/img/8540340754_31b3ac8161_b.jpg"/>
		</div>
	</div>
	<div class="mozH-content-wrap">
		<div class="mozH-content">
			<div class="mozH-heading">
				Remixing Webpages
			</div>
			<div class="mozH-text">
			<p><img class="mozH-image" src="http://www.hiveathens.org/media/k2/items/cache/4965657af186b9092c7a96976ffe881c_M.jpg"/>
			The laboratory develops Websites on Remixing idea that the text is a driving force for today's digital technology and its applications.</p>
			<p>In the context of informal education the idea is worth investigating and come with dialogue with the dominant perception of the prevalence of audiovisual information. Free tools can become a structural part of informal education and open culture is directly related to this.</p>
			<p>The workshop focuses on criticism of creative approach to the way they made a website and use of the various versions. We have borrowed the methodology of Dada, have mixed up words and phrases, we added our own, we replaced words and concepts with pictures that we found on the Internet and all these with basic means the Thimble, with simple html and the result was definitely interesting and expressed different views. Viewed in hindsight the creations we could say that utilized a variety of online modes in different formats (gif, static images, links) mixarontas but at the same time produced written word, illustration, humor and interesting ideas.</p>
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