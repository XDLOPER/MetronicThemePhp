<?php 

/************************
 * PROJECT GLOBAL START *
 ************************/

    // porject imports start
        
        // store connection
        require_once('./src/store/index.php');
        require_once('./src/store/app/initial.php');

    // porject imports end

    // ENV logic start
        $HOMELINK = getenv('HOMELINK');
    // ENV logic end

    // store logic start -> singleton store architecture
            
        $APP_STORE = APP_STORE::getInstance($APP_STORE_INITIAL);
    // store logic end

    // sessions logic start
    session_start();

        if(isset($_SESSION['ID'])){

            $APP_STORE->setActive(true);

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
                require_once('./src/router/page/errors/404/index.php');
                break;
            // error pages end
        }
    // layout route finish

/**********************
 * PROJECT GLOBAL END *
 **********************/


?>