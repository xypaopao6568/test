@include('admin.layout.head')

<div class="container">
    <h1>Sửa người dùng</h1>
    <form action="/admin/user/edit/{{$user->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Tên người dùng</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>

        <div class="form-group">
            <label for="name">Email</label>
            <input type="email" class="form-control" id="name" name="email" value="{{ $user->email }}" required>
        </div>

        <div class="form-group">
            <label for="name">Địa chỉ</label>
            <input type="text" class="form-control" id="name" name="address" value="{{ $user->address }}" required>
        </div>

        <div class="form-group">
            <label for="name">Số điện thoại</label>
            <input type="text" class="form-control" id="name" name="phone" value="{{ $user->phone }}" required>
        </div>

        <div class="form-group">
            <label for="name">Role</label>
            <input type="text" class="form-control" id="name" name="role" value="{{ $user->role }}" required>
        </div>
        
        <input type="submit" class="form-control">
    </form>