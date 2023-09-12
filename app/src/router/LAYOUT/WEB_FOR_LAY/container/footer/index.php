   <!-- BEGIN STEPS -->
    <div class="steps-block steps-block-red">
      <div class="container">
        <div class="row">
          <div class="col-md-4 steps-block-col">
            <i class="<?php echo $decodedWebsite['stepFooter'][0]['icon'] ?>"></i>
            <div>
              <h2><?php echo $decodedWebsite['stepFooter'][0]['title'] ?></h2>
              <em><?php echo $decodedWebsite['stepFooter'][0]['subTitle'] ?></em>
            </div>
            <span>&nbsp;</span>
          </div>
          <div class="col-md-4 steps-block-col">
            <i class="<?php echo $decodedWebsite['stepFooter'][1]['icon'] ?>"></i>
            <div>
              <h2><?php echo $decodedWebsite['stepFooter'][1]['title'] ?></h2>
              <em><?php echo $decodedWebsite['stepFooter'][1]['subTitle'] ?></em>
            </div>
            <span>&nbsp;</span>
          </div>
          <div class="col-md-4 steps-block-col">
            <i class="<?php echo $decodedWebsite['stepFooter'][2]['icon'] ?>"></i>
            <div>
              <h2><?php echo $decodedWebsite['stepFooter'][2]['title'] ?></h2>
              <em><?php echo $decodedWebsite['stepFooter'][2]['subTitle'] ?></em>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END STEPS -->

     <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2><?php echo $decodedWebsite['footer']['about']['name']; ?></h2>
            <p><?php echo $decodedWebsite['footer']['about']['value']; ?></p>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->
          <!-- BEGIN BOTTOM INFO BLOCK -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2><?php echo $decodedWebsite['footer']['category']['name']; ?></h2>
            <ul class="list-unstyled">
             <li><i class="fa fa-angle-right"></i> <a href="javascript:;">dinamik olarak yüklenicek buralar</a></li>
            </ul>
          </div>
          <!-- END INFO BLOCK -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2 class=""><?php echo $decodedWebsite['footer']['news']['name']; ?></h2>
            <ul class="list-unstyled">
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">dinamik olarak yüklenicek buralar</a></li>
            </ul>    
          </div>
          <!-- END TWITTER BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2><?php echo $decodedWebsite['footer']['contact']['name']; ?></h2>
            <address class="margin-bottom-40">
              <?php 
              
              foreach ($decodedWebsite['footer']['contact']['value'] as $key => $value) {
                ?>
                  <span><?php echo $value['name'] ?> : <?php echo $value['value']?></span><br>
                <?php
              }
              
              ?>
            </address>
          </div>
          <!-- END BOTTOM CONTACTS -->
        </div>
        <hr>
        <div class="row">
          <!-- BEGIN SOCIAL ICONS -->
          <div class="col-md-6 col-sm-6">
            <ul class="social-icons">
              <?php 

                foreach ($decodedWebsite['footer']['socialMedia'] as $key => $value) {
                  ?>
                    <li><a href="<?php echo $value['url']?>" class="<?php echo $value['class']?>" data-original-title="rss" href="javascript:;"></a></li>
                  <?php
                }
              
              ?>
            </ul>
          </div>
          <!-- END SOCIAL ICONS -->
          <!-- BEGIN NEWLETTER 
          <div class="col-md-6 col-sm-6">
            <div class="pre-footer-subscribe-box pull-right">
              <h2>Kampanyalardan Haberdar Olmak İçin</h2>
              <form action="#">
                <div class="input-group">
                  <input type="text" placeholder="youremail@mail.com" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                  </span>
                </div>
              </form>
            </div> 
          </div>
         -- END NEWLETTER -->
         <br>
         <br>
         <br>
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->
    
    <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-4 col-sm-4 padding-top-10">
            <?php echo date("Y")?> &copy; <?php echo $decodedWebsite['appName'] . " INC " . $decodedWebsite['footer']['value'] ?> 
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-4 col-sm-4 w-100">
            <ul class="list-unstyled list-inline pull-right " style="width:100%; text-align:center">
              <?php 

                foreach ($decodedWebsite['footer']['cardSupport'] as $key => $value) {
                  ?>
                    <li><img src="<?php echo $value['url']?>"></li>
                  <?php
                }
              
              ?>
            </ul>
          </div>
          <!-- END PAYMENTS -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->