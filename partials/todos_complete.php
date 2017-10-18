


<?php 

require "database.php";

$statement = $pdo->prepare("SELECT * FROM todo");

$statement->execute();

$todo = $statement->fetchAll(PDO::FETCH_ASSOC);



foreach($todo as $todo_task){ ?>
    <?php echo $todo_task["title"] . ' '; ?> 
    <?php 
            if($todo_task["completed"]){
                echo ":)   ";
            }else{
                echo ":(   ";
            }
                            // echo $todo_task["complete"]; ?>
    <?php echo $todo_task["createdBy"] . ' '; ?>
    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span><br>
<?php }
?>