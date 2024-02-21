<!DOCTYPE html>
<html lang="en">
@include('page.layout.head')

<body>
	<!--/header-->
    @include('page.layout.header')
	
	<!--/slider-->
	
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div>
			<div class="step-one">
			
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sản phẩm</td>
							<td class="description"></td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng cộng</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach ($cart as $item)
								<tr>
									<td class="cart_product">
										<a href=""><img src="{{ asset('uploads/' . $item->product->image) }}" height="80" width="80"></a>
									</td>
									<td class="cart_description">
										<h4><a href="">{{$item->product->name}}</a></h4>
									</td>
									<td class="cart_price">
										<p>{{$item->product->price}}</p>
									</td>
									<td class="cart_quantity">
										<div class="cart_quantity_button">
											<input class="cart_quantity_input" type="text" name="quantity" value="{{$item ->quantity}}" autocomplete="off" size="2">

										</div>
									</td>
									<td class="cart_total">
										<p class="cart_total_price">{{$item->product->price * $item ->quantity}}</p>
									</td>

									<td class="cart_delete">
										<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
									</td>
									
								</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			

			<div class="shopper-informations">
                <form action="{{route('order')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="shopper-info">
                                <p>Thông tin giao hàng</p>
								<div class="form-group">
									{{-- <label for="name">Tên danh mục</label> --}}
									<input type="text" class="form-control" value= "{{$user->email}}"  required>
								</div>
								<div class="form-group">
									{{-- <label for="name">Tên danh mục</label> --}}
									<input type="text" class="form-control" name = "name" placeholder="Họ Tên"  required>
								</div>
								<div class="form-group">
									{{-- <label for="name">Tên danh mục</label> --}}
									<input type="text" class="form-control" name="xa" placeholder="Xã" required>
								</div>
								<div class="form-group">
									{{-- <label for="name">Tên danh mục</label> --}}
									<input type="text" class="form-control" name = "huyen" placeholder="Huyện"  required>
								</div>
								<div class="form-group">
									{{-- <label for="name">Tên danh mục</label> --}}
									<input type="text" class="form-control" name = "tinh" placeholder="Thành phố"  required>
								</div>								                           
                                <button type="submit" class="btn btn-primary" href="">Thanh toán</button>
                            </div>
                        </div>

                        <div class="col-sm-4 clearfix">
                            <div class="bill-to">
                                <p>Số điện thoại</p>
                                <div class="form-group">
									{{-- <label for="name">Tên danh mục</label> --}}
									<input type="text" class="form-control" value="{{$user ->phone}}"  required>
								</div>
                                
                            </div>
                        </div>
						
                        <div class="col-sm-4">
							
                            <div class="order-message">
                                <p>Note</p>
								<div class="form-group">
									{{-- <label for="name">Tên danh mục</label> --}}
									<textarea type="text" class="form-control" name="note" placeholder="Ghi chú cho đơn hàng của bạn"></textarea>
								</div>
                                
                            </div>	
                        </div>					
                    </div>
            </form>
			</div>
	</section> 

	<!--/Footer-->
    @include('page.layout.footer')
	@include('page.layout.script')
</body>
</html>