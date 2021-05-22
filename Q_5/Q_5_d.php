<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>19BCI0142 venkatasatya</title>
    <style>
    td{
        border: 2px solid black;
    }
    </style>
</head>
<body>
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($server,$username,$password);
    if (!mysqli_select_db($conn,'lab')) {
        echo "Database not selected <br>";
    }
    $sql = "SELECT * FROM person WHERE Department='SALE'";
    $sql2 = "SELECT * FROM person";
    $sql3 = "SELECT COUNT(*) FROM person WHERE Department='SALE'";
    $res  = $conn->query($sql);
    $res2 = $conn->query($sql2);
    $res4 = $conn->query($sql3);
    $values = mysqli_fetch_assoc($res4);
    if (!$res || !$res2) {
        echo "SQL Query failed";
    }else {
        echo "<h2>d)Current Rows in the Database</h2><br>";
        echo "<br><table> <tr><td>ID</td><td>NAME</td><td>DOB</td><td>DEPARTMENT</td><td>SALARY</td></tr>";
        while($row = $res2->fetch_assoc()) {
            echo "<tr> <td>". $row["id"]."</td><td>".$row["Name"]."</td><td>".$row["DOB"]."</td><td>".$row["Department"]."</td><td>".$row["Salary"]."</td> </tr>";
        }
        echo "</table>";
        echo mysqli_error($conn);
        echo "<h3>After Updation</h3>";
        // echo "<h2>No.of persons on SALE Department = ".$values['COUNT(*)']." People </h2><br>";
        echo "<br><table> <tr><td>ID</td><td>NAME</td><td>DOB</td><td>DEPARTMENT</td><td>SALARY</td></tr>";
        while ($update =$res->fetch_assoc()) {
            $old = $update["Salary"];
            $id = $update["id"];
            $new = intval($old*1.10);
            $up = "UPDATE person SET Salary = $new WHERE id=$id";
            $res3 = $conn->query($up);
            echo "<tr> <td>". $update["id"]."</td><td>".$update["Name"]."</td><td>".$update["DOB"]."</td><td>".$update["Department"]."</td><td>".$new."</td> </tr>";
        }
        echo "</table>";
        echo "<h3>The No.of People Benefitted = ".$values["COUNT(*)"]."</h3>";
    }
    mysqli_close($conn);
    ?>
</body>
</html>