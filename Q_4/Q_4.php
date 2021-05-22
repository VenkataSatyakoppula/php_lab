<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>19BCI0142 venkatasatya</title>
</head>
<body>
    <h1>Using cookies to store Username</h1>
    <?php
    $cookie_name = "name";
    $cookie_value = "Satya";
    setcookie($cookie_name,$cookie_value,time()+86400*30,"/");

    if (isset($_COOKIE[$cookie_name])) {
        echo "Page-1 <br>";
        echo "Username = ".$_COOKIE[$cookie_name];
    }
    ?>
</body>
</html>