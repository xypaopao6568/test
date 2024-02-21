<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> 01234412412</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> cyroechi1125@gmail.com </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->
    
    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="index.html"><img src="user/images/home/logocam.png" height="80" width="80" /></a>
                    </div>
                            <div class="btn-group pull-right">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        @auth
                            <p>Chào mừng, {{ Auth::user()->name }}!</p>
                            <ul class="nav navbar-nav">
                                {{-- <li><a href="{{ route('account') }}"><i class="fa fa-user"></i> Tài khoản</a></li> --}}
                                <li><a href="{{ route('checkout') }}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                <li><a href="{{ route('cart') }}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                
                                <li><a href="{{ route('logout') }}"><i class="fa fa-lock"></i> Đăng xuất </a></li>
                                <li><a href="{{ route('myorder') }}"><i class="fa fa-lock"></i> Đơn hàng</a></li> 
                                
                            </ul>
                        @else
                        <ul class="nav navbar-nav">
                            {{-- <li><a href="{{ route('account') }}"><i class="fa fa-user"></i> Tài khoản</a></li> --}}
                            {{-- <li><a href="{{ route('checkout') }}"><i class="fa fa-crosshairs"></i> Checkout</a></li> --}}
                            {{-- <li><a href="{{ route('cart') }}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li> --}}
                            <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                            
                            <li><a href="{{ route('register') }}"><i class="fa fa-lock"></i> Đăng ký</a></li>
                        </ul>
                        @endauth
                        
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{route ('home')}}" class="active">Home</a></li>
                            <li class="dropdown"><a href="#">Store<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="shop.html">Sản phẩm</a></li>
                                    <li><a href="{{route ('checkout')}}">Checkout</a></li> 
                                    <li><a href="cart.html">Giỏ hàng</a></li> 
                                </ul>
                            </li> 

                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <form action="{{ route('products.search') }}" method="GET">
                        <input type="text" placeholder="Search" name="query"/>
                        <button type="submit">Tìm kiếm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header>