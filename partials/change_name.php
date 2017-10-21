<?php

require "database.php";

foreach ($_POST as $key => $value){
   if(isset($_POST['delete'])){
   
       $statement = $pdo->prepare(
           "UPDATE todo SET title = 1 WHERE id = " . $value
       );
       $statement->execute();
       
       
?>
