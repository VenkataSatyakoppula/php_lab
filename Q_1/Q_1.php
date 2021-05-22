<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>19BCI0142 venkatasatya</title>
</head>
<body>
    <h1>Question-1</h1>
    <?php
    echo "<h2> a) <br> Welcome to This PHP program</h2>";
    ?>
    <h2>b)</h2>
    <form method="post">
    <label for="name">Enter name:</label>
    <input type="text" name="name" id="name">
    <input type="submit" value="Submit">
    </form>
    <?php
    $name = $_POST['name'];
    date_default_timezone_set("Asia/Calcutta");
    $day = "";
    if (intval(date("H"))<12) {
        $day = "Morning";
    }elseif(intval(date("H"))<=18 && intval(date("H"))>=12){
        $day = "Afternoon";
    }else if (intval(date("H"))<23 && intval(date("H"))>18) {
        $day = "Evening";
    }else{
        $day = "night";
    }
    echo "<h2> Hello!! ".$name." Good ".$day;
    ?>
    <h2>c)</h2>
    <form action="" method="POST">
    <label for="color"> Enter the color((r-red, g-green, b-
blue, w-white, l-black, o-orange, etc.) : </label>
    <input type="text" name="color" >
    <input type="submit" value="Submit">
    </form>
    <?php
    $color = $_POST['color'];
    switch ($color) {
        case 'r':
            echo "<body style='background-color:red'>";
            break;
        case 'g':
            echo "<body style='background-color:green'>";
            break;
        case 'b':
            echo "<body style='background-color:blue'>";
            break; 
        case 'w':
            echo "<body style='background-color:white'>";
            break;  
        case 'y':
            echo "<body style='background-color:yellow'>";
            break;
        case 'o':
            echo "<body style='background-color:orange'>";
            break;
        case 'v':
            echo "<body style='background-color:violet'>";
            break;
        case 'i':
            echo "<body style='background-color:indigo'>";
            break;
        case 'l':
            echo "<body style='background-color:black'>";
            break;
        default:
            echo " No color Entered or Enter only (v,i,b,g,y,o,r,l)";
            break;
    }
    ?>
    <h2>d)</h2>
    <form action="" method="POST">
    <label for="str">Enter the Palindrome</label>
    <input type="text" name="str">
    <input type="submit">
    </form>
    <?php
    $str = $_POST['str'];
    $length = strlen($str)/2;
    $i=0;$j=0;
    while ($i<$length) {
        if ($str[$i]==$str[strlen($str)-$i-1]) {
            $j++;
        }
        $i++;
    }
    if (intval($length)+1==$j ||intval($length)==$j && count($str)>0 ){
        echo "<h3>".$str." is a Palindrome</h3>";
    }
    else {
        echo "<h3>".$str." is a NOT Palindrome</h3>";
    }
    ?>
</body>
</html>