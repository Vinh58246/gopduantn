@extends('admin.admin_dashboard')
@section('admin')

<link href="{{asset('adminbackend/plugins_rich_text/libs/quill/quill.snow.css')}}" rel="stylesheet" type='text/css'/>


<style>
	.cursor_point{
		cursor: pointer;
	}

	
/* -------------------------------- drop drap file----------------------------------------------------- */
	.drop-zone {
		/* max-width: 200px; */
		min-height: 300px;
		/* padding: 25px; */
		display: flex;
		align-items: center;
		justify-content: center;
		text-align: center;
		font-family: "Quicksand", sans-serif;
		font-weight: 500;
		font-size: 20px;
		cursor: pointer;
		color: #cccccc;
		border: 2px dashed #d4d4d4;
		border-radius: 10px;
		}
	
		.drop-zone--over {
		border-style: solid;
		}
	
		.drop-zone__input {
		display: none;
		}
	
		.drop-zone__thumb {
		width: 100%;
		height: 100%;
		border-radius: 10px;
		overflow: hidden;
		background-color: #cccccc;
		background-size: cover;
		position: relative;
		}
	
		.drop-zone__thumb::after {
		content: attr(data-label);
		position: absolute;
		bottom: 0;
		left: 0;
		width: 100%;
		padding: 5px 0;
		color: #ffffff;
		background: rgba(0, 0, 0, 0.75);
		font-size: 14px;
		text-align: center;
		}



		
	.drop-avatar {
		height: 75px;
		width: 75px;
		display: flex;
		align-items: center;
		justify-content: center;
		text-align: center;
		font-family: "Quicksand", sans-serif;
		font-weight: 500;
		font-size: 20px;
		cursor: pointer;
		color: #cccccc;
		border: 2px dashed #d4d4d4;
		border-radius: 50%;
		}
	
		.drop-avatar--over {
		border-style: solid;
		}
	
		.drop-avatar__input {
		display: none;
		}
	
		.drop-avatar__thumb {
		width: 100%;
		height: 100%;
		border-radius: 50%;
		overflow: hidden;
		background-color: #cccccc;
		background-size: cover;
		}
	.custom-file-upload{
		border: 2px dashed #d4d4d4;
		border-radius: 10px;
		width: 100%;
		height: 200px;
		display: inline-block;
		padding: 6px 12px;
		cursor: pointer;
		display: flex;
		align-items: center;
		justify-content: center;

	}
	.frame-previews{
		padding: 10px;
		border: 2px solid #d4d4d4;
		border-radius: 5px;
		width: 100%;
		display: flex;
		align-items: center;
		justify-content: space-between;
	}
	.img-preview{
		width: 50px;
		margin-right: 20px;
	}
	.parameter-preview{
		width: 100%;
	}
	.icon-remove{
		font-size: xx-large;
		cursor: pointer;
	}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="page-content">

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Add New Product</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add New Product</li>
							</ol>
						</nav>
					</div>
					 
				</div>
				<!--end breadcrumb-->

<div class="card">
  <div class="card-body p-4">
	  <h5 class="card-title">Add New Product</h5>
	  <hr/>


		@if ($errors->any())
			@foreach ($errors->all() as $error)
				<div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					<p class="m-0"><strong>cảnh báo: </strong>{{ $error }}</p>
				</div>
			@endforeach
		@endif

	  
<form id="myForm" method="post" action="{{route('store.product')}}" enctype="multipart/form-data" >
	@csrf
       <div class="form-body mt-4">
	    <div class="row mb-3">
		   <div class="col-lg-8">
           <div class="border border-3 p-4 rounded">
			

			<div class="form-group mb-3">
				<label for="inputProductTitle" class="form-label">Product Name <span class="text-danger">*</span></label>
				<input type="text" name="product_name" value="{{ old('product_name') }}" class="form-control" id="inputProductTitle" placeholder="Enter product title">
			  </div>

            <div class="mb-3">
				<label for="inputProductTitle" class="form-label">Product Tags</label>
				<input type="text" id="tags_pd" name="product_tags" class="form-control visually-hidden" data-role="tagsinput" value="{{ old('product_tags') != '' ?  old('product_tags') : 'new product,top product'}}">
			  </div>

			  

			  <div class="form-group mb-3">
				<label for="inputProductDescription" class="form-label">Short Description <span class="text-danger">*</span></label>
				<textarea name="short_descp" class="form-control" id="inputProductDescription" rows="3">{{ old('short_descp') }}</textarea>
			  </div>

			  <div class="mb-3">
				<label for="product-description" class="form-label">Long Description <span class="text-danger">*</span></label>
				<div id="snow-editor" style="height: 150px;"></div> <!-- end Snow-editor-->
				<input type="hidden" name="detailed_description" value="{{ old('detailed_description') }}"  id="conten">
			</div>



  <div class="form-group mb-3">
				<label for="inputProductTitle" class="form-label">Main Thambnail <span class="text-danger">*</span></label>
				<input name="product_thambnail" class="form-control" type="file" id="formFile" onChange="mainThamUrl(this)" accept="image/*">

				<img src="" id="mainThmb" />
			  </div>



			<div class="form-group mb-5">
				<label for="inputProductTitle" class="form-label">Multiple Image <span class="text-danger">*</span></label>
				<input class="form-control" type="file" name="list_image[]" onchange="docfile()" id="upload" multiple accept="image/*">
				<div id="preview-files"></div>
			</div>

			  <div class="mb-3">
				<label for="inputProductTitle" class="form-label">Biến thể sản phẩm</label>
				<div class="d-flex align-items-center">
					<label for="" class="me-2">Tạo mới</label>
					<!-- nút tạo mới tên biến thể -->
					<div class="cursor_point badge rounded-pill bg-primary d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;" id="btncreatename">
						<i style="font-size: small; font-weight: 900;" class="lni lni-plus"></i>
					</div>

				</div>
				<!-- nơi để hiển thị ra input để nhập tên biến thể -->
				<div id="shownamenewvariant">

				</div>

				<!-- nơi hiển thị ra nút tạo biến thể theo tên -->
				<div id="showbtncreatevariant" class="d-flex justify-content-center">

				</div>
				<div id="bienthe">
					<div id="showinputvaluevariant">

					</div>
					<div id="showbtnvaluevariant">

					</div>
				   
				</div>
				{{-- <input type="text" name="product_size" class="form-control visually-hidden" data-role="tagsinput" value="Small,Midium,Large"> --}}
			  </div>

			 
            </div>
		   </div>
		   <div class="col-lg-4">
			<div class="border border-3 p-4 rounded">
              <div class="row g-3">

				<div class="form-group col-md-6">
					<label for="inputPrice" class="form-label">Product Price <span class="text-danger">*</span></label>
					<input type="text" name="selling_price" value="{{ old('selling_price') }}" class="form-control" id="inputPrice" placeholder="00.00">
				  </div>
				  <div class="col-md-6">
					<label for="inputCompareatprice" class="form-label">Discount Price </label>
					<input type="text" name="discount_price" value="{{ old('discount_price') }}" class="form-control" id="inputCompareatprice" placeholder="00.00">
				  </div>
				  <div class="form-group col-md-6">
					<label for="inputCostPerPrice" class="form-label">Product Code <span class="text-danger">*</span></label>
					<input type="text" name="product_code" value="{{ old('product_code') }}" class="form-control" id="inputCostPerPrice" placeholder="00.00">
				  </div>
				  <div class="form-group col-md-6">
					<label for="inputStarPoints" class="form-label">Product Quantity <span class="text-danger">*</span></label>
					<input type="text" name="product_qty" value="{{ old('product_qty') }}" class="form-control" id="inputStarPoints" placeholder="00.00">
				  </div>


				  <div class="form-group col-12">
					<label for="inputProductType" class="form-label">Product Brand <span class="text-danger">*</span></label>
					<select name="brand_id" class="form-select" id="inputProductType">
						<option value="">chọn nhánh</option>
							@foreach ($show_brands as $i)
								<option value="{{$i->id}}">{{$i->brand_name}}</option>
							@endforeach
						</select>
				  </div>

				  <div class="form-group col-12">
					<label for="inputVendor" class="form-label">Product Category <span class="text-danger">*</span></label>
					<select name="category_id" onchange="select_categorymain(this)" class="form-select">
						<option value="">chọn danh mục</option>
						@foreach ($show_categories as $i)
						<option value="{{$i->id}}">{{$i->category_name}}</option>
					@endforeach
					</select>
				  </div>

				  <div class="form-group col-12">
					<label for="inputCollection" class="form-label">Product SubCategory <span class="text-danger">*</span></label>
					<select name="subcategory_id" class="form-select" id="subcate">
						 
					  </select>
				  </div>


				  <div class="form-group col-12">
					<label for="inputCollection" class="form-label">Select Vendor</label>
					<select name="vendor_id" class="form-select" id="inputCollection">
						<option></option>
						<option value="2">Nest Food.,Ltd</option>
						<option value="14">Walton</option>
						<option value="15">Sony</option>
						<option value="16">Expart Fashion</option>
						<option value="22">halal</option>
						<option value="24">FOUR-TVP</option>
					</select>
				  </div>


				  <div class="form-group col-12">
					<label for="inputCollection" class="form-label">Select Status</label>
					<select name="status" class="form-select" id="inputCollection">
						<option value="0" selected>Normal</option>
						<option value="1">Hot Deals</option>
						<option value="2">Featured</option>
						<option value="3">Special Offer</option>
						<option value="4">Special Deals</option>
					</select>
				  </div>


				  <div class="col-12">

	 {{-- <div class="row g-3">

	 <div class="col-md-6">	
    <div class="form-check">
 <input class="form-check-input" name="hot_deals" type="checkbox" value="1" id="flexCheckDefault">
			<label class="form-check-label" for="flexCheckDefault"> Hot Deals</label>
		</div>
	</div>

	<div class="col-md-6">	
    <div class="form-check">
			<input class="form-check-input" name="featured" type="checkbox" value="1" id="flexCheckDefault">
			<label class="form-check-label" for="flexCheckDefault">Featured</label>
		</div>
	</div>




<div class="col-md-6">	
    <div class="form-check">
			<input class="form-check-input" name="special_offer" type="checkbox" value="1" id="flexCheckDefault">
			<label class="form-check-label" for="flexCheckDefault">Special Offer</label>
		</div>
	</div>


	<div class="col-md-6">	
    <div class="form-check">
			<input class="form-check-input" name="special_deals" type="checkbox" value="1" id="flexCheckDefault">
			<label class="form-check-label" for="flexCheckDefault">Special Deals</label>
		</div>
	</div>



		</div> <!-- // end row  --> --}}
					 
				  </div>

<hr>


				  <div class="col-12">
					  <div class="d-grid">
					  	<input type="submit" id="save_product" class="btn btn-primary px-4" value="Save" />
						  
					  </div>
				  </div>
			  </div> 
		  </div>
		  </div>
	   </div><!--end row-->


	   <div id="showframeattributesvariant">

	   </div>
	</div>
  </div>
 
</form>
</div>
<input type="hidden" id="click"/>
			</div>

<script src="{{asset('adminbackend/plugins_rich_text/libs/quill/quill.min.js')}}"></script>
<script src="{{asset('adminbackend/plugins_rich_text/js/pages/add-product.init.js')}}"></script>

{{-- <script type="text/javascript">
	var save_product = document.getElementById('save_product');
	save_product.addEventListener('click',() => {

	});
</script> --}}






<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                product_name: {
                    required : true,
                }, 
                 short_descp: {
                    required : true,
                }, 
                 product_thambnail: {
                    required : true,
                }, 
				list_image: {
                    required : true,
                }, 
                 selling_price: {
                    required : true,
                },                   
                 product_code: {
                    required : true,
                }, 
                 product_qty: {
                    required : true,
                }, 
                 brand_id: {
                    required : true,
                }, 
                 category_id: {
                    required : true,
                }, 
                 subcategory_id: {
                    required : true,
                }, 
            },
            messages :{
                product_name: {
                    required : 'Please Enter Product Name',
                },
                short_descp: {
                    required : 'Please Enter Short Description',
                },
                product_thambnail: {
                    required : 'Please Select Product Thambnail Image',
                },
                list_image: {
                    required : 'Please Select Product Multi Image',
                },
                selling_price: {
                    required : 'Please Enter Selling Price',
                }, 
                product_code: {
                    required : 'Please Enter Product Code',
                },
                 product_qty: {
                    required : 'Please Enter Product Quantity',
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



<script type="text/javascript">
	function mainThamUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
</script>


<script> 
 
  $(document).ready(function(){
   $('#multiImg').on('change', function(){ //on file input change
      if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
          var data = $(this)[0].files; //this file data
           
          $.each(data, function(index, file){ //loop though each file
              if(/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file.type)){ //check supported file type
                  var fRead = new FileReader(); //new filereader
                  fRead.onload = (function(file){ //trigger function on successful read
                  return function(e) {
                      var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(100)
                  .height(80); //create image element 
                      $('#preview_img').append(img); //append image to output element
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });
           
      }else{
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
   });
  });
   
  </script>


{{-- xử lý select subcategory --}}
<script type="text/javascript">

	var subcate = document.getElementById('subcate');
	function select_categorymain(e){
		subcate.innerHTML = '';
		if(e.value != ''){
			fetch('http://127.0.0.1:8000/api/categories/'+e.value)
			.then(response => response.json())
			.then(data => {
	
					subcate.innerHTML += `<option>chọn danh mục phụ</option>`;
					for (let i = 0; i < data.data.length; i++) {
						subcate.innerHTML += `<option value="${data.data[i].id}">${data.data[i].category_name}</option>`;
					}
				}) 
			.catch(error => console.error('Lỗi:', error));
		}else{
			subcate.innerHTML = '';
		}
	}
</script>

{{-- đọc mô tả chi tiết --}}
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", () => {
		let framewriting = document.getElementsByClassName("ql-editor");
		let save_product = document.getElementById('save_product');
		let content = document.getElementById("conten");
		save_product.addEventListener("click", () => {
			content.value = framewriting[0].innerHTML;
		});

		if(content.value != ''){
			let click = document.getElementById("click");
			click.addEventListener("click", () => {
				if (framewriting[0]) {
					framewriting[0].innerHTML = content.value;
				}
			});

			setTimeout(() => {
				click.click();
			}, 1000);
		}

	});
</script>


{{-- đọc các ảnh con --}}
<script type="text/javascript">
	function docfile() {
		document.getElementById('preview-files').innerHTML = "";
		var fileSelected = document.getElementById('upload').files;
		if (fileSelected.length > 0) {

			for (let i = 0; i < fileSelected.length; i++) {

				var fileToLoad = fileSelected[i];
				var fileReader = new FileReader();

				// tên file
				const fileName = fileToLoad.name;

				// thông tin kích thước file
				var fileSizeInBytes = fileToLoad.size;
				let fileSizeInMB = '';
				let type = '';
				
				// nếu file có kích thước lớn tính bằng MB ngược lại Là KB
				if(fileSizeInBytes >= 1000000){
					fileSizeInMB = (fileSizeInBytes / (1024 * 1024)).toFixed(2);
					type = 'MB';
					
				}else{
					fileSizeInMB = (fileSizeInBytes / 1024).toFixed(2);
					type = 'KB';
				}

				var srcData = '';
				var newImage = '';
				

				fileReader.readAsDataURL(fileToLoad);
				fileReader.onload = function(fileLoaderEvent) {
					srcData = fileLoaderEvent.target.result;
					newImage = document.createElement('img');
					newImage.classList.add('img-preview');
					newImage.src = srcData;
					// document.getElementById('displayImg').innerHTML += "<div id='khungxoa'>"+newImage.outerHTML+"<span onclick='this.parentElement.remove()'>xoa</span></div>";
					// document.getElementById('displayImg').innerHTML += "<div id='khungxoa"+randomid+i+"'><div class='frame-previews my-2'>"+newImage.outerHTML+"<div class='parameter-preview'><p class='m-0'>"+fileName+"</p><p class='m-0'><strong>"+fileSizeInMB+"</strong> "+type+"</p></div><i class='mdi mdi-close icon-remove' onclick='removeFile("+randomid+i+")'></i></div></div>";
					document.getElementById('preview-files').innerHTML += 
					"<div class='dem' id='khungxoa"
						+i+"'><div class='frame-previews my-2'>"
						+newImage.outerHTML+"<div class='parameter-preview'><p class='m-0'>"
						+fileName+"</p><p class='m-0'><strong>"
						+fileSizeInMB+"</strong> "
						+type+"</p></div><div onclick='removeFile("
						+i+")'><svg class='cursor_point' width='50' height='50' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg' transform='rotate(0 0 0)'><path d='M6.21967 7.28033C5.92678 6.98744 5.92678 6.51256 6.21967 6.21967C6.51256 5.92678 6.98744 5.92678 7.28033 6.21967L11.999 10.9384L16.7176 6.2198C17.0105 5.92691 17.4854 5.92691 17.7782 6.2198C18.0711 6.51269 18.0711 6.98757 17.7782 7.28046L13.0597 11.999L17.7782 16.7176C18.0711 17.0105 18.0711 17.4854 17.7782 17.7782C17.4854 18.0711 17.0105 18.0711 16.7176 17.7782L11.999 13.0597L7.28033 17.7784C6.98744 18.0713 6.51256 18.0713 6.21967 17.7784C5.92678 17.4855 5.92678 17.0106 6.21967 16.7177L10.9384 11.999L6.21967 7.28033Z' fill='#5e656c'/></svg></div></div></div>";
				}
			}

		}
	}
	function removeFile(index) {
		
		const input = document.getElementById('upload');
		const dataTransfer = new DataTransfer();

		// // Chuyển tất cả tệp không phải tệp cần xóa vào DataTransfer
		for (let i = 0; i < input.files.length; i++) {
			console.log(i);
			if (i !== index) {
				dataTransfer.items.add(input.files[i]);
			}
		}
		input.files = dataTransfer.files; 
		// document.getElementById('preview-files').innerHTML = "";
		// document.getElementById('khungxoa' + index).remove();

		docfile();
	}
</script>







{{-- tạo biến thể sản phẩm --}}
  	<script type="text/javascript">
		var btncreatename = document.getElementById('btncreatename');
		var shownamenewvariant = document.getElementById('shownamenewvariant');
		var showinputvaluevariant = document.getElementById('showinputvaluevariant');
		var showbtnvaluevariant = document.getElementById('showbtnvaluevariant');
		var showframeattributesvariant = document.getElementById('showframeattributesvariant');

		// bắt đầu tạo tên biến thể
		btncreatename.addEventListener('click',() => {
			shownamenewvariant.innerHTML += 
				`<div class="soluongname">
					<label for="listdanhsach" class="mt-2 form-label">Chọn tên biến thể</label>
					<div class="d-flex align-items-center">
						<div style="width: 35px; height: 35px; padding-left: 12px;" class="me-2 btn badge rounded-pill bg-danger d-flex align-items-center justify-content-center" onclick="btnremovename(this)">
							<i style="font-size: small; font-weight: bolder;" class="lni lni-minus"></i>
						</div>
						<div class="w-100">
							<input list="danhsach" name="" class="form-control valuenamevariant" placeholder="Chọn biến thể có sẵn hoặc nhập biến thể khác"/>
							<datalist id="danhsach" class="form-label">
								<option value="màu sắc"></option>
								<option value="kích thước"></option>
								<option value="chất liệu"></option>
							</datalist>
						</div>
					</div>
				</div>   `;
			document.getElementById('showbtncreatevariant').innerHTML = 
				`<button onclick="btncreatevariant()" id="idcreatevariant" type="button" class="my-3 btn w-sm btn-primary waves-effect waves-light">Tạo biến thể</button>`;
		});

		// nút xóa tên variant
		function btnremovename(e){
			var soluongname = document.getElementsByClassName('soluongname');
			e.parentElement.parentElement.remove();
			if(soluongname.length == 0){
				var btncreatevariant = document.getElementById('idcreatevariant');
				btncreatevariant.remove();
				showinputvaluevariant.innerHTML = '';
				showbtnvaluevariant.innerHTML = '';
			}
		}

		// mảng chứa tên biến thể
		var namevariant = [];
		// nút tạo mới nhập giá trị
		function btncreatevariant(){
			namevariant = [];
			showinputvaluevariant.innerHTML = '';
			showbtnvaluevariant.innerHTML =  '';
			var valuenamevariant = document.getElementsByClassName('valuenamevariant');
			
			var arraynamecurrent = [];
			// chuyển giá trị trong class name thành mảng tên
			for (let i = 0; i < valuenamevariant.length; i++) {
				// kiểm tra class name rỗng
				if(valuenamevariant[i].value !== ''){
					arraynamecurrent.push(valuenamevariant[i].value);
				}
			}

			// lọc ra các tên giống nhau, thông qua mảng
			var removenamealike = arraynamecurrent.filter((name, index) => arraynamecurrent.indexOf(name) === index);

			// sau khi lọc ra các tên giống nhau thì in input của tên đó ra, để người dùng nhập giá trị
			for (let i = 0; i < removenamealike.length; i++) {
				// if(removenamealike[i] !== ''){
					// hiển thị ra input nhập giá trị thông qua tên
					renderFrameInputVariant(i, removenamealike[i]);
					// sau khi lọc qua rỗng và giống, thì bắt đầu thêm vào mảng
					namevariant.push(removenamealike[i]);
					// ['màu sắc', 'kích thước'];
				// }
				
			}
		}

		// hiển thị chỗ nhập giá trị biến thể
		function renderFrameInputVariant(sothutu, valueinput){
			// tạo input giá trị vàng,đỏ,xanh
			showinputvaluevariant.innerHTML += 
				`<div class="mb-2">
					<label>${ valueinput }</label>
					<input type="text" name='value_variant[]' class="form-control visually-hidden attributesvariant" data-role="tagsinput">
					<input type="hidden" value="${valueinput}" name="name_variant[]">
				</div>`;

			// tạo button gộp các giá trị đã nhập
			showbtnvaluevariant.innerHTML = 
				`<div class="mt-2 d-flex justify-content-center">
					<button onclick="btnCreateAttributeVariant()" type="button" class="btn w-sm btn-primary waves-effect waves-light"><i class="mdi mdi-plus"></i> Tạo giá trị biến thể</button>
				</div>`;

			// do mã script này đã chạy trc đó nên khi có input mới thì input đó ko đc áp dụng script
			// vì vậy cần phải gọi lại script để input có thể thực thi
			let script = document.createElement("script");
			script.src = "{{ asset('adminbackend/assets/plugins/input-tags/js/tagsinput.js') }}";
			script.onload = function() {
				console.log("Dropify script loaded!");
				// Nếu dropify cần khởi tạo
				$('[data-plugins="dropify"]').dropify();
			};
			document.body.appendChild(script);


		}
		


		// ---------------------------- phần nhập thông tin tên, giá trị đã xong ------------------------


		// ---------------------------- xử lý phần logic để gộp các thông tin giá trị đã nhập -----------------------



		var attributevariant = [];

		// nút tạo ra các thuộc tính theo giá trị đã nhập
		function btnCreateAttributeVariant(){


			// lấy giá trị đã nhập từ các class
			var attributesvariant = document.getElementsByClassName('attributesvariant');
			var flag = false;

			for (let i = 0; i < attributesvariant.length; i++) {
				// kiểm tra có input nào rỗng ko, nếu có thì biến flag sẽ thành true, thì id showframeattributesvariant sẽ rỗng, và bị trả về
				if(attributesvariant[i].value == ''){
					flag = true;
				}
			}
			if(flag == true){
				showframeattributesvariant.innerHTML = '';
				return;
			};

			// sau khi kiểm tra không có input nào rỗng thì sẽ thực thi tiếp

			
			// khung lớn bọc các thành phần của biến thể
			showframeattributesvariant.innerHTML = 
				`<div id="showframeattributesvariant">

					<div class="border border-3 rounded">
						<div class="card-body p-3">
							<h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Các thuộc tính của biến thể</h5>
							<div class="col-12 alert alert-warning alert-dismissible fade show" role="alert">
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								<p class="m-0"><strong>Lưu ý: </strong>nếu không nhập số lượng của biến thể đó, thì biến thể đó sẽ không được lưu!</p>
							</div>
							<div id="showframeinputattributesvariant">




								
							</div>
						</div>
					</div>`;
			
			
			attributevariant = [];

			var showframeinputattributesvariant = document.getElementById('showframeinputattributesvariant');
			showframeinputattributesvariant.innerHTML = '';

			// lọc các input giá trị để tạo mảng
			for (let i = 0; i < attributesvariant.length; i++) {
				handleArrayAndObject(attributesvariant[i].value);
			}

			// sau khi đã tạo các giá trị từ chuỗi thành mảng 2 chiều, tiếp theo sẽ xử lý gộp và render
			renderAttributesOfVariant(attributevariant);
			// console.log(attributevariant);

		}

		// xử lý giá trị variant từ chuỗi thành mảng, sau đó đưa mảng đó vào object
		function handleArrayAndObject(value){
			// cắt giá trị variant thành mảng
			var arrayattribute = value.split(',');
			// ['vàng','đỏ','xanh']
			// thêm mảng giá trị vào mảng lớn
			attributevariant.push(arrayattribute);
			// { 
			// 	0 => ['vàng','đỏ','xanh'],
			// 	1 => ['S','M','L']
			// }
			
		}

		// hiển thị các thuộc tính như vàng, S....
		function renderAttributesOfVariant(arrayAttributes){

			// đây là mảng hiện tại
			// { 
			// 	  0 => ['vàng','đỏ','xanh'],
			// 	  1 => ['S','M','L']
			// }

			// bắt đầu gộp các giá trị lại với nhau
			let result = combineArrays(arrayAttributes);

			// mảng sau khi gộp
			// { 
			// 	  0 => ['vàng','S'],
			// 	  1 => ['vàng','M'],
			// 	  2 => ['vàng','L'],
			// 	  3 => ['đỏ','S'],
			// 	  4 => ['đỏ','M'],
			// 	  5 => ['đỏ','L'],
			// 	  6 => ['xanh','S'],
			// 	  7 => ['xanh','M'],
			// 	  8 => ['xanh','L']
			// }
			
			// sau khi đã có mảng gộp rồi thì lọc qua từng dữ liệu để tạo ra input
			for (let i = 0; i < result.length; i++) {
				// console.log(result[i]);

				// khung của 1 option biến thể
				showframeinputattributesvariant.innerHTML +=
					`<div class="mb-3 d-flex justify-content-between">
						

						${columinputvariant(result[i])}

						<div class="mx-2">
							<label for="">giá tiền ( VNĐ )</label>
							<input type="number" name="price_attribute[]" class="form-control mt-2" placeholder="Nhập giá tiền" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "10">
						</div>
						<div class="mx-2">
							<label for="">số lượng <span class="text-danger">*</span></label>
							<input type="number" name="quantity_attribute[]" class="form-control mt-2" placeholder="Nhập số lượng" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "10">
						</div>
						<div class="d-flex align-items-center demattribute">
							<div style="width: 35px; height: 35px; padding-left: 12px;" class="me-2 btn badge rounded-pill bg-danger d-flex align-items-center justify-content-center" onclick="btnremoveattribute(this)">
								<i style="font-size: small; font-weight: bolder;" class="lni lni-minus"></i>
							</div>
						</div>
					</div>`;
			}

		}

		function btnremoveattribute(e){
			var demattribute = document.getElementsByClassName('demattribute');
			e.parentElement.parentElement.remove();
			if(demattribute.length <= 0){
				showframeattributesvariant.innerHTML = '';
			}
		}

		// hiển thị từng giá trị của option biến thể
		function columinputvariant(value){
			var inputname = '';

			// thông qua số tên biến thể để biết số lần lặp để hiển thị input giá trị
			for (let i = 0; i < namevariant.length; i++) {
				inputname += 
				`<div class="mx-2">
					<label for="">${namevariant[i]}</label>
					<input type="text" value="${value[i]}" name="value_attribute[]" class="form-control mt-2" readonly>
				</div>`;
			}

			return inputname;
		}

		// tạo ra các thành phần khác nhau bằng đệ quy
		function combineArrays(arrays, index = 0, current = [], result = []) {
			// Khi đã duyệt hết tất cả các mảng
			if (index === arrays.length) {
				// result.push(current.join(", ")); // Gộp các phần tử thành chuỗi và thêm vào kết quả
				result.push([...current]); // Gộp các phần tử thành mảng
				return result;
			}

			// Duyệt qua từng phần tử của mảng hiện tại
			for (let item of arrays[index]) {
				combineArrays(arrays, index + 1, [...current, item], result);
			}

			return result;
		}
	</script>

@endsection