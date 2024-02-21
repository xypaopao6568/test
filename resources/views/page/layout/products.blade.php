<div class="col-sm-9 padding-right">
    <div class="features_items">
        <h2 class="title text-center">Sản phẩm</h2>
        @foreach ($product as $item)
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