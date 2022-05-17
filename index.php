<?php
include_once "config.php";
session_start();

if (isset($_POST["username"]) && isset($_POST["password"]) && trim($_POST["username"]) !== "" && trim($_POST["password"]) != "") {
    $sql = "SELECT COUNT(*) AS count FROM user where username = ? AND password = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        $_POST["username"],
        $_POST["password"],
    ]);
    $user = $stmt->fetch();
    if (isset($user["count"]) and $user["count"] > 0) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        header("Location: panel.php");
    } else {
        $_SESSION["error"] = "Sorry, your username or password are incorrect!";
        header("Location: login.php");
    }
} else {
    $_SESSION["error"] = "Sorry, your values are not valid!";
    header("Location: register.php");
    exit();
}
?>
