<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Form Feedback</title>
</head>
    <body>
    <?php # Script 2.5 - handle_form.php
    if (!empty($_POST['name']) && !empty($_POST['comments']) && !empty($_POST['email'])) {
        echo "<p>Thank you, <strong>{$_POST['name']}</strong>, for the following comments:</p><pre>{$_POST['comments']}</pre>
        <p>We will reply to you at <em>{$_POST['email']}</em>.</p>\n";
    } else {
        echo '<p>Please go back and fill out the form again.</p>';
    }
	?>
    </body>
</html>