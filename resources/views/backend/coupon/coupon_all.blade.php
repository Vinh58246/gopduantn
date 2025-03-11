@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">All Coupon </div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">All Coupon</li>
				</ol>
			</nav>
		</div>
		<div class="ms-auto">
			<div class="btn-group">
<a href="{{route('add.coupon')}}" class="btn btn-primary">Add Coupon</a> 				 
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
	<th>Coupon Name </th>
	<th>Coupon Discount  </th>
	<th>Coupon Validity  </th>
	<th>Coupon Status  </th>
	<th>Action</th> 
</tr>
</thead>
<tbody>

<tr>
	<td> 1 </td>
	<td> EASYLEARING</td>
	<td> 30% </td>
	<td> Fri, 28 February 2025  </td>


	<td> 
<span class="badge rounded-pill bg-danger">Invalid</span>

	  </td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>
	</td> 
</tr>
		
<tr>
	<td> 2 </td>
	<td> HAPPYLEARNING</td>
	<td> 20% </td>
	<td> Thu, 20 October 2022  </td>


	<td> 
<span class="badge rounded-pill bg-danger">Invalid</span>

	  </td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>
	</td> 
</tr>
			 

</tbody>
<tfoot>
<tr>
	<th>Sl</th>
	<th>Coupon Name </th>
	<th>Coupon Discount  </th>
	<th>Coupon Validity  </th>
	<th>Coupon Status  </th>
	<th>Action</th> 
</tr>
</tfoot>
</table>
			</div>
		</div>
	</div>


	 
</div>




@endsection