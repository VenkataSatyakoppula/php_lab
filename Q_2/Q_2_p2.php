<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>19BCI0142 venkatasatya</title>
    <style>
    td,th{
        border: 2px solid black;
    }
    </style>
</head>
<body>
    <h1>Landing page for Question-2</h1>
    <table>
    <?php
    echo "<tr> <th>Field</th> <th>Value</th> </tr>";
    echo "<tr> <td>Name</td> <td>".$_POST['name']." </td> </tr>";
    echo "<tr> <td>Password</td> <td>".$_POST['pass']." </td> </tr>";
    echo "<tr> <td>Gender</td> <td>".$_POST['gender']." </td> </tr>";
    echo "<tr> <td>Date</td> <td>".$_POST['date']." </td> </tr>";
    echo "<tr> <td>Education</td> <td>";
    if( isset($_POST['edu']) && is_array($_POST['edu']) ) {
        foreach($_POST['edu'] as $edu) {
            echo "{$edu},";
        }
    }
    echo " </td> </tr>";
    echo "<tr> <td>Email</td> <td>".$_POST['email']." </td> </tr>";
    ?>
    </table>
</body>
</html>