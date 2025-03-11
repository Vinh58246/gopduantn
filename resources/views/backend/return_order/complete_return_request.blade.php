@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Complete Return Order</div>
    </div>

    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Date</th>
                            <th>Invoice</th>
                            <th>Amount</th>
                            <th>Payment</th>
                            <th>State</th>
                            <th>Reason</th>
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($completedReturns as $key => $returnOrder)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $returnOrder->created_at->format('d M Y') }}</td>
                                <td>{{ $returnOrder->order->invoice_no }}</td>
                                <td>${{ $returnOrder->order->total_amount }}</td>
                                <td>{{ $returnOrder->order->payment_type }}</td>
                                <td>
                                    <span class="badge rounded-pill bg-success">Success</span>
                                </td>
                                <td>{{ $returnOrder->reason }}</td>
                                <td>
                                    <a href="{{ route('return.order.details', $returnOrder->order->id) }}" class="btn btn-info" title="Details">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td> 
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
