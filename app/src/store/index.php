<?php 

    // imports store models 
    require_once('app/index.php');
    require_once('user/index.php');

    // imports store initial data 
    require_once('app/initial.php');
    require_once('user/initial.php');



// create store instance start
     // app store
    $APP_STORE = APP_STORE::getInstance($APP_STORE_INITIAL);
        

    // user store
    $USER_STORE = USER_STORE::getInstance($USER_STORE_INITIAL);
// create store instance end
?>