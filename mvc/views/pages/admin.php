<?php session_start(); ?>

    <?php 

    if (!isset($_SESSION['account']))
        header("Location: register");
    ?>
    <div>
        <h1>Đây là trang admin!</h1>
        <p>Chào mừng <?php echo $_SESSION['account']['fullname']; ?> quay trở lại</p>
    </div>
    <style>
        body {
            font-family: Tahoma, Geneva, sans-serif;
            font-size: 13px;
        }

        #menu {
            margin-bottom: 100px;
            text-align: right
        }

        h1,
        p {
            text-align: center;
        }
    </style>
