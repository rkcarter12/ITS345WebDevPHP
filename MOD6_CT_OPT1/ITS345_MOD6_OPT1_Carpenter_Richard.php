<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>MOD6_CT_OPT1</title>
</head>
    <body>
    <?php # Program to return at least 50 rows from MySQL and display them on web page with pagination
    
    # Module 6 Critical Thinking Option #1
    # Created 03/20/2021
    # Created by Richard Carpenter
    # This program will query a table in the database and display those results in basic data grid with paging
    
        define('username', 'root');
        define('password', 'root');
        define('hostname', 'localhost:8889');
        define('db_name', 'sys');
        
        //set the connection to MySQL
        $dbc = mysqli_connect(hostname,username,password,db_name)
        OR
        die('Could not connect to MySQL: ' .mysqli_connect_error() ); // establish the connection with MySQL
        mysqli_set_charset($dbc, 'utf8');
        
        // set the record size per page
        $display = 6;
        
        // Detremine how many pages there will be in the record set returned
        if (isset($_GET['p']) && is_numeric($_GET['p'])) {
            $pages = $_GET['p'];
        } else {
            
        }
        
        // Find the count of unique records in the data being returned
        $count = "SELECT COUNT(id) from exchangerates";
        $r = @mysqli_query($dbc, $count);
        $row = @mysqli_fetch_array($r, MYSQLI_NUM);
        $records = $row[0];
        
        // Determine the number of pages by dividing total records by the record size per page setting
        if ($records>$display) {
            $pages = ceil ($records/$display);
        } else {
            $pages = 1;
        }
        
        // Checks to see where the data should begin pulling from for each page
        if (isset($_GET['s']) && is_numeric($_GET['s'])) {
            $start = $_GET['s'];
        } else {
            $start = 0;
        }
        
        // This is the 50 or so records to be returned from the db and displayed to the page
        $query = "SELECT * from exchangerates LIMIT $start, $display";
        $r = @mysqli_query($dbc, $query);
        

        
        // Set the output for the page starting with the basic table and headers
        
        echo '<table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Effective Date</th>
                <th>Base Currency</th>
                <th>Target Currency</th>
                <th>Rate</th>
            </tr>
            </thead>
            <tbody>';
        
        // Alternate the background shading to make it easier to read one row at a time as the while loop displays the records from the db
        $bg = 'eeeeee';
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
            $bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');
            
            echo '<tr bgcolor="'.$bg.'">
                <td>'.$row['id'].'</td>
                <td>'.$row['EffectiveDate'].'</td>
                <td>'.$row['BaseCurrency'].'</td>
                <td>'.$row['TargetCurrency'].'</td>
                <td>'.$row['Rate'].'</td>
            </tr>';
        }// end while loop 
        
        echo '</tbody></table>';
        mysqli_free_result($r);
        mysqli_close($dbc);
        
        // Includes the Previous and Next buttons as an alternative to directly clicking a page number
        if ($pages > 1) {
            echo '<br><p>';
            $current_page = ($start/$display) + 1;
            if($current_page != 1) {
                echo '<a href="ITS345_MOD6_OPT1_Carpenter_Richard.php?s='.($start - $display).'&p='.$pages.'">Previous</a> ';
            }
            for ($i=1; $i <= $pages; $i++) {
                if($i != $current_page) {
                    echo '<a href="ITS345_MOD6_OPT1_Carpenter_Richard.php?s='.(($display*($i-1))).'&p='.$pages.'">'.$i.' </a>';
                } else {
                    echo $i.' ';
                }
            } //end for loop
            
            if ($current_page != $pages) {
                echo '<a href="ITS345_MOD6_OPT1_Carpenter_Richard.php?s=' . ($start + $display).'&p='.$pages.'">Next</a>';
            } 
            echo'</p>';
        } // end if statement
	?>
    </body>
</html>