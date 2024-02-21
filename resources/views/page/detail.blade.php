<!DOCTYPE html>
<html lang="en">
	@include('page.layout.head')

<body>
	@include('page.layout.header')
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					@include('page.layout.category')
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{ asset('uploads/' . $detail->image) }}" alt="" style="width: 350px; height: 350px;" />
								
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="{{ asset('uploads/' . $detail->image) }}" width="90" height="90" alt=""></a>
										  <a href=""><img src="{{ asset('uploads/' . $detail->image) }}" width="90" height="90" alt=""></a>
										  <a href=""><img src="{{ asset('uploads/' . $detail->image) }}" width="90" height="90" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="{{ asset('uploads/' . $detail->image) }}" width="90" height="90" alt=""></a>
										  <a href=""><img src="{{ asset('uploads/' . $detail->image) }}" width="90" height="90" alt=""></a>
										  <a href=""><img src="{{ asset('uploads/' . $detail->image) }}" width="90" height="90" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="{{ asset('uploads/' . $detail->image) }}" width="90" height="90" alt=""></a>
										  <a href=""><img src="{{ asset('uploads/' . $detail->image) }}" width="90" height="90" alt=""></a>
										  <a href=""><img src="{{ asset('uploads/' . $detail->image) }}" width="90" height="90" alt=""></a>
										</div>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="user/images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>Tên sản phẩm: {{$detail->name}}</h2>
								<h2>Kho còn: {{$detail->quanity}}</h2>
								<form action="{{ route('add.cart') }}" method="post">
									@csrf
								<span>									
									<span>Giá: {{$detail->price}}$</span>
								</span>
									<div style="display: flex;">
										<div>
											<h2 style="padding-top: 6px;">Số lượng mua:</h2> 
										</div>
										<div style="margin-left: 20px">
											<input style="width: 60px" type="text" value="1" class="form-control" style="width: 30px; height: 30px;" name ="quantity" />
										</div>
									</div>		
								<p><b>Loại sản phẩm:</b> {{$detail->category}}</p>
								<p>Mô tả sản phẩm: {{$detail->description}} </p>
								<input type="hidden" value="{{$detail ->id}}" name ="idproduct">		
								<button type="submit" class="btn btn-fefaul">
									<i class="fa fa-shopping-cart"></i>
									Thêm vào giỏ hàng
								</button>	
							</form>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					

					
					
				</div>
			</div>
		</div>
	</section>
	
	@include('page.layout.footer')
	

	@include('page.layout.script')
</body>
</html>