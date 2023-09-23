<?php 

// global imports
require_once('../../../config/database.php');

session_start();


try{
    $user = (new DELETE('users_auth'))->getDeleteSelf('DELETE FROM users_auth WHERE ID = :ID ',['ID' => $_SESSION['ID']]);
    if(!$user){
        echo json_encode(["message" => "process error"]);
    }else{
        echo json_encode(["message" => "process succesfully! "]);
        session_destroy();
        header("Refresh:0.5; URL=http://localhost/dashboard/metronicPhpTheme/app/index.php");
    }
}catch(PDOException $e){
    echo json_encode(["message" => "Sql error code: ". " " ."  $e"]);
}

?>