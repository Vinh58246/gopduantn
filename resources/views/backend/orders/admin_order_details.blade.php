@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Admin Order Details</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Admin Order Details</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <hr />


        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Shipping Details</h4>
                    </div>
                    <hr>
                    <div class="card-body">
                        <table class="table" style="background:#F4F6FA;font-weight: 600;">
                            <tr>
                                <th>Shipping Name:</th>
                                <th>{{ $order->name }}</th>
                            </tr>

                            <tr>
                                <th>Shipping Phone:</th>
                                <th>{{ $order->phone }}</th>
                            </tr>

                            <tr>
                                <th>Shipping Email:</th>
                                <th>{{ $order->email }}</th>
                            </tr>

                            <tr>
                                <th>Shipping Address:</th>
                                <th>{{ $order->address }}</th>
                            </tr>


                            <tr>
                                <th>Division:</th>
                                <th>Dhaka</th>
                            </tr>

                            <tr>
                                <th>District:</th>
                                <th>Gazipur</th>
                            </tr>

                            <tr>
                                <th>State :</th>
                                <th>Kaliakair Upazila</th>
                            </tr>

                            <tr>
                                <th>Post Code :</th>
                                <th>700000</th>
                            </tr>

                            <tr>
                                <th>Order Date :</th>
                                <th>{{ $order->date }}</th>
                            </tr>

                        </table>

                    </div>

                </div>
            </div>


            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Order Details
                            <span class="text-danger">Invoice : {{ $order->invoice_no }} </span>
                        </h4>
                    </div>
                    <hr>
                    <div class="card-body">
                        <table class="table" style="background:#F4F6FA;font-weight: 600;">
                            <tr>
                                <th> Name :</th>
                                <th>User</th>
                            </tr>

                            <tr>
                                <th>Phone :</th>
                                <th>{{ $order->phone }}</th>
                            </tr>

                            <tr>
                                <th>Payment Type:</th>
                                <th>{{ $order->payment_method }}</th>
                            </tr>


                            <tr>
                                <th>Transx ID:</th>
                                <th>{{ $order->transaction_id }}</th>
                            </tr>

                            <tr>
                                <th>Invoice:</th>
                                <th class="text-danger">{{ $order->invoice_no }}</th>
                            </tr>

                            <tr>
                                <th>Order Amonut:</th>
                                <th>{{ $order->amount }}</th>
                            </tr>

                            <tr>
                                <th>Order Status:</th>
                                <th><span class="badge bg-danger" style="font-size: 15px;">{{ $order->status }}</span></th>
                            </tr>


                            <tr>
                                <th> </th>
                                <th>
                                    {{-- {{ dd($order->id) }} --}}


                                    @if(isset($order) && !empty($order->id) && $order->status == 'pending')
                                        <a href="{{ route('change.order.confirmed', $order->id) }}" class="btn btn-warning">
                                            Confirm Order
                                        </a>
                                    @elseif($order->status == 'confirmed')
                                        <a href="{{ route('change.order.processing', $order->id) }}" class="btn btn-success">
                                            Processing Order
                                        </a>
                                    @elseif($order->status == 'processing')
                                        <a href="{{ route('change.order.delivered', $order->id) }}" class="btn btn-primary">
                                            Delivered Order
                                        </a>
                                    @endif








                                </th>
                            </tr>

                        </table>

                    </div>

                </div>
            </div>
        </div>






        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-1">
            <div class="col">
                <div class="card">


                    <div class="table-responsive">
                        <table class="table" style="font-weight: 600;">
                            <tbody>
                                <tr>
                                    <td class="col-md-1">
                                        <label>Image </label>
                                    </td>
                                    <td class="col-md-2">
                                        <label>Product Name </label>
                                    </td>
                                    <td class="col-md-2">
                                        <label>Vendor Name </label>
                                    </td>
                                    <td class="col-md-2">
                                        <label>Product Code </label>
                                    </td>
                                    <td class="col-md-1">
                                        <label>Color </label>
                                    </td>
                                    <td class="col-md-1">
                                        <label>Size </label>
                                    </td>
                                    <td class="col-md-1">
                                        <label>Quantity </label>
                                    </td>

                                    <td class="col-md-3">
                                        <label>Price </label>
                                    </td>

                                </tr>


                                <tr>
                                    <td class="col-md-1">
                                        <label><img
                                                src="https://digi-poly.id.vn/upload/products/thambnail/1740389864437655.webp"
                                                style="width:50px; height:50px;"> </label>
                                    </td>
                                    <td class="col-md-2">
                                        <label>Color Block Men Round Neck Pink T-Shirt</label>
                                    </td>
                                    <td class="col-md-2">
                                        <label>Nest Food.,Ltd </label>
                                    </td>

                                    <td class="col-md-2">
                                        <label>3453451 </label>
                                    </td>
                                    <td class="col-md-1">
                                        <label>Red </label>
                                    </td>

                                    <td class="col-md-1">
                                        <label>Small </label>
                                    </td>
                                    <td class="col-md-1">
                                        <label>2 </label>
                                    </td>

                                    <td class="col-md-3">
                                        <label>$400.00 <br> Total = $800 </label>
                                    </td>

                                </tr>

                            </tbody>
                        </table>

                    </div>



                </div>
            </div>

        </div>






    </div>

@endsection