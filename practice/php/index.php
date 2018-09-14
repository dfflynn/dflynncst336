<!DOCTYPE html>
<html>
    <head>
        <meta char="utf-8" />
    </head>
    
    <body>
        
        
        <?php
        echo "<table border='1'><br />";
        
        $sum;
        
        
        for ($row = 0; $row < 2; $row ++) {
            echo "<tr>";
    
            for ($col = 0; $col < 9; $col ++) {
            if($row == 1)
            {
            $number = rand(1,10);
            $sum += $number;
            $iseven;
            if($number % 2 == 0)
            {
                $iseven = "Even";
            }
            else
            {
                $iseven = "Odd";
            }
            
            echo "<td>", $number, " is ",$iseven,"</td>";
            }
            
            }
    
            echo "</tr>";
        }

echo "</table>";

echo "Total: ", $sum;

echo "<br/>", "Average: ", $sum / 9;
?>
        
        
        
        
    </body>
    
    
    
</html>