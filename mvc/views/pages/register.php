<?php session_start() ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="login">
                <div class="login-main reg-main">
                    <form action="register/Xuli" method="POST" class="form-reg">
                        <h1 class="heading-login">Đăng Kí</h1>
                        <div class="input-item input-reg ">
                            <div class="cls_caption">Tên tài khoản:</div>
                            <div class="cls_input">
                                <input required class="input-warp \" type="text" name="username" value="<?php echo isset($_GET['username']) ? $_GET['username'] : ''; ?>" />
                            </div>
                        </div><br style="clear:both;" />
                        <div class="input-item input-reg">
                            <div class="cls_caption">Mật khẩu: </div>
                            <div class="cls_input">
                                <input required class="input-warp " type="password" name="password" />
                            </div>
                        </div><br style=" clear:both;" />
                        <div class="input-item input-reg">
                            <div class="cls_caption">Nhập lại mật khẩu:</div>
                            <div class="cls_input">
                                <input required class="input-warp " type="password" name="password2" />
                            </div>
                        </div><br style="clear:both;" />
                        <div class="input-item input-reg">
                            <div class="cls_caption">Họ và tên:</div>
                            <div class="cls_input">
                                <input required class="input-warp " type="text" name="fullname" value="<?php echo isset($_GET['fullname']) ? $_GET['fullname'] : ''; ?>" />
                            </div>
                        </div><br style="clear:both;" />
                        <div class="input-item input-reg">
                            <div class="cls_caption">Email:</div>
                            <div class="cls_input">
                                <input required class="input-warp " type="email" name="email" value="<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>" />
                            </div>
                        </div><br style="clear:both;" />
                       
                        <div class="img_row ">
                            <input class="btn-reg btn-log_reg" type="submit" value="Đăng Ký"  />
                            <input class="btn" type="reset" value="Xoá Form" />
                        </div><br style="clear:both;" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>