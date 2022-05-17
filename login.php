<?php session_start() ?>
<?php if (isset($_SESSION["error"])) { ?>
    <b><?= $_SESSION["error"] ?></b>
    <?php unset($_SESSION["error"]) ?>
<?php } ?>

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
    <b>username</b><br>
    <input type="text" name="username"><br>
    <b>password</b><br>
    <input type="text" name="password"><br>
    <button name="sabt">ورود</button>
    <button name="sabt">ثبت نام</button>
</form>
</body>
</html>

