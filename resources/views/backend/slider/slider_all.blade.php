@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">All Slider</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">All Slider</li>
				</ol>
			</nav>
		</div>
		<div class="ms-auto">
			<div class="btn-group">
<a href="{{route('add.slider')}}" class="btn btn-primary">Add Slider</a> 				 
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
	<th>Slider Title </th>
	<th>Short Title </th>
	<th>Slider Image </th>
	<th>Action</th> 
</tr>
</thead>
<tbody>

<tr>
	<td> 1 </td>
	<td>11this is our slider one title</td>
	<td>11this is our slider one Short title</td>
	<td> <img src="https://digi-poly.id.vn/upload/slider/1740458428862987.png" style="width: 70px; height:40px;" >  </td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 2 </td>
	<td>nice some tiing test in there</td>
	<td>Course Name One</td>
	<td> <img src="https://digi-poly.id.vn/upload/slider/1740458445299745.png" style="width: 70px; height:40px;" >  </td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
			 

</tbody>
<tfoot>
<tr>
	<th>Sl</th>
	<th>Slider Title </th>
	<th>Short Title </th>
	<th>Slider Image </th>
	<th>Action</th>  
</tr>
</tfoot>
</table>
			</div>
		</div>
	</div>


	 
</div>


@endsection