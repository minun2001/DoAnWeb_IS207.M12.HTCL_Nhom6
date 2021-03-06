
    @extends('layout.user.app')
    @section('content')
	<div class="limiter">
		<div class="container-login100" style="background-image: url('public/frontend/dangky/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
					<span style="color: #4A235A;" class="login100-form-title p-b-49">
						ĐĂNG KÝ
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Vui lòng nhập vào tên hiển thị">
						<span class="label-input100">User name</span>
						<input class="input100" id="name" type="text" name="name" placeholder="Type your user name !" value="{{ old('name') }}" required autocomplete="name" autofocus>
					
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Vui lòng nhập vào Email">
						<span class="label-input100">Email</span>
						<input class="input100" id="email" type="email" name="email"  placeholder="Type yor email !" value="{{ old('email') }}" required autocomplete="email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Vui lòng nhập mật khẩu">
						<span class="label-input100">Password</span>
						<input class="input100"  name="password" id="password" type="password" placeholder="Type your password !" required autocomplete="new-password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Vui lòng nhập lại mật khẩu">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password_confirmation" id="password-confirm"  placeholder="Type your password again!" required autocomplete="new-password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Sign up
							</button>
						</div>
                    </div>
                    	<div class="flex-col-c p-t-50">
						<span class="txt1 p-b-17">
							Already have an account ?
						</span>

						<a href="{{ route('login') }}" class="txt2">
							Sing in now
						</a>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign In Using
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
                    </div>
                    

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	@endsection
