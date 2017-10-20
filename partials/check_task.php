<?php

header("Location: ../index.php");

require "database.php";

$statement = $pdo->prepare(
    "INSERT INTO todo (completed)
    VALUES :completed"
    // "SELECT * FROM todo"
);

$statement->execute(
    ":completed" = $_POST["checked"]
);



$todo = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($todo);    




?>
