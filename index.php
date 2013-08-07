<!doctype html>
<html lang="en">
<head>
	<title>Hive India | Mozilla India</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<link rel="stylesheet" media="all" href="./front-end/splash.css"/>
	<meta http-equiv="keywords" content="Hive India, Hive, mozhive, Mozilla India, makerparty, web maker, awesome"/>
	<meta http-equiv="description" content="Welcome to Hive India, we promote learning and teaching of web and digital media to the people. We strongly believe in people just like you who are eager to learn the Open and Free Standards of the Web."/>
	<noscript>
		<style>
		.throbber{display: none;}
		</style>
	</noscript>
</head>
<?php
	require_once("./header.php");
	echo $header;
?>
	<div class="throbber" id="throbber">
		<div class="inside">
			<div class="logo">
				<img src="img/mozHive.jpg"/>
			</div>
			<div class="rotator"></div>
		</div>
	</div>
	<div class="mozH-banner-wrap mozH-topMost">
		<div class="mozH-banner">
			<div class="mozH-bannerTag">
				<h1>EXPLORE + CREATE + SHARE</h1>
			</div>
			<img src="img/8540327088_252473420e_h.jpg" onload="document.getElementById('throbber').style.display = 'none';"/>
		</div>
	</div>
	<div class="mozH-block-wrap">
		<div class="mozH-block">
			<div class="mozH-innerB">
			<h2><div class="mozH-topList"><img src="img/mozHive.jpg" class="mozH-iLogo"/><div class="mozH-lfloat mozH-fixH2">#Explore</div></div></h2>

			<div class="mozH-lfloat mozH-text">
			Hive India promotes experiential learning through the interests of young people and the creative use of digital media. The Hive India is an attempt to map and empower a community of educators and creative people who share a passion to innovate, evolve and change the learning landscape.
			<a href="/about" class="green-button">Learn more</a>
			</div>
		</div>
		</div>
	</div>
	<div class="mozH-banner-wrap mozH-smallBlock">
		<div class="mozH-banner">
		<div class="mozH-bannerTag mozH-fixBanner">
				<h1>Learn how to develop web</h1>
				Get to know the technology behind the working of web
			</div>
			<img src="img/8539238893_3a47ebc219_c.jpg"/>
		</div>
	</div>
	<div class="mozH-block-wrap">
		<div class="mozH-block">
			<div class="mozH-innerB">
			<h2>#Learn</h2>

			<div class="mozH-lfloat mozH-text">
			Come be a part of our events and learn the coolest new web technologies, from creating a web page which has the CSS3 styles to creating an awesome popcorn make. You need not to be an expert, even if you have no idea what all these things sounds to you we will let you know and will help you in developing some cool stuff. Either work in a team or as an individual this is purely your choice. <a href="./popup-events">Learn More</a>
			</div>
		</div>
		</div>
	</div>
	<div class="mozH-banner-wrap mozH-smallFix">
		<div class="mozH-banner">
		<div class="mozH-bannerTag mozH-fixBanner">
				<h1>Connect with awesome people</h1>
				Get connected with cool people from different places
			</div>
			<img src="img/IMG_2533.JPG"/>
		</div>
	</div>
	<div class="mozH-block-wrap">
		<div class="mozH-block">
			<div class="mozH-innerB">
			<h2>#connect</h2>

			<div class="mozH-lfloat mozH-text">
			Connect with new cool peoples from various part of the country and the world, work together, have fun. <a href="./team">Learn more</a>
			</div>
		</div>
		</div>
	</div>
	<div class="mozH-banner-wrap mozH-smallFix">
		<div class="mozH-banner">
		<div class="mozH-bannerTag mozH-fixBanner">
				<h1>Join us on #makerparty</h1>
				Learn, Design, Develop and Share your Skills
			</div>
			<img src="img/cards.JPG"/>
		</div>
	</div>
	<div class="mozH-block-wrap">
		<div class="mozH-block">
			<div class="mozH-innerB">
			<h2>#makerparty</h2>

			<div class="mozH-lfloat mozH-text">
			Connect with new cool people, design or build something awesome together, that what the #makerparty is for.
			</div>
		</div>
		</div>
	</div>
<?php
	require_once("./footer.php");
	echo $footer;
?>
</body>
</html>
