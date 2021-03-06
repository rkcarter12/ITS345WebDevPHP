<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>MOD3 Option# 2</title>
</head>
    <body>
    <?php # Program to push all zeros to the end of an array
    
    # Module 3 Critical Thinking Option #2
    # Created 02/27/2021
    # Created by Richard Carpenter
    # This program takes an input and moves all zeros to the end of the array
    
        $input = array(7,10,0,9,11,0,17);
        
        function pushZeros($input) {
            $initList = implode(', ', $input);
            echo "<p>Using the initial array... <br>".$initList."<br><br></p>"; //prints out the initial array order
                        
            arsort($input,SORT_NATURAL); //takes the argument passed into the function and sort it in descending order
        
            $output = implode(', ', $input); //formats the array to be displayed using a comma separator
        
            echo "...the proposed <em>pushZeros()</em> function sorts the array, moving the zeros to the end: <br>".($output); //prints the output with a message
        }
        
        pushZeros($input);
        
	?>
    </body>
</html>