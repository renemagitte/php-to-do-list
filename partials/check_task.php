<?php

// header("Location: ../index.php");

require "database.php";


if(isset($_POST['check'])){
    foreach ($_POST as $key => $value) {
        
                $statement = $pdo->prepare(
                    "INSERT INTO todo (completed)
                    VALUES (:completed)"
                );

                $statement->execute(array(
                    ":completed" => $_POST["check"]
                ));
    

                $todo = $statement->fetchAll(PDO::FETCH_ASSOC);
                var_dump($todo); 
        
    }
}




?>


<!-- DENNA GYLLENE SKICKAR ÖVER TOM COMPLETED TILL DATABAS:
if(isset($_POST['check'])){
    foreach ($_POST as $key => $value) {
        
                // denna gyllene kod gör :) till complete men inget annat
                $statement = $pdo->prepare(
                    "INSERT INTO todo (completed)
                    VALUES (:completed)"
                );

                $statement->execute(array(
                    ":completed" => $_POST["check"]
                ));
    

                $todo = $statement->fetchAll(PDO::FETCH_ASSOC);
                var_dump($todo); 
        
                // slut på gyllene kod
    }
}
-->




<?php
//
//// header("Location: ../index.php");
//
//require "database.php";
//
//
//if(isset($_POST['check'])){
//    foreach ($_POST as $key => $value) {
//    $statement = $pdo->prepare(
//    "INSERT INTO todo WHERE id = " . $value
//        );
//        $statement->execute();
//    }
//}
//
//$todo = $statement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($todo);   
//


?>
    
    
    
    
    
  
    
      
          
    
<!--

$statement = $pdo->prepare(
    "INSERT INTO todo (completed)
    VALUES :completed"
    // "SELECT * FROM todo"
);

$statement->execute(
    ":completed" = $_POST["check"]
);



$todo = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($todo);    




?>
-->
