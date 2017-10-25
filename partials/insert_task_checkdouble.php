<?php
//function redirect($page){
//    header('Location: ' . $page);
//    exit;
//}

//die(var_dump($_POST));

header("Location: ../index.php?message=".$message);

// header("Location: ../index.php?message=Din lista har uppdaterats.");

// var_dump($_POST);


require "database.php";

$statement = $pdo->prepare("SELECT * FROM todo");
$statement->execute();
$todo = $statement->fetchAll(PDO::FETCH_ASSOC);

$message = urlencode("YOU MADE A NEW TODO!");

$message_wrong = urlencode("YOU HAVE FILL TODO & NAME!");


// $count_double = Variable that collects how many times a new title occurs among the existing todos:
$count_double = 0;

// Foreach-loop that calculates current value of $count_double above:            
foreach($todo as $i){
    if($i["title"] == $_POST["title"]){
        $count_double = $count_double + 1;            
    }else{
        $count_double = $count_double;
    }
}
         
// If the new title has occured 0 times, proceed to insert new todo in database:
if($count_double == 0){
    
        //$page = "../index.php?message=Din lista har uppdaterats.";
        //redirect($page1);
        
        //header("Location: ../index.php?message=".$message);
    
        // header("Location: ../index.php?message=Din lista har uppdaterats.");
    
        $statement = $pdo->prepare(
            "INSERT INTO todo (title, createdBy, priority) 
            VALUES (:title, :createdBy, :priority)"
        );

        $statement->execute(array(
            ":title" => $_POST["title"],
            ":createdBy" => $_POST["createdBy"],
            ":priority" => (int)$_POST["priority"]
        ));

        $todo = $statement->fetchAll(PDO::FETCH_ASSOC);



// If the new title has occured 1 time or more, show error message:
        }else{
        //$page = "../index.php?message=Inte två likadana uppgifter tack.";
        //redirect($page2);
    
            // header("Location: ../index.php?message=".$message_wrong);
            // header("Location: ../index.php?message=Inte två likadana uppgifter tack.");

    
            // echo "Du kan inte lägga in två todos med samma namn";
    

        }

?>