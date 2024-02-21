@include('admin.layout.head')

<div class="container">
    <h1>Sửa sản phẩm</h1>
    <form action="/admin/products/edit/{{$product->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Tên sản phẩm</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>
        <div class="form-group">
            <label for="name">Giá thành</label>
            <input type="text" class="form-control" id="name" name="price" value="{{ $product->price }}" required>
        </div>  
        <div class="form-group">
            <label for="name">Giá sale</label>
            <input type="text" class="form-control" id="name" name="sale" value="{{ $product->sale }}" required>
        </div>
        <div class="form-group">
            <label for="name">Số lượng trong kho</label>
            <input type="text" class="form-control" id="name" name="quantity" value="{{ $product->quantity }}" required>
        </div><div class="form-group">
            <label for="name">Đơn vị</label>
            <input type="text" class="form-control" id="name" name="unit" value="{{ $product->unit }}" required>
        </div>
        <div class="form-group">
            <label for="description">Mô tả sản phẩm</label>
            <textarea class="form-control" id="description" name="description" rows="4" value= "{{ $product->description }}" required ></textarea>
        </div>
        <div class="form-group">
            <label for="name">Ảnh sản phẩm</label>
            <input type="file" class="form-control" id="image" name="image" value=" {{ $product->image }}">
        </div>

        <input type="submit" class="form-control">
    </form>