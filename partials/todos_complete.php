


<?php 

require "database.php";

$statement = $pdo->prepare("SELECT * FROM todo ORDER BY id ASC");

$statement->execute();

$todo = $statement->fetchAll(PDO::FETCH_ASSOC);



foreach($todo as $todo_task){ 
            if($todo_task["completed"]){  
                ?>
                
                <form action="partials/delete_task.php" method="post">
   
                <input type="checkbox" name="check" value="<?= $todo_task["id"]; ?>">
                <input type="submit" value="Ta bort" name="name">

                </form>
                    
                <?php    
                echo ":)   ";
                echo $todo_task["title"] . ' ';       
                echo $todo_task["createdBy"]; 
                ?>
                
                <!--
                <form action="partials/delete_task.php" method="POST">
                <input type="hidden" 
                    name="title" 
                    value="<?php $todo_task["id"]; ?>">

                <input type="submit" value="delete">
                </form>
                -->
                
                <a href="partials/delete_task.php?id=<?= $todo_task["id"] ?>">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </a><br>
            <?php
            }       
}

?>