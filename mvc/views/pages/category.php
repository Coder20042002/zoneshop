
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
                        <a href="category/?attribute=only">
                            <label class="suv-lable">
                                
                                Online Only
                                <span class="glyphicon"></span>
                            </label>
                        </a>
                        </li>
                        <li class="suv-tree-item">
                        <a href="category/?attribute=bestseller">
                            <label class="suv-lable">
                                
                                Best seller
                                <span class="glyphicon"></span>
                            </label>
                        </li>
                        </a>
                        <li class="suv-tree-item">
                        <a href="category/?attribute=sale">
                            <label class="suv-lable">
                                
                                Sản phẩm khuyến mãi
                                <span class="glyphicon"></span>
                            </label>
                        </li>
                        </a>


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
                                <a href="category/?attribute=limit">
                                    <label class="suv-lable">
                                        
                                        Limited Edition
                                        <span class="glyphicon"></span>
                                    </label>
                                    </a>
                                </li>

                                <li class="suv-tree-item">
                                <a href="category/?attribute=new">
                                    <label class="suv-lable">
                                       
                                        New Arrival
                                        <span class="glyphicon"></span>
                                    </a>
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
                                while ($rows = mysqli_fetch_object($data["list_DM"])) {
                                    echo "
                                  
                                <li class='suv-tree-item'>
                                <a href='category/?dm=" . $rows->id_dm . "'>
                                    <label class='suv-lable title'>
             
                                        $rows->ten
                                        <span class='glyphicon'></span>
                                    </label>
                                </a>
                                </li>
                                
                                    ";
                                }
                                ?>



                            </ul>
                        </li>
                        <li class="nav-divider"></li>
                        <li class="nav-tree-item">
                            <lable class="nav-tree-item__lable '">
                                Giá
                                <span class="nav-tree-item__icon ti-angle-down"></span>
                            </lable>
                            <ul class="suv-tree-list">
                            
                                
                                


                                <li class="suv-tree-item">
                                    <a href="category/?price=>600k">
                                        <label class="suv-lable title">
                                           
                                            > 600k
                                            <span class="glyphicon"></span>
                                        </label>
                                    </a>
                                </li>
                                <li class="suv-tree-item">
                                    <a href="category/?price=500k-599k">
                                        <label class="suv-lable title'">
                                            
                                            500k - 599k
                                            <span class="glyphicon  "></span>
                                        </label>
                                    </a>
                                </li>
                                <li class="suv-tree-item">
                                    <a href="category/?price=400k-499k">
                                        <label class="suv-lable title">
                                            
                                            400k - 499k
                                            <span class="glyphicon"></span>
                                        </label>
                                    </a>
                                </li>
                                <li class="suv-tree-item">
                                    <a href="category/?price=300k-399k">
                                        <label class="suv-lable title">
                                            
                                            300k - 399k
                                            <span class="glyphicon"></span>
                                        </label>
                                    </a>
                                </li>
                                <li class="suv-tree-item">
                                    <a href="category/?price=200k-299k">
                                        <label class="suv-lable title">
                                            
                                            200k - 299k
                                            <span class="glyphicon"></span>
                                        </label>
                                    </a>
                                </li>
                                <li class="suv-tree-item">
                                    <a href="category/?price=<200k">
                                        <label class="suv-lable title">
                                            
                                            < 200K
                                            <span class="glyphicon"></span>
                                        </label>
                                    </a>
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
                                <?php
                                while ($rows = mysqli_fetch_object($data["Size"])) {
                                    echo "
                                    
                                <li class='suv-tree-item'>
                                <a href='category/?size=" . $rows->id_size . "'>
                                    <label class='suv-lable size'>
                                    $rows->ten
                                    </label>
                                </a>
                                </li>
                                
                                    ";
                                }
                                ?>


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



                        while ($rows = mysqli_fetch_object($data["Paging"])) {
                            $price=$rows->gia;
                            $price=number_format($price);
                            echo
                            "<div class='col-12 col-md-6 col-xl-4 col-sm-6'>
                               <div class='card-list'>
                                  <a  href='detail/?id=" . $rows->id_hinhanh . "&&dm=" . $rows->id_dm . "&&id_sp=" . $rows->id . "' class='cart-link' >
                                        <div class='card'>
                        

                                            <img class='card-img-top' onmouseover='this.src=\"$rows->hinh1\"' '.
                                            '    onmouseout='this.src=\"$rows->hinhanh\"' '.
                                            '    src='$rows->hinhanh' />
                            
                            
                            
                            
                                            <div class='card-body'>
                                                <h5 class='card-title'>$rows->ten</h5>
                                                <p>
                                                    <span class='card-price-text'>Giá bán : </span>
                                                    <span class='card-price'>$price đ</span>
                                                </p>
                                                <a href='pay' class='btn btn-primary'>Mua ngay</a>
                                            </div>
                                        </div>
                                   </a> 
                                </div>

                            </div>";
                        }




                        ?>

                    </div>

                </div>


                <?php
                $total = $data["Total"];
                $page = $data["Padi"];
                echo "<div class='pager'>";
                
                if($page>1) {
                    $prev=$page-1;
                    if(isset($_GET["price"]))
                    echo " <a id='pre-next-page' href='category/?page=" .$prev . (isset($_GET['price']) ? "&price=" . $_GET['price'] : "") . "'><i class='ti-angle-double-left page-icon'></i></a> ";
                    elseif(isset($_GET["attribute"]))
                    echo " <a id='pre-next-page' href='category/?page=" .$prev . (isset($_GET['attribute']) ? "&attribute=" . $_GET['attribute'] : "") . "'><i class='ti-angle-double-left page-icon'></i></a> ";
                    else
                    echo " <a id='pre-next-page' href='category/?page=" .$prev . (isset($_GET['dm']) ? "&dm=" . $_GET['dm'] : "") . "'><i class='ti-angle-double-left page-icon'></i></a> ";
                }
                for ($i = 1; $i <= (float)$total; $i++)
                    if ($i != $page)
                        if(isset($_GET["price"]))
                        echo " <a  href='category/?page=" . $i . (isset($_GET['price']) ? "&price=" . $_GET['price'] : "") . "'>$i</a> ";
                        elseif(isset($_GET["attribute"]))
                        echo " <a  href='category/?page=" . $i . (isset($_GET['attribute']) ? "&attribute=" . $_GET['attribute'] : "") . "'>$i</a> ";
                        else
                        echo " <a  href='category/?page=" . $i . (isset($_GET['dm']) ? "&dm=" . $_GET['dm'] : "") . "'>$i</a> ";
                    else
                        echo "<span>$i</span>";

                if($page< $total-1) {
                    $next=$page+1;
                    if(isset($_GET["price"]))
                    echo " <a id='pre-next-page' href='category/?page=" .$next . (isset($_GET['price']) ? "&price=" . $_GET['price'] : "") . "'><i class='ti-angle-double-right page-icon'></i></a> ";
                    elseif(isset($_GET["attribute"]))
                    echo " <a id='pre-next-page' href='category/?page=" .$next . (isset($_GET['attribute']) ? "&attribute=" . $_GET['attribute'] : "") . "'><i class='ti-angle-double-right page-icon'></i></a> ";
                    else
                    echo " <a id='pre-next-page' href='category/?page=" .$next . (isset($_GET['dm']) ? "&dm=" . $_GET['dm'] : "") . "'><i class='ti-angle-double-right page-icon'></i></a> ";

                }
                echo "</div>";
                ?>





            </div>

        </div>





    </div>
<script>
        
        document.title= "Top-product - zoneshop";
        
</script>
    