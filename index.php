
<?php
    require 'partials/database.php';
    require 'partials/head.php';
    // require 'partials/insert_task.php';   
?>

<main>
   
<div class="list">
        
        <div class="list_title">
            <a href="index.php">TO-DO-LIST</a>
            
            <div class="clear"></div>
        </div>
        
        <div class="red_box">
           
            <?php
//                if(isset($_GET["message"])){
//                echo $_GET["message"];  
//                }
            
            if(isset($_GET["message"])){
                if($_GET["message"] == 0){
                    echo "Ny punkt";
                }else{
                    echo "Finns redan";
                }
            }
            ?>
            
            <div class="clear"></div>
        </div>
        
<!--        <div class="list_items">-->
        
        <form action="partials/insert_task_checkdouble.php" method="POST">
        <div class="insert_task_parent">
        

        
                <div class="insert_task">
                           Ny uppgift:
                </div>
                <div class="insert_task_input">
                    <input type="text" name="title" id="task">
                </div>
                
                        
                <div class="insert_prio">
                           Prio:
                </div>
                <div class="insert_prio_input">
                    <input type="number" name="priority" id="priority" placeholder="0-3">
                </div>
                
<!--                <div class="clear"></div>-->
            
                <div class="insert_creator">Skapad av:</div>
                <div class="insert_creator_input">
                    <input type="text" name="createdBy" id="createdBy" >
                </div>
                
<!--                <div class="clear_small"></div>-->
                
<!--
                <div class="input_name2_small">
                           Prio:
                </div>
                <div class="input_priority_small">
                    <input type="number" name="priority" id="priority" placeholder="0-3">
                </div>
-->
        
                <div class="insert_button">
                    <button type="submit" class="button_style_blue">
                    Lägg till   <span class="glyphicon glyphicon-pencil"></span> 
                    </button>
<!--                <div class="clear"></div>-->
                </div>
            
<!--            <div class="clear"></div>-->

            </div>
        </form>
        



        <?php   

        require 'partials/todos_incomplete.php'; 
        ?>
        <br><br>

        <?php
        require 'partials/todos_complete.php';  
        ?>
        
        <?php
        require 'partials/change_name_form.php';  
        ?>
        
        



        
<!--    </div>  /.list_items -->

<?php    
require 'partials/footer.php';   
?>

    </div> <!-- /.list -->
</main>


