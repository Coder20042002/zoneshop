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
}
?>
<style>
    body {
        font-family: Tahoma, Geneva, sans-serif;
        font-size: 13px;
    }

    .msg {
        width: 450px;
        margin: 0px auto;
        padding: 5px;
        text-align: center;
    }

    form {
        width: 300px;
        margin: 0px auto;
    }

    .cls_caption {
        width: 150px;
        float: left;
        font-weight: bold;
        text-align: left !important;
    }

    .cls_input {
        width: 150px;
        float: left;
    }

    .img_row {
        text-align: center;
        padding: Spx Opx;
    }

    .frm_row {
        margin-top: 5px;
    }

    #menu {
        margin-bottom: 100px;
        text-align: right
    }
</style>