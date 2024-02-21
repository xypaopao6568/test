@include('admin.layout.head')

<div class="container">
    <h1>Thêm sản phẩm</h1>
    <form action="{{route('admin.products.add')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Tên sản phẩm</label>
            <input type="text" class="form-control" id="name" name="name"  required>
        </div>
        <div class="form-group">
            <label for="name">Giá thành</label>
            <input type="number" class="form-control" id="name" name="price" >
        </div>
        <div class="form-group">
            <label for="name">Giá sale</label>
            <input type="number" class="form-control" id="name" name="sale" >
        </div>
        <div class="form-group">
            <label for="name">Số lượng trong kho</label>
            <input type="number" class="form-control" id="name" name="quantity" required>
        </div>
        <div class="form-group">
            <label for="name">Đơn vị</label>
            <input type="text" class="form-control" id="name" name="unit" required>
        </div>
        <div class="form-group">
            <label for="description">Mô tả sản phẩm</label>
            <textarea class="form-control" id="description" name="description"  rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="name">Ảnh sản phẩm</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
       @foreach ($category as $item)
       <input type="radio" value="{{$item->id}}" name='category'>
       <span>{{$item->name}}</span>
        @endforeach
        <input type="submit" class="form-control">
    </form>