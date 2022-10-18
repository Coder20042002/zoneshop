<div class="part part-warp">
    <div class="container nav-container">
        <div class="row">

            <div class="col-md-4">
                <div class="navbar--warp">


                    <div class="navbar-main">
                        <nav class="header-navbar">

                            <div class="header_navbar--main">

                                <ul class="header_navbar--main-list navbar-search-list">

                                    <li class="header_navbar--main-list-item navbar-search-item">
                                        <a href="#" class="header_navbar--main-list-item-link header_navbar--main-list-item--separate navbar-search-link">
                                            TẤT CẢ
                                        </a>


                                    </li>
                                    <li class="header_navbar--main-list-item navbar-search-item">
                                        <a href="#" class="header_navbar--main-list-item-link header_navbar--main-list-item--separate navbar-search-link">
                                            ABOUT
                                        </a>

                                    </li>
                                    <li class="header_navbar--main-list-item navbar-search-item">
                                        <a href="#" class="header_navbar--main-list-item-link header_navbar--main-list-item--separate navbar-search-link">SALE</a>
                                    </li>

                                </ul>


                            </div>



                        </nav>

                    </div>

                    <div class="left-divider"></div>


                    <ul class="suv-tree-list suv-tree-list--warp">
                        <li class="suv-tree-item">
                            <label class="suv-lable">
                                <input name="list-option" class="option" type="checkbox" value="" hidden="">
                                Sản phẩm vừa ra mắt
                                <span class="glyphicon"></span>
                            </label>
                        </li>
                        <li class="suv-tree-item">
                            <label class="suv-lable">
                                <input name="list-option" class="option" type="checkbox" value="" hidden="">
                                Best seller
                                <span class="glyphicon"></span>
                            </label>
                        </li>
                        <li class="suv-tree-item">
                            <label class="suv-lable">
                                <input name="list-option" class="option" type="checkbox" value="" hidden="">
                                Sản phẩm khuyến mãi
                                <span class="glyphicon"></span>
                            </label>
                        </li>


                    </ul>

                    <div class=" left-divider"></div>

                    <ul class="nav-tree-list">

                        <li class="nav-tree-item">
                            <lable class="nav-tree-item__lable">
                                Trạng thái
                                <span class="nav-tree-item__icon ti-angle-down"></span>
                            </lable>
                            <ul class="suv-tree-list">
                                
                                <li class="suv-tree-item">
                                    <a href="?limit=" class="limit-option">
                                    <label class="suv-lable">
                                        <!-- <input name="list-option" class="option" type="checkbox" value="" hidden=""> -->
                                        Limited Edition
                                        <span class="glyphicon"></span>
                                    </label>
                                    </a>
                                </li>
                                
                                <li class="suv-tree-item">
                                    <label class="suv-lable">
                                        <input name="list-option" class="option" type="checkbox" value="" hidden="">
                                        New Arrival
                                        <span class="glyphicon"></span>
                                    </label>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-divider"></li>
                        <li class="nav-tree-item">
                            <lable class="nav-tree-item__lable">
                                Dòng sản phẩm
                                <span class="nav-tree-item__icon ti-angle-down"></span>
                            </lable>
                            <ul class="suv-tree-list">
                                <?php
                                while($rows = mysqli_fetch_object($data["list_DM"])){
                                    echo "
                                    
                                <li class='suv-tree-item'>
                                <a href='?dm =".$rows->id_dm."'>
                                    <label class='suv-lable'>
             
                                        $rows->ten
                                        <span class='glyphicon'></span>
                                    </label>
                                </a>
                                </li>
                                
                                    ";}
                                 ?>
                                
                               

                            </ul>
                        </li>
                        <li class="nav-divider"></li>
                        <li class="nav-tree-item">
                            <lable class="nav-tree-item__lable">
                                Giá
                                <span class="nav-tree-item__icon ti-angle-down"></span>
                            </lable>
                            <ul class="suv-tree-list">
                                <li class="suv-tree-item">
                                    <label class="suv-lable">
                                        <input name="list-option" class="option" type="checkbox" value="" hidden="">
                                        > 600
                                        <span class="glyphicon"></span>
                                    </label>
                                </li>
                                <li class="suv-tree-item">
                                    <label class="suv-lable">
                                        <input name="list-option" class="option" type="checkbox" value="" hidden="">
                                        500k - 599k
                                        <span class="glyphicon"></span>
                                    </label>
                                </li>
                                <li class="suv-tree-item">
                                    <label class="suv-lable">
                                        <input name="list-option" class="option" type="checkbox" value="" hidden="">
                                        400k - 499k
                                        <span class="glyphicon"></span>
                                    </label>
                                </li>
                                <li class="suv-tree-item">
                                    <label class="suv-lable">
                                        <input name="list-option" class="option" type="checkbox" value="" hidden="">
                                        200k - 299k
                                        <span class="glyphicon"></span>
                                    </label>
                                </li>
                                <li class="suv-tree-item">
                                    <label class="suv-lable">
                                        <input name="list-option" class="option" type="checkbox" value="" hidden="">
                                        < 200k <span class="glyphicon"></span>
                                    </label>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-divider"></li>
                        <li class="nav-tree-item">
                            <lable class="nav-tree-item__lable">
                                Size
                                <span class="nav-tree-item__icon ti-angle-down"></span>
                            </lable>
                            <ul class="suv-tree-list size-list">
                                <li class="suv-tree-item ">
                                    <label class="suv-lable size">
                                        <input name="list-option" class="option" type="checkbox" value="" hidden="">
                                        Xl

                                    </label>
                                </li>
                                <li class="suv-tree-item ">
                                    <label class="suv-lable size">
                                        <input name="list-option" class="option" type="checkbox" value="" hidden="">
                                        L

                                    </label>
                                </li>
                                <li class="suv-tree-item ">
                                    <label class="suv-lable size">
                                        <input name="list-option" class="option" type="checkbox" value="" hidden="">
                                        S

                                    </label>
                                </li>
                                <li class="suv-tree-item ">
                                    <label class="suv-lable size">
                                        <input name="list-option" class="option" type="checkbox" value="" hidden="">
                                        M

                                    </label>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </div>





            </div>


            <div class="col-md-8">

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="public/css/img/slider_1.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="public/css/img/slider_2.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="public/css/img/slider_3.webp" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-warp">
                    <div class="row ">



                        <!--Begin card-l-->
                        <?php



                        while ($rows = mysqli_fetch_object($data["Danhmuc"])) {
                            echo
                            "<div class='col-12 col-md-6 col-xl-4'>
                        <div class='card-list'>
                            <div class='card'>
                                <img src='$rows->hinhanh' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$rows->ten</h5>
                                    <p>
                                        <span class='card-price-text'>Giá bán :</span>
                                        <span class='card-price'>$rows->gia </span>
                                    </p>
                                    <a href='#' class='btn btn-primary'>Mua ngay</a>
                                </div>
                            </div>
                        </div>

                    </div>";
                        }




                        ?>

                    </div>

                </div>

                <?php 
                 ?>
                
                



            </div>

        </div>



        

    </div>
    