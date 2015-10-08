<!-- 
 * Form file for show_time.php.
 * The user can input a positive number which will
 * be converted to X days, X hours, X minutes, X seconds
 * format.
 * 
 * File Name:      form_time.php
 * Date:           10/08/2015
 * @author         Jeromy Mobley 
 * @version        1.0

 -->
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Convert Seconds to Days, Hours, Minutes and Seconds</title>
</head>
<body>
    <form action="show_time.php" method="post">
        Enter Number of Seconds<br /> <input type="number" name="input">
        <br /><br />
    <input type="submit" name="convert" value="Convert" />
    </form>
</body>
</html>
