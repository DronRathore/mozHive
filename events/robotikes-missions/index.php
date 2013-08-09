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
				<h1>Projects | ROPOTIKES MISSIONS</h1>
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
