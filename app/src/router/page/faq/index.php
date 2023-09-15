
        <!-- BEGIN SIDEBAR & CONTENT -->


          <!-- BEGIN CONTENT -->


          <h1><?php echo $decodedLeftBarLay['static']['faq']['title']?></h1>
            <div class="faq-page">
               <?php 
               
               foreach($decodedLeftBarLay['static']['faq']['content'] as $key => $value){
                  $key++;
                  ?>
                            <div class="panel panel-default">
                               <div class="panel-heading" style="background:<?php echo $value['color'] ?>;">
                                  <h4 class="panel-title">
                                     <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_<?php echo $key?>">
                                     <?php echo $key ?>. <?php echo $value['title'] ?>
                                     </a>
                                  </h4>
                               </div>
                               <div id="accordion1_<?php echo $key?>" class="panel-collapse collapse <?php echo $value['open'] ? "in" : ""?>">
                                  <div class="panel-body">
                                  <?php echo $value['content'] ?>
                                  </div>
                               </div>
                            </div>
                  <?php
               }
               
               ?>

            </div>
          <!-- END CONTENT -->
     
        <!-- END SIDEBAR & CONTENT -->
