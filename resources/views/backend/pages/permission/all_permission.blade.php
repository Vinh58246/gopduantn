@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">All Permission</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">All Permission</li>
				</ol>
			</nav>
		</div>
		<div class="ms-auto">
			<div class="btn-group">
<a href="{{route('add.permission')}}" class="btn btn-primary">Add Permission</a> 				 
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
	<th>Permission Name </th>
	<th>Group Name </th>
	<th>Action</th> 
</tr>
</thead>
<tbody>

<tr>
	<td> 1 </td>
	<td>brand.menu</td>
	<td>brand</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 2 </td>
	<td>brand.list</td>
	<td>brand</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 3 </td>
	<td>brand.add</td>
	<td>brand</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 4 </td>
	<td>brand.edit</td>
	<td>brand</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 5 </td>
	<td>brand.delete</td>
	<td>brand</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 6 </td>
	<td>cat.menu</td>
	<td>category</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 7 </td>
	<td>category.list</td>
	<td>category</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 8 </td>
	<td>category.add</td>
	<td>category</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 9 </td>
	<td>category.edit</td>
	<td>category</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 10 </td>
	<td>category.delete</td>
	<td>category</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 11 </td>
	<td>subcategory.menu</td>
	<td>subcategory</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 12 </td>
	<td>subcategory.list</td>
	<td>subcategory</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 13 </td>
	<td>subcategory.add</td>
	<td>subcategory</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 14 </td>
	<td>subcategory.edit</td>
	<td>subcategory</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 15 </td>
	<td>subcategory.delete</td>
	<td>subcategory</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 16 </td>
	<td>product.menu</td>
	<td>product</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 17 </td>
	<td>product.list</td>
	<td>product</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 18 </td>
	<td>product.add</td>
	<td>product</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 19 </td>
	<td>product.edit</td>
	<td>product</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 20 </td>
	<td>product.delete</td>
	<td>product</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 21 </td>
	<td>slider.menu</td>
	<td>slider</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 22 </td>
	<td>slider.list</td>
	<td>slider</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 23 </td>
	<td>slider.add</td>
	<td>slider</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 24 </td>
	<td>slider.edit</td>
	<td>slider</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 25 </td>
	<td>slider.delete</td>
	<td>slider</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 26 </td>
	<td>ads.menu</td>
	<td>ads</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 27 </td>
	<td>ads.list</td>
	<td>ads</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 28 </td>
	<td>ads.add</td>
	<td>ads</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 29 </td>
	<td>ads.edit</td>
	<td>ads</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 30 </td>
	<td>ads.delete</td>
	<td>ads</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 31 </td>
	<td>coupon.menu</td>
	<td>coupon</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 32 </td>
	<td>coupon.list</td>
	<td>coupon</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 33 </td>
	<td>coupon.add</td>
	<td>coupon</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 34 </td>
	<td>coupon.edit</td>
	<td>coupon</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 35 </td>
	<td>coupon.delete</td>
	<td>coupon</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 36 </td>
	<td>area.menu</td>
	<td>area</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 37 </td>
	<td>vendor.menu</td>
	<td>vendor</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 38 </td>
	<td>order.menu</td>
	<td>order</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 39 </td>
	<td>order.list</td>
	<td>order</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 40 </td>
	<td>return.order.menu</td>
	<td>return</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 41 </td>
	<td>user.management.menu</td>
	<td>user</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 42 </td>
	<td>review.menu</td>
	<td>review</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 43 </td>
	<td>blog.menu</td>
	<td>blog</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 44 </td>
	<td>site.menu</td>
	<td>setting</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 45 </td>
	<td>role.permission.menu</td>
	<td>role</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 46 </td>
	<td>admin.user.menu</td>
	<td>admin</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 47 </td>
	<td>stock.menu</td>
	<td>stock</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
		
<tr>
	<td> 48 </td>
	<td>report.menu</td>
	<td>report</td>
	
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td> 
</tr>
			 

</tbody>
<tfoot>
<tr>
	<th>Sl</th>
	<th>Permission Name </th>
	<th>Group Name </th>
	<th>Action</th> 
</tr>
</tfoot>
</table>
			</div>
		</div>
	</div>


	 
</div>



@endsection