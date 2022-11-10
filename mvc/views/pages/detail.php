<div class="container product my-5 pt-5">

    <div class="row mt-5">
        <div class="col-lg-7 col-md-12 col-12">
            <?php
            while ($rows = mysqli_fetch_object($data["Image"])) {
                echo "
                    <img class='img--fluid w-100' src='$rows->hinh1' id='MainImg' alt=''>

                    <div class='small-img-group'>
                        <div class='small-img-col'>
                            <img src='$rows->hinh1' width='100%' alt='' class='small-img'>
                        </div>
                        <div class='small-img-col'>
                            <img src='$rows->hinh2' width='100%' alt='' class='small-img'>
                        </div>
                        <div class='small-img-col'>
                            <img src='$rows->hinh3' width='100%' alt='' class='small-img'>
                        </div>
                        <div class='small-img-col'>
                            <img src='$rows->hinh4' width='100%' alt='' class='small-img'>
                        </div>
                    
                    </div>
                    ";
            }

            ?>

        </div>

        <div class="col-lg-5 col-md-12 col-12">

            <h6 class="heading-product">Home / T-Shirt</h6>

            <?php
            while ($rows = mysqli_fetch_object($data["Product"])) {
                
                $price=$rows->gia;
                $price=number_format($price);
                echo "
                    
                    <h3 id='title' class='name-product py-4'>$rows->ten</h3>
                    <h6 class='detail'>
                        <span class='pull-left'>Mã sản phẩm: <strong>A00$rows->id</strong></span>
                        <span class='pull-right'>Tình trạng: <strong>Còn hàng</strong></span>
                    </h6>
                    <h2 class='product-price'>$price VNĐ</h2>
                    ";
            }


            ?>
            <div class=" left-divider divider-blur"></div>
            <span class="in4-product">Thông tin sản phẩm</span>


            <?php

            while ($rows = mysqli_fetch_object($data["gp"])) {
                echo "
        <h4 class='detal-product mt-5 mb-5'>
        <span class='detail-content'>
        $rows->mota
        </span>
        </h4>
        ";
            }
            ?>
            <!-- <div class="col-lg-2 col-md-12 col-12">


            </div> -->

            <div class=" left-divider divider-blur"></div>

            <div class="color">
                <ul class="nav tree">

                    <li class="cb-color-fixed">
                        <label><span class="bg-color" style="background-color: #00432d;"></span><input name="cbColor" type="checkbox" value="0" hidden=""></label>
                        <!-- <label><span class="bg-color" style="background-color: #2d2c2f;"></span><input
                                        name="cbColor" type="checkbox" value="0" hidden=""></label> -->
                    </li>
                </ul>
            </div>

            <div class=" left-divider divider-blur"></div>

            <form action="cart?action=add" method="post">
                <div class="row">
                    <div class="option-select-size">
                        <div class="option-main">
                            <h5>SIZE</h5>
                            <select class='option-size my-3' name="size[<?=$data["id_sp"] ?>]">
                                <option class='option-item' value=''>Select Size</option>
                                <?php
                                while ($rows = mysqli_fetch_object($data["Size"])) {
                                    echo "
                               <option class='option-item' value='$rows->ten'>$rows->ten</option>
                              ";
                                }
                                ?>
                            </select>

                        </div>

                        <div class="option-main">
                            <h5>SỐ LƯỢNG</h5>
                            <input class="input-number" type="number" value="1" min="1" name="soluong[<?=$data["id_sp"] ?>]">
                        </div>

                    </div>
                </div>
                <?php 
                 while ($rows = mysqli_fetch_object($data["Product"])) {
                    echo "
                    <input type='hidden' value='" . $rows['id'] . " name='id'>
                    <input type='hidden' value='" . $rows['ten'] . " name='ten'>
                    <input type='hidden' value='" . $rows['gia'] . " name='gia'>
                    <input type='hidden' value='" . $rows['hinhanh'] . " name='hinhanh'>
                    
                    ";
                 }
                 ?>
                <div class="row grp-btn1">
                    <input type="submit" name="action" class="buy-btn btn-addcart" value="Thêm vào giỏ"></input>
                    <a href='pay' class='buy-btn btn-addcart'>Thanh toán</a>
                    
                </div>
            </form>












            <div class="row info-product-size">
                <span id="text-size-in4"> BẢNG SIZE </span>
                <div class=" left-divider divider-blur"></div>
                <img src="public/css/img/bangsize2.jpg" alt="">
            </div>

        </div>



        <div class="col-12">
            <div class="relate-product">
                <div class="text-center">
                    <p class="mb-1">Sản Phẩm Liên Quan</p>
                    <div class="relate-warp"></div>
                </div>

                <div class="row">
                    <?php
                    while ($rows = mysqli_fetch_object($data["DM"])) {
                        echo
                        "<div class='col-12 col-md-6 col-xl-3'>
                           
                            <div class='card-list'>
                             <a href='detail/?id=" . $rows->id_hinhanh . "&&dm=" . $rows->id_dm . "&&id_sp=" . $rows->id . "' class='cart-link' >
                                <div class='card'>
                                    <img src='$rows->hinhanh' class='card-img-top' alt='...'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>$rows->ten</h5>
                                        <p>
                                            <span class='card-price-text'>Giá bán : </span>
                                            <span class='card-price'>$rows->gia đ</span>
                                        </p>
                                        <a href='pay' class='btn btn-primary'>Mua ngay</a>
                                    </div>
                                </div>
                                </a> 
                            </div>
                           
            
                            </div>";
                    } ?>
                </div>
            </div>
        </div>
    </div>


</div>
</div>
<script>
    var MainImg = document.getElementById('MainImg');
    var smallimg = document.getElementsByClassName('small-img');

    smallimg[0].onclick = function() {
        MainImg.src = smallimg[0].src;
    }
    smallimg[1].onclick = function() {
        MainImg.src = smallimg[1].src;
    }
    smallimg[2].onclick = function() {
        MainImg.src = smallimg[2].src;
    }
    smallimg[3].onclick = function() {
        MainImg.src = smallimg[3].src;
    }
</script>

<script>
        var colection= document.getElementById("title");
        var content = colection.innerHTML;
        document.title=content + " | zone";
        
</script>
