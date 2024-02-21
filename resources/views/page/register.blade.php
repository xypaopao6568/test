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
				<div class="col-sm-4 col-sm-offset-1" >
					<div class="signup-form"><!--sign up form-->
						<h2>Đăng ký</h2>
						<form action="{{route('register')}}" method="post" enctype="multipart/form-data">
							@csrf
							<input type="name" placeholder="Tên" name="name"/>
							
							<input type="email" placeholder="Email" name="email"/>
							
							<input type="text" placeholder="Địa chỉ" name="address"/>
							
							<input type="number" placeholder="Số điện thoại" name="phone"/>
							
							<input type="password" placeholder="Mật khẩu" name ="password"/>
							
							<button type="submit" class="btn btn-default">Đăng ký</button>
						</form>
					</div><!--/sign up form-->
				</div>

                <div class="col-sm-4"><!-- Image -->
                    <img src="user/images/home/logocam.png" width="400" height="400" /> 
			</div>
		</div>
	</section><!--/form-->
	<!--/Footer-->
	@include('page.layout.footer')
    @include('page.layout.script')
</body>
</html>