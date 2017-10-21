<?php

require "database.php";

//$statement = $pdo->prepare(
//    "SELECT priority FROM todo"
//);
//
//$statement->execute();
//
//
//$todo = $statement->fetchAll(PDO::FETCH_ASSOC);
//
//
//    function priority($i){
//
//        if($i == 1){
//            echo "*";
//        }elseif($i == 2){
//            echo "**";  
//        }elseif($i == 3){
//            echo "***";  
//        }elseif($i == 0){
//            echo "häpp";  
//        }else{
//            echo "error";
//        }

// }

function priority($i){
switch ($i) {
    case 0:
        echo "not at all";
        break;
    case 1:
        echo "light";
        break;
    case 2:
        echo "medium";
        break;
    case 3:
        echo "high";
        break;
}
}


?>