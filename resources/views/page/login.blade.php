<!DOCTYPE html>
<html lang="en">
<!--/head-->
@include('page.layout.head')
@include('page.layout.header')
<body>
	<!--/header-->
	
	<section id="form"><!--form-->
		<div class="container">	
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng nhập</h2>
						<form action="{{ route('login')}}" method="POST">
							@csrf
							<input type="email" name="email" placeholder="Email" />
							<input type="password" name="password" placeholder="Mật khẩu" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Giữ đăng nhập
							</span>
							<button type="submit" class="btn btn-default">Đăng nhập</button>
						</form>
					</div><!--/login form-->
				</div>
				
				<div class="col-sm-4"><!-- Image -->
                    <img src="user/images/home/logocam.png" width="400" height="400" /> 
	</section><!--/form-->
	
	
	<!--/Footer-->
	@include('page.layout.footer')

    @include('page.layout.script')
</body>
</html>