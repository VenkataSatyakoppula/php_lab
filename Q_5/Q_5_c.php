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
    $sql = "SELECT COUNT(*) FROM person WHERE Department='SALE'";
    $sql2 = "SELECT * FROM person";
    $res = $conn->query($sql);
    $res2 = $conn->query($sql2);
    $values = mysqli_fetch_assoc($res);
    if (!$res) {
        echo "SQL Query failed";
    }else {
        echo "<h2>c)Current Rows in the Database</h2><br>";
        echo "<br><table> <tr><td>ID</td><td>NAME</td><td>DOB</td><td>DEPARTMENT</td><td>SALARY</td></tr>";
        while($row = $res2->fetch_assoc()) {
            echo "<tr> <td>". $row["id"]."</td><td>".$row["Name"]."</td><td>".$row["DOB"]."</td><td>".$row["Department"]."</td><td>".$row["Salary"]."</td> </tr>";
        }
        echo "</table>";
        echo mysqli_error($conn);
        echo "<h2>No.of persons on SALE Department = ".$values['COUNT(*)']." People </h2><br>";
    }
    mysqli_close($conn);
    ?>
</body>
</html>