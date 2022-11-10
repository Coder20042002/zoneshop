<div class="container part">
	<div class="row">
		<div class="col-lq-8 col-md-8 col-sm-10 col-sx-12 form-reg-main">
			<div class="form__wrap ">
				<h2 class="sec-title form__title">Đăng nhập tài khoản</h2>
				<form action="login/Xuli" method="post" class="form__inp">
					<div class="form">
						<input required type="text" name="username" id="reg-boder" class="form__inp" placeholder="Tài khoản" value="<?php echo isset($_GET['username']) ? $_GET['username'] : ''; ?>">
						<input required type="password" name="password"  id="reg-boder" class="form__inp" placeholder="Mật khẩu">
						<div class="form__check">
							<label for="policy" class="fl-con">
								<input type="checkbox" name="policy" value="yes" id="policy"  class="dp-none">
								Remember
							</label>
							<h6><a href="#" class="forgot-pas">Forgot Password?</a></h6>
						</div>

					</div>
					<div class="form__bot form__mb ">
						<input class="btn-reg" type="submit" value="Login" />
						<a class="btn-reg" href="register">Đăng ký</a>
					</div>

					<span class="form__bot ">
						Nếu chưa có tài khoản, bấm <a href="register" class=""> vào đây </a> để đăng ký tài khoản cùng ZoneShop bạn nhé !
					</span>
				</form>
			</div>

		</div>

	</div>


</div>

</div>



<?php require_once "msg.php"; ?>
<script>
	document.title = "Đăng nhập cùng - zoneshop";
</script>