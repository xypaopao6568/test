<!DOCTYPE html>
<html lang="en">
@include('page.layout.head')

<body>
	<!--/header-->
    @include('page.layout.header')

	<div class="container-fluid">
        <div class="row">
        
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Sản phẩm </th>
                    <th>Tổng tiền</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>
                        {{-- <ul>
                            @foreach($product as $item)
                                <li>{{ $item->name }} - {{ $item->price }}</li>
                                <!-- Hiển thị thông tin khác của sản phẩm -->
                            @endforeach
                        </ul> --}}
                    </td>
                    <td>{{$item->total_price}}</td>
                </tr>
                @endforeach     
            </tbody>
        </table>
        </div>
    </div>


	
	<!--/Footer-->
    @include('page.layout.footer')
	@include('page.layout.script')
</body>
</html>