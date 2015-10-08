<!-- 

 * Action file for form_time.php.
 * This file takes the inputted "seconds" and converts
 * them to days, hours, minutes, and seconds format.
 * Added a back button for convenience.
 * 
 * File Name:      show_time.php
 * Date:           10/08/2015
 * @author         Jeromy Mobley 
 * @version        1.0
 -->
<!-- Debugging -->
<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL | E_STRICT );
?>
<!-- Request -->
<?php
$input = $_REQUEST['input'];
?>
<!-- Static Numbers -->
<?php 
$days = 86400;
$hours = 3600;
$minutes = 60;
?>
<!-- Calculations for hr/day/min/sec -->
<?php
$daysOut = floor(($input / $days) % $days);
$hoursOut = floor(($input / $hours) % $hours);
$minutesOut = floor(($input / $minutes) % $minutes);
$secsOut = $input % $minutes;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Time</title>
</head>
<body> 
<?php
 if ($input<0){
      echo "Negative number detected. Please try again.";
    }
    else {
      echo "$input seconds = $daysOut days, $hoursOut hours, $minutesOut
       minutes, and $secsOut seconds.";
    }
?>
<br /><br />
<button onclick="history.go(-1);">Convert again!</button>
</body>
</html>
