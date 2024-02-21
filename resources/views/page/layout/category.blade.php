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
        @foreach  ($category as $item)
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
       
       
    </div><!--/category-products-->

    <div class="shipping text-center"><!--shipping-->
        <img src="user/images/home/freeship1.jpg" width="270" height="" alt="" />
    </div><!--/shipping-->      
</div>