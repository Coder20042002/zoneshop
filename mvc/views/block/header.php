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
      <?php
            if(!empty($_SESSION['account'])) {
              $us=$_SESSION['account'];
              echo"<span class='acount'>" .$us['username']."</span>";
            }

            ?>
        <div class="header_navbar-icon--gr  header_navbar-icon-sub ">
        
          <a href="./login" class="header_navbar-icon-link">
            <i class="fa-regular fa-user header_navbar-icon--active"></i>
          </a>
          <ul class="subnav subnav-login ">
            <li class="subnav-item"><a class="subnav-link" href="login">Đăng nhập</a></li>
            <li class="subnav-item"><a class="subnav-link" href="register">Đăng ký</a></li>
            <li class="subnav-item"><a class="subnav-link" href="logout">Đăng xuất</a></li>

          </ul>

        </div>
        <div class="header_navbar-icon--gr heading-cart">
          <a href="cart" class="header_navbar-icon-link">
            <i class="ti-shopping-cart header_navbar-icon--active"></i>
          </a>
          <span class="count-cart">
            <?php
            if (!empty($_SESSION["giohang"]) ) {
              $cart = (isset($_SESSION['giohang'])) ? $_SESSION['giohang'] : 0;
              echo count($cart);
            } else echo 0;

            ?>
          </span>
          
          <div class="header-action_dropdown">
            <div class="header-dropdown_content">
              <div class="site-cart">
                <div class="cart-ttbold">
                  <p class="ttbold">Giỏ hàng</p>
                </div>
                <div class="cart-view clearfix">
                  <?php 
                  
                  if (!empty($data["Product1"])) {
                    $total = 0;
                    while ($rows = mysqli_fetch_array($data["Product1"])) {
                        $price=$rows["gia"];
                        $price=number_format($price);
                        $num = (int)$rows["gia"] * (int)$_SESSION["giohang"][$rows["id"]];
                        $num=number_format($num);
                        $total =  $total + (int)$rows["gia"] * (int)$_SESSION["giohang"][$rows["id"]];
                        
                        
                        echo "
                              <div class='cart-view-scroll'>
                                <table id='clone-item-cart' class='table-clone-cart'>
                                  <tbody>
                                    <tr class='item_2 hidden'>
                                      <td class='img-cart-view'>
                                      <a href='#' title='#'>
                                      <img src='$rows[hinhanh]' alt='#'></a></td>
                                      <td class='cart-pro'>
                                        <p class='pro-title'>
                                            <a class='pro-title-view' href='#' title='#'>$rows[ten]</a>
                                        </p>
                                          <div class='remove-cart'>
                                            <span class='variant'>Size: ".$_SESSION['size'][$rows['id']]."</span>
                                            <a href='cart?action=delete&id=$rows[id]' class='remove-icon-link'> <i class='ti-close remove-icon' ></i></a>
                                          </div>
                                        
                                        <div class='mini-cart_quantity'>
                                            
                                          <div class='pro-quantity-view'><span class='qty-value'>" . $_SESSION['giohang'][$rows['id']] . "</span></div>
                                          <div class='pro-price-view'> $num đ</div>
                                        </div>
                                        
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                
                              </div>
                              ";}
                              $total=number_format($total);
                              echo "
                              
                            <div class='line'></div>
                              <div class='cart-view-total'>
                                  <table class='table-total'>
                                    <tbody>
                                      <tr class='total-cart'>
                                        <td class='text-left'>TỔNG TIỀN:</td>
                                        <td class='text-right' id='total-view-cart'> $total đ</td>
                                      </tr>
                                      <tr class='total-cart'>
                                        <td><a href='cart' class=' btn-color-white'>Xem giỏ hàng</a></td>
                                        <td><a href='pay' class='btn-color-white'>Thanh toán</a></td>
                                      </tr>
                                    </tbody>
                                  </table>
                              </div>";
                        }
                        else {
                          echo "
                          <div class='cart-zero'>
                              <div class='cart-zero-heading'> Bạn chưa chọn sản phẩm.</div>
                              <img src='public/css/img/cart-zero.png' alt='Không có sản phẩm nào' >
                              <div class='cart-zero-info'> Hãy nhanh tay chọn ngay sản phẩm yêu thích.</div>
                          
                          </div>
                           ";
                        }
                   ?>
                  
                  
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
  <div class="mobile-warp">
    <a class="navbar-login" href="login">Đăng nhập</a>
    <a href="cart" class="header_navbar-icon-link">
      <i class="ti-shopping-cart header_navbar-icon--active"></i>
      <span class="count-cart">
            <?php
            if (!empty($_SESSION["giohang"]) ) {
              $cart = (isset($_SESSION['giohang'])) ? $_SESSION['giohang'] : 0;
              echo count($cart);
            } else echo 0;

            ?>
          </span>
    </a>
  </div>
    

    <button class="navbar_icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="ti-menu"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">ZoneShop</h5>
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
            <li class="subnav-item"><a class="subnav-link" href="./category?dm=1">Áo thun</a></li>
                  <li class="subnav-item"><a class="subnav-link" href="./category?dm=2">Áo sơ mi</a></li>
                  <li class="subnav-item"><a class="subnav-link" href="./category?dm=3">Áo khoác</a></li>
                  <li class="subnav-item"><a class="subnav-link" href="./category?dm=4">Quần tây</a></li>
                  <li class="subnav-item"><a class="subnav-link" href="./category?dm=5">Quần sọt</a></li>
            </ul>
          </li>
        </ul>
        <form  class="d-flex mt-3"  role="search" action="./search" method="get">
          <input class="form-control col-9" type="search" placeholder="Nhập sản phẩm..." aria-label="Search" name="keyword">
          <button class="btn btn-success col-3  " type="submit">OK</button>
        </form>
      </div>
    </div>
  </div>
</nav>

