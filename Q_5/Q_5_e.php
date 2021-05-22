<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>19BCI0142 venkatasatya</title>
</head>
<body>
    <form method="post" action="#">
        <input type="text" name="id" placeholder="Enter id" required><br>
        <input type="submit" name="submit" />
    </form>
    <?php
        $conn = mysqli_connect('localhost','root','','lab') or die('Unable to connect');
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $id = $_POST['id'];
            $query = "DELETE FROM `person` WHERE Id LIKE '$id'";
            $execute = mysqli_query($conn,$query);
            if($execute){
                echo "<script>alert('User Removed Successfully');</script>";
            } else{
                echo "<script>alert('Unable to remove Try again');</script>";
            }
        }
    ?>
</body>
</html>