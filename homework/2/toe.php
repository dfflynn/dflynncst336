<?php

function run() {
    $grid = array();
        
        while(count($grid) < 3) {
            
            $grid[] = array(0,0,0);
        }
        
        
        $winner = 0;
        
        $player = 1;
        //The play function is ran up to 9 times, alternating players. If a winner is found, the game ends and winner is declared.
        for($i = 0;$i < 9;$i++) {
           play($grid, $player);
           if($player == 1) {
               $player = 2;
           }
           else {
               $player = 1;
           }
           if(winCheck($grid) != 0) {
               $winner = winCheck($grid);
               break;
           }
        }
        
        
        
        
        //The modify function turns the array into something that looks like tic tac toe.
        modify($grid);
        
        //This loop prints the table that is used to represent the game.
        for($t = 0;$t < 3;$t++) {
            
            echo "<table><tr><td>";
            echo $grid[$t][0];
            echo "</td><td>";
            echo $grid[$t][1];
            echo "</td><td>";
            echo $grid[$t][2];
            echo "</td></tr></table>";
            
        }
       
       
       
        
        
        //After the winner is found, the winner is echoed under the board.
        if($winner == 1) {
            echo "<h1 id = 'winner'>The winner is X</h1>";
        }
        else if($winner == 2) {
            echo "<h1 id = 'winner'>The winner is O</h1>";
        }
        else if($winner == 0) {
            echo "<h1 id = 'winner'>The game is a tie</h1>";
        }
        
        
        
        
        
        
        
        
       
            
        
}

//This function is a leftover from testing
function printArray($arr) {
            for($a = 0;$a < 3;$a++) {
                for($b = 0;$b < 3;$b++) {
                    echo $arr[$a][$b];
                    echo " ";
                    }
            echo "<br>";
            }
        }
        
//this function changes the grid from numbers, to Xs and Os.
function modify(&$arr) {
    for($a = 0;$a < 3;$a++) {
        for($b = 0;$b < 3;$b++) {
            if($arr[$a][$b] == 0) {
                $arr[$a][$b] = " ";
            }
            else if($arr[$a][$b] == 1) {
                $arr[$a][$b] = "X";
            }
            else if($arr[$a][$b] == 2) {
                $arr[$a][$b] = "O";
            }
        }
    }
}
        
        //This function goes through the array, checking if someone won, then returning that winner
        function winCheck($arr) {
            //Vertical
            if($arr[0][0] != 0) {
                if($arr[0][0] == $arr[0][1] && $arr[0][1] == $arr[0][2]) {
                    return $arr[0][0];
                }
            }
            if($arr[1][0] != 0) {
                if($arr[1][0] == $arr[1][1] && $arr[1][1] == $arr[1][2]) {
                    return $arr[1][0];
                }
            }
            if($arr[2][0] != 0) {
                if($arr[2][0] == $arr[2][1] && $arr[2][1] == $arr[2][2]) {
                    return $arr[2][0];
                }
            }
            //Horizontal
            if($arr[0][0] != 0) {
                if($arr[0][0] == $arr[1][0] && $arr[1][0] == $arr[2][0]) {
                    return $arr[0][0];
                }
            }
            if($arr[0][1] != 0) {
                if($arr[0][1] == $arr[1][1] && $arr[1][1] == $arr[2][1]) {
                    return $arr[0][1];
                }
            }
            if($arr[0][2] != 0) {
                if($arr[0][2] == $arr[1][2] && $arr[1][2] == $arr[2][2]) {
                    return $arr[0][2];
                }
            }
            //Diagonal
            if($arr[0][0] != 0) {
                if($arr[0][0] == $arr[1][1] && $arr[1][1] == $arr[2][2]) {
                    return $arr[0][0];
                }
            }
            if($arr[2][0] != 0) {
                if($arr[2][0] == $arr[1][1] && $arr[1][1] == $arr[0][2]) {
                    return $arr[0][2];
                }
            }
            
            
            
            return 0;
            
        }
        
        
        
        //The play function finds a random, valid spot, and makes their move there.
        function play(&$arr, $player) {
            
            $done = 0;
            
            while($done == 0) {
                $count = 0;
                $spot = rand(0,8);
                for($a = 0;$a < 3;$a++) {
                    for($b = 0;$b < 3;$b++) {
                        if($count == $spot) {
                        
                            if($arr[$a][$b] == 0) {
                                $arr[$a][$b] = $player;
                                $done = 1;
                            }
                        }
                        $count++;
                    
                    }
                }
            }
            
            
            
            
            
        }
        
        ?>