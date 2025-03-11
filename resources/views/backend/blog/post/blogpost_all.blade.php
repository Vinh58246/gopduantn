@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">All Blog Post</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">All Blog Post</li>
				</ol>
			</nav>
		</div>
		<div class="ms-auto">
			<div class="btn-group">
<a href="{{route('add.blog.post')}}" class="btn btn-primary">Add Blog Post</a>
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
	<th>Post Category </th>
	<th>Post Image </th>
	<th>Post Title </th>
	<th>Action</th>
</tr>
</thead>
<tbody>

    @foreach ($blogposts as $key => $post)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $post->category->name ?? 'No Category' }}</td>
        <td>
            <img src="{{ asset($post->image) }}" style="width: 70px; height:40px;">
        </td>
        <td>{{ $post->title }}</td>
        <td>
            <a href="{{ route('edit.blog.post', $post->id) }}" class="btn btn-info">Edit</a>
            <a href="{{ route('delete.blog.post', $post->id) }}" class="btn btn-danger" id="delete">Delete</a>
        </td>
    </tr>
    @endforeach

{{-- <tr>
	<td> 1 </td>
	<td>Clothing</td>
	<td> <img src="https://digi-poly.id.vn/upload/blog/1742527821092388.jpg" style="width: 70px; height:40px;" >  </td>
	<td>1Easy Italian Chicken Dinner I Make Over and Over Again</td>
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td>
</tr>

<tr>
	<td> 2 </td>
	<td>Fresh Fruit</td>
	<td> <img src="https://digi-poly.id.vn/upload/blog/1742527645651585.jpg" style="width: 70px; height:40px;" >  </td>
	<td>1Easy Italian Chicken Dinner I Make Over and Over Again</td>
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td>
</tr>

<tr>
	<td> 3 </td>
	<td>Pet Foods</td>
	<td> <img src="https://digi-poly.id.vn/upload/blog/1742526462113580.png" style="width: 70px; height:40px;" >  </td>
	<td>You to Grow a Home Herb Garden Today</td>
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td>
</tr>

<tr>
	<td> 4 </td>
	<td>Pet Foods</td>
	<td> <img src="https://digi-poly.id.vn/upload/blog/1742526401515749.jpg" style="width: 70px; height:40px;" >  </td>
	<td>9 Tasty Ideas That Will Inspire You to Grow</td>
	<td>
<a href="" class="btn btn-info">Edit</a>
<a href="" class="btn btn-danger" id="delete" >Delete</a>

	</td>
</tr> --}}


</tbody>
<tfoot>
<tr>
	<th>Sl</th>
	<th>Post Category </th>
	<th>Post Image </th>
	<th>Post Title </th>
	<th>Action</th>
</tr>
</tfoot>
</table>
			</div>
		</div>
	</div>



</div>




@endsection
