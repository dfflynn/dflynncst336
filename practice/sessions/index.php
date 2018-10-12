
<?php

$username[] = $_POST["name1"];
$username[] = $_POST["name2"];
$username[] = $_POST["name3"];
$username[] = $_POST["name4"];
$username[] = $_POST["name5"];


$checked = $_POST["choices"];

for($i = 0;$i < 5;$i++) {
    if($i == ($checked - 1)) {
        continue;
    }
    $username[$i] = "";
}




?>


<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    <div>
        
        <form action = "index.php" method = "POST">
            
                <input type = "radio" id = "item1" name = "choices" value = "1" <?php if($checked == 1){echo "checked";}?> />
                <input name = "name1" value = <?php echo $username[0]?> >
                <br/> 
                <input type = "radio" id = "item2" name = "choices" value = "2" <?php if($checked == 2){echo "checked";}?>/>
                <input name = "name2" value = <?php echo $username[1]?>>
                <br/>
                <input type = "radio" id = "item3" name = "choices" value = "3" <?php if($checked == 3){echo "checked";}?>/>
                <input name = "name3" value = <?php echo $username[2]?>>
                <br/>
                <input type = "radio" id = "item4" name = "choices" value = "4" <?php if($checked == 4){echo "checked";}?>/>
                <input name = "name4" value = <?php echo $username[3]?>>
                <br/>
                <input type = "radio" id = "item5" name = "choices" value = "5" <?php if($checked == 5){echo "checked";}?>/>
                <input name = "name5" value = <?php echo $username[4]?>>
                <br/>
                
                

                
                <input type = "submit" value = "Submit"/>
                <input type = "submit" value = "Clear"/>
            
        </form>
        
    </div>
    
        
    </body>
</html>


