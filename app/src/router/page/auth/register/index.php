<?php

// template imports start

$jsonLogin = file_get_contents(__DIR__ . '/../../../../utils/consts/register.json');
if ($jsonLogin === false) {
    echo "Dosya okuma hatası!";
} else {
    $decodeRegister = json_decode($jsonLogin, true);
    if ($decodeRegister === null) {
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
            <h1><?php echo $decodeRegister['title']?></h1>
            <div class="content-form-page">
              <form method="post" action="src/router/page/auth/index.php"  class="form-horizontal form-without-legend">
                <input type="hidden" name="register">
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="username"><?php echo $decodeRegister['forms'][0]['title']?></label>
                  <div class="col-lg-8">
                    <input type="text" id="username" name="username" placeholder="<?php echo $decodeRegister['forms'][0]['placeholder']?>" required class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="password"><?php echo $decodeRegister['forms'][1]['title']?></label>
                  <div class="col-lg-8">
                    <input type="text" id="password" name="password" placeholder="<?php echo $decodeRegister['forms'][1]['placeholder']?>" required class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="email"><?php echo $decodeRegister['forms'][2]['title']?></label>
                  <div class="col-lg-8">
                    <input type="email" id="password" name="email" placeholder="<?php echo $decodeRegister['forms'][2]['placeholder']?>" required class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="phone"><?php echo $decodeRegister['forms'][3]['title']?></label>
                  <div class="col-lg-8">
                    <input type="number" class="form-control" id="phone" name="phone" pattern="^[0-9]{10}$" required placeholder="<?php echo $decodeRegister['forms'][3]['placeholder']?>">
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-lg-8 col-md-offset-2 padding-left-0 padding-top-20">
                      <a href="<?php echo $decodeRegister['buttons'][0]['url'] ?>"><button type="submit" class="btn btn-primary"><?php echo $decodeRegister['buttons'][0]['title'] ?></button></a>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>