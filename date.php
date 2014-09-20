<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset='utf-8'>
    <title>Time Zone</title>

    <?php

    # Define 4 different variables, which will each represent how much a given coin is worth
    

date_default_timezone_set('Australia/Melbourne');

$clock = date('h:i A');

$current_time = date('G');

$morning_start = '5';
$morning_end = '11';

$afternoon_start = '11';
$afternoon_end = '16';

$eveening_start = '16';
$eveening_end = '20';



if ($current_time >= $morning_start AND $current_time < $morning_end){

	$image = 'http://making-the-internet.s3.amazonaws.com/php-morning.png';
}
	elseif ($current_time >= $afternoon_start AND $current_time < $afternoon_end) {
	 	
	 $image = 'http://making-the-internet.s3.amazonaws.com/php-afternoon.png';
	 }
	 elseif ($current_time >= $eveening_start AND $current_time < $eveening_end) {
		$image = 'http://making-the-internet.s3.amazonaws.com/php-evening.png';
	  } 
	 else {
	 	$image = 'http://making-the-internet.s3.amazonaws.com/php-night.png';

	}

?>

</head>

<body>

    <p>
     Your current time is: <?php echo $clock; ?>.
    </p>

	<img src="<? echo $image; ?>" alt='Status'>
</body>
</html>