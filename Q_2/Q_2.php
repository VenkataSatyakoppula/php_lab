<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>19BCI0142 venkatasatya</title>
</head>
<body>
    <form action="Q_2_p2.php" method="POST">
    <label for="name">Enter you name: </label>
    <input type="text" name="name" class="name"> <br>
    <label for="pass">password: </label>
    <input type="password" name="pass" class="pass"> <br>
    <label for="gender">Gender(Male or Female):</label> <br>
    <input type="radio" name="gender" class="gender" value="Male">
    Male <br>
    <input type="radio" name="gender" class="geneder" value="Female">
    Female  <br>
    <label for="date"> Date of Birth: </label> 
    <input type="date" name="date" class="date"> <br>
    <input type="checkbox" name="edu[]" class="edu" value="PG"> PG <br>
    <input type="checkbox" name="edu[]" class="edu" value="UG">  UG<br>
    <input type="checkbox" name="edu[]" class="edu" value="Professional"> Professional<br>
    <label for="email">Email id: </label> 
    <input type="email" name="email" id="email"> <br>
    <input type="submit" name="submit"value="Submit">
    </form>
</body>
</html>