<!doctype html>
<html lang="en">
<head>
	<title>Hive India | Team</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<link rel="stylesheet" media="all" href="./front-end/splash.css"/>
	<script src="http://connect.facebook.net/en_US/all.js#xfbml=1" id="facebook-jssdk"></script>
	<meta http-equiv="description" content="Welcome to Hive India, we promote learning and teaching of web and digital media to the people. We strongly believe in people just like you who are eager to learn the Open and Free Standards of the Web."/>
</head>
<body>
<div id="fb-root"></div>
<?php
	require_once("./header.php");
	echo $header;
?>
	<div class="mozH-banner-wrap mozH-smallBlock">
		<div class="mozH-banner">
			<div class="mozH-bannerTag mozH-fixBanner mozH-fixForOther">
				<h1>Hive India Team</h1>
				Get to know our awesome team!
			</div>
			<img src="./prj.jpg"/>
		</div>
	</div>
	<div class="mozH-content-wrap">
		<div class="mozH-content">
			<div class="mozH-heading">
				Our Troops!
			</div>
			<div class="mozH-text">
			<p>Something like info text goes here...</p>
			<h2 id="h2">The Team</h2>
			<!-- Stop Laughing! I am trying to get it quicker so using table -->
			<table class="mozH-team">
				<tr>
					<td>
						<img src="https://secure.gravatar.com/avatar/9e6f83fce2122b5344300b51d01364c5?s=150x150"/>
					</td>
					<td>
						<h4>Meraj Imran, Warangal</h4>
						<div class="mozH-infoText">Working in sub urbs, he is an awesome webmaker volunteer, facebook was his first thimble.</div>
					</td>
				</tr>
				<tr>
					<td>
						<img src="https://secure.gravatar.com/avatar/10662200eb2d45657cec28caef3d309f?s=150x150"/>
					</td>
					<td>
						<h4>Komal Gandhi, Bhopal</h4>
						<div class="mozH-infoText">Well her first webmake was google.com, oh you know that make? Cool!</div>
					</td>
				</tr>
				<tr>
					<td>
						<img src="https://mozillians.org/media/uploads/sorl-cache/bb/91/bb91db072e66710aa7e72d276a31c81e.jpg"/>
					</td>
					<td>
						<h4>Soumya Deb, Bangalore</h4>
						<div class="mozH-infoText">Well he made all from facebook to twitter, from napster to myspace, these all are inspired by him.</div>
					</td>
				</tr>
			</table>
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
	require_once("./footer.php");
	echo $footer;
?>
</body>
</html>