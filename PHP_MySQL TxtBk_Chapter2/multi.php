<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Multidimensional Arrays</title>
</head>
    <body>
    <p>Some North American States, Provinces, and Territories:</p>
    <?php # Script 2.7 - multi.php
    
    $mexico = [
        'YU' => 'Yucatan',
        'BC' => 'Baja California',
        'OA' => 'Oaxaca'
        ];
    
    $us = [
        'MD' => 'Maryland',
        'IL' => 'Illinois',
        'PA' => 'Pennsylvania',
        'IA' => 'Iowa',
        ];
    
    $canada = [
        'QC' => 'Quebec',
        'AB' => 'Alberta',
        'NT' => 'Northwest Territories',
        'YT' => 'Yukon',
        'PE' => 'Prince Edward Island',
        ];
    
    $n_america = [
        'Mexico' => $mexico,
        'United States' => $us,
        'Canada' => $canada
        ];
    
    // This is creating an unordered list per array and returning the different array names per country
    foreach ($n_america as $country => $list) {
        echo "<h2>$country</h2><ul>";
        
        // For each country this then returns the individual states, provinces and territories
        foreach ($list as $k => $v) {
            echo "<li>$k - $v</li>\n";
        }
            echo '</ul>';
    }   // End of main foreach
    
	?>
    </body>
</html>