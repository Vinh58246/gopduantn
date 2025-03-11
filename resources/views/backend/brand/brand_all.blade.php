@extends('admin.admin_dashboard')
@section('admin')


<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">All Brand</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">All Brand</li>
				</ol>
			</nav>
		</div>
		<div class="ms-auto">
			<div class="btn-group">
				<a href="{{route('add.brand')}}" class="btn btn-primary">Add Brand</a>
			</div>
		</div>
	</div>
	<!--end breadcrumb-->

	<hr />

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
							<th>Brand Name </th>
							<th>Brand Image </th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						@foreach ($show_brands as $i)
						<tr>
							<td> {{$i->id}} </td>
							<td>{{$i->brand_name}}</td>
							<td> <img src="{{asset($i->brand_image)}}" style="width: 70px; height:40px;"> </td>

							<td>
								<a href="{{route('edit.brand', $i->id)}}" class="btn btn-info">Edit</a>
								{{-- @method('DELETE') --}}
								<a href="{{route('delete.brand', $i->id)}}" class="btn btn-danger" id="delete">Delete</a>
							</td>
						</tr>
						@endforeach

					</tbody>
					<tfoot>
						<tr>
							<th>Sl</th>
							<th>Brand Name </th>
							<th>Brand Image </th>
							<th>Action</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>



</div>




@endsection