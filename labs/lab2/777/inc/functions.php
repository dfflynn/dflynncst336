<?php



function play() {
    
    displayPoints(randomSymbol(1), randomSymbol(2), randomSymbol(3));
    
        
}



function randomSymbol($positionNum) {
            $randomValue = rand(0,3);
        switch($randomValue) {
            case 0: $symbol = "seven";
                    break;
            case 1: $symbol = "cherry";
                    break;
            case 2: $symbol = "lemon";
                    break;
            case 3: $symbol = "grapes";
                    break;
        }  
        
        
        
        
        
        echo "<img src='img/$symbol.png' id = 'reel$positionNum'alt='$symbol' title='". ucfirst($symbol) . "' width = '70'>";
        
        if($symbol == "seven") {
            return 0;
        }
        else if($symbol == "cherry") {
            return 1;
        }
        else if($symbol == "lemon") {
            return 2;
        }
        else if($symbol == "grapes") {
            return 3;
        }
        }
        
        function displayPoints($val1, $val2, $val3) {
            $totalPoints = 0;
            
            echo "<div id = 'output'>";
            if($val1 == $val2 && $val2 == $val3) {
               
                switch($val1) {
                    case 0: $totalPoints += 1000;
                        echo "<h1>Jackpot!</h1>";
                        echo "<audio autoplay><source src='winsound.mp3' type='audio/mp3'></audio>";
                        
                        break;
                    case 1: $totalPoints += 500;
                        
                        break;
                    case 2: $totalPoints += 250;
                        
                        break;
                    case 3: $totalPoints += 900;
                        
                        break;
                    
               }
               echo "<h2>You won $totalPoints points!</h2>";
            }
            else {
                echo "<h3>Try again! </h3>";
            }
            echo "</div>";
                
            
        }











?>