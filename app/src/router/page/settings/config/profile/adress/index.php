<?php 

$adress_ID = !empty($_GET['id']) ? $_GET['id'] : exit('yetkisiz giriş');

$findAdress = (new SELECTS('users_auth'))->getSelectsSelf("SELECT * FROM users_adress WHERE ID = :ID AND adress_ID = :adress_ID", ['ID' => $user['ID'],'adress_ID' => $adress_ID]);
$adress = $findAdress->fetch(PDO::FETCH_ASSOC);

if(!$adress){
    exit('yetkisiz giriş');
}

?>

        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <div class="content-form-page">
                <form id="addAdressContent" method="post" action="src/router/page/my-adress/controller.php?id=<?php echo $adress_ID?>" role="form" class="form-horizontal form-without-legend">
                  <h4>Adres Ekle</h4>
                  <hr class="p-0 m-0">  
                  <h5>Kişisel bilgileriniz</h5>
                    <hr>
                    <input type="hidden" name="updateAdressContent">
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="firstname">İsim <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <input value="<?php echo $adress['firstname'] ?>" required type="text" name="firstname" id="firstname" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="lastname">Soyisim <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <input value="<?php echo $adress['lastname'] ?>" required type="text" name="lastname" id="lastname" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="date">Doğum Tarihi <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <input value="<?php echo $adress['age'] ?>" required type="date" name="date" id="date" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="phone">telefon<span class="require">*</span></label>
                      <div class="col-lg-10">
                        <input value="<?php echo $adress['phone'] ?>" disabled required type="tel" id="phone" name="phone" value="<?php echo $user['phone'] ?>" class="form-control">
                      </div>
                    </div>  
                    <br>
                    <h5>Adres bilgileriniz</h5>
                    <hr>
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="adress_location">Adres Neresi <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <select required name="adress_location" id="adress_location" class="form-control">
                            <option value="Ev" <?php if ($adress['adress_location'] == 'Ev') echo 'selected'; ?>>Ev</option>
                            <option value="İşyeri" <?php if ($adress['adress_location'] == 'İşyeri') echo 'selected'; ?>>İşyeri</option>
                            <option value="Okul" <?php if ($adress['adress_location'] == 'Okul') echo 'selected'; ?>>Okul</option>
                            <option value="Kamu" <?php if ($adress['adress_location'] == 'Kamu') echo 'selected'; ?>>Kamu</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                    <label class="col-lg-2 control-label" for="city">Şehir <span class="require">*</span></label>
                    <div class="col-lg-10">
                        <select required name="city" class="form-control">
                        <option value="samsun" <?php if ($adress['city'] == 'samsun') echo 'selected'; ?>>samsun</option>
                        <option value="istanbul" <?php if ($adress['city'] == 'istanbul') echo 'selected'; ?>>istanbul</option>
                        <option value="ankara" <?php if ($adress['city'] == 'ankara') echo 'selected'; ?>>ankara</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-lg-2 control-label" for="county">İlçe <span class="require">*</span></label>
                    <div class="col-lg-10">
                        <select required name="county" class="form-control">
                        <option value="merkez" <?php if ($adress['county'] == 'merkez') echo 'selected'; ?>>merkez</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-lg-2 control-label" for="neighborhood">Mahalle <span class="require">*</span></label>
                    <div class="col-lg-10">
                        <select required name="neighborhood" class="form-control">
                        <option value="merkez" <?php if ($adress['neighborhood'] == 'merkez') echo 'selected'; ?>>merkez</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="adress">Adres Detay  <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <textarea required class="form-control" name="adress" id="adress" rows="10" style="width:100%;"><?php echo $adress['adress'] ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="	adress_nickname">Adres İsmi  <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <input value="<?php echo $adress['adress_nickname'] ?>" required type="text" name="adress_nickname" id="	adress_nickname" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 col-md-offset-0 padding-left-5 padding-top-20">
                        <button class="btn btn-primary" type="submit">Düzenle</button>
                      </div>
                    </div>
                </form>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
