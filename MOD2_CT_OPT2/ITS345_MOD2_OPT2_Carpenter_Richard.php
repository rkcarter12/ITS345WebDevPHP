<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ITS345_MOD2_OPT2</title>
</head>
    <body>
    <?php # Program to remove duplicates from a sorted list
        
        $sortList = array(1,1,2,2,3,4,5,5);
        
        echo "<h2>Sorted List:</h2>";
        echo "<p>(";
        $list = implode(', ',$sortList); //converts the array to a string with a comma and space separator
        echo $list; //prints the list of values in the array using a comma separator
        echo ")</p>";
        
        $uVal = array_unique($sortList); //takes in the array and returns only the distinct values
        asort($uVal); //sorts the distinct values in numerical order
        
        echo "<h2>Duplicates Removed</h2>";
        echo "<p>(";
        $list = implode(', ',$uVal);//perferms the same conversion to a comma separated string using the new distinct values from original list
        echo $list;
        echo ")</p>";

	?>
    </body>
</html>