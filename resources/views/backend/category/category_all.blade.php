@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">All Category</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">All Category</li>
				</ol>
			</nav>
		</div>
		<div class="ms-auto">
			<div class="btn-group">
				<a href="{{route('add.category')}}" class="btn btn-primary">Add Category</a>
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
							<th>Category Name </th>
							<th>Category Image </th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						<tr>
							<td> 1 </td>
							<td>Fashion</td>
							<td> <img src="https://digi-poly.id.vn/upload/category/1740388456845535.webp" style="width: 70px; height:40px;"> </td>

							<td>
								<a href="" class="btn btn-info">Edit</a>
								<a href="" class="btn btn-danger" id="delete">Delete</a>

							</td>
						</tr>

						<tr>
							<td> 2 </td>
							<td>Electronics</td>
							<td> <img src="https://digi-poly.id.vn/upload/category/1740388410112488.webp" style="width: 70px; height:40px;"> </td>

							<td>
								<a href="" class="btn btn-info">Edit</a>
								<a href="" class="btn btn-danger" id="delete">Delete</a>

							</td>
						</tr>

						<tr>
							<td> 3 </td>
							<td>Sweet Home</td>
							<td> <img src="https://digi-poly.id.vn/upload/category/1740388444682193.webp" style="width: 70px; height:40px;"> </td>

							<td>
								<a href="" class="btn btn-info">Edit</a>
								<a href="" class="btn btn-danger" id="delete">Delete</a>

							</td>
						</tr>

						<tr>
							<td> 4 </td>
							<td>Appliances</td>
							<td> <img src="https://digi-poly.id.vn/upload/category/1740388475103826.webp" style="width: 70px; height:40px;"> </td>

							<td>
								<a href="" class="btn btn-info">Edit</a>
								<a href="" class="btn btn-danger" id="delete">Delete</a>

							</td>
						</tr>

						<tr>
							<td> 5 </td>
							<td>Beauty</td>
							<td> <img src="https://digi-poly.id.vn/upload/category/1740388510925410.webp" style="width: 70px; height:40px;"> </td>

							<td>
								<a href="" class="btn btn-info">Edit</a>
								<a href="" class="btn btn-danger" id="delete">Delete</a>

							</td>
						</tr>

						<tr>
							<td> 6 </td>
							<td>Meat &amp; Fish</td>
							<td> <img src="https://digi-poly.id.vn/upload/category/1740388203907617.png" style="width: 70px; height:40px;"> </td>

							<td>
								<a href="" class="btn btn-info">Edit</a>
								<a href="" class="btn btn-danger" id="delete">Delete</a>

							</td>
						</tr>

						<tr>
							<td> 7 </td>
							<td>Furniture</td>
							<td> <img src="https://digi-poly.id.vn/upload/category/1740388599418960.webp" style="width: 70px; height:40px;"> </td>

							<td>
								<a href="" class="btn btn-info">Edit</a>
								<a href="" class="btn btn-danger" id="delete">Delete</a>

							</td>
						</tr>

						<tr>
							<td> 8 </td>
							<td>Mobiles</td>
							<td> <img src="https://digi-poly.id.vn/upload/category/1740388616630915.webp" style="width: 70px; height:40px;"> </td>

							<td>
								<a href="" class="btn btn-info">Edit</a>
								<a href="" class="btn btn-danger" id="delete">Delete</a>

							</td>
						</tr>

						<tr>
							<td> 9 </td>
							<td>Grocery</td>
							<td> <img src="https://digi-poly.id.vn/upload/category/1740388649576724.webp" style="width: 70px; height:40px;"> </td>

							<td>
								<a href="" class="btn btn-info">Edit</a>
								<a href="" class="btn btn-danger" id="delete">Delete</a>

							</td>
						</tr>

						<tr>
							<td> 10 </td>
							<td>Travel</td>
							<td> <img src="https://digi-poly.id.vn/upload/category/1740388803723655.webp" style="width: 70px; height:40px;"> </td>

							<td>
								<a href="" class="btn btn-info">Edit</a>
								<a href="" class="btn btn-danger" id="delete">Delete</a>

							</td>
						</tr>


					</tbody>
					<tfoot>
						<tr>
							<th>Sl</th>
							<th>Category Name </th>
							<th>Category Image </th>
							<th>Action</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>



</div>





@endsection