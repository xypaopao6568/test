@include('admin.layout.head')

<div class="container">
    <h1>Thêm người dùng</h1>
    <form action="{{route('admin.user.add')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Tên người dùng</label>
            <input type="text" class="form-control" id="name" name="name"  required>
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input type="email" class="form-control" id="name" name="email" >
        </div>
        <div class="form-group">
            <label for="name">Địa chỉ</label>
            <input type="text" class="form-control" id="name" name="address" >
        </div>
        <div class="form-group">
            <label for="name">Số điện thoại</label>
            <input type="number" class="form-control" id="name" name="phone" required>
        </div>
        <div class="form-group">
            <label for="name">Mật khẩu</label>
            <input type="text" class="form-control" id="name" name="password" required>
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select class="form-control" id="role" name="role" required>
                <option value="0">Người dùng</option>
                <option value="1">Admin</option>
            </select>
        </div>
        <input type="submit" class="form-control">
    </form>