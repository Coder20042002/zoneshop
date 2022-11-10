<div class="pay part part-warp">
    <div class="container">
        <div class="row">
            <form id="orderForm" autocomplete="on" method="post" action="">
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 main-cart-left">

                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cart-title1 title-border">THÔNG TIN GIAO HÀNG</div>

                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                            <div class="has-feedback">
                                <input required type="text" class="form-control" id="inputSuccess2" placeholder="Họ và tên" name="Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                            <div class="has-feedback">
                                <input required type="text" class="form-control" id="inputSuccess2" placeholder="Số điện thoại" name="Phone">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                            <div class="has-feedback">
                                <input required type="text" class="form-control" id="inputSuccess2" placeholder="Email" name="Email">

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                            <div class="has-feedback">
                                <input required type="text" class="form-control" id="inputSuccess2" placeholder="Địa chỉ" name="Address">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group location" id="list-city">
                            <select required class="form-control" id="City" name="City">
                                <option value="0">Tỉnh/ Thành Phố</option>
                                <option value=" Đồng Tháp">Đồng Tháp</option>

                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 form-group location">
                            <select class="form-control" id="District" name="District">
                                <option class="pull-left1" value="0">Quận/ Huyện</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 form-group location">
                            <select class="form-control" id="Ward" name="Ward">
                                <option class="pull-right1" value="0">Phường/ Xã</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                            <div class="ck1">
                                <input required type="checkbox" id="cb2" name="isNotification">
                                <label for="cb2"></label>
                                Cập nhật các thông tin mới nhất về chương trình từ ZoneShop
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-1">PHƯƠNG THỨC GIAO HÀNG</div>

                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 form-group">
                            <div class="ck1">
                                <input type="radio" id="cb3" name="shippingType" value="normal" checked="">
                                <label for="cb3"></label>
                                Tốc độ tiêu chuẩn (từ 2 - 5 ngày làm việc) &nbsp; &nbsp; <img class="tooltip_attach" src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon_cham_hoi.svg">
                            </div>
                            <div class="tooltip-container" hidden="">Tuỳ vào địa chỉ giao hàng mà tốc độ giao hàng tiêu chuẩn
                                sẽ khác nhau. Chúng tôi luôn cố gắng để đơn hàng đến tay bạn sớm nhất.
                            </div>
                        </div>
                        <!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 form-group title-right normal-fee">0 VNĐ</div> -->



                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-1">PHƯƠNG THỨC THANH TOÁN</div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 form-group">
                            <div class="ck1">
                                <input type="radio" id="cb5" name="paymentType" class="paymentType" value="direct" checked="">
                                <label for="cb5"></label>
                                Thanh toán trực tiếp khi giao hàng &nbsp; &nbsp; <img class="tooltip_attach" src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon_cham_hoi.svg">
                                &nbsp; &nbsp; <img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon_COD.svg">
                            </div>
                            <div class="tooltip-container" hidden="">Là phương thức thanh toán bằng tiền mặt trực tiếp khi nhận
                                hàng
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group">
                            <div class="ck1">
                                <input  type="radio" id="cb7" name="paymentType" class="paymentType" value="onepay">
                                <label for="cb7"></label>
                                Thanh toán bằng thẻ quốc tế và nội địa (ATM) &nbsp; &nbsp; <img class="tooltip_attach" src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon_cham_hoi.svg">
                                &nbsp; &nbsp; <img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon_Cash_visa.svg">
                            </div>
                            <div class="tooltip-container" hidden="">Phương thức thanh toán sử dụng các loại thẻ quốc tế như Visa, Master, JCB,… hoặc các loại thẻ thanh toán nội địa (ATM).
                                Vui lòng đọc kĩ các cam kết thanh toán khi chọn phương thức này. Phí thanh toán đối với phương thức này hiện là 1% trên tổng giá trị giao dịch.
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 form-group">
                            <div class="ck1">
                                <input type="radio" id="cb8" name="paymentType" class="paymentType" value="momo">
                                <label for="cb8"></label>
                                Thanh toán bằng ví MoMo &nbsp; &nbsp; <img class="tooltip_attach" src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon_cham_hoi.svg">
                                &nbsp; &nbsp; <img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon momo-01.svg">
                            </div>
                            <div class="tooltip-container" hidden="">
                                Phương thức dành cho khách hàng có tài khoản và lựa chọn thanh toán qua ví điện tử MoMo.
                                Vui lòng đọc kĩ các cam kết về phương thức này trước khi quyết định. Phí thanh toán đang được áp dụng là 1% trên tổng thanh toán.
                            </div>
                        </div>


                    </div>

                </div>


                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 main-cart-right">
                    <ul class='list-group'>
                        <div class='cart-title1 title-border1'>ĐƠN HÀNG</div>
                        <div class=' left-divider divider-blur'></div>

                        <?php
                        $total = 0;
                        while ($rows = mysqli_fetch_array($data["Result"])) {
                            $price = $rows["gia"];
                            $price = number_format($price);
                            $num = (int)$rows["gia"] * (int)$_SESSION["giohang"][$rows["id"]];
                            $num = number_format($num);
                            $total =  $total + (int)$rows["gia"] * (int)$_SESSION["giohang"][$rows["id"]];



                            echo "
                        <li class='list-cart-group text-1'>
                            <span class='title-6'>$rows[ten]</span>
                            <span class='title-6-1'> $num VND</span>
                        </li>
                        <li class='list-cart-group text-1-1'>
                            <span class='title-6-2'>Size: 35</span>
                            <span class='title-6-3'>x " . $_SESSION['giohang'][$rows['id']] . "</span>
                        </li>




                        
                        ";
                        }
                        
                        
                        
                        ?>
                        <li class='list-cart-group divider-1'></li>
                        <li class='list-cart-group text-1'>
                            <span class='title-3'>Đơn hàng</span>
                            <span class='title-3-1'><span class='current-price'>
                                <?php 
                                 $total = 0;
                                   
                                 while ($rows = mysqli_fetch_array($data["Total"])) {
                                     
                                     $total = $total + (int)$rows["gia"] * (int)$_SESSION["giohang"][$rows["id"]];
                                     
                                 }
                                 $total=number_format($total);
                                 echo" $total VND";
                                 ?>
                            </span></span>
                        </li>

                        <li class='list-cart-group text-2-3'>
                            <span class='title-21'>Phí vận chuyển</span>
                            <span class='title-22'><span class='shipping-fee'>15,000 VND</span></span>
                        </li>
                        <li class='list-cart-group text-2-3'>
                            <span class='title-21'>Phí thanh toán</span>
                            <span class='title-22'><span class='card-fee'>2,000 VND</span></span>
                        </li>

                        <li class='list-cart-group divider-1'></li>
                        <li class='list-cart-group'>
                            <span class='title-5'>TỔNG CỘNG</span>
                            <span class='title-5-2'><span class='total-price'>
                               
                            <?php 
                                 $total = 0;
                                 $ship=15000;
                                 $pay=2000;  
                                 while ($rows = mysqli_fetch_array($data["Total1"])) {
                                     
                                     $total = $total + (int)$rows["gia"] * (int)$_SESSION["giohang"][$rows["id"]];
                                     
                                 }
                                 $total=number_format($total - $ship - $pay);
                                 echo" $total VND
                                 <input type='hidden' name='total' value='$total' hiden=''>
                                 ";
                                 ?>
                            </span></span>
                        </li>
                        <li class='list-cart-group'>
                            <input type='submit' class='btn btn-cart btn-complete-detail' value='HOÀN TẤT ĐẶT HÀNG' name='pay'>
                            </input>
                        </li>
                    </ul>

                </div>

            </form>
        </div>
    </div>
</div>