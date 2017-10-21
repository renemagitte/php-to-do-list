<?php
header("Location: ../index.php");

// var_dump($_POST);

require "database.php";


    
$statement = $pdo->prepare(
    "INSERT INTO todo (title, createdBy) 
    VALUES (:title, :createdBy)"
);

$statement->execute(array(
    ":title" => $_POST["title"],
    ":createdBy" => $_POST["createdBy"]
));
    





$todo = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($todo);    




?>