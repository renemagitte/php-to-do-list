<?php
header("Location: ../index.php");

require "database.php";

// Delete todos that have been checked:
foreach ($_POST as $key => $value){
   if(isset($_POST['delete'])){
       $statement = $pdo->prepare(
           "DELETE FROM todo WHERE id = " . $value
       );
       $statement->execute();
   }
    
// Set status as "done" on todos that have been checked:
   else if(isset($_POST['done'])){
       $statement = $pdo->prepare(
           "UPDATE todo SET completed = 1 WHERE id = " . $value
       );
       $statement->execute();
   }
    
}
    
?>

