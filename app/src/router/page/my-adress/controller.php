    <?php 

    // global imports
    require_once('../../../config/database.php');
    require_once('../../../store/index.php');
    require_once('../../../utils/helpers/ID_generate.php');



    // global varibles
    $adress_location_array = ['Ev','İşyeri','Okul','Kamu'];
    $city_array = ['samsun','istanbul','ankara'];
    $county_array = ['merkez'];
    $neighborhood_array = ['merkez'];
    $userID = null;
    
    session_start();
    if($_SESSION['ID']){
        $userID = $_SESSION['ID'];
        $user = (new SELECTS('users_auth'))->getSelectsQuery('*', "WHERE ID = '$userID'");
        $user = $user->fetch(PDO::FETCH_ASSOC);
    }

    // hatalı şuan echo $USER_STORE->getUserID();
    
if(isset($_POST['addAdressContent'])){
    if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['date']) || empty($_POST['adress_location']) || empty($_POST['city']) || empty($_POST['county']) || empty($_POST['neighborhood']) || empty($_POST['adress']) || empty($_POST['adress_nickname'])){
        echo json_encode(["message" => "information is missing"]);
        //print_r([$_POST['firstname'], $_POST['lastname'], $_POST['date'], $_POST['adress_location'], $_POST['city'], $_POST['county'], $_POST['neighborhood'], $_POST['adress'], $_POST['adress_nickname']]);
        exit();
    }else{
        //print_r([$_POST['firstname'], $_POST['lastname'], $_POST['date'], $_POST['adress_location'], $_POST['city'], $_POST['county'], $_POST['neighborhood'], $_POST['adress'], $_POST['adress_nickname']]);

        // id data will come database
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $date = $_POST['date'];
        $adress_location = $_POST['adress_location'];
        $city = $_POST['city'];
        $county = $_POST['county'];
        $neighborhood = $_POST['neighborhood'];
        $adress = $_POST['adress'];
        $adress_nickname = $_POST['adress_nickname'];

        // phone data will come database

        if (strlen($firstname) < 3 || strlen($lastname) < 3 || strlen($firstname) > 250 || strlen($lastname) > 250) {
            echo json_encode(["message" => "Firstname and lastname must be between 3 and 250 characters"]);
            exit();
        }   

        if (!strtotime($date) || (date("Y") - date("Y", strtotime($date))) < 18) {
            echo json_encode(["message" => "You are under eighteen years old"]);
            exit();
        }

        if (!in_array($adress_location, $adress_location_array) || !in_array($city, $city_array) || !in_array($county, $county_array) || !in_array($neighborhood, $neighborhood_array)) {
            echo json_encode(["message" => "Data does not match"]);
            exit();
        }

        if(strlen($adress) > 250){
            echo json_encode(["message" => "more than 250 characters not allowed"]);
            exit();
        }

        $adress_ID = ID_generate(5);

    try {
            // will make insert process width databse models
            $insert = $db->prepare('INSERT INTO users_adress (ID,adress_ID,firstname,lastname,age,phone,adress_location,city,county,neighborhood,adress,adress_nickname) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)');
                
            $push = $insert->execute([
                $user['ID'], 
                $adress_ID,
                $firstname,
                $lastname,
                $date,
                $user['phone'],
                $adress_location,
                $city,
                $county,
                $neighborhood,
                $adress,
                $adress_nickname
            ]);

            if(!$push){
                echo json_encode(["message" => "process not exists!"]);
                exit();
            }else{
                echo json_encode(["message" => "process successfully!"]);
            }

            header('Refresh:0.5; URL=http://localhost/dashboard/metronicPhpTheme/app/index.php?page=leftbarlayout&content=my-adress');

    } catch (PDOException $e) {
        $data = 'Sql or database error code: ' . $e->getMessage();
        echo json_encode(["message" => $data]);
        exit();
    }


    }
}

if(isset($_POST['updateAdressContent'])){
    if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['date']) || empty($_POST['adress_location']) || empty($_POST['city']) || empty($_POST['county']) || empty($_POST['neighborhood']) || empty($_POST['adress']) || empty($_POST['adress_nickname'])){
        echo json_encode(["message" => "information is missing"]);
        //print_r([$_POST['firstname'], $_POST['lastname'], $_POST['date'], $_POST['adress_location'], $_POST['city'], $_POST['county'], $_POST['neighborhood'], $_POST['adress'], $_POST['adress_nickname']]);
        exit();
    }else{
        //print_r([$_POST['firstname'], $_POST['lastname'], $_POST['date'], $_POST['adress_location'], $_POST['city'], $_POST['county'], $_POST['neighborhood'], $_POST['adress'], $_POST['adress_nickname']]);

        // id data will come database
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $date = $_POST['date'];
        $adress_location = $_POST['adress_location'];
        $city = $_POST['city'];
        $county = $_POST['county'];
        $neighborhood = $_POST['neighborhood'];
        $adress = $_POST['adress'];
        $adress_nickname = $_POST['adress_nickname'];

        // phone data will come database

        if (strlen($firstname) < 3 || strlen($lastname) < 3 || strlen($firstname) > 250 || strlen($lastname) > 250) {
            echo json_encode(["message" => "Firstname and lastname must be between 3 and 250 characters"]);
            exit();
        }   

        if (!strtotime($date) || (date("Y") - date("Y", strtotime($date))) < 18) {
            echo json_encode(["message" => "You are under eighteen years old"]);
            exit();
        }

        if (!in_array($adress_location, $adress_location_array) || !in_array($city, $city_array) || !in_array($county, $county_array) || !in_array($neighborhood, $neighborhood_array)) {
            echo json_encode(["message" => "Data does not match"]);
            exit();
        }

        if(strlen($adress) > 250){
            echo json_encode(["message" => "more than 250 characters not allowed"]);
            exit();
        }


    try {
            // will make insert process width databse models

            $update = $db->prepare('UPDATE users_adress SET firstname = ?, lastname = ?, age = ?, adress_location = ?, city = ?, county = ?, neighborhood = ?, adress = ?, adress_nickname = ? WHERE ID = ? AND adress_ID = ?');

            // Değişkenleri ata
            $update->bindValue(1, $firstname, PDO::PARAM_STR);
            $update->bindValue(2, $lastname, PDO::PARAM_STR);
            $update->bindValue(3, $date, PDO::PARAM_STR);
            $update->bindValue(4, $adress_location, PDO::PARAM_STR);
            $update->bindValue(5, $city, PDO::PARAM_STR);
            $update->bindValue(6, $county, PDO::PARAM_STR);
            $update->bindValue(7, $neighborhood, PDO::PARAM_STR);
            $update->bindValue(8, $adress, PDO::PARAM_STR);
            $update->bindValue(9, $adress_nickname, PDO::PARAM_STR);
            $update->bindValue(10, $user['ID'], PDO::PARAM_INT);
            $update->bindValue(11, $_GET['id'], PDO::PARAM_INT);

            // Sorguyu çalıştır
            $push = $update->execute();

            if(!$push){
                echo json_encode(["message" => "process not exists!"]);
                exit();
            }else{
                echo json_encode(["message" => "process successfully!"]);
            }

            header('Refresh:0.5; URL=http://localhost/dashboard/metronicPhpTheme/app/index.php?page=leftbarlayout&content=my-adress');

    } catch (PDOException $e) {
        $data = 'Sql or database error code: ' . $e->getMessage();
        echo json_encode(["message" => $data]);
        exit();
    }


    }
}

?>