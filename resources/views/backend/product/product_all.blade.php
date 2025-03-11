@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">All Product</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">All Product  <span class="badge rounded-pill bg-danger"> {{ count($show_products) }} </span> </li>
				</ol>
			</nav>
		</div>
		<div class="ms-auto">
			<div class="btn-group">
<a href="{{route('add.product')}}" class="btn btn-primary">Add Product</a> 				 
			</div>
		</div>
	</div>
	<!--end breadcrumb-->
 
	<hr/>
	
	@if ( session('errdetele'))
		<div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			<p class="m-0"><strong>cảnh báo: </strong>{{ session('errdetele') }}</p>
		</div>
	@endif

	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
<tr>
	<th>Sl</th>
	<th>Image </th>
	<th>Product Name </th>
	<th>Price </th>
	<th>QTY </th>
	<th>Discount </th>
	<th>Status </th> 
	<th>Action</th> 
</tr>
</thead>
<tbody>




	@foreach ($show_products as $key => $value)
		
	<tr>
		<td> {{ $key + 1 }} </td>				
		<td> <img src="{{ asset($value->product_thumnail)}}" style="width: 70px; height:40px;" >  </td>
		<td>{{ $value->product_name }}</td>
		<td>{{ $value->selling_price }}</td>
		<td>{{ $value->product_qty }}</td>

		<td>
			@if (!empty($value->discount_price))
				<span class="badge rounded-pill bg-danger"> {{ ($value->discount_price / $value->selling_price) * 100 }}% </span>
			@else
				<span class="badge rounded-pill bg-info">No Discount</span>
			@endif
		</td>
		<td> 			
			@if ($value->status == 0)
				<span class="badge rounded-pill bg-success">Normal</span>
			@elseif ($value->status == 1)
				<span class="badge rounded-pill bg-danger">Hot Deals</span>
			@elseif ($value->status == 2)
				<span class="badge rounded-pill bg-info">Featured</span>
			@elseif ($value->status == 3)
				<span class="badge rounded-pill bg-primary">Special Offer</span>
			@elseif ($value->status == 4)
				<span class="badge rounded-pill bg-primary">Special Deals</span>
			@else
				<span class="badge rounded-pill bg-secondary">Inactive</span>
			@endif
		</td>
		
		<td>

			
	<a href="{{ route('edit.product', $value->id) }}" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

	<a href="{{ route('delete.product', $value->id) }}" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
	<a href="#" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

	<a href="{{ route('inactive.product', $value->id) }}" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

		</td> 
	</tr>

	@endforeach






</tbody>
<tfoot>
<tr>
	<th>Sl</th>
	<th>Image </th>
	<th>Product Name </th>
	<th>Price </th>
	<th>QTY </th>
	<th>Discount </th>
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