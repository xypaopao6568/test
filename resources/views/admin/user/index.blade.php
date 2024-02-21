@include('admin.layout.head')

    <div class="container-fluid">
        <div class="row">
        <h2>Người dùng</h2>
        <div class="text-right">
        <a class="btn btn-primary" href="{{route("admin.user.create")}}">Thêm người dùng</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên người dùng</th>
                    <th>Email</th>
                    <th>Địa chỉ </th>
                    <th>Số điện thoại </th>
                    <th>Role</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->role}}</td>
                    <td>
                        
                        <a href="/admin/user/edit/{{$item->id}}" class="btn btn-primary">Sửa thông tin</a>               
                        <form method="POST" action="admin/user/delete/{{$item->id}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng này không?')">Xóa người dùng</button>
                        </form>
                    </td>
                </tr>
                @endforeach     
            </tbody>
        </table>
        </div>
    </div>
