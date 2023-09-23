
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>Adreslerim</h1>
            <div class="content-form-page">
              <div class="form-horizontal form-without-legend">
                <h4>kayıtlı adresler</h4>
                <hr class="p-0 m-0">
                <div class="saveAdressContent">
                  <?php 
                    $users_adress_select = (new SELECTS('users_adress'))->getSelectsQuery("*", 'WHERE ID = :ID',[':ID' => $user['ID']]);
                    $users_adress_select = $users_adress_select->fetchAll(PDO::FETCH_ASSOC);

                    if(count($users_adress_select) > 0){
                      foreach ($users_adress_select as $key => $value) {
                        ?>
                          <div class="save-adress-box"><span><?php echo $value['adress_nickname']?></span> <span>|</span><a href="http://localhost/dashboard/metronicPhpTheme/app/index.php?page=leftbarlayout&content=settings&setting=adress-update&id=<?php echo $value['adress_ID'] ?>"><button id="updateAdress" class="btn">Düzenle</button></a></div>
                        <?php
                      }                      
                    }else{
                      ?>
                        <span>Herhangi bir adres yok..</span>
                      <?php
                    }
                  
                  ?>
                </div>
              </div>
              <hr>
              <button id="addAdress" class=" btn">Adres Ekle</button>
              <div class="content" >
                <form style="display:none" id="addAdressContent" method="post" action="src/router/page/my-adress/controller.php" role="form" class="form-horizontal form-without-legend">
                  <h4>Adres Ekle</h4>
                  <hr class="p-0 m-0">  
                  <h5>Kişisel bilgileriniz</h5>
                    <hr>
                    <input type="hidden" name="addAdressContent">
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="firstname">İsim <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <input required type="text" name="firstname" id="firstname" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="lastname">Soyisim <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <input required type="text" name="lastname" id="lastname" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="date">Doğum Tarihi <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <input required type="date" name="date" id="date" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="phone">telefon<span class="require">*</span></label>
                      <div class="col-lg-10">
                        <input disabled required type="tel" id="phone" name="phone" value="<?php echo $user['phone'] ?>" class="form-control">
                      </div>
                    </div>  
                    <br>
                    <h5>Adres bilgileriniz</h5>
                    <hr>
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="adress_location">Adres Neresi <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <select required name="adress_location" id="adress_location" class="form-control">
                          <option value="Ev">Ev</option>
                          <option value="İşyeri">İşyeri</option>
                          <option value="Okul">Okul</option>
                          <option value="Kamu">Kamu</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="city">Şehir <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <select required name="city" class="form-control">
                          <option value="samsun">samsun</option>
                          <option value="istanbul">istanbul</option>
                          <option value="anakara">anakara</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="county">İlçe <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <select required name="county" class="form-control">
                          <option value="merkez">merkez</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="neighborhood">Mahalle <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <select required name="neighborhood" class="form-control">
                          <option value="merkez">merkez</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="adress">Adres Detay  <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <textarea required class="form-control" name="adress" id="adress" rows="10" style="width:100%;"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="	adress_nickname">Adres İsmi  <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <input required type="text" name="adress_nickname" id="	adress_nickname" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 col-md-offset-0 padding-left-5 padding-top-20">
                        <button class="btn btn-primary" type="submit">Ekle</button>
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

        <script>
          $(document).ready(function() {

            $("#addAdress").click(function() {
              var buttonConext = $(this).text();
              if(buttonConext == "Adres Ekle"){
                $(this).text('kapat')
              }else{
                $(this).text('Adres Ekle')
              }
              $("#addAdressContent").toggle(); 
            });

          });

        </script>