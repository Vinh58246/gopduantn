{{-- @extends('admin.admin_dashboard')
@section('admin')



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Inactive Vendor Details</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Inactive Vendor Details</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">

					</div>
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">

<div class="col-lg-12">
	<div class="card">
		<div class="card-body">

		<form method="post" action="" enctype="multipart/form-data" >
			@csrf

		<input type="hidden" name="id">

			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">User Name</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" class="form-control" name="username" value="ppppppppppppppp"   />
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0"> Shop Name</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="name" class="form-control" value="pppppppppppppppppp" />
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Email</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="email" name="email" class="form-control" value="pppppppppppppppp" />
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Phone </h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="phone" class="form-control" value="0000000000" />
				</div>
			</div>


			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Address</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="address" class="form-control" value="pppppppppppppppp" />
				</div>
			</div>

			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Join</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="vendor_join" class="form-control" value="pppppppppppppppp" />
				</div>
			</div>




			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Info</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<textarea name="vendor_short_info" class="form-control" id="inputAddress2" placeholder="Vendor Info " rows="3">
					ppppppppppppppppppppppp
				</textarea>
				</div>
			</div>



			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Photo</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					 <img id="showImage" src="{{ (!empty($inactiveVendorDetails->photo)) ? url('upload/vendor_images/'.$inactiveVendorDetails->photo):url('upload/no_image.jpg') }}" alt="Vendor" style="width:100px; height: 100px;"  >
				</div>
			</div>




			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-9 text-secondary">
					<input type="submit" class="btn btn-danger px-4" value="Active Vendor" />
				</div>
			</div>
		</div>

		</form>



	</div>




							</div>
						</div>
					</div>
				</div>
			</div>






@endsection --}}


{{-- @extends('admin.admin_dashboard')
@section('admin')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Active Vendor Details</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Active Vendor Details</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">

					</div>
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">

<div class="col-lg-12">
	<div class="card">
		<div class="card-body">

		<form method="post" action="https://digi-poly.id.vn/inactive/vendor/approve" enctype="multipart/form-data" >
			<input type="hidden" name="_token" value="cHFBhXueY8vHhQhgCORwfG26lMpcJoYgw4dl47yb">
		<input type="hidden" name="id" value="2">

			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">User Name</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" class="form-control" name="username" value="vendor"   />
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0"> Shop Name</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="name" class="form-control" value="Nest Food.,Ltd" />
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Email</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="email" name="email" class="form-control" value="vendor@gmail.com" />
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Phone </h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="phone" class="form-control" value="540-025-124553" />
				</div>
			</div>


			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Address</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="address" class="form-control" value="Campbell Ave undefined" />
				</div>
			</div>

			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Join</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="vendor_join" class="form-control" value="2023" />
				</div>
			</div>




			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Info</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<textarea name="vendor_short_info" class="form-control" id="inputAddress2" placeholder="Vendor Info " rows="3">
					Got a smooth, buttery spread in your fridge? Chances are good that it&#039;s Good Chef. This brand made Lionto&#039;s list of the most popular grocery brands across the country.
				</textarea>
				</div>
			</div>



			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Vendor Photo</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					 <img id="showImage" src="https://digi-poly.id.vn/upload/vendor_images/202207212102vendor-16 (1).png" alt="Vendor" style="width:100px; height: 100px;"  >
				</div>
			</div>




			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-9 text-secondary">
					<input type="submit" class="btn btn-danger px-4" value="InActive Vendor" />
				</div>
			</div>
		</div>

		</form>



	</div>




							</div>
						</div>
					</div>
				</div>
			</div>






@endsection --}}

@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Inactive Vendor Details</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Inactive Vendor Details</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{ route('vendor.updateStatus', $vendor->id) }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <div class="col-sm-3"><h6 class="mb-0">User Name</h6></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="username" value="{{ $vendor->vendor_username }}" readonly />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3"><h6 class="mb-0">Shop Name</h6></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="name" class="form-control" value="{{ $vendor->shop_name }}" readonly />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3"><h6 class="mb-0">Vendor Email</h6></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="email" name="email" class="form-control" value="{{ $vendor->vendor_email }}" readonly />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3"><h6 class="mb-0">Vendor Phone</h6></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="phone" class="form-control" value="{{ $vendor->vendor_phone }}" readonly />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3"><h6 class="mb-0">Vendor Address</h6></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="address" class="form-control" value="{{ $vendor->vendor_address }}" readonly />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3"><h6 class="mb-0">Vendor Join</h6></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="vendor_join" class="form-control" value="{{ $vendor->join_date }}" readonly />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3"><h6 class="mb-0">Vendor Info</h6></div>
                                    <div class="col-sm-9 text-secondary">
                                        <textarea name="vendor_short_info" class="form-control" rows="3" readonly>{{ $vendor->vendor_short_info }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3"><h6 class="mb-0">Vendor Photo</h6></div>
                                    <div class="col-sm-9 text-secondary">
                                        <img id="showImage" src="{{ asset($vendor->vendor_image) }}" alt="Vendor" style="width:100px; height: 100px;">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <button type="submit" class="btn btn-danger px-4">Active Vendor</button>

                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
