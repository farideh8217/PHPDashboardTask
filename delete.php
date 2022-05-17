<?php
include_once "config.php";

if(!isset($_GET["id"])) {
    exit("error, ID needed");
}
$id = $_GET["id"];
$sql = "DELETE FROM task WHERE id = ?";
$stmt = $db->prepare($sql);
$stmt->execute([
    $id
]);
header("Location: panel.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>delete</title>
</head>
</html>