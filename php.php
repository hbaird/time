<?php

date_default_timezone_set ('America/New_York');

$time = date('g:ia');
$hour = date('G');

$class = '';

if ($hour >= 5 && $hour < 11) {
	$image = 'morning';	
	$class = "morning";
}
elseif ($hour >= 11 && $hour < 16) {
	$image = 'afternoon';
	$class = "afternoon";
}
	
elseif ($hour >= 16 && $hour < 20) {
	$image = 'evening';
	$class = "evening";
}
else {
	$image = 'night';
	$class = "night";
}

?>