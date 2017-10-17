
<?php
    require 'partials/database.php';
    require 'partials/head.php';
    require 'partials/fetch_all_tasks.php';

    
?>

<h1>TO-DO-LIST</h1><p />
  

<form action="partials/fetch_all_tasks.php" method="POST">
   Uppgift:
    <input type="text" name="title" id="task" >
    
    Verkställd:
    <input type="text" name="completed" id="completed" >
    
    Skapad av:
    <input type="text" name="createdBy" id="createdBy" >
    
    <input type="submit">

</form>
    
    
    

    
<?php 

foreach($todo as $todo_task){ ?>
    <p> <?php echo $todo_task["title"]; ?> </p>
<?php }
?>






<?php    
require 'partials/footer.php';   
?>
