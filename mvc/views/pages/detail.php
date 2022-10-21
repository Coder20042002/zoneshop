<div class="container product my-5 pt-5">

        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-12">
                <img class="img--fluid w-100" src="./img product/product/aothuncotron/picture1.jpg" id="MainImg" alt="">

                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="./img product/product/aothuncotron/picture1.jpg" width="100%" alt="" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="./img product/product/aothuncotron/picture2.jpg" width="100%" alt="" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="./img product/product/aothuncotron/picture3.jpg" width="100%" alt="" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="./img product/product/aothuncotron/picture4.jpg" width="100%" alt="" class="small-img">
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-12 col-12">
                <h6 class="heading-product">Home / T-Shirt</h6>
                <h3 class="name-product py-4">Áo thun Zara</h3>
                <h2 class="product-price">$129.000</h2>
                <select class='option-size my-3'>
                    <option value=''>Select Size</option>
                <?php 
                while($rows=mysqli_fetch_object($data["Size"])) {
                    echo "
                    <option value=''>$rows->ten</option>
                    ";
                }
                ?>
                </select>
                <input class="input-number" type="number" value="1" min="1">
                <button class="buy-btn">Thêm vào giỏ</button>
               <img src="public/css/img/bangsize.jpg" alt="" class="table-size">
            </div>
            <div class="col-lg-2 col-md-12 col-12"> 
            <h4 class="detal-product mt-5 mb-5">
                    <span class="detail-content">
                        Chất liệu: Kate<br>
                        Thành phần: 12% modal và 88% superfine<br>
                        - Ít nhăn và dễ ủi<br>
                        - Nhanh khô và thoáng mát<br>
                        HDSD:<br>
                        - Áo sơ mi màu phơi trong bóng râm để tránh bạc màu phần vai áo<br>
                        - Áo sơ mi trắng có thể phơi ngoài nắng để áo trắng sáng hơn ( không phơi quá lâu )
                    </span>
                </h4>
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
