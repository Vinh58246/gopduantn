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
							<th>STT</th>
							<th>Category Name </th>
							<th>Category Parent </th>
							<th>Category Image </th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ( $categories as $key => $category)
						<tr>
							<td> {{ $key + 1 }} </td>
							<td>{{ $category->category_name }}</td>
							<td>
								<!-- 
								@firstWhere: Dùng tìm danh mục cha trong danh sách $categories dựa trên parent_id của danh mục con
								'Unknown': Danh mục cha đã bị xóa | không tồn tại
								-->
								{{ $category->parent_id ? $categories->firstWhere('id', $category->parent_id)->category_name ?? 'Unknown' : 'Root Category' }}
							</td>
							<td> <img src="{{ asset('upload/category/' . $category->category_image) }}" style="width: 70px; height:40px;"> </td>

							<td>
								<a href="{{ route('edit.category',$category->id) }}" class="btn btn-info">Edit</a>
								<a href="{{ route('delete.category',$category->id) }}" class="btn btn-danger" id="delete">Delete</a>

							</td>
						</tr>

						@endforeach


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