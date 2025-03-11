@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Publish Review</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Publish Review</li>
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
	<th>Image </th>
	<th>Product </th>
	<th>User </th>
	<th>Comment </th> 
	<th>Rating </th>
	<th>Status </th> 
	<th>Action</th> 
</tr>
</thead>
<tbody>

<tr>
	<td> 1 </td> 
<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740389668728493.webp" style="width: 40px; height:40px;" ></td>
<td>Men Regular Fit Solid Button Down</td>
<td>User</td>
<td>San Pham Qua Tot</td>
	<td>
			<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>

					 </td>
		 <td>
			  <span class="badge rounded-pill bg-warning">Publish</span>
								  </td>
	
	<td>
<a href="" class="btn btn-danger" id="delete">Delete</a>


	</td> 
</tr>
		
<tr>
	<td> 2 </td> 
<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740390741204758.webp" style="width: 40px; height:40px;" ></td>
<td>Portronics POR-1196 Modesk Plus</td>
<td>User</td>
<td>San Pham Tot Qua</td>
	<td>
			<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>

					 </td>
		 <td>
			  <span class="badge rounded-pill bg-warning">Publish</span>
								  </td>
	
	<td>
<a href="" class="btn btn-danger" id="delete">Delete</a>


	</td> 
</tr>
		
<tr>
	<td> 3 </td> 
<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740390277372812.webp" style="width: 40px; height:40px;" ></td>
<td>Canon PIXMA G1010 Single Function</td>
<td>kazi</td>
<td>I have rarely seen any Am...</td>
	<td>
			<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>

					 </td>
		 <td>
			  <span class="badge rounded-pill bg-warning">Publish</span>
								  </td>
	
	<td>
<a href="" class="btn btn-danger" id="delete">Delete</a>


	</td> 
</tr>
		
<tr>
	<td> 4 </td> 
<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740389527616484.webp" style="width: 40px; height:40px;" ></td>
<td>Color Block Men Hooded Neck Red</td>
<td>kazi</td>
<td>So, I like them, and will...</td>
	<td>
			<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-secondary"></i>
					 </td>
		 <td>
			  <span class="badge rounded-pill bg-warning">Publish</span>
								  </td>
	
	<td>
<a href="" class="btn btn-danger" id="delete">Delete</a>


	</td> 
</tr>
		
<tr>
	<td> 5 </td> 
<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740389864437655.webp" style="width: 40px; height:40px;" ></td>
<td>Color Block Men Round Neck Pink T-Shirt</td>
<td>kazi</td>
<td>was a bit worried, as I h...</td>
	<td>
			<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-secondary"></i>
					 </td>
		 <td>
			  <span class="badge rounded-pill bg-warning">Publish</span>
								  </td>
	
	<td>
<a href="" class="btn btn-danger" id="delete">Delete</a>


	</td> 
</tr>
		
<tr>
	<td> 6 </td> 
<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740389864437655.webp" style="width: 40px; height:40px;" ></td>
<td>Color Block Men Round Neck Pink T-Shirt</td>
<td>User</td>
<td>Normal Product haskldhfkl...</td>
	<td>
			<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-secondary"></i>
<i class="bx bxs-star text-secondary"></i>
<i class="bx bxs-star text-secondary"></i>
					 </td>
		 <td>
			  <span class="badge rounded-pill bg-warning">Publish</span>
								  </td>
	
	<td>
<a href="" class="btn btn-danger" id="delete">Delete</a>


	</td> 
</tr>
		
<tr>
	<td> 7 </td> 
<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740389864437655.webp" style="width: 40px; height:40px;" ></td>
<td>Color Block Men Round Neck Pink T-Shirt</td>
<td>User</td>
<td>Stay home &amp; get your dail...</td>
	<td>
			<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-warning"></i>
<i class="bx bxs-star text-secondary"></i>
					 </td>
		 <td>
			  <span class="badge rounded-pill bg-warning">Publish</span>
								  </td>
	
	<td>
<a href="" class="btn btn-danger" id="delete">Delete</a>


	</td> 
</tr>
			 

</tbody>
<tfoot>
<tr>
	 <th>Sl</th>
	<th>Image </th>
	<th>Product </th>
	<th>User </th>
	<th>Comment </th> 
	<th>Rating </th>
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