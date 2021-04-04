<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Form Handler</title>
</head>
    <body>
    <?php
    if (!empty($_POST['username']) && !empty($_POST['birthdate']) && !empty($_POST['age']) && !empty($_POST['dept'])) {
        $newUser = new User();
        $newUser->setName($_REQUEST['username']);
        $newUser->setBirthdate($_REQUEST['birthdate']);
        $newUser->setAge($_REQUEST['age']);
        $newUser->setDept($_REQUEST['dept']);
        echo "<p>Thank you for your submission.</p>\n";
    } else {
        echo '<p>Please make sure all fields have been filled out completely.</p>';
    }
	?>
    </body>
</html>