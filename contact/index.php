<!doctype html>
<html lang="en">
<head>
	<title>Hive India | Conatct Us</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<link rel="stylesheet" media="all" href="http://hive.mozillaindia.org/front-end/splash.css"/>
	<script src="http://hive.mozillaindia.org/front-end/squash.js"></script>
	<meta name="description" content="Welcome to Hive India, we promote learning and teaching of web and digital media to the people. We strongly believe in people just like you who are eager to learn the Open and Free Standards of the Web."/>
	<?php
		require_once("../og.php");
		echo $og;
	?>
</head>
<body class="mozH-bigimage">
<?php
	require_once("../header.php");
	echo $header;
?>
	<div class="mozH-centerBodyWrap">
		<div class="mozH-centerBody">
			<h3>Contact Hive India</h3>
			<form action="./c.php" method="POST" onsubmit="return doContact(this)">
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
	require_once("../footer.php");
	echo $footer;
?>
</body>
</html>
