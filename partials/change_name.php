<?php
header("Location: ../index.php");


require 'database.php';



$statement = $pdo->prepare(
    "UPDATE todo SET title = :new_title WHERE title = :title"
);
$statement->execute(array(
    ":title" => $_POST["old_title"],
    ":new_title" => $_POST["new_title"]
));

$todo = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($todo);    



?>