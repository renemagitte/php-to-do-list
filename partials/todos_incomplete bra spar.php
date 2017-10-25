
<?php 

require "database.php";

$statement = $pdo->prepare("SELECT * FROM todo ORDER BY id DESC");

$statement->execute();

$todo = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


                <div class="columns_all">
                
                <div class="list_sub_title">
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
                
                <div class="column1">
                    <input type="checkbox" name="<?= $do_this["id"]; ?>" value="<?= $do_this["id"]; ?>">
                </div>
                
                <div class="column2">
                    <?php
                    // echo ":(   ";
                    echo $do_this["title"] . ' '; 
                    ?>
                </div>
                
                
                <div class="column4">
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
               
            <div class="button_bottom">
                <button type="submit" value="Utförd" name="done" class="button_style_green">
                    Utfört <span class="glyphicon glyphicon-ok"></span>
                </button>
            </div>
            
            <!-- TEST ATT BYTA NAMN: 
            
                <div class="input_name">
                            Byt till:
                </div>
                <div class="input_createdby">
                    <input type="text" name="new_title" id="new_title" value="new_title"> >
                </div>
        
                <div class="input_submit">
                    <button type="submit" name="edit" class="button_style_blue">
                    Byt namn   <span class="glyphicon glyphicon-erase"></span> 
                    </button>
                    
                    
                <div class="clear"></div>
                
                </div>
           slut på TEST ATT BYTA NAMN -->
            


            </form>

