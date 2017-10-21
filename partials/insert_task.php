<?php
header("Location: ../index_updated.php");

// var_dump($_POST);

require "database.php";


    
$statement = $pdo->prepare(
    "INSERT INTO todo (title, createdBy, priority) 
    VALUES (:title, :createdBy, :priority)"
);

$statement->execute(array(
    ":title" => $_POST["title"],
    ":createdBy" => $_POST["createdBy"],
    ":priority" => $_POST["priority"]
));
    





$todo = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($todo);    




?>