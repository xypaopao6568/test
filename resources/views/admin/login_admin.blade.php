<!DOCTYPE html>
<html lang="en">
@include('page.layout.head')
<body style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2 style="text-align: center;">Đăng nhập cho trang quản trị</h2>
                        <form action="{{ route('loginad')}}" method="POST" style="text-align: center;">
                            @csrf
                            <input type="email" name="email" placeholder="Email" />
                            <input type="password" name="password" placeholder="Mật khẩu" />
                            <button type="submit" class="btn btn-default">Đăng nhập</button>
                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-4" style="display: flex; justify-content: center; align-items: center;">

                    <img src="admin/assets/images/profile/user-1.jpg" width="200" height="200" /> 
                </div>
            </div>
        </div>
    </section><!--/form-->
</body>
</html>
