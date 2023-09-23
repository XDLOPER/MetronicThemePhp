<!-- BEGIN TOP BAR -->
     <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-8 col-sm-8 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                      <?php 
                      
                      foreach ($decodedWebsite['preHeader']['pageLeft'] as $key => $value) {
                      ?>
                        <li><a href="<?php echo !empty($value['url']) ? $value['url'] : "http://localhost/dashboard/metronicPhpTheme/app/index.php" ?>"><i class="<?php echo $value['icon'] ?>"></i><span><?php echo $value['title']; ?></span></a></li>
                      <?php
                      }
                      ?>
                        <!-- BEGIN LANGS -->
                        <li class="langs-block">
                            <a href="javascript:void(0);" class="current"><?php echo $APP_STORE->getLanguage() ?></a>
                            <div class="langs-block-others-wrapper"><div class="langs-block-others">
                              <?php 
                              
                              foreach ($decodedWebsite['preHeader']['language'] as $key => $value) {
                                ?>
                                  <a href="javascript:void(0);"><?php echo $value['title']?></a>
                                <?php
                              }
                              
                              ?>
                            </div></div>
                        </li>
                        <!-- END LANGS -->
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-4 col-sm-4 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                              <?php 
                              
                              foreach ($decodedWebsite['preHeader']['pageRight'] as $key => $value) {
                                if($value['auth'] == $APP_STORE->getActive()){
                                  ?>
                                    <li><a href="<?php echo $value['url']?>"><?php echo $value['title']?></a></li>
                                  <?php
                                }else{

                                }

                              }
                              
                              ?>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
     </div>
<!-- END TOP BAR -->