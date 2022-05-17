<?php
require_once "config.php";

if(!isset($_POST["username"]) || !isset($_POST["password"])) {
    print "Error!";
    exit();
}

$sql = "INSERT INTO user (name,username, password) values(?, ?, ?)";
$stmt = $db->prepare($sql);
$stmt->execute([
    $_POST["name"],
    $_POST["username"],
    $_POST["password"],
]);
print "Welcome, your new account created!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST">
    <b>name</b><br>
    <input type="text" name="name"><br>
    <b>username</b><br>
    <input type="text" name="username"><br>
    <b>password</b><br>
    <input type="text" name="password"><br>
    <button name="sabt">ورود</button>
</form>
</body>
</html>