@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">All Roles Premission</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">All Roles Premission</li>
				</ol>
			</nav>
		</div>
		<div class="ms-auto">
		 
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
	<th>Roles Name </th> 
	<th>Permission  </th>
	<th>Action</th> 
</tr>
</thead>
<tbody>

<tr>
	<td> 1 </td>
	<td>SuperAdmin</td> 
	<td> 
<span class="badge rounded-pill bg-danger"> brand.menu</span>
<span class="badge rounded-pill bg-danger"> brand.list</span>
<span class="badge rounded-pill bg-danger"> brand.add</span>
<span class="badge rounded-pill bg-danger"> brand.edit</span>
<span class="badge rounded-pill bg-danger"> brand.delete</span>
<span class="badge rounded-pill bg-danger"> cat.menu</span>
<span class="badge rounded-pill bg-danger"> category.list</span>
<span class="badge rounded-pill bg-danger"> category.add</span>
<span class="badge rounded-pill bg-danger"> category.edit</span>
<span class="badge rounded-pill bg-danger"> category.delete</span>
<span class="badge rounded-pill bg-danger"> subcategory.menu</span>
<span class="badge rounded-pill bg-danger"> subcategory.list</span>
<span class="badge rounded-pill bg-danger"> subcategory.add</span>
<span class="badge rounded-pill bg-danger"> subcategory.edit</span>
<span class="badge rounded-pill bg-danger"> subcategory.delete</span>
<span class="badge rounded-pill bg-danger"> product.menu</span>
<span class="badge rounded-pill bg-danger"> product.list</span>
<span class="badge rounded-pill bg-danger"> product.add</span>
<span class="badge rounded-pill bg-danger"> product.edit</span>
<span class="badge rounded-pill bg-danger"> product.delete</span>
<span class="badge rounded-pill bg-danger"> slider.menu</span>
<span class="badge rounded-pill bg-danger"> slider.list</span>
<span class="badge rounded-pill bg-danger"> slider.add</span>
<span class="badge rounded-pill bg-danger"> slider.edit</span>
<span class="badge rounded-pill bg-danger"> slider.delete</span>
<span class="badge rounded-pill bg-danger"> ads.menu</span>
<span class="badge rounded-pill bg-danger"> ads.list</span>
<span class="badge rounded-pill bg-danger"> ads.add</span>
<span class="badge rounded-pill bg-danger"> ads.edit</span>
<span class="badge rounded-pill bg-danger"> ads.delete</span>
<span class="badge rounded-pill bg-danger"> coupon.menu</span>
<span class="badge rounded-pill bg-danger"> coupon.list</span>
<span class="badge rounded-pill bg-danger"> coupon.add</span>
<span class="badge rounded-pill bg-danger"> coupon.edit</span>
<span class="badge rounded-pill bg-danger"> coupon.delete</span>
<span class="badge rounded-pill bg-danger"> area.menu</span>
<span class="badge rounded-pill bg-danger"> vendor.menu</span>
<span class="badge rounded-pill bg-danger"> order.menu</span>
<span class="badge rounded-pill bg-danger"> order.list</span>
<span class="badge rounded-pill bg-danger"> return.order.menu</span>
<span class="badge rounded-pill bg-danger"> user.management.menu</span>
<span class="badge rounded-pill bg-danger"> review.menu</span>
<span class="badge rounded-pill bg-danger"> blog.menu</span>
<span class="badge rounded-pill bg-danger"> site.menu</span>
<span class="badge rounded-pill bg-danger"> role.permission.menu</span>
<span class="badge rounded-pill bg-danger"> admin.user.menu</span>
<span class="badge rounded-pill bg-danger"> stock.menu</span>
<span class="badge rounded-pill bg-danger"> report.menu</span>
		</td> 
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 2 </td>
	<td>Admin</td> 
	<td> 
<span class="badge rounded-pill bg-danger"> product.menu</span>
<span class="badge rounded-pill bg-danger"> product.list</span>
<span class="badge rounded-pill bg-danger"> product.add</span>
<span class="badge rounded-pill bg-danger"> product.edit</span>
<span class="badge rounded-pill bg-danger"> product.delete</span>
<span class="badge rounded-pill bg-danger"> ads.menu</span>
<span class="badge rounded-pill bg-danger"> ads.list</span>
<span class="badge rounded-pill bg-danger"> ads.add</span>
<span class="badge rounded-pill bg-danger"> ads.edit</span>
<span class="badge rounded-pill bg-danger"> ads.delete</span>
<span class="badge rounded-pill bg-danger"> coupon.menu</span>
<span class="badge rounded-pill bg-danger"> coupon.list</span>
<span class="badge rounded-pill bg-danger"> coupon.add</span>
<span class="badge rounded-pill bg-danger"> coupon.edit</span>
<span class="badge rounded-pill bg-danger"> coupon.delete</span>
<span class="badge rounded-pill bg-danger"> area.menu</span>
		</td> 
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 3 </td>
	<td>CEO</td> 
	<td> 
<span class="badge rounded-pill bg-danger"> product.menu</span>
<span class="badge rounded-pill bg-danger"> product.list</span>
<span class="badge rounded-pill bg-danger"> return.order.menu</span>
<span class="badge rounded-pill bg-danger"> review.menu</span>
<span class="badge rounded-pill bg-danger"> site.menu</span>
<span class="badge rounded-pill bg-danger"> report.menu</span>
		</td> 
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 4 </td>
	<td>Account</td> 
	<td> 
<span class="badge rounded-pill bg-danger"> brand.menu</span>
<span class="badge rounded-pill bg-danger"> brand.list</span>
<span class="badge rounded-pill bg-danger"> blog.menu</span>
<span class="badge rounded-pill bg-danger"> stock.menu</span>
<span class="badge rounded-pill bg-danger"> report.menu</span>
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
	<th>Roles Name </th> 
	<th>Permission  </th>
	<th>Action</th> 
</tr>
</tfoot>
</table>
			</div>
		</div>
	</div>


	 
</div>





@endsection