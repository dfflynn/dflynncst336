<?php
session_start();

//Plan:
//1. Generate a random number for selection
//2. Have a form for a user to enter guess
//3. Have validation logic
//4. Store history in session
//5. clear session with button





if(isset($_POST['guess'])) {
    $_SESSION['history'][] = $_POST['guess'];
   
    
}






if(isset($_POST['destroy'])) {
    session_destroy();
    session_start();
}


if(isset($_POST['guess']) && ($_POST['guess'] < $_SESSION['randomVal'])) {
    echo "Too small<br/>";
}
else if(isset($_POST['guess']) && ($_POST['guess'] > $_SESSION['randomVal'])) {
    echo "Too big<br/>";
}
else if(isset($_POST['guess'])) {
    echo "You win!<br/>";
}

if(!isset($_SESSION['randomVal'])) {
    $_SESSION['randomVal'] = rand(1, 100);
}




function printHistory($array) {
    echo "Previous guesses: ";
    
    
    echo "$array[0]";
    
    if(isset($array[1])) {
        echo ", $array[1]";
    }
    if(isset($array[2])) {
        echo ", $array[2]";
    }
    if(isset($array[3])) {
        echo ", $array[3]";
    }
    if(isset($array[4])) {
        echo ", $array[4]";
    }
    
    
    
}




?>


<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <form method = "post">
            Guess: 
            <input type = "text" name = "guess" >
            
        </form>
        
        <form method="post">
            
            
           
            <input type = "submit" name = "destroy" value = "Start Over">
        </form>
        
        <?php printHistory($_SESSION['history']); echo "<br>"; 
        echo "Lives: ";
        echo 4 - count($_SESSION['history']); ?>
        
        
        
    </body>
</html>