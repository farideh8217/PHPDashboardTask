<?php
include_once "config.php";
if(!isset($_GET["id"])) {
    exit("error, ID needed");
}
$id = $_GET["id"];
$sql = "SELECT * FROM task WHERE id = ?";
$stmt = $db->prepare($sql);
$stmt->execute([
    $id
]);
$user = $stmt->fetch(PDO::FETCH_OBJ);
if($user == null) {
    exit("we not have");    
}


if(isset($_POST["name"]) ) {
    $sql = "UPDATE task SET name = ? where id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        $_POST["name"],
        $id
    ]);
    header("Location: panel.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
<body>
        <form action="" method="POST">
            id:<br>
            <input name="id" type="text" value="<?=$user->id ?>">
            <br>
            title:<br>
            <input name="name" type="text" value="<?=$user->title ?>">
            <br>
            <input name="save" type="submit" value="submit">
        </form>
    </body>
</body>
</html>