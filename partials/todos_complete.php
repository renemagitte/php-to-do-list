


<?php 

require "database.php";

$statement = $pdo->prepare("SELECT * FROM todo ORDER BY id ASC");

$statement->execute();

$todo = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

                <div class="columns_all">
                
                <div class="list_sub_title">
                    Bravo! Du har redan klarat av att:
                </div>
                <div class="clear"></div>


<?php
foreach($todo as $do_this){ 
            if($do_this["completed"]){  
                ?>
                
                <form action="partials/delete_done.php" method="post">
   
                <div class="column1">
                    <input type="checkbox" name="<?= $do_this["id"]; ?>" value="<?= $do_this["id"]; ?>">
                </div>
                
                <div class="column2"> 
                    <?php    
                    // echo ":)   ";
                    echo $do_this["title"] . ' ';
                    ?>
                </div>
                
                <div class="column3">
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

               <div class="button_bottom">
                    <button type="submit" value="Ta bort" name="delete" class="button_style_red">
                      Ta bort <span class="glyphicon glyphicon-trash"></span> 
                    </button>
                </div>

                </form>

