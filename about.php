<!doctype html>
<html lang="en">
<head>
	<title>Hive India | About</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<link rel="stylesheet" media="all" href="./front-end/splash.css"/>
	<script src="http://connect.facebook.net/en_US/all.js#xfbml=1" id="facebook-jssdk"></script>
	<meta http-equiv="description" content="Welcome to Hive India, we promote learning and teaching of web and digital media to the people. We strongly believe in people just like you who are eager to learn the Open and Free Standards of the Web."/>
</head>
<body>
<div id="fb-root"></div>
<?php
	require_once("/header.php");
	echo $header;
?>
	<div class="mozH-banner-wrap mozH-smallBlock">
		<div class="mozH-banner">
			<div class="mozH-bannerTag mozH-fixBanner mozH-fixForOther">
				<h1>About Hive India</h1>
				Get to know about the cool community
			</div>
			<img src="./8540302236_6ef3a5c9d2_h.jpg"/>
		</div>
	</div>
	<div class="mozH-content-wrap">
		<div class="mozH-content">
			<div class="mozH-heading">
				Welcome to Hive India
			</div>
			<div class="mozH-text">
			<p>Lorem ispum doner un pos . . I can't think of anything right now, leaving this part on you. :) But you can provide me the para's t insert here.
			</p>
			<p>
			We promote learning and teaching of web and digital media to the people. We strongly believe in people just like you who are eager to learn the Open and Free Standards of the Web. Strengthening us is an army of cool and passionate web makers who thrives to take this mission forward.
			</p>
			</div>
			<!-- Do not touch things past this line -->
			<div class="mozH-social-wrap">
				<div class="mozH-social">
					<div class="fb-like" data-href="http://hive.mozillaindia.org" data-width="120" data-layout="button_count" data-show-faces="true" data-send="true"></div>
					    <a href="https://twitter.com/share" class="twitter-share-button" data-dnt="true" data-count="none" data-via="twitterapi">Tweet</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
			</div>
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