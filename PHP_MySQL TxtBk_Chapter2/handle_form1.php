<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Form Feedback</title>
</head>
    <body>
    <?php # Script 2.2 - handle_form1.php
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $comments = $_REQUEST['comments'];
        
        // If the gender radio button is selected then it gets a value, otherwise it's NULL
        if (isset($_REQUEST['gender'])) {
            $gender = $_REQUEST['gender'];
        } else {
            $gender = NULL; 
        }
        
        echo "<p>Thank you, <strong>$name</strong>, for the following comments:</p>
        <pre>$comments</pre>
        <p>We will reply to you at <em>$email</em>.</p>\n";
        
        if ($gender == 'M') {
            echo '<p><strong>Good day, Sir!</strong></p>';
        } elseif ($gender == 'F') {
            echo '<p><strong>Good day, Madam!</strong></p>';
        } else {
            echo '<p><strong>You forgot to enter your gender!</strong></p>';
        }
        
        
	?>
    </body>
</html>