  
<div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>giriş yap</h1>
            <div class="content-form-page">
              <form method="post" action="src/router/page/auth/index.php" role="form" class="form-horizontal form-without-legend" id="loginForm">
                
                <input type="hidden" name="login">
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="username">kullanıcı adı</label>
                  <div class="col-lg-8">
                    <input type="text" id="username" name="username" placeholder="Örnek:kelebek_im" required class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="password">şifre</label>
                  <div class="col-lg-8">
                    <input type="text" id="password" name="password" placeholder="*****" required class="form-control">
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-8 col-md-offset-2 padding-left-0 padding-top-20">

                    <a href="/"><button class="btn btn-primary">giriş yap</button></a>

                  </div>
                </div>
              </form>
              <br>
              <br>
              <a href="http://localhost/dashboard/metronicPhpTheme/app/index.php?page=register"><button class="btn btn-primary" style="width:100%; background:#eee; color:#000">kayıt olmak istermisin</button></a>

            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
