    <!-- BEGIN BRANDS -->
    <div class="brands">
      <div class="container">
            <div class="owl-carousel owl-carousel6-brands">
               <?php 

                    foreach ($decodedWebsite['brands'] as $key => $value) {
                    ?>
                         <a href="<?php echo $value['url']?>"><img src="<?php echo $value['imageUrl']?>" title="<?php echo $value['title']?>"></a>
                    <?php
                    }
              
               ?>
            </div>
        </div>
    </div>
    <!-- END BRANDS -->