<div class="container product my-5 pt-5">

        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-12">
                <?php 
                while($rows=mysqli_fetch_object($data["Image"])) {
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
                while($rows=mysqli_fetch_object($data["Product"])) {
                    echo "
                    <h3 class='name-product py-4'>$rows->ten</h3>
                    <h2 class='product-price'>$rows->gia đ</h2>
                    ";
                    
                   
                }
                
                
                 ?>
                <select class='option-size my-3'>
                    <option class='option-item' value=''>Select Size</option>
                <?php 
                while($rows=mysqli_fetch_object($data["Size"])) {
                    echo "
                    <option class='option-item' value=''>$rows->ten</option>
                    ";
                }
                ?>
                </select>
                <input class="input-number" type="number" value="1" min="1">
                <button class="buy-btn">Thêm vào giỏ</button>
               <img src="public/css/img/bangsize.jpg" alt="" class="table-size">
            </div>
            <div class="col-lg-2 col-md-12 col-12"> 
                
                    <?php
                    
                    while($rows=mysqli_fetch_object($data["gp"])) {
                        echo "
                        <h4 class='detal-product mt-5 mb-5'>
                        <span class='detail-content'>
                        $rows->mota
                        </span>
                    </h4>
                        ";
                        
                    }
                        ?>
           
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
                             <a href='detail/?id=".$rows->id_hinhanh."&&dm=".$rows->id_dm."&&id_sp=".$rows->id."' class='cart-link' >
                                <div class='card'>
                                    <img src='$rows->hinhanh' class='card-img-top' alt='...'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>$rows->ten</h5>
                                        <p>
                                            <span class='card-price-text'>Giá bán : </span>
                                            <span class='card-price'>$rows->gia đ</span>
                                        </p>
                                        <a href='#' class='btn btn-primary'>Mua ngay</a>
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
            MainImg.src = smallimg[2].src;
        }
        smallimg[2].onclick = function() {
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function() {
            MainImg.src = smallimg[3].src;
        }
    </script>
