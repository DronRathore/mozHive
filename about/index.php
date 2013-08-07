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
	<div class="mozH-banner-wrap mozH-smallBlock">
		<div class="mozH-banner">
			<div class="mozH-bannerTag mozH-fixBanner mozH-fixForOther">
				<h1>Hive India Team</h1>
				Join our awesome army!
			</div>
			<img src="./team_1.jpg"/>
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
					Request ping back from <a href="./contact"> contact us page</a>.
				</li>
				<li>
					Contact Vinnel <<a href="mailto:vineelreddypindi@gmail.com">vineelreddypindi@gmail.com</a>> or Soumya <<a href="mailto:debloper@gmail.com">debloper@gmail.com</a>>
				</li>
				<li>Catch us on irc <a href="irc://irc.mozilla.org/">#mozillahive</a> <i>[awaiting confirmation]</i></li>
				<li>Tweet us at <a href="https://twitter.com/intent/tweet?original_referer=http://hive.mozillaindia.org/team&text=I want to join hiveIndia&tw_p=tweetbutton&url=http%3A%2F%2Flocalhost%2FmozHive%2Fteam&via=hiveindia">@hiveindia</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mozH-centerBodyWrap">
		<div class="mozH-centerBody">
			<h3>Contact Hive India</h3>
			<form action="./contact" method="POST">
				<!-- I know you are laughing here, but hey you can replace table with alternate -->
				<table class="mozH-contactForm">
					<tr>
						<td>
							Full Name
						</td>
						<td>
							<input type="text" name="name" autofocus placeholder="Your Full Name" aria-label="Your Full Name"/>
						</td>
					</tr>
					<tr>
						<td>
							Email
						</td>
						<td>
							<input type="email" name="email" required validate placeholder="Your Email Address" aria-label="Your Email Address"/>
						</td>
					</tr>
					<tr>
						<td>
							Your Message
						</td>
						<td>
							<textarea name="message" required placeholder="A brief message you want to send us" aria-label="A brief message you want to send us"></textarea>
						</td>
					</tr>
				</table>
				<center><input type="submit" class="mozH-submitButton" value="Ping us"/></center>
			</form>
		</div>
	</div>
<?php
	/*
		Looking to add partner or change footer?
		Open footer.php, look for class mozH-partner,
		add an image wrapped in the link, just as the jaaga one.
	*/
	require_once("./social.php");
	echo $social;
	require_once("/footer.php");
	echo $footer;
?>
</body>
</html>