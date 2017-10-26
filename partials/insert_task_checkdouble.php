<?php
function redirect_to($location) {
  if (headers_sent($filename, $line)) {
    trigger_error("Headers already sent in {$filename} on line {$line}", E_USER_ERROR);
  }
  header("Location: {$location}");
  exit;
}

require "database.php";

$statement = $pdo->prepare("SELECT * FROM todo");
$statement->execute();
$todo = $statement->fetchAll(PDO::FETCH_ASSOC);

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
//
    // ("Location: ../index.php?message=Din lista har uppdaterats.");

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
    
      redirect_to("../index.php?message=Din lista har uppdaterats.");

// If the new title has occured 1 time or more, show error message:
        }else{
            // header("Location: ../index.php?message=Inte två likadana uppgifter tack.");

    
            // echo "Du kan inte lägga in två todos med samma namn";
    
            redirect_to("../index.php?message=Inte två likadana uppgifter tack.");
    

        }

//die(var_dump($_POST));
// var_dump($_POST);


?>