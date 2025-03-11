@extends('admin.admin_dashboard')
@section('admin')

<link href="{{asset('adminbackend/plugins_rich_text/libs/quill/quill.snow.css')}}" rel="stylesheet" type='text/css'/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Add Blog Post </div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Blog Post </li>
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

<div class="col-lg-10">
	<div class="card">
		<div class="card-body">

		<form id="myForm" method="post" action="{{ route('store.blog.post') }}" enctype="multipart/form-data" >
            @csrf

		 <div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Blog Category</h6>
				</div>
				<div class="form-group col-sm-9 text-secondary">
                    {{-- <select name="category_id" class="form-select"> --}}
                        {{-- <option selected disabled>Choose Category</option>
                        @foreach($blogcategory as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach --}}
                        <select name="category_id" class="form-select" id="inputVendor">
                            <option></option>
                                                    <option value="4">Baking material</option>
                                                     <option value="3">Fresh Fruit</option>
                                                     <option value="2">Pet Foods</option>
                                                     <option value="1">Clothing</option>
                                                   </select>
                    {{-- </select> --}}
				</div>
			</div>


			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Blog Post</h6>
				</div>
				<div class="form-group col-sm-9 text-secondary">
					<input type="text" name="post_title" class="form-control" required />
                </div>
				</div>
			</div>


<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Blog Short Decs</h6>
				</div>
				<div class="form-group col-sm-9 text-secondary">
					<textarea name="post_short_description" class="form-control" id="inputProductDescription" rows="3" required></textarea>
				</div>
			</div>


			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Blog Long Decs</h6>
				</div>
				<div class="form-group col-sm-9 text-secondary">
                    <div class="mb-3">
                        <div id="snow-editor" style="height: 150px;"></div> <!-- end Snow-editor-->
                        <input type="hidden" name="detailed_description" id="conten">
                    </div>
				</div>
			</div>






			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Blog Post Image </h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="file" name="post_image" class="form-control"  id="image" required  />
				</div>
			</div>



			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0"> </h6>
				</div>
				<div class="col-sm-9 text-secondary">
					 <img id="showImage" src="{{ asset('adminbackend/images/no_image.jpg') }}" alt="Admin" style="width:100px; height: 100px;"  >
				</div>
			</div>





			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-9 text-secondary">
					<input type="submit" id="save_" class="btn btn-primary px-4" value="Save Changes" />
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


<script src="{{asset('adminbackend/plugins_rich_text/libs/quill/quill.min.js')}}"></script>
<script src="{{asset('adminbackend/plugins_rich_text/js/pages/add-product.init.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                category_name: {
                    required : true,
                },
            },
            messages :{
                category_name: {
                    required : 'Please Enter Category Name',
                },
            },
            errorElement : 'span',
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });

</script>

{{-- đọc mô tả chi tiết --}}
<script type="text/javascript">
	let framewriting = document.getElementsByClassName("ql-editor");
	// let getall = document.getElementById("getall");
	let save_ = document.getElementById('save_');
	let content = document.getElementById("conten");
	save_.addEventListener("click", () => {
		content.value = framewriting[0].innerHTML;
	});
</script>


<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});


</script>



@endsection
