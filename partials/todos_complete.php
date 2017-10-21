


<?php 

require "database.php";

$statement = $pdo->prepare("SELECT * FROM todo ORDER BY id ASC");

$statement->execute();

$todo = $statement->fetchAll(PDO::FETCH_ASSOC);



foreach($todo as $do_this){ 
            if($do_this["completed"]){  
                ?>
                
                <form action="partials/delete_done.php" method="post">
   
               <!--
                <input type="checkbox" name="check" value="<?= $todo_task["id"]; ?>">
            -->
               
                <input type="checkbox" name="<?= $do_this["id"]; ?>" value="<?= $do_this["id"]; ?>">
                    
                <?php    
                // echo ":)   ";
                echo $do_this["title"] . ' ';       
                echo $do_this["createdBy"] . '<br />'; 
            }       
} 
?>

                <input type="submit" value="Ta bort" name="delete">

                </form>

