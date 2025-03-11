@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content"> 
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Add Coupon </div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item">
                        <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Coupon</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto"></div>
    </div>
    <!--end breadcrumb-->

    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <!-- Form to Add Coupon -->
                            <form id="myForm" method="post" action="{{ route('add.coupon') }}">
                                @csrf

                                <!-- Coupon Name -->
                                <div class="row mb-3">
                                    <label for="coupon_name" class="col-sm-3 col-form-label">Coupon Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="coupon_name" id="coupon_name" class="form-control" />
                                    </div>
                                </div>

                                <!-- Coupon Discount -->
                                <div class="row mb-3">
                                    <label for="coupon_discount" class="col-sm-3 col-form-label">Coupon Discount (%)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="coupon_discount" id="coupon_discount" class="form-control" min="0" max="100" />
                                    </div>
                                </div>

                                <!-- Coupon Validity -->
                                <div class="row mb-3">
                                    <label for="coupon_validity" class="col-sm-3 col-form-label">Coupon Validity Date</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="coupon_validity" id="coupon_validity" class="form-control" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}" />
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <button type="submit" class="btn btn-primary px-4">Save Changes</button>
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

<script type="text/javascript">
    $(document).ready(function () {
        $('#myForm').validate({
            rules: {
                coupon_name: {
                    required: true,
                },
                coupon_discount: {
                    required: true,
                    number: true,
                    min: 0,
                    max: 100
                },
                coupon_validity: {
                    required: true,
                    date: true
                },
            },
            messages: {
                coupon_name: {
                    required: 'Please Enter Coupon Name',
                },
                coupon_discount: {
                    required: 'Please Enter Coupon Discount',
                    number: 'Please enter a valid number',
                    min: 'Discount cannot be less than 0%',
                    max: 'Discount cannot exceed 100%'
                },
                coupon_validity: {
                    required: 'Please Enter Coupon Validity Date',
                    date: 'Please enter a valid date'
                },
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element) {
                $(element).removeClass('is-invalid');
            },
        });
    });
</script>
@endsection
