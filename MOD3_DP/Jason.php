<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Jason's Initial Post</title>
</head>
    <body>
    <?php
    function median($med){
        if($med){
            $counting = count($med);
            sort($med);
            $mid = floor(($counting -1)/2);
            return ($med[$mid]+$med[$mid+1-$counting%2])/2;
        }
    } // end of median() function
    
    
    $numberRange = [
        array(0,10,1.5,6.2378,2648.5698325,1000,1454092,11),
        array(48,88,-3,-5,-1047,-40,-72,'string value','other'),
        array(1000,10000),
    ]; // sample arrays for measuring the median
    
    foreach($numberRange as $med){
        echo 'The median of this numbered set is: '.median($med)."<br>";
    } // loop through the arrays in the number range variable and return the
    
	?>
    </body>
</html>