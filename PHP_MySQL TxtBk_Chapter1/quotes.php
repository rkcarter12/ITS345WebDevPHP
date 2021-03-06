<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Numbers</title>
</head>
    <body>
    <?php # Script 1.8 - numbers.php
        $quantity = 30;
        $price = 119.95;
        $taxrate = .05;
        
        $total = $quantity * $price;
        $total = $total + ($total * $taxrate);
        $total = number_format($total,2);
        
        echo "<h3>Using double quotation marks:</h3>";
        echo "<p>You are purchasing <strong>$quantity</strong>widget(s)> at a cost of <strong>\$$price</strong> each. With tax, the total comes to <strong>\$$total</strong>.</p>\n";
        
        echo "<h3>Using single quotation marks the wrong way:</h3>";
        echo '<p>You are purchasing <strong>$quantity</strong> widget(s) at a cost of <strong>\$$price</strong> each. With tax, the total comes to <strong>\$$total</strong>.</p>\n';
        
        echo '<h3>Using single quotation marks the correct way:</h3>';
        echo '<p>You are purchasing <strong>'.$quantity.'</strong>widget(s) at a cost of <strong>'.$price.'</strong> each. With tax, the total comes to <strong>'.$total.'</strong>.</p>\n';
	?>
    </body>
</html>