<?php 

$CONTENT = isset($_GET['content']) ? $_GET['content'] : null;

// layout data imports 

$LEFT_BAR_LAY = file_get_contents(__DIR__ . '/../../../../utils/consts/layout/LEFT_BAR_LAY.json');

if ($LEFT_BAR_LAY === false) {
    echo "Dosya okuma hatası!";
} else {
    $decodedLeftBarLay = json_decode($LEFT_BAR_LAY, true);
    if ($decodedLeftBarLay === null) {
        echo "JSON çözme hatası: " . json_last_error_msg();
    }
}

// layout data imports finish 

?>

<div class="main">
      <div class="container">
        <!-- 
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="">Store</a></li>
            <li class="active">Men category</li>
        </ul> -->
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-5">
            <?php 
            // layout route start

            switch($CONTENT){
              
              // standart static page start
              case "about":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/about/sidebar.php'));
                  break;
              case "terms-conditions":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/terms-conditions/sidebar.php'));
                  break;
              case "faq":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/faq/sidebar.php'));
                  break;
              case "privacy-policy":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/privacy-policy/sidebar.php'));
                  break;
              // standart static page end

              
              case "product-search":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/product-search/sidebar.php'));
                  break;
              case "product-list":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/product-list/sidebar.php'));
                  break;
              case "product-page":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/product-page/sidebar.php'));
                  break;
              case "product-comparison":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/product-comparison/sidebar.php'));
                  break;
              case "account":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/account/sidebar.php'));
                  break;
              case "my-adress":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/account/sidebar.php'));
                  break;
              case "settings":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/account/sidebar.php'));
                  break;                
              case "wish-list":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/account/sidebar.php'));
                  break;

              // private
              case "profile-continue":
                require_once(realpath(dirname(__FILE__) . '/../../../page/account/sidebar.php'));
                break;
              case "profile-phone-check":
                require_once(realpath(dirname(__FILE__) . '/../../../page/account/sidebar.php'));
                break;                   
              case "profile-email-check":
                require_once(realpath(dirname(__FILE__) . '/../../../page/account/sidebar.php'));
                break; 

            }

            // layout route finish

            ?>

          </div>
          <!-- END SIDEBAR -->
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">


          <?php 
            // layout route start

            switch($CONTENT){
              
              // standart static page start
              case "about":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/about/index.php'));
                  break;
              case "terms-conditions":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/terms-conditions/index.php'));
                  break;
              case "faq":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/faq/index.php'));
                  break;
              case "privacy-policy":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/privacy-policy/index.php'));
                  break;
              // standart static page end

              case "product-search":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/product-search/index.php'));
                  break;
              case "product-list":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/product-list/index.php'));
                  break;
              case "product-page":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/product-page/index.php'));
                  break;
              case "product-comparison":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/product-comparison/index.php'));
                  break;

              case "account":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/account/index.php'));
                  break;
              case "my-adress":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/my-adress/index.php'));
                  break;
              case "wish-list":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/wish-list/index.php'));
                  break;
              case "settings":
                  require_once(realpath(dirname(__FILE__) . '/../../../page/settings/index.php'));
                  break;


              // private
              case "profile-phone-check":
                require_once(realpath(dirname(__FILE__) . '/../../../page/profile-phone-check/index.php'));
                break;
              case "profile-email-check":
                require_once(realpath(dirname(__FILE__) . '/../../../page/profile-email-check/index.php'));
                break;
              default:
                  require_once(realpath(dirname(__FILE__) . '/../../../page/errors/404/index.php'));
                  break;

          
              }

              // layout route finish
            
            ?>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
