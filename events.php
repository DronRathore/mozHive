<!doctype html>
<html lang="en">
<head>
	<title>Hive India | PopUp Events</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<link rel="stylesheet" media="all" href="./front-end/splash.css"/>
	<script src="http://connect.facebook.net/en_US/all.js#xfbml=1" id="facebook-jssdk"></script>
	<meta http-equiv="description" content="Welcome to Hive India, we promote learning and teaching of web and digital media to the people. We strongly believe in people just like you who are eager to learn the Open and Free Standards of the Web."/>
</head>
<body class="mozH-marketplaceStyle">
<div id="fb-root"></div>
<?php
	require_once("/header.php");
	echo $header;
?>
	<div class="mozH-banner-wrap mozH-topMost">
		<div class="mozH-banner">
			<div class="mozH-bannerTag">
				<h1>Pop-Up Events</h1>
				Events that are awesome and made for everyone!
			</div>
			<img src="./8540340754_31b3ac8161_b.jpg"/>
		</div>
	</div>
	<div class="mozH-content-wrap">
		<div class="mozH-content">
			<div class="mozH-heading">
				Pop-Up Events
			</div>
			<div class="mozH-text">
			<p>Something like info text goes here...</p>
			<ul class="mozH-noStyle">
				<li>
					<div class="mozH-eventWrap">
						<div class="mozH-eventThumb">
							<img src="https://webmaker.org/img/img-Guides-Kitchen-Party.jpg"/>
							<div class="mozH-hiddenLink">
									For Awesome stuff <a href="https://webmaker.makes.org/thimble/how-to-host-a-kitchen-party">Jack in here</a>
							</div>
						</div>
						<div class="mozH-eventDescWrap">
							<div class="mozH-eventDesc">
								<h4>Kitchen Party</h4>
								<div class="mozH-text">
								A small get together with your known ones or with some kids in your neighbourhood. Spend an hour on a rainy day, hang out as a family on the computer, learn to hack with a friend. Make cool things on the web!
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="mozH-eventWrap">
						<div class="mozH-eventThumb">
							<img src="https://webmaker.org/img/img-Guides-Hack-Jam.jpg"/>
							<div class="mozH-hiddenLink">
									More cool info, <a href="https://webmaker.makes.org/thimble/host-a-hack-jam">follow here</a>
							</div>
						</div>
						<div class="mozH-eventDescWrap">
						<h4>Hack Jam!</h4>
								<div class="mozH-text">
								Team up people with different skill-sets to explore an interesting challenge. Collaboratively build something new or improve something that already exists. Learn and teach new hacking skills
								</div>
						</div>
					</div>
				</li>
				<li>
					<div class="mozH-eventWrap">
						<div class="mozH-eventThumb">
							<img src="https://webmaker.org/img/img-Guides-Hive-Pop-up.jpg"/>
							<div class="mozH-hiddenLink">
									Want more ideas? <a href="https://webmaker.makes.org/thimble/host-a-hive-popup">Follow here</a>
							</div>
						</div>
						<div class="mozH-eventDescWrap">
						<h4>Hive Pop-Up</h4>
								<div class="mozH-text">
								A Hive Pop-Up is fantastic way to bring together local organizations in a science fair setting, demonstrate cool web ideas together, provide fun hands-on activities, introduce your community to hacking. And most importantly Have Fun!
								</div>
						</div>
					</div>
				</li>
			</ul>
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