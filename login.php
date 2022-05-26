<?php
include 'header.php';
?>
<style>
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
			background: #60a3bc !important;
		}
		.user_card {
			height: 400px;
			width: 350px;
			margin-top: auto;
			margin-bottom: auto;
			background: #f39c12;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;

		}
		.brand_logo_container {
			position: absolute;
			height: 170px;
			width: 170px;
			top: -75px;
			border-radius: 50%;
			background: #60a3bc;
			padding: 10px;
			text-align: center;
		}
		.brand_logo {
			height: 150px;
			width: 150px;
			border-radius: 50%;
			border: 2px solid white;
		}
		.form_container {
			margin-top: 100px;
		}
		.login_btn {
			margin-left: 19%;
			width: 41%;
			background: #c0392b !important;
			color: white !important;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			background: #c0392b !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color: #c0392b !important;
		}
</style>

	<div class="container h-100" style="margin-left: 36%;">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center" style="margin-left: 23%;">
					<div class="brand_logo_container">
						<img src="images/demo/logo.jpeg" class="brand_logo" alt="Logo" style="">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="login_function.php" enctype="multipart/form-data" method="POST" style="margin-left: 12%;">
						<div class="input-group" style="width: 80%;">
				      <span class="input-group-addon"><i class="fas fa-user"></i></span>
				      <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>
				    </div>
				    <br>
						<div class="input-group"style="width: 80%;">
				      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				      <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
				    </div>
				    <br>
						<!-- <div class="form-group" style="margin-left: 1%;">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div> -->
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="button" class="btn login_btn">Login</button>
				   </div>
					</form>
				</div>
				<br>
		
				<div class="mt-4" style="margin-left: 19%;
    font-size: 95%;">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="signupas.php" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links" style="margin-left: 9%;">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
include 'footer.php';
?>