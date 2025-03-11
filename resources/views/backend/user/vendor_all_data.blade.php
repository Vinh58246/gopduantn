@extends('admin.admin_dashboard')
@section('admin')

	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">All Vendor Data </div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">All Vendor Data</li>
					</ol>
				</nav>
			</div>
			<div class="ms-auto">
				<div class="btn-group">

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
								<th>Image </th>
								<th>Name </th>
								<th>Email </th>
								<th>Phone </th>
								<th>Status </th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>

							@foreach ($vendors as $vdor)
								<tr>
									<td> {{ $vdor->id }} </td>
									<td> <img src="{{ asset('upload/vendor_images/' . $vdor->photo) }}" alt="Admin" alt="Admin"
											class="rounded-circle p-1 bg-primary" width="60" height="60"></td>
									<td> {{ $vdor->name }} </td>
									<td> {{ $vdor->email }} </td>
									<td> {{ $vdor->phone }} </td>

									<td><span class="badge badge-pill bg-success">active</span> </td>

									<td>
										<a href="{{ route('edit.Vendor', $vdor->id) }}" class="btn btn-info">Edit</a>
										<a href="{{ route('delete.Vendor', $vdor->id) }}" class="btn btn-danger"
											id="delete">Delete</a>

									</td>
								</tr>

							@endforeach

							{{-- <tr>
								<td> 2 </td>
								<td> <img
										src="https://digi-poly.id.vn/upload/vendor_images/202208060510walton-logo-6FFC938D01-seeklogo.com.png"
										alt="Admin" class="rounded-circle p-1 bg-primary" width="60" height="60"></td>
								<td> Walton </td>
								<td> walton@gmail.com </td>
								<td> 34343434 </td>

								<td><span class="badge badge-pill bg-success">active</span> </td>

								<td>
									<a href="" class="btn btn-info">Edit</a>
									<a href="" class="btn btn-danger" id="delete">Delete</a>

								</td>
							</tr>

							<tr>
								<td> 3 </td>
								<td> <img
										src="https://digi-poly.id.vn/upload/vendor_images/202208060514sony-vector-logo-small.png"
										alt="Admin" class="rounded-circle p-1 bg-primary" width="60" height="60"></td>
								<td> Sony </td>
								<td> sony@gmail.com </td>
								<td> 018652586552 </td>

								<td><span class="badge badge-pill bg-success">active</span> </td>

								<td>
									<a href="" class="btn btn-info">Edit</a>
									<a href="" class="btn btn-danger" id="delete">Delete</a>

								</td>
							</tr>

							<tr>
								<td> 4 </td>
								<td> <img src="https://digi-poly.id.vn/upload/vendor_images/202208060516logo0000.png"
										alt="Admin" class="rounded-circle p-1 bg-primary" width="60" height="60"></td>
								<td> Expart Fashion </td>
								<td> expart@gmail.com </td>
								<td> 01578522545 </td>

								<td><span class="badge badge-pill bg-success">active</span> </td>

								<td>
									<a href="" class="btn btn-info">Edit</a>
									<a href="" class="btn btn-danger" id="delete">Delete</a>

								</td>
							</tr>

							<tr>
								<td> 5 </td>
								<td> <img src="https://digi-poly.id.vn/upload/no_image.jpg" alt="Admin"
										class="rounded-circle p-1 bg-primary" width="60" height="60"></td>
								<td> halal </td>
								<td> halal@gmail.com </td>
								<td> 4343434 </td>

								<td><span class="badge badge-pill bg-success">active</span> </td>

								<td>
									<a href="" class="btn btn-info">Edit</a>
									<a href="" class="btn btn-danger" id="delete">Delete</a>

								</td>
							</tr>

							<tr>
								<td> 6 </td>
								<td> <img src="https://digi-poly.id.vn/upload/no_image.jpg" alt="Admin"
										class="rounded-circle p-1 bg-primary" width="60" height="60"></td>
								<td> FOUR-TVP </td>
								<td> puugoo002@gmail.com </td>
								<td> 0984004258 </td>

								<td><span class="badge badge-pill bg-success">active</span> </td>

								<td>
									<a href="" class="btn btn-info">Edit</a>
									<a href="" class="btn btn-danger" id="delete">Delete</a>

								</td>
							</tr> --}}


						</tbody>
						<tfoot>
							<tr>
								<th>Sl</th>
								<th>Image </th>
								<th>Name </th>
								<th>Email </th>
								<th>Phone </th>
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