<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "form";
$con = mysqli_connect($server, $username, $password,$database);

if(!$con){
    die("Connection to the database failed to " .mysqli_connect_error());

}
echo "Connected To the DB" ;
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$pass = $_POST['pass'];
$conpass = $_POST['conpass'];
$slq = "INSERT INTO `form`.`google` (`firstname`, `lastname`, `pass`, `conpass`) VALUES ('$firstname', '$lastname', '$pass', '$conpass');"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our School</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Sing into Google</h1>
        <form action="index.php">
            <input type="text" name="firstname" placeholder="Enter your name">
            <input type="text" name="lastname" placeholder="Enter your last name">
            <input type="password" name="pass" placeholder="Enter Your password">
            <input type="password" name="conpass" placeholder="Confirm Your password">
            <button class="btn-submit">Submit</button>
        </form>
        <button class="btn-reset">Reset</button>
        </div>

</body>
</html>