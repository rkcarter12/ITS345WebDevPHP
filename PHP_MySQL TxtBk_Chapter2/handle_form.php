<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Form Feedback</title>
<style type="text/css" title="text=css" media="all">.error{
    font-weight: bold; 
    color: #C00;
</style>
</head>
    <body>
    <?php
    if (!empty($_REQUEST['name'])) {
        $name = $_REQUEST['name'];
    } else {
        $name = NULL;
        echo '<p class="error">You forgot to enter your name!</p>';
    }
    
    if (!empty($_REQUEST['email'])) {
        $email = $_REQUEST['email'];
    } else {
        $email = NULL;
        echo '<p class="error">You forgot to enter your email address!</p>';
    }
    
    if (!empty($_REQUEST['comments'])) {
        $_REQUEST['comments'];
    } else {
        $comments = NULL;
        echo '<p class="error">You forgot to enter any comments you\'d like to make!</p>';        
    }
    
    if (isset($_REQUEST['gender'])) {
        $gender = $_REQUEST['gender'];
    } else {
        $gender = NULL;
        echo '<p class="error">You forgot to select your gender!</p>';
    }
    
    if ($gender == 'M') {
        $greeting = '<p><strong>Good Day, Sir!</strong></p>';
    } elseif ($gender == 'F') {
        $greeting = '<p><strong>Good Day, Madam!</strong></p>';
    } else {
        $gender = NULL;
        echo '<p class="error">Gender should be either "M" or "F"!</p>';
    }
    
    if ($name && $email && $gender && $comments) {
        echo "<p>Thank you, <strong>$name</strong>, for the following comments:<br><pre>$comments</pre></p><p>We will reply to you at <em>$email</em>.</p>\n";
        echo $greeting;
    } else {
        echo '<p class="error">Please go back and fill out the form again.</p>';
    }
	?>
    </body>
</html>