<?php 
 
$settings = isset($_GET['setting']) ? $_GET['setting'] : "index";

switch ($settings) {
   
    case "index":
        ?>
            <div class="panel panel-default">
                               <div class="panel-heading" style="background:#fff;">
                                  <h4 class="panel-title">
                                     <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">
                                        profil ayarları
                                     </a>
                                  </h4>
                               </div>
                               <div id="accordion1_1" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <button class="btn">profil görünümünü düzenle</button>
                                  </div>
                               </div>
                            </div>

                            <div class="panel panel-default">
                               <div class="panel-heading" style="background:#fff;">
                                  <h4 class="panel-title">
                                     <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">
                                        hesabı sil
                                     </a>
                                  </h4>
                               </div>
                               <div id="accordion1_2" class="panel-collapse collapse ">
                                  <div class="panel-body">
                                    <a href="src/router/page/account/delete.php"><button class="btn">sil</button></a>
                                    <span>bu işlem geri alınamaz.</span>
                                  </div>
                               </div>
            </div>
        <?php
        break;
    case "adress-update":
        require_once(realpath(__DIR__ . "/config/profile/adress/index.php"));
        break;
    case "contact":
        include "contact.php";
        break;
    default:

    break;
}

?>
