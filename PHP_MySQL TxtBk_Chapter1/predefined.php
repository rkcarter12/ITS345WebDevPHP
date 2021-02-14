<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Predefined Variables</title>
</head>
    <body>
    <?php # Script 1.5 - predefined.php
        $file = $_SERVER['SCRIPT_FILENAME']; // this is the full path and name of the script being run
        $user = $_SERVER['HTTP_USER_AGENT']; // this is the browser and OS of the user
        $server = $_SERVER['SERVER_SOFTWARE']; // this is the web application on the server that's running PHP
        
        echo "<p>You are running the file:<br> /><strong>$file</strong>.</p>\n";
        echo "<p>You are viewing this page using:<br><strong>$user</strong></p>\n";
        echo "<p>This server is running:<br><strong>$server</strong></p>\n";
	?>
    </body>
</html>