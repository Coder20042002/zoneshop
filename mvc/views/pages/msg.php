<?php

if (isset($_GET['msg'])) {
    if ($_GET['msg'] == "done") {
        echo "
         <script>
         alert(' Đăng ký thành công !')
        </script>
        ";
    } else if ($_GET['msg'] == "unvalid-data") {
        echo " 
        <script>
         alert('Vui lòng kiểm tra lại thông tin!')
        </script>
        
       ";
    } else if ($_GET['msg'] == "susceess") {
        echo " 
        <script>
         alert('Đăng nhập thành công!')
        </script>
        
       ";
    } else if ($_GET['msg'] == "duplicate") {
        echo " 
        <script>
         alert('Tài khoản bạn đăng ký đã tồn tại, vui lòng chọn tên đăng nhập khác')
        </script>
        
        </div>";
    } else if ($_GET['msg'] == "login-fail") {
        echo "
         <script>
         alert(' Username hoặc Password không đúng. Vui lòng kiểm tra lại !')
        </script>
        ";
        
    }
     else if ($_GET['msg'] == "out") {
        echo "
         <script>
         alert('Đăng xuất thành công!')
        </script>
        ";
        
    }else if ($_GET['msg'] == "paysussces") {
        echo "
         <script>
         alert('Thanh toán thành công!')
        </script>
        ";
        
    }
}

?>
