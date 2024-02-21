@include('admin.layout.head')
<div class="row">
    <div class="col-lg-2">
    </div>
        <div class="col-lg-6">
            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header mb-4">
                    Chi tiết đơn hàng
                </div>
                <div class="container">
                    <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <table style="width: 100%">
                                <tbody>
                                 @foreach ($product as $item)

                                    <tr >
                                        <td>
                                            <img src="{{ asset('uploads/' . $item->product->image) }}" style="width: 60px; height: auto;" alt="zzz">
                                        </td>
                                        <td>
                                           {{$item->name}}
                                        </td>
                                        <td>
                                            {{$item->price}}
                                        </td>
                                        <td>
                                            x {{$item->quantity}}
                                        </td>
                                        <td>
                                            {{$items->total_price}} VND
                                        </td>
                                    </tr>

                                    @endforeach 
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex flex-column float-right">
                            <div class="float-left text-lg-right">
                                <h6>Giá: {{$items->total_price}} VND</h6>
                            </div>
                            <div class="float-right text-lg-right">
                                <h6>Vận chuyển:  0 VND</h6>
                            </div>
                            <div class="float-right text-lg-right">
                                <h6><b>Tổng cộng: </b> {{$items->total_price}} VND</h6>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12">
                        <hr>
                        <div>
                           
                        </div>
                        <div class="d-flex flex-column float-right">
                            <div class="float-right text-lg-right">
                                <h6>Khách hàng thanh toán: {{$items->total_price}} VND</h6>
                            </div>
                            
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
                </div>
                <div class="card-body">
                    <div id="shipping-info">
                        <h5>Khách hàng</h5>
                        {{$items->user->name}}
                    </div>
                    <hr class="sidebar-divider d-none d-md-block">
                    <div id="shipping-info">
                        <h6>LIÊN HỆ</h6>
                        {{$items->user->email}}

                    </div>
                    <hr class="sidebar-divider d-none d-md-block">
                    <div id="shipping-info">
                        <h6>ĐỊA CHỈ GIAO HÀNG</h6>
                            <span>{{$items->commune}}</span>
                            <br/>
                            <span>{{$items->district}}</span>
                            <br/>
                            <span>{{$items->city}}</span>
                            <br/>
                            <span>{{$items->note}}</span>
                            <br/>

                    </div>
                </div>
            </div>
        </div>
    </div>