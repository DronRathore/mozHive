<?php
$path = "http://hive.mozillaindia.org/img";
$footer=<<<FOOTER
<div class="mozH-footer-wrap">
		<div class="mozH-footer">
			<div class="mozH-lfloat mozH-s">
				<h3>Partners</h3>
				<div class="mozH-partner-list">
					<ul class="mozH-noStyle mozH-partners">
						<li>
							<a href="http://www.jaaga.in/"><img src="http://www.jaaga.in/sites/default/files/jaaga%20logo%20200pix%20short.jpg"/></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="mozH-rfloat mozH-sponsor">
			<h3>Signup for updates</h3>
			<script src="http://hive.mozillaindia.org/front-end/squash.js"></script>
			<form action="http://geekved.com/hive/contact/s.php" id="signup" method="POST" onsubmit="return doSignup(this)">
				<input type="text" name="name" placeholder="Full Name" aria-label="Full Name"/>
				<input type="text" name="email" placeholder="Email Address" aria-label="Email Address"/>
				<input type="submit" name="button" value="Signup"/>
			</form>
			</div>
		</div>
	</div>
	<div class="mozH-support-wrap">
		<div class="mozH-support">
			<div class="mozH-lfloat" style="margin-top:-22px;">
				<a href="http://hive.mozillaindia.org/events#makerparty"><img src="$path/makerParty.png" class="mozH-lfloat mozH-rotate" width="120"/></a>
				<div class="mozH-lfloat mozH-fT">&copy; All rights reserved<br/>Mozilla India Community</div>
				<div class="mozH-lfloat" style="padding: 18px 4px;"><a href="https://facebook.com/hiveindia"><img src="$path/icontexto-inside-facebook.png" width="60"/></a><a href="https://twitter.com/hiveindia"><img src="$path/icontexto-inside-twitter.png" width="60"/></a></div>
			</div>
			<div class="mozH-rfloat">
				<a href="http://mozilla.org/"><img src="http://mozorg.cdn.mozilla.net/media/img/home/title-wordmark.png" width="120" border="0"/></a>
			</div>
		</div>
	</div>
</div>
FOOTER;
