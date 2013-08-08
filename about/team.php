<!doctype html>
<html lang="en">
<head>
	<title>Hive India | Team</title>
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
	<div class="mozH-banner-wrap mozH-smallBlock">
		<div class="mozH-banner">
			<div class="mozH-bannerTag mozH-fixBanner mozH-fixForOther">
				<h1>Hive India Team</h1>
				Join our awesome army!
			</div>
			<img src="http://hive.mozillaindia.org/img/team_1.jpg"/>
		</div>
	</div>
	<div class="mozH-content-wrap">
		<div class="mozH-content">
			<div class="mozH-heading">
				Our Troops!
			</div>
			<div class="mozH-text">
				<p>We are not an ordinary team working with team leaders or following the workflows, instead each and every memebr in our community is a leader of his/her field. We work not for profit, neither to raise any charity but we work to help spread the technology and take it to everyone.</p>
				<p>If you find someone helping people at Hive event jumping from music jam to comic creator with immense energy and coolness then its surely our team member. We help people to build things, let them find the right resources and tools required to excel their creativity</p>
				<p>Sounds Awesome? Wanna show your awesomess? How about joining us? You can pick any or all fields in which you want to volunteer. Volunteers are awarded cool goodies and much more. To join, follow any of the below:</p>
				<ul>
				<li>
					Request ping back from <a href="http://hive.mozillaindia.org/contact"> contact us page</a>.
				</li>
				<li>
					Contact Vinnel <<a href="mailto:events@mozillaindia.org">events@mozillaindia.org</a>>
				</li>
				<li>Catch us on irc <a href="irc://irc.mozilla.org/">#mozillahive</a> <i>[awaiting confirmation]</i></li>
				<li>Tweet us at <a href="https://twitter.com/intent/tweet?original_referer=http://hive.mozillaindia.org/team&text=I want to join hiveIndia&tw_p=tweetbutton&url=http%3A%2F%2Flocalhost%2FmozHive%2Fteam&via=hiveindia">@hiveindia</a></li>
				</ul>
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