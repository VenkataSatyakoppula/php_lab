<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>19BCI0142 venkatasatya</title>
</head>
<body>
    <h1>Q-3)using cookies for page count</h1>
    <?php
    $count = 1;
    $name = "visits";
    if (isset($_COOKIE['visits'])) {
        $count = $_COOKIE['visits'];
        $count++;
    }
    setcookie($name,$count,time() + (86400*30),"/");
    echo "No.of Visit Counts = ".$count;
    ?>
</body>
</html>