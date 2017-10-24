<?php
header("Location: ../index_updated.php");

// var_dump($_POST);

require "database.php";

$statement = $pdo->prepare("SELECT * FROM todo");
$statement->execute();
$todo = $statement->fetchAll(PDO::FETCH_ASSOC);



    // $count_double = Variable that counts how many times a title occurs among the existing todos
    $count_double = 0;
                
                
    foreach($todo as $i){
        
        if($i["title"] == $_POST["title"]){
            $count_double = $count_double + 1;            
        }else{
            $count_double = $count_double;
        }
    }
        
    
        
            if($count_double == 0){

                    $statement = $pdo->prepare(
                        "INSERT INTO todo (title, createdBy, priority) 
                        VALUES (:title, :createdBy, :priority)"
                    );

                    $statement->execute(array(
                        ":title" => $_POST["title"],
                        ":createdBy" => $_POST["createdBy"],
                        ":priority" => $_POST["priority"]
                    ));

                    $todo = $statement->fetchAll(PDO::FETCH_ASSOC);
                    // var_dump($todo); 
                
                
            }else{
                echo "Du kan inte lägga in två todos med samma namn";
            }

?>