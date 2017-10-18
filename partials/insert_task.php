<?php

header("Location: ../index.php");

// var_dump($_POST);

require "database.php";

$statement = $pdo->prepare(
    "INSERT INTO todo (title, completed, createdBy)
    VALUES (:title, :completed, :createdBy)"
    // "SELECT * FROM todo"
);

$statement->execute(array(
    ":title" => $_POST["title"],
    ":completed" => $_POST["completed"],
    ":createdBy" => $_POST["createdBy"]
));



$todo = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($todo);    




?>