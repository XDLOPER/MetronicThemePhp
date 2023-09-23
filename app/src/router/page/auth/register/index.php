
<div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>kayıt ol</h1>
            <div class="content-form-page">
              <form method="post" action="src/router/page/auth/index.php"  class="form-horizontal form-without-legend">
                <input type="hidden" name="register">
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
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="email">email</label>
                  <div class="col-lg-8">
                    <input type="email" id="password" name="email" placeholder="Örnek:**@**.**" required class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="phone">telefon</label>
                  <div class="col-lg-8">
                    <input type="number" class="form-control" id="phone" name="phone" pattern="^[0-9]{10}$" required placeholder="Örnek:555-555-55-55">
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-lg-8 col-md-offset-2 padding-left-0 padding-top-20">
                      <a href="/"><button type="submit" class="btn btn-primary">kayıt ol</button></a>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>