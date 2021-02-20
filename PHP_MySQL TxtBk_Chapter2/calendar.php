<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Calendar</title>
</head>
    <body>
    <form action="calendar.php" method="post">
    <?php
    $months = [1 => 'January','February','March','April','May','June','July','August','September','October','November','December'];
    $days = range(1,31);
    $years = range(2017,2027);
    
    // Make the months pull-down menu
    echo '<select name="month">';
    foreach ($months as $key => $value) {
        echo "<option value=\"$key\"> $value</option>\n";
    }
    echo '</select>';
    
    // Make the days pull-down menu
    echo '<select name="day">';
    foreach ($days as $value) {
        echo "<option value=\"$key\"> $value</option>\n";
    }
    echo '</select>';
    
    // Make the years pull-down menu
    echo '<select name ="years">';
    foreach ($years as $value) {
        echo "<option value=\"$key\"> $value</option>\n";
    }
    echo '</select>'; // closing tag for the 'select' HTML element
	?>
	</form>
    </body>
</html>