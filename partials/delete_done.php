<?php
header("Location: ../index.php");


require "database.php";




foreach ($_POST as $key => $value){
   if(isset($_POST['delete'])){
       $statement = $pdo->prepare(
           "DELETE FROM todo WHERE id = " . $value
       );
       $statement->execute();
   }
   else if(isset($_POST['done'])){
       $statement = $pdo->prepare(
           "UPDATE todo SET completed = 1 WHERE id = " . $value
       );
       $statement->execute();
   }
    
    // TEST ATT BYTA NAMN
//    
//    else if(isset($_POST['edit'])){
//
//            $statement = $pdo->prepare(
//           "UPDATE todo SET title = "$_POST['new_title']" WHERE id = " . $value
//       );
//        
//       $statement->execute(
//    
//       ); 
//        
//        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
//    
//        var_dump($_POST);
    
    // SLUT PÅ TEST ATT BYTA NAMN
}
    


?>

