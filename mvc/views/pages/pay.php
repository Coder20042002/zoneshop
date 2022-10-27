<div class="pay part part-warp">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 main-cart-left">

                <div class="row">


                    <form id="orderForm">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cart-title title-border">THÔNG TIN GIAO HÀNG</div>

                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                            <div class="has-feedback">
                                <input type="text" class="form-control" id="inputSuccess2" placeholder="HỌ TÊN" name="Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                            <div class="has-feedback">
                                <input type="text" class="form-control" id="inputSuccess2" placeholder="Số điện thoại" name="Phone">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                            <div class="has-feedback">
                                <input type="text" class="form-control" id="inputSuccess2" placeholder="Email" name="Email">

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                            <div class="has-feedback">
                                <input type="text" class="form-control" id="inputSuccess2" placeholder="Địa chỉ" name="Address">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group location" id="list-city">
                            <select class="form-control" id="City" name="City">
                                <option value="0">Tỉnh/ Thành Phố</option>
                                <option value="">Đồng Tháp</option>
                                
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 form-group location">
                            <select class="form-control" id="District" name="District">
                                <option value="0">Quận/ Huyện</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 form-group location">
                            <select class="form-control" id="Ward" name="Ward">
                                <option value="0">Phường/ Xã</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                            <div class="ck1">
                                <input type="checkbox" id="cb2" name="isNotification">
                                <label for="cb2"></label>
                                Cập nhật các thông tin mới nhất về chương trình từ Ananas
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
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 form-group title-right normal-fee">0 VNĐ</div>



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
                                <input type="radio" id="cb7" name="paymentType" class="paymentType" value="onepay">
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
                    </form>

                </div>

            </div>


            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 main-cart-right">
                <ul class="list-group">
                    <li class="list-cart-group cart-title">ĐƠN HÀNG</li>
                    
                    <li class="list-cart-group divider"></li>

                    <input type="hidden" value="713796" class="productDetailId">
                    <input type="hidden" value="Vintas Landforms - Low Top" class="productName">
                    <input type="hidden" value="Marmalade" class="productColor">
                    <input type="hidden" value="AV00175" class="productSku">
                    <input type="hidden" value="720.000" class="productPrice">
                    <input type="hidden" value="Footwear | Lên chân" class="productCategory">
                    <input type="hidden" value="VND" class="currency">
                    <input type="hidden" value="0" class="discount">
                    <input type="hidden" value="Ananas" class="brand">
                    <input type="hidden" value="Vintas" class="productLine">
                    <input type="hidden" value="Low Top" class="designs">
                    <input type="hidden" value="Landforms" class="collection">
                    <input type="hidden" value="300" class="quantity">

                    <li class="list-cart-group text-1">
                        <span class="title-6">Vintas Landforms - Low Top - Marmalade</span>
                        <span class="title-6-1">720.000 VND</span>
                    </li>
                    <li class="list-cart-group text-1-1">
                        <span class="title-6-2">Size: 35</span>
                        <span class="title-6-3">x 1</span>
                    </li>

                    <div class=" left-divider divider-blur"></div>

                    
                    <li class="list-cart-group divider-1"></li>
                    <li class="list-cart-group text-1">
                        <span class="title-3">Đơn hàng</span>
                        <span class="title-3-1"><span class="current-price"> 720.000</span> VND</span>
                    </li>
                    <li class="list-cart-group text-2-2">
                        <span class="title-3">Giảm</span>
                        <span class="title-4-1">- <span class="discount">0</span> VND</span>
                    </li>
                    <li class="list-cart-group text-2-3">
                        <span class="title-21">Phí vận chuyển</span>
                        <span class="title-22"><span class="shipping-fee">0</span> VND</span>
                    </li>
                    <li class="list-cart-group text-2-3">
                        <span class="title-21">Phí thanh toán</span>
                        <span class="title-22"><span class="card-fee">0</span> VND</span>
                    </li>

                    <li class="list-cart-group divider-1"></li>
                    <li class="list-cart-group">
                        <span class="title-5">TỔNG CỘNG</span>
                        <span class="title-5-2"><span class="total-price">720.000</span> VND</span>
                    </li>
                    <li class="list-cart-group">
                        <input type="submit" class="btn btn-cart btn-complete-detail" value="HOÀN TẤT ĐẶT HÀNG" name="pay" >
                        </input>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>