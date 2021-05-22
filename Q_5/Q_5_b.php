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
    <form action="#" method="POST">
    Enter the Department name: <input type="text" name="dept">
    <input type="submit" value="Submit">
    </form>
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($server,$username,$password);
    if (!mysqli_select_db($conn,'lab')) {
        echo "Database not selected <br>";
    }
    $dept = $_POST['dept'];
    $sql = "SELECT * FROM person WHERE Department='$dept'";
    $res = $conn->query($sql);
    if (!$res) {
        echo "SQL Query failed";
    }else {
        echo "<br><table> <tr><td>ID</td><td>NAME</td><td>DOB</td><td>DEPARTMENT</td><td>SALARY</td></tr>";
        while($row = $res->fetch_assoc()) {
            echo "<tr> <td>". $row["id"]."</td><td>".$row["Name"]."</td><td>".$row["DOB"]."</td><td>".$row["Department"]."</td><td>".$row["Salary"]."</td> </tr>";
        }
        echo "</table>";
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>
</html>