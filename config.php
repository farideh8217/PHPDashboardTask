<?php
$database=[
    'host'=>'localhost',
    'dbname'=>'dashboardtask',
    'user'=>'root',
    'pass'=>''
];
try {
    $db = new PDO("mysql:host={$database['host']};dbname={$database['dbname']}", $database['user'], $database['pass']);
} catch (PDOException $e) {
    exit("An error happend, Error: " . $e->getMessage());
}
