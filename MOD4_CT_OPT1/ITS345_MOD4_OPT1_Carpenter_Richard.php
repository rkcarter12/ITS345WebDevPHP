<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
    <body>
    <?php
    
    define('username', 'root');
    define('password', 'zetanu766');
    define('hostname', 'localhost');
    define('db_name', 'sys');
    
    $dbc = mysqli_connect(hostname,username,password,db_name); // establish the connection with MySQL
    mysqli_set_charset($dbc, 'utf8');
    
    
	?>
    </body>
</html>