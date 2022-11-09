<div class="part">
    <div class="container ">

        <div class="row">
            <div class="col-sm-12 ">
                <div class="text-center">
                    <p class="mb-1">Sản Phẩm Mới</p>
                    <p class="mb-2">Đừng bỏ lỡ các chương trình khuyến mãi Hot tại ZoneShop.vn</p>
                </div>


            </div>
        </div>
        <div class="imgbuilt">
            <a href="#">
                <img class="img-fluid" src="public/css/img/Banner_ZoneShop.png" alt="">
            </a>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="mb-1">Các chương trình Khuyến mãi</p>
                <p class="mb-2">Đừng bỏ lỡ các chương trình khuyến mãi Hot tại ZoneShop.vn</p>

            </div>
        </div>
        <div class="row">

            <div class="col-12 col-md-6 px-1">
                <h4 class="fw-normal"><a href="#">SALE 2/9</a></h4>
                <div class="banner-home3-colection-top" style="margin-bottom:10px;">
                    <a href="/bai-viet/sale-29/78e8d3b4-9950-439c-8834-9f0cafc83480">
                        <img class="img-fluid" src="public/css/img/Thum_sale_2.9_(02).jpg" alt="SALE 2/9">
                    </a>
                </div>
                <div class="row">

                </div>
            </div>
            <div class="col-12 col-md-6 px-1">
                <h4 class="fw-normal"><a href="#">ZoneShop.vn - GIỚI THIỆU</a></h4>
                <div class="banner-home3-colection-top" style="margin-bottom:10px;">
                    <a href="#">
                        <img class="img-fluid" src="public/css/img/Thumb_NCG.jpg" alt="ZoneShop.vn - GIỚI THIỆU">
                    </a>
                </div>
                <div class="row">

                </div>
            </div>
        </div>


        <div class="row ">
            <div class="col-6 col-md-3 mb-2  px-0">
                <a href="#">
                    <img class="img-fluid" src="public/css/img/6-BLUE.jpg" alt="BLUE COLLECTION">
                </a>
            </div>
            <div class="col-6 col-md-3 mb-2  px-0">
                <a href="#">
                    <img class="img-fluid" src="public/css/img/5-BLACK.jpg" alt="BLACK COLLECTION">
                </a>
            </div>
            <div class="col-6 col-md-3 mb-2  px-0">
                <a href="#">
                    <img class="img-fluid" src="public/css/img/1-WHITE.jpg" alt="WHITE COLLECTION">
                </a>
            </div>
            <div class="col-6 col-md-3 mb-2  px-0">
                <a href="#">
                    <img class="img-fluid" src="public/css/img/8-GREY.jpg" alt="GREY COLLECTION">
                </a>
            </div>
            <div class="col-6 col-md-3 mb-2  px-0">
                <a href="#">
                    <img class="img-fluid" src="public/css/img/4-GREEN.jpg" alt="GRENN COLLECTION">
                </a>
            </div>
            <div class="col-6 col-md-3 mb-2  px-0">
                <a href="#">
                    <img class="img-fluid" src="public/css/img/2-RED.jpg" alt="RED COLLECTION">
                </a>
            </div>
            <div class="col-6 col-md-3 mb-2  px-0">
                <a href="#">
                    <img class="img-fluid" src="public/css/img/3-PINK.jpg " alt="PINK COLLECTION">
                </a>
            </div>
            <div class="col-6 col-md-3 mb-2  px-0">
                <a href="#">
                    <img class="img-fluid" src="public/css/img/7-BEIGE.jpg" alt="BEIGE COLLECTION">
                </a>
            </div>


        </div>



        <div title="" class="col-sm-12 text-center">
            <p class="mb-1">Top sản phẩm HOT</p>
            <p>Những sản phẩm thời trang mới nhất/Hot nhất</p>
        </div>
        <div class="row">
            <!--Begin card-l-->
            <?php


            while ($rows = mysqli_fetch_object($data["list_BestSeller"])) {
                
                
                $price=$rows->gia;
                $price=number_format($price);
                $string =  '<img onmouseover="this.src=\'$rows->hinh1\'" '.' onmouseout="this.src=\'$rows->hinhanh\'" '.'    src="this.src=\'$rows->hinhanh\'" />'.'    \';';

                echo
                "<div class='col-12 col-md-6 col-xl-3'>
               
                <div class='card-list'>
                 <a  href='detail/?id=" . $rows->id_hinhanh . "&&dm=" . $rows->id_dm . "&&id_sp=" . $rows->id . "' class='cart-link' id='$rows->ten'>
                    <div class='card'>
                        <script>
                        document.title=$rows->ten
                        </script>
                    
                    
                

                       <img class='card-img-top' onmouseover='this.src=\"$rows->hinh1\"' '.
                        '    onmouseout='this.src=\"$rows->hinhanh\"' '.
                        '    src='$rows->hinhanh' />
                        
                        
                        
                        
                        <div class='card-body'>
                            <h5 class='card-title'>$rows->ten</h5>
                            <p>
                                <span class='card-price-text'>Giá bán : </span>
                                <span class='card-price'> $price đ</span>
                            </p>
                            <button class='btn btn-primary'>Mua ngay</button>
                        </div>
                    </div>
                 </a> 
                </div>
               

                </div>";
            }
            $data["gp_BestSeller"];

            ?>

        </div>



    </div>
</div>

