<style>
    .allCart {
        display: flex;

    }

    .cart-title {
        color: #000;
        font-size: 1.8rem;
        border-bottom: #000 2px solid;
        margin: 0px 0px 20px 0px;
        padding: 15px 0px;
        font-weight: 700;
        text-transform: uppercase;

    }

.cart-title-border {
    border: none;
    background-color: #f1f1f1;
    margin-top: 12px;
    padding-left: 10px;
}

    .info {
        display: flex;
        justify-content: space-between;
    }

    .info-img {
        padding-right: 20px;
    }

    .info-img-item {
        width: 180px;
        height: 180px;
    }

    p.info-price {
        font-weight: bold;
        color: #cccc;
        font-size: 1.8rem;
        display: inline-block;

    }

    p.price-porduct {
        color: #808080;
        font-size: 1.8rem;
        display: inline-block;
        margin-left: 10px;




    }

    input.input-number.input-cart {
        margin-top: 5px;
        margin-left: 5px;
    }

    .size-cart {
        width: 100px;
    }


    span.price {
        color: #f15e2c;
        font-size: 1.8rem;
        margin-bottom: 5px;
        min-height: 40px;
        float: right;
        font-weight: 700;
    }

    .status {
        color: #f15e2c;
        font-size: 1.8rem;
        margin-bottom: 80px;
        font-weight: 600;
        float: right;
    }

    .cart-body-right {
    height: 100%;
}


.list-cart-group {
    list-style: none;
}


.cart-title-gr {
    font-size: 1.8rem;
    color: #000;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 5px;
}

.cart-input {
    width: 69%;
    height: 40px;
    /* padding: 6px 12px; */
    line-height: 1.42857143;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 0px;
    color: #000;
    font-size: 1.6rem;
    outline: none;
}

.cart-gr-main {
    display: flex;
    margin-bottom: 30px;
} 

buton#remove-product {
    color: #fff;
    background-color: #303030 !important;
    border-radius: unset;
}

button.btn-cart {
    border-radius: unset;
    background-color: #f15e2c;
    color: #fff;
    font-size: 1.6rem;
    font-weight: 600;
}

li.list-cart-group.text-1 {
    font-size: 1.6rem;
    color: #808080;
    font-weight: 700;
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
}

li.list-cart-group.text-2 {
    font-size: 1.6rem;
    color: #808080;
    font-weight: 700;
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
    
}


.totalDiscountOfCart {
    font-weight: 400;
}

li.list-cart-group.text-3 {
    font-size: 1.8rem;
    font-weight: 700;
    color: #000;
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
    margin-bottom: 20px;
}

button.btn.btn-cart.to-checkout {
    background-color: #f15e2c !important;
    padding: 32px 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

button.btn.btn-cart.to-checkout:hover {
    color:#ffff !important;
}

</style>
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
                            

                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cart-title cart-title-border">GIỎ HÀNG</div>

                    <div class="row">
                        <div class="allCart">
                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 item-2">
                                <div class="info">
                                    <div class="info-img">
                                        <img class="info-img-item" src="https://ananas.vn/wp-content/uploads/Pro_AV00175_1-500x500.jpg" alt="">
                                    </div>

                                    <div class="info-body">
                                        <h3 class="info-heading">
                                            Vintas Landforms - Low Top - Marmalade</h3>
                                        <p class="info-price">Giá:
                                        <p class="price-porduct">2487000 </p>
                                        </p>

                                        <div class="option-select-size">
                                            <div class="option-main">
                                                <h5>SIZE</h5>
                                                <select class='option-size my-3 size-cart'>
                                                    <option class='option-item' value=''>Select Size</option>

                                                </select>

                                            </div>

                                            <div class="option-main">
                                                <h5>SỐ LƯỢNG</h5>
                                                <input class="input-number input-cart size-cart" type="number" value="1" min="1">
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 ">
                                <div class="cart-body-right">
                                    <span class="price">280000đ</span>

                                    <div class="status">Còn hàng</div>

                                    <buton class="btn btn-remove" id="remove-product">
                                        Xoá
                                    </buton>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class=" left-divider divider-blur"></div>




                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-cart-right">
                    <ul class="cart-group">
                       <li class="list-cart-group cart-title">Đơn hàng</li>
                       <li class="list-cart-group cart-drive"></li>
                       <li class="list-cart-group cart-title-gr">Nhập mã khyến mãi</li>
                       <li class="list-cart-group cart-gr-main">
                        <input type="text" name=cart-input value="" class="cart-input">
                        <button class=" btn-cart">ÁP DỤNG</button>
                       </li>
                       <li class=" left-divider divider-blur"></li>
                       <li class="list-cart-group text-1">
                        <span >Đơn hàng</span>
                        <span class="title-3-1 totalPriceOfCart">1.475.000 VND</span>
                    </li>
                    <li class="list-cart-group text-2">
                        <span >Giảm</span>
                        <span class="title-4-1 totalDiscountOfCart">0 VND</span>
                    </li>
                    <li class="left-divider divider-blur"></li>
                    <li class="list-cart-group text-3">
                        <span >TẠM TÍNH</span>
                        <span class="tempPrice">1.475.000 VND</span>
                    </li>

                    

                    <li class="list-cart-group">
                        <button  class="btn btn-cart to-checkout">
                            TIẾP TỤC THANH TOÁN
                        </button>
                    </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>