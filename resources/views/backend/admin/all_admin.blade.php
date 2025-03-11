@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">All Admin User</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">All Admin User</li>
				</ol>
			</nav>
		</div>
		<div class="ms-auto">
			<div class="btn-group">
<a href="{{route('add.admin')}}" class="btn btn-primary">Add Admin User</a> 				 
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
	<th>Image </th>
	<th>Name </th>
	<th>Email </th>
	<th>Phone </th>
	<th>Role </th> 
	<th>Action</th> 
</tr>
</thead>
<tbody>

<tr>
	<td> 1 </td> 
	<td> <img src="https://digi-poly.id.vn/upload/admin_images/202209060824download.jpg" style="width: 50px; height:50px;" >  </td>

	<td>ele</td>
	<td>ele@gmail.com</td>
	<td>2323233</td>
	<td>
		   <span class="badge badge-pill bg-danger">Account</span>
					</td> 
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 2 </td> 
	<td> <img src="https://digi-poly.id.vn/upload/no_image.jpg" style="width: 50px; height:50px;" >  </td>

	<td>Manik</td>
	<td>manik@gmail.com</td>
	<td>343434</td>
	<td>
		   <span class="badge badge-pill bg-danger">Admin</span>
					</td> 
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 3 </td> 
	<td> <img src="https://digi-poly.id.vn/upload/admin_images/202209060733male-avatar-profile-picture-purple-member-vector-5351353.jpg" style="width: 50px; height:50px;" >  </td>

	<td>Easy</td>
	<td>easy@gmail.com</td>
	<td>343434</td>
	<td>
		   <span class="badge badge-pill bg-danger">Account</span>
					</td> 
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 4 </td> 
	<td> <img src="https://digi-poly.id.vn/upload/admin_images/202209052208download.jpg" style="width: 50px; height:50px;" >  </td>

	<td>Raju1</td>
	<td>raju@gmail.com</td>
	<td>113434343</td>
	<td>
		   <span class="badge badge-pill bg-danger">CEO</span>
					</td> 
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 5 </td> 
	<td> <img src="https://digi-poly.id.vn/upload/admin_images/202502071831giant-panda-eating_square.avif" style="width: 50px; height:50px;" >  </td>

	<td>Admin</td>
	<td>admin@gmail.com</td>
	<td>343434111</td>
	<td>
		   <span class="badge badge-pill bg-danger">SuperAdmin</span>
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
	<th>Image </th>
	<th>Name </th>
	<th>Email </th>
	<th>Phone </th>
	<th>Role </th> 
	<th>Action</th> 
</tr>
</tfoot>
</table>
			</div>
		</div>
	</div>


	 
</div>



@endsection