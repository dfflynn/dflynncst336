<?php

include 'inc/charts.php';
$posters = array("ready_player_one","rampage","paddington_2","hereditary","alpha","black_panther","christopher_robin","coco","dunkirk","first_man");


function movieChoose() {
    global $posters;
    $currMax = 0;
    $winner = "";
    shuffle($posters);
    
    $chosenPosters = array();
    
    for ($i = 0; $i < 4; $i++) {
        $chosenPosters[] = array_pop($posters);
    }
    
    sort($chosenPosters);
    
    for ($i = 0; $i < 4; $i++) {
        $temp = movieReviews($chosenPosters[$i]);
        if ($temp > $currMax) {
            $currMax = $temp;
            $winner = $chosenPosters[$i];
        }
    }
    best($winner);
}

function best($randomPoster) {
    echo "</div>
       <br/>
       <hr>
       <h1>Based on ratings you should watch:</h1>";
    
    echo "<div class='poster'>";
    $title = fixWord($randomPoster);
    echo "<h2> $title </h2>";
    echo "<img width='100' src='img/posters/$randomPoster.jpg'>";    
    echo "<br>";
}

function fixWord($word) {
    for ($i = 0; $i < strlen($word); $i++) {
        if ($word[$i] == '_') $word[$i] = ' ';
    }
    return ucwords($word);
}

function movieReviews($randomPoster) {
    global $posters;
    echo "<div class='poster'>";
    $title = fixWord($randomPoster);
    echo "<h2> $title </h2>";
    echo "<img width='100' src='img/posters/$randomPoster.jpg'>";    
    echo "<br>";
    
    //NOTE: $totalReviews must be a random number between 100 and 300
    $totalReviews = rand(100,300); 
    
    //NOTE: $ratings is an array of 1-star, 2-star, 3-star, and 4-star rating percentages
    //      The sum of rating percentages MUST be 100
    $ratings = array();
    $totalScore = 0;
    for($t = 0;$t < 3;$t++) {
        $ratings[] = rand(1, 3);
        $totalScore += $ratings[$t];
        $ratings[$t] *= 10;
    }
    $ratings[] = (10 - $totalScore) * 10;
    

    //NOTE: displayRatings() displays the ratings bar chart and
    //      returns the overall average rating
    $overallRating = displayRatings($totalReviews,$ratings);
    
    //NOTE: The number of stars should be the rounded value of $overallRating
    echo "<br>";
    for ($i = 0; $i < round($overallRating); $i++) {
        echo "<img src='img/star.png' width='25'>";
    }
    
    echo "<br>Total reviews: $totalReviews";
    echo "</div>";
    return $overallRating;
}    

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Movie Reviews </title>
        <style type="text/css">
            body {
                background-image: url("img/bg.jpg");
                color: white;
                text-align:center;
            }
            #main {
                display:flex;
                justify-content: center;
            }
            .poster {
                padding: 0 10px;
            }
            h2 {
                color: white;
            }
        </style>
    </head>
    <body>
       
       <h1> Movie Reviews </h1>
        <div id="main">
           <?php
            
             movieChoose();
             
           ?>
    </body>
</html>