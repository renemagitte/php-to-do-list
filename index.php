
<?php
    require 'partials/database.php';
    require 'partials/head.php';
    // require 'partials/insert_task.php';   
?>

<main>
   
<div class="list">
        
        <div class="list_title">
            <h1>TO-DO-LIST</h1>
        </div>
        
        <div class="list_items">
        <form action="partials/insert_task.php" method="POST">
           
            <div class="input_task">
                Uppgift:
                <input type="text" name="title" id="task" >
            </div>
            
            <div class="input_createdby">
                <!-- Verkställd:
                <input type="text" name="completed" id="completed" >
                -->
                Skapad av:
                <input type="text" name="createdBy" id="createdBy" >
            </div>
            
            <div class="input_submit">
                <input type="submit">
                
                <div class="clear"></div>
            </div>
            
        </form>
        



        <?php   

        require 'partials/todos_incomplete.php'; 
        ?>
        <br><br>

        <?php
        require 'partials/todos_complete.php';  
        ?>


        
    </div> <!-- /.list_items -->


    </div> <!-- /.list -->
</main>

<?php    
require 'partials/footer.php';   
?>
