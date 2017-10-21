
<?php
    require 'partials/database.php';
    require 'partials/head.php';
    // require 'partials/insert_task.php';   
?>

<main>
   
<div class="list">
        
        <div class="list_title">
            <!-- <h1>TO-DO-LIST</h1> -->
            <a href="index.php">TO-DO-LIST</a>
            
            <div class="clear"></div>
        </div>
        
        <div class="list_items">
        <form action="partials/insert_task.php" method="POST">
        
                <div class="input_name">
                           Ny uppgift:
                </div>
                <div class="input_task">
                    <input type="text" name="title" id="task">
                </div>
                
                        
                <div class="input_name2">
                           Prio:
                </div>
                <div class="input_priority">
                    <input type="number" name="priority" id="priority" placeholder="0-3">
                </div>
                
                <div class="clear"></div>
            
                <div class="input_name">Skapad av:</div>
                <div class="input_createdby">
                    <input type="text" name="createdBy" id="createdBy" >
                </div>
        
                <div class="input_submit">
                    <button type="submit" class="button_style_blue">
                    Lägg till   <span class="glyphicon glyphicon-pencil"></span> 
                    </button>
                <div class="clear"></div>
                </div>
                               
<!--
            <div class="input_name">Prioritet:</div>
                <div class="input_priority">
                    <input type="number" name="priority" id="priority" placeholder="0-3">
                </div>
-->
                                <div class="clear"></div>
            
        </form>
        



        <?php   

        require 'partials/todos_incomplete_priority.php'; 
        ?>
        <br><br>

        <?php
        require 'partials/todos_complete_priority.php';  
        ?>
        
        
        <div class="change_name">
            <form action="partials/change_name.php" method="POST">  
                            <div class="input_name">
                           Byt från:
                </div>
                <div class="input_task">
                    <input type="text" name="title" id="task">
                </div>
                
                <div class="clear"></div>
            
                <div class="input_name">Byt till:</div>
                <div class="input_createdby">
                    <input type="text" name="createdBy" id="createdBy" >
                </div>
        
                <div class="input_submit">
                    <button type="submit" class="button_style_blue">
                    Byt namn   <span class="glyphicon glyphicon-erase"></span> 
                    </button>
                <div class="clear"></div>
                </div>
                                <div class="clear"></div>      
            
            </form>
        </div>


        
    </div> <!-- /.list_items -->

<?php    
require 'partials/footer.php';   
?>

    </div> <!-- /.list -->
</main>

