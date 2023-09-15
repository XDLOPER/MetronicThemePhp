

    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <?php 
          if($decodedWebsite['header']['logo']['logoUrl']){
            ?>
              <a class="site-logo" href="<?php echo $decodedWebsite['header']['logo']['url'];?>"><img src="<?php echo $decodedWebsite['header']['logo']['logoUrl'] ?>"></a>
            <?php
          }else{
            ?>
              <h1 class="site-logo" style="padding:33px 0px; "><?php echo $decodedWebsite['header']['logo']['title'];?> |</h1>
            <?php
          }
        ?>
        
        
        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN CART -->
        <div class="top-cart-block">
          <div class="top-cart-info">
            <a href="javascript:void(0);" class="top-cart-info-count">3 <?php echo $decodedWebsite['header']['myCard']['productName'];?></a>

          </div>
          <i class="fa fa-shopping-cart"></i>
                        
          <div class="top-cart-content-wrapper">
            <div class="top-cart-content">
              <ul class="scroller" style="height: 250px;">

                <h1>dynamic</h1>
                <li>
                  <a href="shop-item.html"><img src="assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
                  <span class="cart-content-count">x 1</span>
                  <strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
                  <em>$1230</em>
                  <a href="javascript:void(0);" class="del-goods">&nbsp;</a>
                </li>

              </ul>
              <div class="text-right">
                <a href="<?php echo $decodedWebsite['header']['myCard']['lookMyCardButton']['url'];?>" class="btn btn-default"><?php echo $decodedWebsite['header']['myCard']['lookMyCardButton']['title'];?></a>
                <a href="<?php echo $decodedWebsite['header']['myCard']['complateTheOrderButton']['url'];?>" class="btn btn-primary"><?php echo $decodedWebsite['header']['myCard']['complateTheOrderButton']['title'];?></a>
              </div>
            </div>
          </div>            
        </div>
        <!--END CART -->

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
          <ul>
              <?php 

                foreach ($decodedWebsite['header']['pages'] as $key => $value) {
                  ?>
                    <li><a href="<?php echo $value['url']?>"><?php echo $value['title']?></a></li>
                  <?php
                }
              
              ?>
        <!-- DROPDOWN MENU START -->
            <li style="display:none" class="dropdown">
              
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Kadın 
              </a>
              <!-- BEGIN DROPDOWN MENU -->
              <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                  <a href="shop-product-list.html">Hi Tops <i class="fa fa-angle-right"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="shop-product-list.html">Second Level Link</a></li>
                    <li><a href="shop-product-list.html">Second Level Link</a></li>
                    <li class="dropdown-submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                        Second Level Link 
                        <i class="fa fa-angle-right"></i>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="shop-product-list.html">Third Level Link</a></li>
                        <li><a href="shop-product-list.html">Third Level Link</a></li>
                        <li><a href="shop-product-list.html">Third Level Link</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="shop-product-list.html">Running Shoes</a></li>
                <li><a href="shop-product-list.html">Jackets and Coats</a></li>
              </ul>
              <!-- END DROPDOWN MENU -->
            </li>
            <li style="display:none" class="dropdown dropdown-megamenu">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Man
                
              </a>
              <ul class="dropdown-menu">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-4 header-navigation-col">
                        <h4>Footwear</h4>
                        <ul>
                          <li><a href="shop-product-list.html">Astro Trainers</a></li>
                          <li><a href="shop-product-list.html">Basketball Shoes</a></li>
                          <li><a href="shop-product-list.html">Boots</a></li>
                          <li><a href="shop-product-list.html">Canvas Shoes</a></li>
                          <li><a href="shop-product-list.html">Football Boots</a></li>
                          <li><a href="shop-product-list.html">Golf Shoes</a></li>
                          <li><a href="shop-product-list.html">Hi Tops</a></li>
                          <li><a href="shop-product-list.html">Indoor and Court Trainers</a></li>
                        </ul>
                      </div>
                      <div class="col-md-4 header-navigation-col">
                        <h4>Clothing</h4>
                        <ul>
                          <li><a href="shop-product-list.html">Base Layer</a></li>
                          <li><a href="shop-product-list.html">Character</a></li>
                          <li><a href="shop-product-list.html">Chinos</a></li>
                          <li><a href="shop-product-list.html">Combats</a></li>
                          <li><a href="shop-product-list.html">Cricket Clothing</a></li>
                          <li><a href="shop-product-list.html">Fleeces</a></li>
                          <li><a href="shop-product-list.html">Gilets</a></li>
                          <li><a href="shop-product-list.html">Golf Tops</a></li>
                        </ul>
                      </div>
                      <div class="col-md-4 header-navigation-col">
                        <h4>Accessories</h4>
                        <ul>
                          <li><a href="shop-product-list.html">Belts</a></li>
                          <li><a href="shop-product-list.html">Caps</a></li>
                          <li><a href="shop-product-list.html">Gloves, Hats and Scarves</a></li>
                        </ul>

                        <h4>Clearance</h4>
                        <ul>
                          <li><a href="shop-product-list.html">Jackets</a></li>
                          <li><a href="shop-product-list.html">Bottoms</a></li>
                        </ul>
                      </div>
                      <div class="col-md-12 nav-brands">
                        <ul>
                          <li><a href="shop-product-list.html"><img title="esprit" alt="esprit" src="assets/pages/img/brands/esprit.jpg"></a></li>
                          <li><a href="shop-product-list.html"><img title="gap" alt="gap" src="assets/pages/img/brands/gap.jpg"></a></li>
                          <li><a href="shop-product-list.html"><img title="next" alt="next" src="assets/pages/img/brands/next.jpg"></a></li>
                          <li><a href="shop-product-list.html"><img title="puma" alt="puma" src="assets/pages/img/brands/puma.jpg"></a></li>
                          <li><a href="shop-product-list.html"><img title="zara" alt="zara" src="assets/pages/img/brands/zara.jpg"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>

            <li style="display:block" class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Pages 
                
              </a>
                
              <ul class="dropdown-menu">
                <li><a href="../../../../../theme/shop-product-list.html">Product List</a></li>
                <li><a href="../../../../../theme/shop-search-result.html">Search Result</a></li>
                <li><a href="../../../../../theme/shop-item.html">Product Page</a></li>
                <li><a href="../../../../../theme/shop-shopping-cart-null.html">Shopping Cart (Null Cart)</a></li>
                <li><a href="../../../../../theme/shop-shopping-cart.html">Shopping Cart</a></li>
                <li><a href="../../../../../theme/shop-checkout.html">Checkout</a></li>
                <li><a href="../../../../../theme/shop-about.html">About</a></li>
                <li><a href="../../../../../theme/shop-contacts.html">Contacts</a></li>
                <li><a href="../../../../../theme/shop-account.html">My account</a></li>
                <li><a href="../../../../../theme/shop-wishlist.html">My Wish List</a></li>
                <li><a href="../../../../../theme/shop-goods-compare.html">Product Comparison</a></li>
                <li><a href="../../../../../theme/shop-standart-forms.html">Standart Forms</a></li>
              </ul>
            </li>
        <!-- DROPDOWN MENU FINISH -->


            <!-- BEGIN TOP SEARCH
            <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <div class="search-box">
                <form action="#">
                  <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </span>
                  </div>
                </form>
              </div> 
            </li>
             END TOP SEARCH -->

          </ul>
        
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->