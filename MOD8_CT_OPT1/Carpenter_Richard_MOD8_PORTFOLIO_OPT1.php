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
    <p align="center"><input type="submit" name="save" value="Save"></p>
    <p align="center"><input type="submit" name="display" value="Display All"></p>
    
    </form>

    </body>
</html>