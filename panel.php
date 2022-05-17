<?php
require_once "config.php";
session_start();
// if (!isset($_SESSION["username"]) && !isset($_SESSION["password"])) {
//     header("Location: login.php");
//     exit();
// }

print "Welcome, " . $_SESSION["username"];

function getAllUsers(){
    global $db;
    $sql = "SELECT * FROM task";
    $stmt = $db->prepare($sql);
    $stmt->execute([

    ]);
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}
$users = getAllUsers();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
<table  border="1" width="500" align="center">
            <tr>
                <th>id</th>
                <th>title</th>
                <th>عملیات</th>
            </tr>
            <?php foreach ($users as $user) : ?>
                <tr>
                        <td><?= $user->id ?></td>
                        <td><?= $user->title ?></td>
                        <td>
                            <a href="insert.php">INSERT</a><br>
                            <a href="update.php?id=<?= $user->id ?>">EDIT</a>
                            <a href="delete.php?id=<?= $user->id ?>">DELETE</a>
                        </td>
                </tr>
            <?php endforeach; ?> 
</body>
</html>


?>