


<?php 

require "database.php";

$statement = $pdo->prepare("SELECT * FROM todo ORDER BY id ASC");

$statement->execute();

$todo = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

                <div class="columns_all">
                
                <div class="list_sub_title_2">
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
                
                <div class="column4">
                <?php
//                   if($do_this["priority"] == 1){
//                        echo '<span class="glyphicon glyphicon-tag yellow" aria-hidden="true"></span>';
//                    }elseif($do_this["priority"] == 2){
//                         echo '<span class="glyphicon glyphicon-tag orange" aria-hidden="true"></span>';
//                    }elseif($do_this["priority"] == 3){
//                        echo '<span class="glyphicon glyphicon-tag red" aria-hidden="true"></span>';
//                    }elseif($do_this["priority"] == 0){
                       echo '<span class="glyphicon glyphicon-tag white" aria-hidden="true"></span>';
//                   }
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
                    <button type="submit" value="Ta bort" name="delete" class="button_style_red">
                      Ta bort <span class="glyphicon glyphicon-trash"></span> 
                    </button>
                    
                    <div class="clear"></div>
                </div>
                
                <div class="clear"></div>

                </form>

