
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <?php 
              
                foreach ($decodedLeftBarLay['static']['sidebar'] as $key => $value) {
                  ?>
                    <li class="list-group-item clearfix"><a href="<?php echo $value['url']?>"><i class="fa fa-angle-right"></i> <?php echo $value['title']?></a></li>
                  <?php
                }
              
              ?>
            </ul>