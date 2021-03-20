<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>MOD5_CT_OPT1</title>
</head>
    <body>
    <?php # Program to log an error caused by an invalid array to MySQL error log table
    
    # Module 5 Critical Thinking Option #1
    # Created 03/13/2021
    # Created by Richard Carpenter
    # This program passes a query to MySQL and returns the results in a tabular form on a web page
    
        
        define('username', 'root');
        define('password', 'root');
        define('hostname', 'localhost:8889');
        define('db_name', 'sys');
        
        //set the connection to MySQL
        $dbc = mysqli_connect(hostname,username,password,db_name)
        OR
        die('Could not connect to MySQL: ' .mysqli_connect_error() ); // establish the connection with MySQL
        mysqli_set_charset($dbc, 'utf8');     
        
        
        // creates the error handler function
        function err_hndlr($enum,$emsg,$efile,$eline,$evars) {
            $message = "Uh oh, an error has occured in file ".$efile."! Check line ".$eline." for issue.";
                       
            $sql = "INSERT INTO error_log (Message,CreatedDate)
                    VALUES ('".$message."',current_date());";
            
            $cnct=$GLOBALS["dbc"];
            error_log($message,3,mysqli_query($cnct, $sql));
            echo $message;
        }// end of custom error handler function
        
        // sets the error handler function to be used
        set_error_handler('err_hndlr');
        
        //variable array of character names with indecies that skip a number
        $characters = array(1=>"Tom",2=>"Jerry",3=>"Sylvester",5=>"Elmer",6=>"Bugs",7=>"Wyle");
        
        //for loop iterates starting from 1 and will error when it gets to 4
        for ($i = 1; $i < 8; $i++) {
            echo $characters[$i]."<br>";
        }//end for loop
	?>	
    </body>
</html>