<?php

// template imports start

$jsonLogin = file_get_contents(__DIR__ . '/../../../../utils/consts/login.json');
if ($jsonLogin === false) {
    echo "Dosya okuma hatası!";
} else {
    $decodeLogin = json_decode($jsonLogin, true);
    if ($decodeLogin === null) {
        echo "JSON çözme hatası: " . json_last_error_msg();
    }
}

// template imports finish 





?>

<div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <h1><?php echo $decodeLogin['title']?></h1>
            <div class="content-form-page">
              <form method="post" action="src/router/page/auth/index.php" role="form" class="form-horizontal form-without-legend" id="loginForm">
                
                <input type="hidden" name="login">
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="username"><?php echo $decodeLogin['forms'][0]['title']?></label>
                  <div class="col-lg-8">
                    <input type="text" id="username" name="username" placeholder="<?php echo $decodeLogin['forms'][0]['placeholder']?>" required class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="password"><?php echo $decodeLogin['forms'][1]['title']?></label>
                  <div class="col-lg-8">
                    <input type="text" id="password" name="password" placeholder="<?php echo $decodeLogin['forms'][1]['placeholder']?>" required class="form-control">
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-8 col-md-offset-2 padding-left-0 padding-top-20">

                    <a href="<?php echo $decodeLogin['buttons'][0]['url'] ?>"><button class="btn btn-primary"><?php echo $decodeLogin['buttons'][0]['title'] ?></button></a>

                  </div>
                </div>
              </form>
              <br>
              <br>
              <a href="<?php echo $decodeLogin['buttons'][1]['url'] ?>"><button class="btn btn-primary" style="width:100%; background:#eee; color:#000"><?php echo $decodeLogin['buttons'][1]['title'] ?></button></a>

            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
