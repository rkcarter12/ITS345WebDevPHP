<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Jerry's example of ucwords()</title>
</head>
    <body>
    
    <h3>Jerry's example of ucwords()</h3>
    
    <?php
    // Setting the original variable title to all lowercase
    
    $movietitle = "ferris bueller's day off";
    
    echo "The title of the movie is: </br> " . $movietitle. "<br><br>";
    
    // echo "</br></br>";
    
    echo "Each word in the title should have capital letter.</br></br>";
    
    // Capitalizing the first letter in each word of the title
    
    $newmovietitle = ucwords($movietitle);
    
    echo "The updated title of the movie is: </br>" . $newmovietitle;
	?>
    </body>
</html>