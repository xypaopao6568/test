@include('admin.layout.head')

<div class="container">
    <h1>Sửa danh mục</h1>
    <form action="/admin/category/edit/{{$category->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Tên danh mục</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
        </div>
      

        <input type="submit" class="form-control">
    </form>