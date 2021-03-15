<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Option #1: PHP Program to Swap Two Variables</title>
</head>
    <body>
    <h3>Swap Two Variables</h3>
    <p>
    <?php
    
    # Module 1 Critical Thinking Option #1
    # Created 02/14/2021
    # Created by Richard Carpenter
    # This program swaps two string variables
    
    
    $first = 'doom';
    $second = 'mood';
    
    echo "The first variable is <strong>$first</strong> and the second variable is <strong>$second</strong>.<br>";
    
    $first = $second;
    $second = strrev($first);
    
    echo "Now the first variable is <strong>$first</strong> and the second variable is <strong>$second</strong>."; 
        
	?>
	</p>
    </body>
</html>