<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
    </head>
    <body>
        
        <?php
        
        
        randomSymbol();
        randomSymbol();
        randomSymbol();
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        function randomSymbol() {
            $randomValue = rand(0,2);
        switch($randomValue) {
            case 0: $symbol = seven;
                    break;
            case 1: $symbol = cherry;
                    break;
            case 2: $symbol = lemon;
                    break;
        }  
        
        echo "<img src='img/$symbol.png' alt='$symbol' title='$symbol' width = '70'>";
        
        }
        
        
        
        
        
        ?>
        
        
    </body>
</html>