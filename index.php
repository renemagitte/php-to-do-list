
<?php
    require 'partials/database.php';
    require 'partials/head.php';
    // require 'partials/insert_task.php';   
?>

<main>
   
<div class="list">
        
        <div class="list_title">
            <h1>TO-DO-LIST</h1>
            
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
                                <div class="clear"></div>
            
        </form>
        



        <?php   

        require 'partials/todos_incomplete.php'; 
        ?>
        <br><br>

        <?php
        require 'partials/todos_complete.php';  
        ?>


        
    </div> <!-- /.list_items -->

<?php    
require 'partials/footer.php';   
?>

    </div> <!-- /.list -->
</main>


