@include('admin.layout.head')

    <div class="container-fluid">
        <div class="row">
        <h2>Sản phẩm</h2>
        <div class="text-right">
        <a class="btn btn-primary" href="{{route("admin.products.create")}}">Thêm sản phẩm</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Tên</th>
                    {{-- <th>Loại </th> --}}
                    <th>Giá </th>
                    <th>Giá sale</th>
                    <th>Đơn vị</th>
                    <th>Mô tả</th>
                    <th>Số lượng</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td><img style="width: 120px;" src="{{ asset('uploads/' . $item->image) }}" alt="Avatar"></td>
                    <td>{{$item->name}}</td>
                    {{-- <td>{{$item->category}}</td> --}}
                    <td>{{$item->price}}</td>
                    <td>{{$item->sale}}</td>
                    <td>{{$item->unit}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>
                        
                        <a href="/admin/products/edit/{{$item->id}}" class="btn btn-primary">Sửa sản phẩm</a>               
                        <form method="POST" action="admin/products/delete/{{$item->id}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm không?')">Xóa sản phẩm</button>
                        </form>
                    </td>
                </tr>
                @endforeach     
            </tbody>
        </table>
        </div>
    </div>
