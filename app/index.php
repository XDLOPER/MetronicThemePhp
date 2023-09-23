<?php 

/************************
 * PROJECT GLOBAL START *
 ************************/

    // porject imports start

        // store connection
        require_once('./src/store/index.php');

        // database connection
        require_once('./src/config/database.php');
        // helpers
        require_once('./src/utils/helpers/getLanguageBrowser.php');

    // porject imports end

    // ENV logic start
        $HOMELINK = getenv('HOMELINK');
    // ENV logic end

    // store logic start -> singleton store architecture

        // app store
        $APP_STORE->setLanguage(getLanguaageBrowser());

    // store logic end

    // sessions logic start
    session_start();

        if(isset($_SESSION['ID'])){
            $APP_STORE->setActive(true);
            // database config start
                $userID = $_SESSION['ID'];
                $user = (new SELECTS('users_auth'))->getSelectsQuery('*', "WHERE ID = '$userID'");
                $user = $user->fetch(PDO::FETCH_ASSOC);


                // ID save the store
                $USER_STORE->setUserID($user['ID']);
            // database config end
        }else{
            $APP_STORE->setActive(false);
        }
    // sessions logic end 
        
    // layout route start
    $ROUTER = isset($_GET['router']) ? $_GET['router'] : 'index';

        switch($ROUTER){
            case "index":
                require_once('./src/router/LAYOUT/WEB_FOR_LAY/index.php');
                break;

            // error pages start
            case "500":
                require_once('./src/router/page/errors/500/index.php');
                break;
            default:
                include('./src/router/page/errors/404/index.php');
                break;
            // error pages end
        }
    // layout route finish

/**********************
 * PROJECT GLOBAL END *
 **********************/


?>