@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">All Return Order</div>
        <div class="ms-auto">
            <a href="{{ route('return.store') }}" class="btn btn-primary">Add New Return Order</a>
        </div>
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
                        @forelse ($returnOrders as $key => $returnOrder)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $returnOrder->created_at->format('d M Y') }}</td>
                                <td>{{ $returnOrder->order->invoice_no }}</td>
                                <td>${{ $returnOrder->order->total_amount }}</td>
                                <td>{{ $returnOrder->order->payment_type }}</td>
                                <td>
                                    <span class="badge rounded-pill bg-danger">{{ $returnOrder->status }}</span>
                                </td>
                                <td>{{ $returnOrder->reason }}</td>
                                <td>
                                    <a href="{{ route('return.order.details', $returnOrder->order->id) }}" class="btn btn-info" title="Details">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <form action="{{ route('return.process', $returnOrder->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-success">Approve</button>
                                    </form>
                                    <form action="{{ route('return.delete', $returnOrder->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No return orders found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
