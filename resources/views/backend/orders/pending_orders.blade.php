@extends('admin.admin_dashboard')
@section('admin')
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">All Pending Order</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">All Pending Order</li>
					</ol>
				</nav>
			</div>
			<div class="ms-auto">
				<div class="btn-group">

				</div>
			</div>
		</div>
		<!--end breadcrumb-->

		<hr />
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>Sl</th>
								<th>Date </th>
								<th>Invoice </th>
								<th>Amount </th>
								<th>Payment </th>
								<th>State </th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>

							@foreach ($orders as $order)
								<tr>
									<td> {{ $order->id }} </td>
									<td>{{ $order->date }}</td>
									<td>{{ $order->invoice_no }}</td>
									<td>${{ $order->amount }}</td>
									<td>{{ $order->payment_method }}</td>
									<td> <span class="badge rounded-pill bg-success"> {{ $order->status }}</span></td>

									<td>
										<a href="{{ route('admin.order.details', $order->id) }}" class="btn btn-info"
											title="Details">
											<i class="fa fa-eye"></i>
										</a>


									</td>
								</tr>
							@endforeach


							{{-- <tr>
								<td> 2 </td>
								<td>26 February 2025</td>
								<td>EOS51556421</td>
								<td>$980.00</td>
								<td>Cash On Delivery</td>
								<td> <span class="badge rounded-pill bg-success"> pending</span></td>

								<td>
									<a href="{{route('admin.order.details')}}" class="btn btn-info" title="Details"><i
											class="fa fa-eye"></i> </a>


								</td>
							</tr>

							<tr>
								<td> 3 </td>
								<td>08 February 2025</td>
								<td>EOS21994871</td>
								<td>$2260.00</td>
								<td>Cash On Delivery</td>
								<td> <span class="badge rounded-pill bg-success"> pending</span></td>

								<td>
									<a href="{{route('admin.order.details')}}" class="btn btn-info" title="Details"><i
											class="fa fa-eye"></i> </a>


								</td>
							</tr>

							<tr>
								<td> 4 </td>
								<td>06 September 2022</td>
								<td>EOS66716188</td>
								<td>$520.00</td>
								<td>Cash On Delivery</td>
								<td> <span class="badge rounded-pill bg-success"> pending</span></td>

								<td>
									<a href="{{route('admin.order.details')}}" class="btn btn-info" title="Details"><i
											class="fa fa-eye"></i> </a>


								</td>
							</tr>

							<tr>
								<td> 5 </td>
								<td>06 September 2022</td>
								<td>EOS95189836</td>
								<td>$320.00</td>
								<td>Cash On Delivery</td>
								<td> <span class="badge rounded-pill bg-success"> pending</span></td>

								<td>
									<a href="{{route('admin.order.details')}}" class="btn btn-info" title="Details"><i
											class="fa fa-eye"></i> </a>


								</td>
							</tr>

							<tr>
								<td> 6 </td>
								<td>22 August 2022</td>
								<td>EOS85742385</td>
								<td>$1520.00</td>
								<td>Stripe</td>
								<td> <span class="badge rounded-pill bg-success"> pending</span></td>

								<td>
									<a href="{{route('admin.order.details')}} class=" btn btn-info" title="Details"><i
											class="fa fa-eye"></i> </a>


								</td>
							</tr> --}}


						</tbody>
						<tfoot>
							<tr>
								<th>Sl</th>
								<th>Date </th>
								<th>Invoice </th>
								<th>Amount </th>
								<th>Payment </th>
								<th>State </th>
								<th>Action</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>



	</div>



@endsection