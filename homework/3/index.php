<?php

$skills = array();

if(isset($_POST['box1'])) {
    $count++;
    array_push($skills, "C++");
}
if(isset($_POST['box2'])) {
    $count++;
    array_push($skills, "Java");
}
if(isset($_POST['box3'])) {
    $count++;
    array_push($skills, "HTML");
}
if(isset($_POST['box4'])) {
    $count++;
    array_push($skills, "Python");
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta char=”utf-8” />
        <title>Homework 3 </title>
        <link href = "./styles.css" rel = "stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Niramit" rel="stylesheet"> 
    </head>
    <body>
        <h2 class = "centertext">Input Info:</h2>
        <form method="POST" class = "centerborder">
            <div class = "contents">
                <label for="name">Name:</label> 
                <input type="text" name="name" id="name" <?php echo 'value = "';echo $_POST['name']; echo '"'?> />
            </div>
            <div class = "contents">
                <label for "gender">Gender: </label>
                <input type="radio" name="gender" <?php if((isset($gender) && $gender == "female") || $_POST['gender'] == 'female') {echo "checked";};?> value="female">Female
                <input type="radio" name="gender" <?php if((isset($gender) && $gender == "male") || $_POST['gender'] == 'male') {echo "checked";};?> value="male">Male
                <input type="radio" name="gender" <?php if((isset($gender) && $gender == "other") || $_POST['gender'] == 'other') {echo "checked";};?> value="other">Other
            </div>
            <div class = "contents">
                <label for="skills">Programming Experience:</label>
                <div id="skills">
                    <div><input type="checkbox" name="box1" <?php if(isset($_POST['box1'])) {echo 'checked';}?>/> C++</div>
                    <div><input type="checkbox" name="box2" <?php if(isset($_POST['box2'])) {echo 'checked';}?>/> Java</div>
                    <div><input type="checkbox" name="box3" <?php if(isset($_POST['box3'])) {echo 'checked';}?>/> HTML</div>
                    <div><input type="checkbox" name="box4" <?php if(isset($_POST['box4'])) {echo 'checked';}?>/> Python</div>
                </div>
            </div>
            <div class = "contents">
                <label for="about">About Me:</label>
                <div>
                    <textarea name="about" rows="3" ><?php  echo $_POST['about'];?></textarea>
                </div>
                
            </div>
            <div class = "contents">
                <label for="company">Applying To:</label>
                <select name="company">
                    <option value="Amazon" <?php if($_POST['company'] == "Amazon") {echo 'selected = "selected"';} ?>  >Amazon</option>
                    <option value="Apple"  <?php if($_POST['company'] == "Apple") {echo 'selected = "selected"';} ?>>Apple</option>
                    <option value="Google" <?php if($_POST['company'] == "Google") {echo 'selected = "selected"';} ?>>Google</option>
                    <option value="Oracle" <?php if($_POST['company'] == "Oracle") {echo 'selected = "selected"';} ?>>Oracle</option>
                </select> 
            </div>
            <div class = "contents">
                <label for="date">Starting Date:</label>
                <input name = "date" type="date" <?php echo "value = '"; echo $_POST['date']; echo "'"?>  />
            </div>
            <div class = "contents">
                <input type="submit" value="Submit">
            </div>
        </form>
        
    <!--  RESUME STARTS HERE-->
    
        <h2 class = "centertext">Your Resume:</h2>
        <div class = "centerborder" id = "result">
            <div>
                <?php 
                echo "My name is ";
                echo $_POST['name'];
            
                
                if($_POST['name'] == "") {
                    echo "<b style= 'color:red'>ERROR: no name found</b>";
                }
                else {
                    echo "." ;
                }
                ?>
            </div>
            <div>
                <?php 
                if($_POST['gender'] == "female") {
                    echo "I am a woman applying to ";
                    echo $_POST['company'];
                    echo ".";
                }
                else if($_POST['gender'] == "male") {
                    echo "I am a man applying to ";
                    echo $_POST['company'];
                    echo ".";
                }
                else if($_POST['gender'] == "other") {
                    echo "I am applying to ";
                    echo $_POST['company'];
                    echo ".";
                }
                ?>
            </div>
            <div>
                <?php
                if($count == 0) {
                    echo "I am currently learning various programming languages.";
                }
                else if ($count == 1) {
                    echo "I have experience with ";
                    echo $skills[0];
                    echo ".";
                }
                else if($count == 2) {
                    echo "I have experience with ";
                    echo $skills[0];
                    echo " and ";
                    echo $skills[1];
                    echo ".";
                }
                else if($count == 3) {
                    echo "I have experience with ";
                    echo $skills[0];
                    echo ", ";
                    echo $skills[1];
                    echo " and ";
                    echo $skills[2];
                    echo ".";
                }
                else if($count == 4) {
                    echo "I have experience with ";
                    echo $skills[0];
                    echo ", ";
                    echo $skills[1];
                    echo ", ";
                    echo $skills[2];
                    echo " and ";
                    echo $skills[3];
                    echo ".";
                }
                ?>
            </div>
            <div>
                <?php
                echo $_POST['about'];
                ?>
            </div>
            <div>
                <?php
                echo "I am first available to work on ";
                echo $_POST['date'];
                if($_POST['date'] != "") {
                    echo ".";
                }
                if($_POST['date'] == "") {
                    echo "<b style= 'color:red'>ERROR: no date selected</b>";
                }
                ?>
            </div>
        </div>  
        <br/><br/><br/>
        <div class = "center" id="images">
            <img class = "logo" src="./img/amazon.png" alt="amazon">
            <img class = "logo" id = "apple" src="./img/apple.png" alt="apple">
            <img class = "logo" id = "google" src="./img/google.png" alt="google">
            <img class = "logo" id = "oracle" src="./img/oracle.png" alt="oracle">
        </div>
    </body>
</html>