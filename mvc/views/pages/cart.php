<div class="part part-warp">
    <div class="cart ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 main-cart-left">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                            <div class="cart-title">
                                BẠN CÓ CẦN THÊM?
                            </div>
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="" tabindex="-1">
                                                            <img class="media-object " src="https://ananas.vn/wp-content/uploads/ALB005_1-500x500.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">
                                                            <a href="" tabindex="-1">Blank Shoelaces</a>
                                                        </h4>
                                                        <h4 class="media-heading">Gargoyle</h4>
                                                        <h5 class="price-silder">35.000 VND</h5>
                                                        <h5 class="button">
                                                            <input data-id="191681" class="btn btn-cart btn-add-product-related" tabindex="-1" value="THÊM">
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="" tabindex="-1">
                                                            <img class="media-object " src="https://ananas.vn/wp-content/uploads/ALB005_1-500x500.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">
                                                            <a href="" tabindex="-1">Blank Shoelaces</a>
                                                        </h4>
                                                        <h4 class="media-heading">Gargoyle</h4>
                                                        <h5 class="price-silder">35.000 VND</h5>
                                                        <h5 class="button">
                                                        <input data-id="191681" class="btn btn-cart btn-add-product-related" tabindex="-1" value="THÊM">
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="" tabindex="-1">
                                                            <img class="media-object " src="https://ananas.vn/wp-content/uploads/ALB005_1-500x500.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">
                                                            <a href="" tabindex="-1">Blank Shoelaces</a>
                                                        </h4>
                                                        <h4 class="media-heading">Gargoyle</h4>
                                                        <h5 class="price-silder">35.000 VND</h5>
                                                        <h5 class="button">
                                                            <input data-id="191681" class="btn btn-cart btn-add-product-related" tabindex="-1" value="THÊM" >
                                                            </input>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="" tabindex="-1">
                                                            <img class="media-object " src="https://ananas.vn/wp-content/uploads/ALB005_1-500x500.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">
                                                            <a href="" tabindex="-1">Blank Shoelaces</a>
                                                        </h4>
                                                        <h4 class="media-heading">Gargoyle</h4>
                                                        <h5 class="price-silder">35.000 VND</h5>
                                                        <h5 class="button">
                                                            <input data-id="191681" class="btn btn-cart btn-add-product-related" tabindex="-1" value="THÊM">
                                                            </input>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

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

                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cart-title cart-title-border">GIỎ HÀNG</div>

                    <div class="row">
                        <form action="cart?action=submit" method="post">
                            <?php
                           
                            if (!empty($data["Product"])) {
                                while ($rows = mysqli_fetch_array($data["Product"])) {
                                    $price=$rows["gia"];
                                    $price=number_format($price);
                                    $num = (int)$rows["gia"] * (int)$_SESSION["giohang"][$rows["id"]];
                                    $num=number_format($num);
                                    echo "
                                    <div class='allCart'>
                                    <div class='col-xs-12 col-sm-9 col-md-9 col-lg-9 item-2'>
                                        <div class='info'>
                                            <div class='info-img '>
                                                <img class='info-img-item img-warp' src='$rows[hinhanh]' alt=''>
                                            </div>
    
                                            <div class='info-body'>
                                                <h3 class='info-heading'>
                                                $rows[ten]</h3>
                                                <p class='info-price'>Giá:
                                                <p class='price-porduct'>$price VND </p>
                                                </p>
    
                                                <div class='option-select-size'>
                                                    <div class='option-main'>
                                                        <h5>Size</h5>
                                                        <select class='option-size my-3 size-cart' name='size[$rows[id]]''>
                                                            <option class='option-item' value='". $_SESSION['size'][$rows['id']] . "'>".$_SESSION['size'][$rows['id']]."</option>
                                                            
    
                                                        </select>
    
                                                    </div>
    
                                                    <div class='option-main'>
                                                        <h5>Số lượng</h5>
                                                        <input class='input-number input-cart size-cart' name='soluong[$rows[id]]' type='number' value='" . $_SESSION['giohang'][$rows['id']] . "' min='1'>
                                                    </div>
    
                                                </div>
                                            </div>
    
    
                                        </div>
                                    </div>
                                    <div class='col-xs-12 col-sm-3 col-md-3 col-lg-3 '>
                                        <div class='cart-body-right'>
                                            <div class='cart-conten'>
                                                <span class='price'>  $num VNĐ</span>
    
                                                <div class='status'>Còn hàng</div>
                                            </div>
    
                                            
                                            <a href='cart?action=delete&id=$rows[id]' class='btn btn-update' id='remove-product' name='remove' >XÓA</a>
                                            <input type='submit'  class='btn btn-update' id='update-product' name='update' value='CẬP NHẬT' ></input> 
                                               
                                           
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class='left-divider divider-blur cart-warp'></div>";
                                }
                            } else {
                                echo "
                                <div class='cart-zero'>
                                    <div class='cart-zero-heading'> Bạn chưa chọn sản phẩm.</div>
                                    <img src='public/css/img/cart-zero.png' alt='Không có sản phẩm nào' >
                                    <div class='cart-zero-info'> Hãy nhanh tay chọn ngay sản phẩm yêu thích.</div>
                                
                                </div>
                                 ";
                            }

                            ?>


                        </form>

                    </div>







                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-cart-right">
                    <ul class="cart-group">
                        <form action="cart?action=submit" method="post">
                            <li class='list-cart-group cart-title'>Đơn hàng</li>
                            <li class='list-cart-group cart-drive'></li>
                            <li class='list-cart-group cart-title-gr'>Nhập mã khyến mãi</li>
                            <li class='list-cart-group cart-gr-main'>
                                <input type='text' name=cart-input value='' class='cart-input'>
                                <button class=' btn-cart'>ÁP DỤNG</button>
                            </li>

                            <li class=' left-divider divider-blur'></li>
                            <li class='list-cart-group text-1'>
                                <span>Đơn hàng</span>
                                <span class='title-3-1 totalPriceOfCart'>
                                    <?php
                                    if (!empty( $data["Result"])) {
                                        $total = 0;
                                        
                                        while ($rows = mysqli_fetch_array($data["Result"])) {
                                            
                                            $total = $total + (int)$rows["gia"] * (int)$_SESSION["giohang"][$rows["id"]];
                                            
                                            
                                        }
                                        $total=number_format($total);
                                        echo"$total VND";
                                        
                                    }
                                    ?>
                                    </span> 
                            </li>
                            <li class='list-cart-group text-2'>
                                <span>Giảm</span>
                                <span class='title-4-1 totalDiscountOfCart'>0 VND</span>
                            </li>
                            <li class='left-divider divider-blur'></li>
                            <li class='list-cart-group text-3'>
                                <span>TẠM TÍNH</span>
                                <span class='tempPrice'>
                                    <?php
                                    if (!empty($data["Total"])) {
                                    $total = 0;
                                   
                                    while ($rows = mysqli_fetch_array($data["Total"])) {
                                        
                                        $total = $total + (int)$rows["gia"] * (int)$_SESSION["giohang"][$rows["id"]];
                                        
                                    }
                                    $total=number_format($total);
                                    echo" $total VND";
                                }
                                    ?> 
                                </span>
                            </li>

                            <li class='list-cart-group'>
                                <a href="pay" class='pay-product'>TIẾP TỤC THANH TOÁN</a>
                            </li>


                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>