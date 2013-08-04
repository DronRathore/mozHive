<?php
$path = "http://localhost/mozHive";
$header=<<<HEADER
<body>
	<div class="mozH-header-wrap">
		<div class="mozH-head">
			<div class="mozH-lfloat">
				<a href="$path"><div class="mozH-logo">
				hive<label class="text">India</label>
				</div></a>
			</div>
			<div class="mozH-rfloat">
				<ul class="mozH-noStyle">
					<li><a href="$path" class="mozH-topL">HOME</a></li>
					<li>
					<div class="mozH-flyout-wrap">
							<div class="mozH-flyout">
								<div class="mozH-pointer"></div>
								<div class="mozH-links">
									<a href="$path/about">ABOUT HIVE INDIA</a>
									<a href="$path/team">THE TEAM</a>
								</div>
							</div>
					</div>
					<a href="$path/about" class="mozH-topL">HIVE INDIA</a></li>
					<li>
					<div class="mozH-flyout-wrap mozH-flyoutFix">
						<div class="mozH-flyout">
							<div class="mozH-pointer"></div>
							<div class="mozH-links">
								<a href="$path/popup-events">WORKSHOPS</a>
							</div>
							</div>
					</div>
<a href="$path/popup-events" class="mozH-topL">POP-UP EVENT</a></li>
					<li>
					<div class="mozH-flyout-wrap">
							<div class="mozH-flyout">
								<div class="mozH-pointer mozH-fixPointer"></div>
								<div class="mozH-links">
									<a href="$path/tools">ALL TOOLS</a>
									<a href="https://popcorn.webmaker.org/">POPCORN MAKER</a>
									<a href="http://thimble.webmaker.org/">THIMBLE MAKER</a>
									<a href="http://thimble.webmaker.org/">X-RAY TOOL</a>
								</div>
							</div>
					</div>
					<a href="$path/tools" class="mozH-topL">TOOLS</a></li>
					<li><a href="$path/contact" class="mozH-topL">CONTACT</a></li>
				</ul>
			</div>
		</div>
	</div>
HEADER;
