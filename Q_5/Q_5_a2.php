<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($server,$username,$password);
    if ($conn) {
        echo " Mysql Connection was successful <br>";
    }
    if (!mysqli_select_db($conn,'lab')) {
        echo "Database not selected <br>";
    }
    $id = intval($_POST['id']);
    $name = $_POST['name'];
    $dob = $_POST['date'];
    $dep = $_POST['Department'];
    $sal = intval($_POST['salary']);
    $sql_query = "INSERT INTO person (id,Name,DOB,Department,Salary) VALUES ('$id','$name','$dob','$dep','$sal');";
    if (!mysqli_query($conn,$sql_query)) {
        echo "No values are Inserted in to database <br>";
        echo "{$name}";
        echo mysqli_error($conn);
    }else {
        echo "Values Inserted Successfully";
    }
    mysqli_close($conn);
    ?>