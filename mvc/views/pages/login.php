   <div class="container">
   	<div class="row">
   		<div class="col-12 col-md-12 col-xl-12">
   			<div class="login">
   				<div class="login-main">
   					<h1 class="heading-login"> Đăng nhập tài khoản</h1>
					

   					<div class="login-user">
   						<form action="login/Xuli" method="post">
   							<div class="login-input">
   								<div class="input-item">
   									<i class="icon-user ti-user"></i>
   									<input required type="text" placeholder="User name" name="username" class="input-warp " />
   								</div>
   								<div class="input-item">
   									<i class="icon-user ti-lock"></i>
   									<input required type="password" placeholder="Password" name="password" class="input-warp" />
   								</div>
   							</div>

   							<div class="remember">
   								<div class="checkbox1">
   									<label class="checkbox"><input type="checkbox" name="" checked=""></label>
   									<span>Remember </span>
   								</div>
   								<div class="forgot">
   									<h6><a href="#">Forgot Password?</a></h6>
   								</div>

   							</div>
							
   							<input type="submit" value="Login" class=" btn-log_reg">
							<a class="btn-log_reg register-form" href="register">Đăng kí</a>
   						</form>

						<?php require_once "msg.php"; ?>

   						<div class="login-or">
   							<div class="sign-up">
   								<h2>or</h2>
   							</div>

   						</div>

						<div class="login-social-main" >
							<div class="login-social">
								<a href="#" class="login-link">
									<i class="ti-facebook icon-login"></i>
									<h5>Facebook</h5>
								</a>
								<a href="#" class="login-link">
									<i class="ti-twitter-alt icon-login"></i>
									<h5>Twitter</h5>
								</a>
							</div>
						</div>

   					</div>
   				</div>
   			</div>
   		</div>


   	</div>
   </div>