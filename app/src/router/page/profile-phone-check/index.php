

        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <h1>telefon doğrulama   </h1>
            <div class="content-form-page">
              <form method="post" action="src/router/page/profile-phone-check/controller.php" role="form" class="form-horizontal form-without-legend">

                <div class="form-group">
                  <label class="col-lg-3 control-label" for="lastname">telefon kontrolü<span class="require">*</span></label>
                  <div class="col-lg-9">
                    <input required type="text" id="lastname" class="form-control" value="<?php echo $user['phone']?>">
                  </div>
                  <div class="col-lg-12">
                    <span> <b>info</b>: sms ile gelen numarayı kutucuğa gir.</span>
                  </div>                   
                </div>

                <div class="row">
                  <div class="col-lg-12 col-md-offset-0 padding-left-5 padding-top-20">
                    <button class="btn btn-primary" type="submit">sms gönder</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
