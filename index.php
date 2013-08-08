<!doctype html>
<html lang="en">
<head>
	<title>Hive India | Mozilla India</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<link rel="stylesheet" media="all" href="http://hive.mozillaindia.org/front-end/splash.css"/>
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
	require_once("./widget.php");
	echo $widget;
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
				<h1 style="font-size: 34px;">EXPLORE + CREATE + SHARE</h1>
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
				<h1>Learn something, Create something</h1>
				 Get your engines rolling for creating awesome things on the go
			</div>
			<img src="img/8539238893_3a47ebc219_c.jpg"/>
		</div>
	</div>
	<div class="mozH-block-wrap">
		<div class="mozH-block">
			<div class="mozH-innerB">
			<h2>#Create</h2>

			<div class="mozH-lfloat mozH-text">
			Learn the coolest new technologies, from creating a web page to creating a electronic circuit, to making a video, to creating music. You need not to  be an expert, even if you have no idea what all these things sounds to  you we will let you know and will help you in creating some cool  stuff. Either work in a team or as an individual this is purely your  choice. <a href="./events">Learn More</a>
			</div>
		</div>
		</div>
	</div>
	<div class="mozH-banner-wrap mozH-smallFix">
		<div class="mozH-banner">
		<div class="mozH-bannerTag mozH-fixBanner">
				<h1>Connect with awesome people</h1>
				Share your skills to double the awesomeness
			</div>
			<img src="img/IMG_2533.JPG"/>
		</div>
	</div>
	<div class="mozH-block-wrap">
		<div class="mozH-block">
			<div class="mozH-innerB">
			<h2>#share</h2>

			<div class="mozH-lfloat mozH-text">
			Connect with educators from museums, libraries and after-school programs to create educational programs in which young people develop skills through the prism of discovery, creation and  collaboration. Connect with new cool people from various parts of the country and the world, work together, have fun. <a href="./team">Learn more</a>
			</div>
		</div>
		</div>
	</div>
	<div class="mozH-banner-wrap mozH-smallFix">
		<div class="mozH-banner">
		<div class="mozH-bannerTag mozH-fixBanner">
				<h1>Join us at #makerparty</h1>
				Learn, Design or Build something awesome together
			</div>
			<img src="img/cards.JPG"/>
		</div>
	</div>
	<div class="mozH-block-wrap">
		<div class="mozH-block">
			<div class="mozH-innerB">
			<h2>#makerparty</h2>

			<div class="mozH-lfloat mozH-text">
			Maker Party 2013 will be happening on <b>Saturday, 7th September</b> at <em>Jagaa.in, Bangalore</em>. We will be hosting a series of workshops that encourage learning through experimentation, construction and creation. If you have an idea for a workshop or interested in facilitating with one of the sessions at Maker Party 2013, <a href="./events#makerparty">read here</a>.
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
