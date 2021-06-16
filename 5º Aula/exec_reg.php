<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exec_reg</title>
</head>

<body>
    <h1>dunno</h1>
    Welcome <?php echo $_POST["username"]; ?><br>
    Your Name address is: <?php echo $_POST["name"]; ?><br>
    Your Adress address is: <?php echo $_POST["address"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?><br>
</body>

<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "acr05");
$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$address = mysqli_real_escape_string($conn, $_POST['address']);

if (empty($username) || empty($email) || empty($name) || empty($address)) {
    echo "Missing Field did not insert new user.";
    header('location:/?created=false');
} else {
    $sql = "INSERT INTO users (Address, Email, Name,Username)
    VALUES ('$address',  '$email', '$name' ,'$username' )";
    if ($conn->query($sql) === TRUE) { 
        header('location:/?created=true');     
    } else {
        echo "Erro  r: " . $sql . "<br>" . $conn->error;
    }

}
?>