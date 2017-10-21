Bygger på checkbox så att man kan deltea samtidigt!

delete-dokument:

<?php 

if(isset($_POST['check eller vad submit har för name'])){
    foreach ($_POST as $key => value) {
    $statement = $pdo->prepare(
        "DELETE FROM todo WHERE id = " . $value
        );
        $statement->execute();
    }
}

?>


knappen i index:

<form action="helenas_delete.php" method="post">
   
   <input type="ceckbox" name="check" value="<?= $todo_task["id"]; ?>">
<input type="submit" value="Ta bort" name="name">

</form>

