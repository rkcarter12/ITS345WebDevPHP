<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
    <body>
    <?php
        define('username', 'root');
        define('password', 'root');
        define('hostname', 'localhost:8889');
        define('db_name', 'sys');
        
        $dbc = mysqli_connect(hostname,username,password,db_name)
        OR
        die('Could not connect to MySQL: ' .mysqli_connect_error() ); // establish the connection with MySQL
        mysqli_set_charset($dbc, 'utf8');
        
        $query =    "SELECT article, dealer, price
                    FROM   shop
                    WHERE  price=19.95";
        
        if($results = mysqli_query($dbc,$query)) {
            if(mysqli_num_rows($results) > 0) {
                echo "<table border='1'>";
                echo "<tr>";
                echo "<th>id</th>";
                echo "<th>style</th>";
                echo "<th>color</th>";
                echo "<th>owner</th>";
                echo "</tr>";
                while($row = mysqli_fetch_array($results)) {
                    echo "<tr>";
                    echo"<td>".$row['id']."</td>";
                    echo"<td>".$row['style']."</td>";
                    echo"<td>".$row['color']."</td>";
                    echo"<td>".$row['owner']."</td>";
                    echo "</tr>";
                } // end while statement to insert rows per record returned
                echo "</table>";
                mysqli_free_result($results);
            } else
                echo '<p>No data to display</p>';// end if statement for pulling back results and formatting into a table if there is at least 1 row returned in the query
        } else {
            echo "ERROR: There was an issue running the query. ". mysqli_error($results);
        } // end if statement for successful connection and query execution
        
        mysqli_close($results);
    
	?>
    </body>
</html>