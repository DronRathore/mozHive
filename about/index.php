<!doctype html>
<html lang="en">
<head>
	<title>Hive India | About</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<link rel="stylesheet" media="all" href="http://hive.mozillaindia.org/front-end/splash.css"/>
	<script src="http://connect.facebook.net/en_US/all.js#xfbml=1" id="facebook-jssdk"></script>
	<meta http-equiv="description" content="Welcome to Hive India, we promote learning and teaching of web and digital media to the people."/>
	<?php
		require_once("../og.php");
		echo $og;
	?>
</head>
<?php
	require_once("../header.php");
	echo $header;
	require_once("../widget.php");
	echo $widget;
?>
	<div class="mozH-banner-wrap mozH-smallBlock">
		<div class="mozH-banner">
			<div class="mozH-bannerTag mozH-fixBanner mozH-fixForOther">
				<h1>About Hive India</h1>
				Get to know about the cool community
			</div>
			<img src="http://hive.mozillaindia.org/img/8540302236_6ef3a5c9d2_h.jpg"/>
		</div>
	</div>
	<div class="mozH-content-wrap" style="margin: 0 auto;">
		<div class="mozH-content">
			<div class="mozH-heading">
				Welcome to Hive India
			</div>
			<div class="mozH-text" style="font-weight:normal;">
			<p> 
			</p>
			<p>Hive India is a network of organizations that share resources to advance learning in India. Hive India promotes experiential learning through the interests of young people and the creative use of digital media. The Hive India is an attempt to map and empower a community of educators and creative people who share a passion to innovate, evolve and change the learning  landscape. Hive India is a initiative of Mozilla India regional community, a community that is part of global community of Mozilla.
			</p>
			<p>
			   Hive India is a initiative of Mozilla India regional community, a community that is part of global community of Mozilla.
			</p>
			<h2 style="margin:0;text-align:left;font-size: 18px;border-bottom: 1px solid #eee;">Our Core Beliefs</h2>
				<ul>
					<li>
					School is not the sole provider in a community’s educational system
					</li>
					<li>
					Youth need to be both sophisticated consumers and active producers of digital media
					</li>
					<li>
					Learning should be driven by youth’s interests
					</li>
					<li>
					Digital media and technology are the glue and amplifier for connected learning experiences
					</li>
					<li>
					Out-of-school time spaces are fertile grounds for learning innovation
					</li>
					<li style="font-weight:bold;">Organizations must collaborate to thrive</li>
				</ul>
				<p>
				Hive India operates as a learning lab, where members network with each other, share best practices and pedagogies, learn about and play with new technologies, participate in events, and most importantly, collaborate to create learning opportunities for Indian youth. As part of  the network, members have access to the following support and services:
				</p>
				<ul>
				<li>
				    Chance to participate in events in and beyond India that illustrate the work of network members and promote Connected Learning principles,  digital literacy AND webmaking skills
				</li>
				<li>
				Opportunity to promote new, programs and events through Hive India  communications channels (blog, Facebook, Twitter, etc.), as well as  youth and volunteer recruitment
				</li>
				<li>
				A knowledge exchange for members to share models, ideas, content, tools and best-practices with each other
				</li>
				<li>
				Professional Development sessions that develop staff through network peer mentoring, modeling and sharing
				</li>
				<li>
				Monthly, in-person meet-ups and conference calls that allow for members to share program updates, best practices, and learn about new opportunities
				</li>
				</ul>
				<p>
				<b>Sounds awesome?</b> How about becoming a partner of us and help us in this mission. <a href="http://hive.mozillaindia.org/contact">Contact us</a> to become a partner or <a href="http://hive.mozillaindia.org/team">follow here</a> to become a volunteer.
				</p>
			</div>
			<!-- Do not touch things past this line
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
