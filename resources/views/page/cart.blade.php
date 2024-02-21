<!DOCTYPE html>
<html lang="en">
@include('page.layout.head')

<body>
	<!--/header-->
    @include('page.layout.header')
	

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
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
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Thông tin giỏ hàng</h3>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Số lượng sản phẩm <span>{{$sum}}</span></li>
							<li>Total <span>{{$sum2}}</span></li>
						</ul>
							{{-- <a class="btn btn-default update" href="">Update</a> --}}
							<a class="btn btn-default check_out" href="{{ route('checkout') }}">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
	
	<!--/Footer-->
    @include('page.layout.footer')
	@include('page.layout.script')
</body>
</html>