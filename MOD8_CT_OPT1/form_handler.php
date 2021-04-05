<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Form Handler</title>
</head>
    <body>
    <?php
    include('User.php');
    
    define('username', 'root');
    define('password', 'root');
    define('hostname', 'localhost:8889');
    define('db_name', 'sys');
    
    //set the connection to MySQL
    $dbc = mysqli_connect(hostname,username,password,db_name)
    OR
    die('Could not connect to MySQL: ' .mysqli_connect_error() ); // establish the connection with MySQL
    mysqli_set_charset($dbc, 'utf8');
    
    if (!empty($_POST['username']) && !empty($_POST['birthdate']) && !empty($_POST['age']) && !empty($_POST['dept'])) {
        
        $newUser = new User();
        $newUser->setName($_POST['username']);
        $newUser->setBirthdate($_POST['birthdate']);
        $newUser->setAge($_POST['age']);
        $newUser->setDept($_POST['dept']);
               
        echo "<p>Thank you for your submission.</p>\n";
   	  	
    } else {
        $incomplete = '<p>Please make sure all fields have been filled out completely.</p>';
        echo $incomplete;
    } // End IF to check for form completion
    
    
   
    // form action on click of Insert User Information button
    if (isset($_POST['save'])) {
        $query = "INSERT INTO users (username,birthdate,age,dept) VALUES ('".$newUser->getName()."','".$newUser->getBirthdate()."',".$newUser->getAge().",'".$newUser->getDept()."')";
        mysqli_query($dbc,$query);
    }
    
    
    // form action on click of Display All button
    if (isset($_POST['display'])) {
        
        $incomplete='';
        $query="SELECT * FROM users;";
        if($results = mysqli_query($dbc,$query)) {
            if(mysqli_num_rows($results) > 0) {
                echo "<table border='1'>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Username</th>";
                echo "<th>Birthdate</th>";
                echo "<th>Age</th>";
                echo "<th>Department</th>";
                echo "</tr>";
                while($row = mysqli_fetch_array($results)) {
                    echo "<tr>";
                    echo"<td>".$row['id']."</td>";
                    echo"<td>".$row['username']."</td>";
                    echo"<td>".$row['birthdate']."</td>";
                    echo"<td>".$row['age']."</td>";
                    echo"<td>".$row['dept']."</td>";
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
    }
	?>
    </body>
</html>