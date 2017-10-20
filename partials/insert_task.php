<?php

header("Location: ../index_updated.php");

// var_dump($_POST);

require "database.php";


// if(isset($_POST["title eller vad inputfältet har för name"])){

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

// }



$todo = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($todo);    




?>