<?php 
session_start();

// global imports
require_once('../../../config/database.php');
require_once('../../../utils/helpers/ID_generate.php');
require_once('../../../utils/helpers/validatePhone.php');


// register starts

// helper functions start
function correctID(){
     $ID = ID_generate(30);
     $correctID = (new SELECTS('users'))->getSelectsQuery('COUNT(*)',"WHERE ID = '$ID' ");
          if($correctID > 0){ 
               correctID();
          }else{
               return $ID;
          }     
}

function correctUsername($username){
     $correctUsername = (new SELECTS('users'))->getSelectsSelf("SELECT COUNT(*) FROM users WHERE username = :username",[ 'username' => $username ]);
     $count = $correctUsername->fetchColumn();

     if ($count > 0) {
          return true;
     }else{
          return false;
     }
}

function correctPhone($phone){
     $correctID = (new SELECTS('users'))->getSelectsSelf("SELECT COUNT(*) FROM users WHERE phone = :phone",[ 'phone' => $phone ]);
     $count = $correctID->fetchColumn();

     if ($count > 0) {
          return true;
     }else{
          return false;
     }
}
// helper functions end

if(isset($_POST['register'])){
     // form control logic
     if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['phone']) && isset($_POST['email'])){

          $username = $_POST['username'];
          $password = $_POST['password'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];

          
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
               echo json_encode(["message" => "enter a valid email address"]);
               exit();
          }

          if(!validatePhone($phone)){
               echo json_encode(["message" => "enter a valid phone number"]);
               exit();
          }else{
               if(correctPhone($phone)){
                    echo json_encode(["message" => "This phone number already exists"]);
                    exit();
               }
          }

          if(correctUsername($username)){
               echo json_encode(["message" => "This username already exists"]);
               exit();
          }

          if(strlen($password) < 6){
               echo json_encode(["message" => "This password is less than six letters"]);
               exit();
          }

          // generations
          $passwordHash = password_hash($password, PASSWORD_BCRYPT);
          $correctedPhone = sprintf('%010d', $phone);

          // database logic start
          
          try {
               $insert = $db->prepare('INSERT INTO users (ID,username,password,email,phone,date) VALUES (?,?,?,?,?,?)');
               
               $push = $insert->execute([
                    correctID(), 
                    $username,
                    $passwordHash,
                    $email,
                    $correctedPhone,
                    date('Y-m-d H:i:s')
               ]);
          
               if($push){
                    header('Refresh:3; URL=http://localhost/dashboard/metronicPhpTheme/app/index.php?page=login');

                    $data = 'succesfull!, you are being directed..';
                    echo json_encode(["message" => $data]);
               }else{
                    $data = 'data is not pushed !' . $insert->errorInfo()[2];
                    echo json_encode(["message" => $data]);
               }
          
          } catch (PDOException $e) {
               $data = 'Sql or database error code: ' . $e->getMessage();
               echo json_encode(["message" => $data]);
          }
          
          // database logic end
          
     }else{
          echo json_encode(["message" => "information is missing"]);
     }

}

// register end

// login start
if(isset($_POST['login'])){
     // form control logic
     if(isset($_POST['username']) && isset($_POST['password'])){

          $username = $_POST['username'];
          $password = $_POST['password'];
          
          if(strlen($password) < 6){
               echo json_encode(["message" => "This password is less than six letters"]);
               exit();
          }

          // database logic start
          
          try {
               $findUsername = (new SELECTS('users'))->getSelectsSelf("SELECT * FROM users WHERE username = :username", ['username' => $username]);
               $user = $findUsername->fetch(PDO::FETCH_ASSOC);
               
               if (!$user) {
                   echo json_encode(["message" => "Username not found!"]);
                   exit();
               }
               
               if (!password_verify($password, $user['password'])) {
                   echo json_encode(["message" => "Password not found!"]);
                   exit();
               } else {
                   $data = 'Successful!, you are being directed..';
                   echo json_encode(["message" => $data]);
                   
                   $_SESSION['ID'] = $user['ID'];
                   header('Refresh:0.5; URL=http://localhost/dashboard/metronicPhpTheme/app/index.php');
               }
          
          
          } catch (PDOException $e) {
               $data = 'Sql or database error code: ' . $e->getMessage();
               echo json_encode(["message" => $data]);
          }
          
          // database logic end
          
     }else{
          echo json_encode(["message" => "information is missing"]);
     }

}
// login end



?>