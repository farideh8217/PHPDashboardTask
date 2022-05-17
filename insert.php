<?php
include_once "config.php";

if (isset($_POST["save"])) {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $sql="INSERT INTO task(id,title) values (?,?) ";
    $stmt =$db->prepare($sql);
    $stmt->execute([
        $id,
        $title,
    ]); 
   header("Location: panel.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>insert</title>
</head>
    <body>
        <form action="" method="POST">
            id:<br>
            <input name="id" type="text">
            <br>
            title:<br>
            <input name="title" type="text">
            <br>
            <input name="save" type="submit" value="submit">
        </form>
    </body>
</html>