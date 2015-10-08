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
 <?php
 
// Debugging
ini_set( 'display_errors', 1 );
error_reporting( E_ALL | E_STRICT );

//Trim, Strip Tags, Request
$total_seconds = trim(strip_tags($_REQUEST['input']));

//Static Numbers
$days = 86400;
$hours = 3600;
$minutes = 60;

//Calculations for hr/day/min/sec
$daysOut = floor(($total_seconds / $days) % $days);
$hoursOut = floor(($total_seconds / $hours) % $hours);
$minutesOut = floor(($total_seconds / $minutes) % $minutes);
$secsOut = $total_seconds % $minutes;
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Time</title>
</head>
<body> 
<?php
//Negative number checker
 if ($total_seconds<0){
      echo "Negative number detected. Please try again.";
    }
//Output if not negative
    else {
      echo "$total_seconds seconds = $daysOut days, $hoursOut hours, $minutesOut
       minutes, and $secsOut seconds.";
    }
?>
<br /><br />
<!-- Back button -->
<button onclick="history.go(-1);">Convert again!</button>
</body>
</html>
