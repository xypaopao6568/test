<!DOCTYPE html>
<html lang="en">
@include('page.layout.head')


<body>
	<!--/header-->
    @include('page.layout.header')
	
	<!--/slider-->
	@include('page.layout.slider')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                          <h2>Danh mục</h2>
                            <div class="panel-group category-products" id="accordian">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#mainboard">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                @foreach  ($category2 as $item)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#manhinh">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                <a href="{{ route('category.products', ['category' => $item]) }}">{{$item->name}}</a>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                @endforeach
                                    </div>
                                    
                                
                                </div>
                            </div>
                            <div class="col-sm-9 padding-right">
                                <div class="features_items">
                                    <h2 class="title text-center">Sản phẩm</h2>
                                    @foreach ($products as $item)
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="{{ asset('uploads/' . $item->image) }}" alt="" style="width: 250px; height: 250px;" />
                                                        <h2>{{$item->price}}$</h2>
                                                        <p>
                                                            <a href="{{ route('detail',['id'=>$item->id]) }}">{{$item->name}}</a>
                                                        </p>
                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                                    </div>         
                                            </div>          
                                        </div>
                                    </div>
                                    @endforeach 
                            </div>
                        </section>
    
	
	<!--/Footer-->
    @include('page.layout.footer')
	@include('page.layout.script')
</body>
</html>