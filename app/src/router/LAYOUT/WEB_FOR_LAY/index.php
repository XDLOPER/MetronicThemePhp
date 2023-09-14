<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Metronic Shop UI</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->  
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="../../../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="../../../assets/pages/css/animate.css" rel="stylesheet">
  <link href="../../../assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="../../../assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="../../../assets/pages/css/components.css" rel="stylesheet">
  <link href="../../../assets/pages/css/slider.css" rel="stylesheet">
  <link href="../../../assets/pages/css/style-shop.css" rel="stylesheet" type="text/css">
  <link href="../../../assets/corporate/css/style.css" rel="stylesheet">
  <link href="../../../assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="../../../assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="../../../assets/corporate/css/custom.css" rel="stylesheet">



  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">

<?php 
// env variables start
// $ENVPHONE = getenv();

// env variables end


// layout data imports 
    $website = file_get_contents(__DIR__ . '/../../../utils/consts/website.json');
    if ($website === false) {
        echo "Dosya okuma hatası!";
    } else {
        $decodedWebsite = json_decode($website, true);
        if ($decodedWebsite === null) {
            echo "JSON çözme hatası: " . json_last_error_msg();
        }
    }
// layout data imports finish 

// layout imports start
    require_once('./container/preHeader/index.php');
    require_once('./container/header/index.php');

// layout route start
    $PAGE = isset($_GET['page']) ? $_GET['page'] : 'home';

    switch($PAGE){
        // dynamic page routes
        case "home":
            require_once('../../page/home/index.php');
            break;
        case "product-search":
            require_once('../../page/product-search/index.php');
            break;
        case "product-list":
            require_once('../../page/product-list/index.php');
            break;
        case "product-page":
            require_once('../../page/product-page/index.php');
            break;
        case "product-comparison":
            require_once('../../page/product-comparison/index.php');
            break;
        case "shopping-card":
            require_once('../../page/shopping-card/index.php');
            break;
        case "checkout":
            require_once('../../page/checkout/index.php');
            break;
        case "account":
            require_once('../../page/account/index.php');
            break;
        case "wish-list":
            require_once('../../page/wish-list/index.php');
            break;
        
        // form page routes
        case "forms":
            require_once('../../page/home/index.php');
            break;

        // standart static page 
        case "terms-conditions":
            require_once('../../page/terms-conditions/index.php');
            break;
        case "faq":
            require_once('../../page/faq/index.php');
            break;
        case "privacy-policy":
            require_once('../../page/privacy-policy/index.php');
            break;
        case "about":
            require_once('../../page/about/index.php');
            break;

        // error pages
        case "500":
            require_once('../../page/errors/500/index.php');
            break;
        default:
            require_once('../../page/errors/404/index.php');
            break;
    }
// layout route finish

    require_once('./container/brands/index.php');
    require_once('./container/footer/index.php');

// layout imports finish
?>

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->
    <script src="../../../assets/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="../../../assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="../../../assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="../../../assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <script src="../../../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="../../../assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="../../../assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script src='../../../assets/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="../../../assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->

    <script src="../../../assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="../../../assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>