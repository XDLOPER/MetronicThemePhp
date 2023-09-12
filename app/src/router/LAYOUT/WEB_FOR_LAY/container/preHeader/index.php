<!-- BEGIN TOP BAR -->
     <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span><?php echo $decodedWebsite['phone']; ?></span></li>

                        <!-- BEGIN LANGS -->
                        <li class="langs-block">
                            <a href="javascript:void(0);" class="current">dynamic Türkiye </a>
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
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                              <?php 
                              
                              foreach ($decodedWebsite['preHeader']['page'] as $key => $value) {
                                ?>
                                  <li><a href="<?php echo $value['url']?>"><?php echo $value['title']?></a></li>
                                <?php
                              }
                              
                              ?>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
     </div>
<!-- END TOP BAR -->