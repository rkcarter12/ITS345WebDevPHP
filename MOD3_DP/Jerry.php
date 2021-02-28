<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Jerry's Initial Post</title>
</head>
    <body>
    
    <?php
    
    function nflTeamSelect ($nflteam) {
        switch ($nflteam) {
            case "denver":
                echo "Do the Denver Broncos need a new quarterback?";
                break;
            case "washington";
            echo "What will be the Washington Football teams new Mascot?";
            break;
            case "kansas";
            echo "Will the Chiefs win multiple superbowls over the next 10 years?";
            break;
            case "houston";
            echo "Will Deshaun Watson stay with the Houston Texans?";
            break;
            case "indianapolis";
            echo "Is Carson Wentz the right quarterback for the Indianapolis Colts?";
            break;
            default:
                echo "Will $nflteam win the superbowl?";
        }
    }
    
    nflTeamSelect("denver");
    echo "<br><br>";
    nflTeamSelect("washington");
    echo "<br><br>";
    nflTeamSelect("kansas");
    echo "<br><br>";
    nflTeamSelect("houston");
    echo "<br><br>";
    nflTeamSelect("indianapolis");
    echo "<br><br>";
    nflTeamSelect("Miami");
    ?>

    </body>
</html>