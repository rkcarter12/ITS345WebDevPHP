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
        $index = sizeof($input);
        
        function pushZeros($list, $index) {
            $initList = implode(', ', $list);
            echo "<p>Using the initial array... <br>".$initList."<br><br></p>"; //prints out the initial array order
            
            $count=0;
            for ($i = 0; $i < $index; $i++) {
                if ($list[$i] != 0) {
                $list[$count++] = $list[$i];
                }
            }
            while ($count < $index) {
                $list[$count++] = 0;   
            }

            $output = implode(', ', $list); //formats the array to be displayed using a comma separator
            
            echo "...the proposed <em>pushZeros()</em> function sorts the array, moving the zeros to the end: <br>".($output); //prints the output with a message
        
        } // end of the pushZeroes() function
        pushZeros($input,$index);
        
	?>
    </body>
</html>