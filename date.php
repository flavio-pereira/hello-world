<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset='utf-8'>
    <title>Time Zone</title>
    <link rel='stylesheet' href='style.css' type='text/css'>

    <?php    

		date_default_timezone_set('America/Denver');

		$clock = date('h:i A');

		$current_time = date('G');

		$morning_start = '5';
		$morning_end = '11';

		$afternoon_start = '11';
		$afternoon_end = '16';

		$evening_start = '16';
		$evening_end = '20';

		if ($current_time >= $morning_start AND $current_time < $morning_end){

				$image = 'http://making-the-internet.s3.amazonaws.com/php-morning.png';
				$backgrd = 'morning';
			}
			elseif ($current_time >= $afternoon_start AND $current_time < $afternoon_end) {
	 	
			 	$image = 'http://making-the-internet.s3.amazonaws.com/php-afternoon.png';
			 	$backgrd = 'afternoon';
	 		}
	 		elseif ($current_time >= $evening_start AND $current_time < $evening_end) {
				$image = 'http://making-the-internet.s3.amazonaws.com/php-evening.png';
				$backgrd = 'evening';
	  		} 
	 		else {
	 			$image = 'http://making-the-internet.s3.amazonaws.com/php-night.png';
	 			$backgrd = 'night';

			}

	?>

</head>

<body class="<?php echo $backgrd?>" >

    <p>
     Your current time is: <?php echo $clock; ?>.
    </p>

	<img src="<?php echo $image; ?>" alt='Status'>
</body>
</html>