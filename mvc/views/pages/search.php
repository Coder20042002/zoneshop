<div class="part part-warp-search ">
       <div class="container ">
        
            <div class="row">
                <!--Begin card-l-->
                <?php
           
            
            if (isset($_POST['keyword'])) {
                //truy vấn đếm count phần tử trong mảng
                //trả về row phần tử 
                
                while($rows=mysqli_fetch_array($data["count"])) {
                //dùng count để đếm tổng số phần tử trong mảng
                    echo "
                   <div class='count-product'>
                       <span class='count-product__content'>TÌM THẤY</span>
                       <span class='count-product__content'>$rows[0] </span>
                       <span class='count-product__content'>KẾT QUẢ CHO </span>
                       <span class='count-product__keyword'> &#8220 ". $_POST['keyword'] ." &#8221</span>
                    </div>
                    <div class='col-12 search-left-divider left-divider'></div>
                ";
                }
                
                while ($rows = mysqli_fetch_object($data["search"])) {
                    echo
                    "   
                    
                        <div class='col-12 col-md-6 col-xl-4'>
                                <div class='card-list'>
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
                                </div>

                            </div>
                            
                        "
                        ;
                }
            } else {
                
                while ($rows = mysqli_fetch_object($data["sanpham"])) {
                    echo
                    "<div class='col-12 col-md-6 col-xl-4'>
                    <div class='card-list'>
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
                    </div>

                </div>";
                }
            }
            $data["gp_sanpham"];
            ?>
                
            </div>
        



       </div>
    </div>