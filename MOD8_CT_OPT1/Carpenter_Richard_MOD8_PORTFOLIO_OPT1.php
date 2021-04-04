<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>MOD8 Portfolio Project: Option #1</title>
</head>
    <body>
    
    <form action="form_handler.php" method="post">
    <fieldset><legend>"Enter the user's information below:"</legend>
    <p><label>Name: <input type="text" name="username" size="20" maxlength="50"></label></p>
    <p><label>Birthdate: <input type="date" value="1950/01/01" name="birthdate"></label></p>
    <p><label>Age: <input type="text" name="age" size="10" maxlength="3"></label></p>
    <p><label>Dept:
    <select name="dept">
        <option value="Accounting">Accounting</option>
        <option value="Legal">Legal</option>
        <option value="Human Resources">Human Resources</option>
        <option value="Operations">Operations</option>
        <option value="Engineering">Engineering</option>
    </select></label></p>
    </fieldset>
    <p align="center"><input type="submit" name="submit" value="Submit User Information"></p>
    </form>
    
    
    <?php # Program to return at least 50 rows from MySQL and display them on web page with pagination
    
    # Module 8 Portfolio Project: Option #1
    # Created 04/02/2021
    # Created by Richard Carpenter
    # This program will capture user information in a web form, provide a way to submit and insert the record into the data, and finally provide a way to display all user information back to a web page
    
        define('username', 'root');
        define('password', 'root');
        define('hostname', 'localhost:8889');
        define('db_name', 'sys');
        
        //set the connection to MySQL
        $dbc = mysqli_connect(hostname,username,password,db_name)
        OR
        die('Could not connect to MySQL: ' .mysqli_connect_error() ); // establish the connection with MySQL
        mysqli_set_charset($dbc, 'utf8');
        
	?>
    </body>
</html>