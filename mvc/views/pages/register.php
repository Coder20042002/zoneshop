<div class="container part">
    <div class="row">
        <div class="col-lq-8 col-md-8 col-sm-10 col-sx-12 form-reg-main">
            <div class="form__wrap ">
                <h2 class="sec-title form__title">Tạo tài khoản</h2>
                <form action="register/Xuli" method="POST" class="form__inp">
                    <div class="form">
                        <input required type="text" name="fullname" required id="reg-boder" class="form__inp" placeholder="Họ và tên" value="<?php echo isset($_GET['fullname']) ? $_GET['fullname'] : ''; ?>">
                        <input required type="email" name="email" required id="reg-boder" class="form__inp" placeholder="Email" value="<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>">
                        <input required type="text" name="username" id="reg-boder" class="form__inp" placeholder="Tài khoản" value="<?php echo isset($_GET['username']) ? $_GET['username'] : ''; ?>">
                        <input required type="password" name="password" required id="reg-boder" class="form__inp" placeholder="Mật khẩu">
                        <input required type="password" name="password2" required id="reg-boder" class="form__inp" placeholder="Xác nhận mật khẩu">
                        <div class="form__check">
                            <label for="policy" class="fl-con">
                                <input type="checkbox" name="policy" value="yes" id="policy" required="" class="dp-none">
                                Tôi đồng ý với các điều khoản và điều kiện, chính sách bảo mật và chính sách cookie
                                </label>
                        </div>
                        
                    </div>
                    <div class="form__bot form__mb ">
                        <input class="btn-reg" type="submit" value="Đăng ký" />
                    </div>
                    <span class="form__bot ">
                        Nếu sdt hoặc email của bạn báo đã tồn tại, bấm <a href="login" class=""> vào đây </a> và login với sdt hoặc email đó với một mật khẩu bất kì để kích hoạt tài khoản hoặc liên hệ với bộ phận cskh của ZoneShop để được hỗ trợ
                    </span>
                </form>
            </div>

        </div>

    </div>


</div>

</div>
<?php require_once "msg.php"; ?>
<script>
    document.title = "Đăng kí cùng - zoneshop";
</script>