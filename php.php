<?php

date_default_timezone_set ('America/New_York');

$time = date('g:ia');
$hour = date('G');

$class = '';

if ($hour >= 5 && $hour < 11) {
	$image = "http://making-the-internet.s3.amazonaws.com/php-morning.png";	
	$class = "morning";
}
elseif ($hour >= 11 && $hour < 16) {
	$image = "http://making-the-internet.s3.amazonaws.com/php-afternoon.png";
	$class = "afternoon";
}
	
elseif ($hour >= 16 && $hour < 20) {
	$image = "http://making-the-internet.s3.amazonaws.com/php-evening.png";
	$class = "evening";
}
else {
	$image = "http://making-the-internet.s3.amazonaws.com/php-night.png";
	$class = "night";
}


?>