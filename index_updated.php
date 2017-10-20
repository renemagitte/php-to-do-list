
<?php
    require 'partials/database.php';
    require 'partials/head.php';
    require 'partials/insert_task.php';

    
?>

<h1>TO-DO-LIST</h1><p />
 
 <div class="red_box">Din att göra-lista har uppdaterats!</div>
  

<form action="partials/insert_task.php" method="POST">
   Uppgift:
    <input type="text" name="title" id="task" >
    
    Verkställd:
    <input type="text" name="completed" id="completed" >
    
    Skapad av:
    <input type="text" name="createdBy" id="createdBy" >
    
    <input type="submit">

</form>
    
 
<?php   

require 'partials/todos_incomplete.php'; 
?>
<br><br>

<?php

require 'partials/todos_complete.php';  
?>

    
<?php 

//foreach($todo as $todo_task){ ?>
    <p> <?php //echo $todo_task["title"]; ?> </p>
<?php // }
?>


<form action="partials/delete_task.php" method="POST">
    Skriv in titel för att radera post:
    <input type="text" name="delete_task[]" id="delete_task">
    
    <input type="submit" value="submit">

</form>







<?php    
require 'partials/footer.php';   
?>
