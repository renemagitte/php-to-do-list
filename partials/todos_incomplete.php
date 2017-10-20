
<?php 

require "database.php";

$statement = $pdo->prepare("SELECT * FROM todo ORDER BY id DESC");

$statement->execute();

$todo = $statement->fetchAll(PDO::FETCH_ASSOC);



foreach($todo as $todo_task){ 
            if(!($todo_task["completed"])){
                
                ?>
                
    <!--
                <form action="partials/check_task.php" method="POST">
                <input type="text" name="checked" id="$todo_task['id']" >
                <input type="submit">
                
                </form>
                -->
                
                <?php
                
                
                echo ":(   ";
                echo $todo_task["title"] . ' ';       
                echo $todo_task["createdBy"] . '<br />'; 
            }
}


?>