<div class="part part-warp-search ">
    <div class="container ">

        <div class="row">
            <!--Begin card-l-->
            <?php


            if (isset($_GET['keyword'])) {
                //truy vấn đếm count phần tử trong mảng
                //trả về row phần tử 

                while ($rows = mysqli_fetch_array($data["count"])) {
                    //dùng count để đếm tổng số phần tử trong mảng
                    echo "
                   <div class='count-product' >
                       <span class='count-product__content'>TÌM THẤY</span>
                       <span class='count-product__content'>$rows[0] </span>
                       <span class='count-product__content'>KẾT QUẢ CHO </span>
                       <span class='count-product__keyword'> &#8220 " . $_GET['keyword'] . " &#8221</span>
                    </div>
                    <div class='col-12 search-left-divider left-divider'></div>
                ";
                }

                while ($rows = mysqli_fetch_object($data["Result"])) {
                    $price=$rows->gia;
                    $price=number_format($price);
                    echo
                    "   
                    
                        <div class='col-12 col-md-6 col-xl-4'>
                        <div class='card-list'>
                        <a href='detail/?id=" . $rows->id_hinhanh . "&&dm=" . $rows->id_dm . "&&id_sp=" . $rows->id . "' class='cart-link' >
                        <div class='card'>
                            
    
                           <img class='card-img-top' onmouseover='this.src=\"$rows->hinh1\"' '.
                            '    onmouseout='this.src=\"$rows->hinhanh\"' '.
                            '    src='$rows->hinhanh' />
                            
                            
                            
                            
                            <div class='card-body'>
                                <h5 class='card-title'>$rows->ten</h5>
                                <p>
                                    <span class='card-price-text'>Giá bán : </span>
                                    <span class='card-price'> $price đ</span>
                                </p>
                                <a href='pay' class='btn btn-primary'>Mua ngay</a>
                            </div>
                        </div>
                     </a> 
                       </div> 

                            </div>
                            
                        ";
                }
            }
            // } else {

            //     while ($rows = mysqli_fetch_object($data["sanpham"])) {
            //         echo
            //         "<div class='col-12 col-md-6 col-xl-4'>
            //         <div class='card-list'>
            //         <a href='detail/?id=" . $rows->id_hinhanh . "&&dm=" . $rows->id_dm . "&&id_sp=" . $rows->id . "' class='cart-link' >
            //             <div class='card'>
            //                 <img src='$rows->hinhanh' class='card-img-top' alt='...'>
            //                 <div class='card-body'>
            //                     <h5 class='card-title'>$rows->ten</h5>
            //                     <p>
            //                         <span class='card-price-text'>Giá bán : </span>
            //                         <span class='card-price'>$rows->gia đ</span>
            //                     </p>
            //                     <a href='#' class='btn btn-primary'>Mua ngay</a>
            //                 </div>
            //             </div>
            //             </a>
            //         </div>

            //     </div>";
            //     }
            // }

            
            
            $total=$data["Total"];
            $page=$data["Padi"];
            echo "<div class='pager'>";
            if($page>1) {
                $prev=$page-1;
                echo " <a id='pre-next-page' href='search/?page=" .$prev . (isset($_GET['dm']) ? "&dm=" . $_GET['dm'] : "") . "'><i class='ti-angle-double-left page-icon'></i></a> ";
            }
            for ($i = 1; $i <= (float)$total; $i++)
                if ($i != $page)
                    echo " <a href='search/?page=" . $i . (isset($_GET['keyword']) ? "&keyword=" . $_GET['keyword'] : "") . "'>$i</a> ";
                else
                    echo "<span>$i</span>";

            if($page< $total-1) {
                $next=$page+1;
                echo " <a id='pre-next-page' href='search/?page=" .$next . (isset($_GET['dm']) ? "&dm=" . $_GET['dm'] : "") . "'><i class='ti-angle-double-right page-icon'></i></a> ";
            }        
            echo "</div>";
            
            
            ?>

        </div>




    </div>
</div>
<script>
        function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    };
                };
                xmlhttp.open("GET", "getuser.php?id=" + str, true);
                xmlhttp.send();
            };
        }
</script>