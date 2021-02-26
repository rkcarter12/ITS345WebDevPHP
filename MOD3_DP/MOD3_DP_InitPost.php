<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Handle Jukebox Input</title>
</head>
    <body>
    
    <?php # Function to take letter/number input and output the song selection title
    
    $list = array(
        A1 => 'Vicarious',
        A2 => 'Jambi',
        B1 => 'Wings for Marie (Pt 1)',
        B2 => '10,000 Days (Wings Pt 2)',
        C1 => 'The Pot',
        C2 => 'Lipan Conjuring',
        D1 => 'Lost Keys (Blame Hofman)',
        D2 => 'Rosetta Stoned',
        E1 => 'Intension',
        E2 => 'Right In Two',
        F1 => 'Viginti Tres');       
    
    
    function jukebox($letter,$number) {
        
        global $list;
        $selection = $letter.$number;
        $song = $list[$selection];
               
        echo "Your selection is <strong>".$selection."</strong>. You've chosen <em>".$song."</em>. Great choice!";
        
    }
    
    jukebox('C',2);
	
    ?>
    </body>
</html>