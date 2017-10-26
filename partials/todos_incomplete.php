
<?php 

require "database.php";

$statement = $pdo->prepare("SELECT * FROM todo ORDER BY id DESC");

$statement->execute();

$todo = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


        <div class="list_wrapper_incomplete">
                
                <div class="incomplete_title">
                    Att göra:
                </div>
                
                <div class="sort">
                    Sortera efter: 
                    <a href="index.php">Senast tillagda</a> | <a href="index_priority.php">Prioritet</a>
                </div>

                <div class="clear"></div>
                
<?php

foreach($todo as $do_this){ 
            if(!($do_this["completed"])){
                ?>
                
      
            <form action="partials/delete_done.php" method="post">
                
                <div class="checkbox_div">   
                    <input type="checkbox" name="<?= $do_this["id"]; ?>" value="<?= $do_this["id"]; ?>">
                </div>
                
                <div class="listed_title">
                    <?php
                    echo $do_this["title"] . ' '; 
                    ?>
                </div>
                
                <div class="clear_in_small"></div>
                
                
                <div class="listed_prio">
                                        <?php
                   if($do_this["priority"] == 1){
                        echo '<span class="glyphicon glyphicon-tag yellow" aria-hidden="true"></span>';
                    }elseif($do_this["priority"] == 2){
                         echo '<span class="glyphicon glyphicon-tag orange" aria-hidden="true"></span>';
                    }elseif($do_this["priority"] == 3){
                        echo '<span class="glyphicon glyphicon-tag red" aria-hidden="true"></span>';
                    }elseif($do_this["priority"] == 0){
                       echo '<span class="glyphicon glyphicon-tag white" aria-hidden="true"></span>';
                   }
                ?> 
                </div>
                
                <div class="clear_in_xsmall"></div>

                
                <div class="listed_creator">
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
               
            <div class="button_bottom">
                <button type="submit" value="Utförd" name="done" class="button_style_green">
                    Utfört <span class="glyphicon glyphicon-ok"></span>
                </button>
            </div>

            </form>
            
                <div class="clear"></div>
            
</div>

