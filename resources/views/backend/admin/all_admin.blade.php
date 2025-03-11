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
                            <th>Role </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $ad)
                        <tr>
                            <td>{{ $ad->id }}</td>
                            <td>
                                <img src="https://digi-poly.id.vn/upload/admin_images/202209060824download.jpg"
                                    style="width: 50px; height:50px;">
                            </td>
                            <td>{{ $ad->name }}</td>
                            <td>{{ $ad->email }}</td>
                            <td>{{ $ad->phone }}</td>
                            <td><span class="badge badge-pill bg-danger">{{ $ad->role }}</span></td>
                            <td>
                                <a href="{{ route('edit.admin', $ad->id) }}" class="btn btn-info">Edit</a>

                                <!-- Form xóa tài khoản -->
                                <form action="{{ route('delete.admin', $ad->id) }}" method="POST"
                                    style="display: inline-block;"
                                    onsubmit="return confirm('You make sure to delete this account ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
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