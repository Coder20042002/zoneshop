<div class="main">
  <div class="container">
    <div class="row header-warp">

      <div class=" col-2 col-md-2 ">
        <div class="header-navbar-logo">
          <a href="./home" class="header-navbar-log__link">
            ZoneShop
          </a>
        </div>


      </div>


      <div class="col-6 ">

        <nav class="header-navbar">

          <div class="header_navbar--main">

            <ul class="header_navbar--main-list">

              <li class="header_navbar--main-list-item ">
                <a href="./category" class="header_navbar--main-list-item-link header_navbar--main-list-item--separate">
                  SẢN PHẨM
                  <i class="header_navbar--main-list-icon ti-angle-down"></i>
                </a>
                <ul class="subnav">

                  <li class="subnav-item"><a class="subnav-link" href="./category?dm=1">Áo thun</a></li>
                  <li class="subnav-item"><a class="subnav-link" href="./category?dm=2">Áo sơ mi</a></li>
                  <li class="subnav-item"><a class="subnav-link" href="./category?dm=3">Áo khoác</a></li>
                  <li class="subnav-item"><a class="subnav-link" href="./category?dm=4">Quần tây</a></li>
                  <li class="subnav-item"><a class="subnav-link" href="./category?dm=5">Quần sọt</a></li>
                </ul>

              </li>
              <li class="header_navbar--main-list-item ">
                <a href="#" class="header_navbar--main-list-item-link header_navbar--main-list-item--separate">
                  ABOUT
                </a>

              </li>
              <li class="header_navbar--main-list-item">
                <a href="#" class="header_navbar--main-list-item-link header_navbar--main-list-item--separate">SALE</a>
              </li>

            </ul>


          </div>



        </nav>
      </div>
      <div class="col-3  ">
        <div class="header__with--search">
          <form class="header__search" action="./search" method="get">

            <input type="text" class="header__search--input" name="keyword" placeholder="Nhập sản phẩm cần tìm...">
            <button type="submit" class="header__search-btn">
              <i class="header__search-btn-icon ti-search"></i>
            </button>

          </form>
        </div>


      </div>


      <div class="col-1 header_navbar-icon">
        <div class="header_navbar-icon--gr  header_navbar-icon-sub ">
          <a href="./login" class="header_navbar-icon-link">
            <i class="fa-regular fa-user header_navbar-icon--active"></i>
          </a>
          <ul class="subnav subnav-login ">
            <li class="subnav-item"><a class="subnav-link" href="login">Đăng nhập</a></li>
            <li class="subnav-item"><a class="subnav-link" href="register">Đăng ký</a></li>
            <li class="subnav-item"><a class="subnav-link" href="#">Đăng xuất</a></li>

          </ul>

        </div>
        <div class="header_navbar-icon--gr heading-cart">
          <a href="cart" class="header_navbar-icon-link">
            <i class="ti-shopping-cart header_navbar-icon--active"></i>
          </a>
          <span class="count-cart">
            <?php
            if (!empty($_SESSION["giohang"])) {
              $cart = (isset($_SESSION['giohang'])) ? $_SESSION['giohang'] : 0;
              echo count($cart);
            } else echo 0;

            ?>
          </span>
          <div class="header-action_dropdown">
            <span class="box-triangle">
              
            </span>
            <div class="header-dropdown_content">
              <div class="site-cart">
                <div class="cart-ttbold">
                  <p class="ttbold">Giỏ hàng</p>
                </div>
                <div class="cart-view clearfix">
                  <div class="cart-view-scroll">
                    <table id="clone-item-cart" class="table-clone-cart">
                      <tbody>
                        <tr class="item_2 hidden">
                          <td class="img-cart-view"><a href="#" title="#"><img src="//product.hstatic.net/200000312481/product/f3a03cf4-d806-412e-be17-f91053a4addb_6a54944685ec4208a8752dec361deeea_small.jpeg" alt="#"></a></td>
                          <td class="cart-pro">
                            <p class="pro-title">
                              <a class="pro-title-view" href="#" title="#">BASIC SHORT / BROWN COLOR</a>
                              <span class="variant">Size: S</span>
                            </p>
                            <div class="mini-cart_quantity">
                              <div class="pro-quantity-view"><span class="qty-value">1</span></div>
                              <div class="pro-price-view">189,000₫</div>
                            </div>
                            
                          </td>
                        </tr>
                      </tbody>
                    </table>
                   
                  </div>
                  <div class="line"></div>
                  <div class="cart-view-total">
                    <table class="table-total">
                      <tbody>
                        <tr class="total-cart">
                          <td class="text-left">TỔNG TIỀN:</td>
                          <td class="text-right" id="total-view-cart">189,000₫</td>
                        </tr>
                        <tr class="total-cart">
                          <td><a href="/cart" class=" btn-color-white">Xem giỏ hàng</a></td>
                          <td><a href="/checkout" class="btn-color-white">Thanh toán</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>



            </div>
          </div>

        </div>


      </div>

    </div>


  </div>
</div>
<nav class="navbar navbar-dark navbar-black fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.">ZoneShop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Danh mục</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sale</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="category.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sản phẩm
            </a>
            <ul class="dropdown-menu dropdown-menu-dark subnav">
              <li class="subnav-item"><a class="dropdown-item subnav-link" href="#">Áo thun</a></li>
              <li class="subnav-item"><a class="dropdown-item subnav-link" href="#">Áo khác</a></li>
              <!-- <li>
                      <hr class="dropdown-divider">
                    </li> -->
              <li class="subnav-item"><a class="dropdown-item subnav-link" href="#">Quẩn dài </a></li>
              <li class="subnav-item"><a class="dropdown-item subnav-link" href="#">Quẩn sọt </a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Nhập sản phẩm cần tìm..." aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>