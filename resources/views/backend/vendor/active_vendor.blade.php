@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">All Active Vendor</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Active Vendor</li>
				</ol>
			</nav>
		</div>
		<div class="ms-auto">
			<div class="btn-group">

			</div>
		</div>
	</div>
	<!--end breadcrumb-->

	<hr/>
	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
<tr>
	<th>Sl</th>
	<th>Shop Name </th>
	<th>Vendor Username </th>
	<th>Join Date  </th>
	<th>Vendor Email </th>
	<th>Status </th>
	<th>Action</th>
</tr>
</thead>
<tbody>

{{-- <tr>
	<td> 1 </td>
	<td> Nest Food.,Ltd</td>
	<td> vendor</td>
	<td> 2023</td>
	<td> vendor@gmail.com  </td>
	<td> <span class="btn btn-success">active</span>   </td>

	<td>
<a href="{{route('active.vendor.details')}}" class="btn btn-info">Vendor Details</a>


	</td>
</tr> --}}

@foreach($activeVendors as $key => $vendor)
<tr>
    <td>{{ $key + 1 }}</td>
    <td>{{ $vendor->shop_name }}</td>
    <td>{{ $vendor->vendor_username }}</td>
    <td>{{ $vendor->join_date }}</td>
    <td>{{ $vendor->vendor_email }}</td>
    <td><span class="btn btn-success">Active</span></td>
    <td>
        <a href="{{ route('active.vendor.details', $vendor->id) }}" class="btn btn-info">Vendor Details</a>
        

        <!-- Form cập nhật trạng thái -->
        <form action="{{ route('vendor.updateStatus', $vendor->id) }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-warning">Inactive</button>
        </form>
    </td>
</tr>
@endforeach

{{-- <tr>
	<td> 2 </td>
	<td> Walton</td>
	<td> walton</td>
	<td> 2022</td>
	<td> walton@gmail.com  </td>
	<td> <span class="btn btn-success">active</span>   </td>

	<td>
<a href="{{route('active.vendor.details')}}" class="btn btn-info">Vendor Details</a>


	</td>
</tr>

<tr>
	<td> 3 </td>
	<td> Sony</td>
	<td> sony</td>
	<td> 2022</td>
	<td> sony@gmail.com  </td>
	<td> <span class="btn btn-success">active</span>   </td>

	<td>
<a href="{{route('active.vendor.details')}}" class="btn btn-info">Vendor Details</a>


	</td>
</tr>

<tr>
	<td> 4 </td>
	<td> Expart Fashion</td>
	<td> expart</td>
	<td> 2022</td>
	<td> expart@gmail.com  </td>
	<td> <span class="btn btn-success">active</span>   </td>

	<td>
<a href="{{route('active.vendor.details')}}" class="btn btn-info">Vendor Details</a>


	</td>
</tr>

<tr>
	<td> 5 </td>
	<td> halal</td>
	<td> Halal</td>
	<td> 2022</td>
	<td> halal@gmail.com  </td>
	<td> <span class="btn btn-success">active</span>   </td>

	<td>
<a href="{{route('active.vendor.details')}}" class="btn btn-info">Vendor Details</a>


	</td>
</tr>

<tr>
	<td> 6 </td>
	<td> FOUR-TVP</td>
	<td> PuuGoo</td>
	<td> 2025</td>
	<td> puugoo002@gmail.com  </td>
	<td> <span class="btn btn-success">active</span>   </td>

	<td>
<a href="{{route('active.vendor.details')}}" class="btn btn-info">Vendor Details</a>


	</td>
</tr> --}}


</tbody>
<tfoot>
<tr>
	<th>Sl</th>
	<th>Shop Name </th>
	<th>Vendor Username </th>
	<th>Join Date  </th>
	<th>Vendor Email </th>
	<th>Status </th>
	<th>Action</th>
</tr>
</tfoot>
</table>
			</div>
		</div>
	</div>



</div>



@endsection
