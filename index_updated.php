
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
        
        <div class="red_box">
           Din lista har uppdaterats!
            
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
                
                <div class="clear_small"></div>
                
                <div class="input_name2_small">
                           Prio:
                </div>
                <div class="input_priority_small">
                    <input type="number" name="priority" id="priority" placeholder="0-3">
                </div>
        
                <div class="input_submit">
                    <button type="submit" class="button_style_blue">
                    Lägg till   <span class="glyphicon glyphicon-pencil"></span> 
                    </button>
                <div class="clear"></div>
                </div>
            
            <div class="clear"></div>
        </form>
        



        <?php   

        require 'partials/todos_incomplete.php'; 
        ?>
        <br><br>

        <?php
        require 'partials/todos_complete.php';  
        ?>
        
        
        <div class="change_name">
            <form action="partials/change_name.php" method="POST">  
                <div class="input_name">
                           Byt från:
                </div>
                <div class="input_task">
                    <input type="text" name="old_title" id="old_title" value="old_title">
                </div>
                
                <div class="clear"></div>
            
                <div class="input_name">
                            Byt till:
                </div>
                <div class="input_createdby">
                    <input type="text" name="new_title" id="new_title" value="new_title">
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


