 <!doctype html>
<html lang="en">
<head>
	<title>Hive India | ROBOTIKES MISSIONS</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<link rel="stylesheet" media="all" href="http://hive.mozillaindia.org/front-end/splash.css"/>
	<script src="http://connect.facebook.net/en_US/all.js#xfbml=1" id="facebook-jssdk"></script>
	<meta name="description" content="Welcome to Hive India, we promote learning and teaching of web and digital media to the people. We strongly believe in people just like you who are eager to learn the Open and Free Standards of the Web."/>
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
				<h1>Projects | ROBOTIKES MISSIONS</h1>
				Watch out Robots here!
			</div>
			<img src="http://hive.mozillaindia.org/img/8540340754_31b3ac8161_b.jpg"/>
		</div>
	</div>
	<div class="mozH-content-wrap">
		<div class="mozH-content">
			<div class="mozH-heading">
				ROBOTIKES MISSIONS
			</div>
			<div class="mozH-text">
			<p><img class="mozH-image" src="http://www.hiveathens.org/media/k2/items/cache/e0a70f72bdae9885bfc32d7cd19a26a1_M.jpg"/>
			How to "see" the robots? How to decide to stop or to twist to avoid an obstacle? How to understand that arrived to the point that they want?</p>
			<p>To answer all these questions, you will assemble your robot and you will see how it works in practice. We plan to perform only one task, such as following a planned line to ground, and you will immediately see the result of your choices.</p>
			</div>
			<div class="mozH-text">
				<h2 style="margin:0;width: 960px;text-align:left;font-size: 18px;border-bottom: 1px solid #eee;">Workshop Partners</h2>
				<p>
					<a href="http://www.redd.co.in/"><img class="mozH-image" src="/img/redd.png" style="width:150px;box-shadow:none;"/></a>
					<h4>Redd Robotics</h4>
					Redd Robotics is a tech startup providing services in the Robotics, Automation and Embedded Systems domain. On the other hand, Redd is actively working on open source mechanical platforms for different types of Robots and an open source Home Automation Project (codenamed Project SoftSwitch).
					<p align="right">Redd Robotics will teach you the best of the current robo trends and will make you work on it together with cool mechanical stuff!</p>
				</p>
				<p align="right"><a href="http://www.redd.co.in">www.redd.co.in</a></p>
				</div>
				<div class="mozH-text">
				<p>
					<a href="http://www.roboinventions.com/"><img class="mozH-image" src="/img/robori.png" style="width:150px;box-shadow:none;"/></a>
					<h4>Robo ri Inventions</h4>
					We are a team of wild geeks who share the roof of a junkyard (we also call it office) and an undying passion for Robotics. A company that has a somewhat unreasonable goal – To equip every Indian business, big or small, with a robot or a machine that can simplify their work. Robo-ri-Inventions work in 3 Level approach, Learn - Tinker - Innovate!<br/>
				<p align="right">Robo ri Inventions will blow your minds with their excellency in the field of robo programming and design.</p>
				<p align="right"><a href="http://www.roboinventions.com/">www.roboinventions.com</a></p>
				</p>
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
