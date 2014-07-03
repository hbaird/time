<?php

date_default_timezone_set ('America/New_York');

$hour = date('g');
$minute = date('i');
$current = date('a');

$class = ".morning";

if ($current == 'am') {
	if ($hour >= 5) {
		$image = "http://making-the-internet.s3.amazonaws.com/php-morning.png";	
		$class = "morning";
	}
	elseif ($hour >= 11) {
		$image = "http://making-the-internet.s3.amazonaws.com/php-afternoon.png";
		$class = "afternoon";
	}
	else {
		$image = "http://making-the-internet.s3.amazonaws.com/php-night.png";
		$class = "night";
	}
}
if ($current == 'pm') {
	if ($hour <= 4) {
		$image = "http://making-the-internet.s3.amazonaws.com/php-afternoon.png";
		$class = "afternoon";
	}
	elseif (4 == $hour <= 8) {
		$image = "http://making-the-internet.s3.amazonaws.com/php-evening.png";
		$class = "evening";
	}
	else {
		$image = "http://making-the-internet.s3.amazonaws.com/php-night.png";
		$class = "night";
	}
}

?>