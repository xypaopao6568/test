@include('admin.layout.head')

      <div class="container-fluid">
        <div class="row">
        <h2>Danh mục sản phẩm</h2>
        <div class="text-right">
        <a class="btn btn-primary" href="{{route("admin.category.create")}}">Thêm danh mục</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên danh mục</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>                   
                        <a href="/admin/category/edit/{{$item->id}}" class="btn btn-primary">Sửa danh mục</a>               
                        <form method="POST" action="admin/category/delete/{{$item->id}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục không?')">Xóa danh mục</button>
                        </form>
                    </td>
                </tr>
                @endforeach     
            </tbody>
        </table>
        </div>
    </div>

