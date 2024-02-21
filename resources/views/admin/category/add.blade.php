@include('admin.layout.head')
 
<div class="container">
  <h1>Thêm danh mục</h1>
  <form action="{{route('admin.category.add')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
          <label for="name">Tên danh mục</label>
          <input type="text" class="form-control" id="name" name="name"  required>
      </div>
      
      <input type="submit" class="form-control">
  </form>