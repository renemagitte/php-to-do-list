
<?php 

require "database.php";

$statement = $pdo->prepare("SELECT * FROM todo ORDER BY id DESC");

$statement->execute();

$todo = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


                <div class="columns_all">
                
                <div class="list_title">
                    Ogjort:
                </div>
                <div class="clear"></div>
                
<?php

foreach($todo as $do_this){ 
            if(!($do_this["completed"])){
                ?>
                
            <form action="partials/delete_done.php" method="post">
                
                <div class="column1">
                    <input type="checkbox" name="<?= $do_this["id"]; ?>" value="<?= $do_this["id"]; ?>">
                </div>
                
                <div class="column2">
                    <?php
                    // echo ":(   ";
                    echo $do_this["title"] . ' '; 
                    ?>
                </div>
                
                <div class="column3">
                   Skapad av: 
                    <?php
                    echo $do_this["createdBy"] . '<br />'; 
                    ?>
                
                <div class="clear"></div>
                </div>
            <?php
            }
} 
?>
               <div class="clear"></div>
        
                <input type="submit" value="Utförd" name="done">

            </form>

