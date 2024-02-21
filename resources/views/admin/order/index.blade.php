@include('admin.layout.head')

    <div class="container-fluid">
       

        <div class="row">
        <h2>Đơn hàng</h2>
        <div class="text-right">
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ngày đặt</th>
                    <th>Tên khách hàng</th>
                    <th>Thanh toán</th>
                    <th>Trạng thái</th>
                    <th>Tổng tiền</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->user->name}}</td>
                    <td>Thanh toán khi nhận hàng</td>
                    <td>Đang xử lý</td>
                    <td>{{$item->total_price}}</td>
                    <td>
                        <a href="/admin/order/show/{{$item->id}}" class="btn btn-primary">Xem đơn</a>
                    </td>
                    
                </tr>
                @endforeach     
            </tbody>
        </table>
        </div>
    </div>
