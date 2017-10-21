<?php

header("Location: ../index.php");

require "database.php";



//$statement = $pdo‐>prepare(
//    "DELETE FROM todo WHERE id = :id"
//); 
//
//$statement‐>execute(array(":id" => '$_GET'));
//

//if(isset($_POST['check'])){
//    foreach ($_POST as $key => value) {
//    $statement = $pdo->prepare(
//        "DELETE FROM todo WHERE id = " . $value
//        );
//        $statement->execute();
//    }
//}

if(isset($_POST['check'])){
    foreach ($_POST as $key => $value) {
    $statement = $pdo->prepare(
        "DELETE FROM todo WHERE id = " . $value
        );
        $statement->execute();
    }
}

var_dump($_POST);

?>




