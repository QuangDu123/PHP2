<div class="card-header">
				<h3>REGISTER</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form action="/register" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="username" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="pw" class="form-control" placeholder="password">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user-circle"></i></span>
						</div>
						<input type="text" name="fullname" class="form-control" placeholder="Họ và tên">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
						</div>
						<input type="text" name="dia_chi" class="form-control" placeholder="Địa chỉ">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="email" name="email" class="form-control" placeholder="Email">
					</div>
					<br>
					<div class="form-group">
						<input type="submit" name="btn" value="Đăng kí" class="btn float-right login_btn"> 
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Bạn đã có tài khoản?<a href="login">Login</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Quên mật khẩu??</a>
				</div>
			</div>

