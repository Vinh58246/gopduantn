@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<style type="text/css">
	.form-check-label {
		text-transform: capitalize;
	}
</style>



<div class="page-content"> 
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Add Roles Permission </div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Roles Permission</li>
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

 <form id="myForm" method="post" action=""  >
			<input type="hidden" name="_token" value="AX74D0kgjE5ZpBbqQCsnyV3n5Mq0VL59uplVCD3f">		 
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Roles Name</h6>
				</div>
				<div class="form-group col-sm-9 text-secondary">
				<select name="role_id" class="form-select mb-3" aria-label="Default select example">
				<option selected="">Open this select menu</option>
								<option value="1">SuperAdmin</option>
				 				<option value="2">Admin</option>
				 				<option value="3">CEO</option>
				 				<option value="4">Account</option>
				 			</select>
				</div>
			</div> 


<div class="form-check">
	<input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultAll">
	<label class="form-check-label" for="flexCheckDefaultAll">Permission All</label>
</div>


			<hr>

						<div class="row"><!--  // Start row  -->
				<div class="col-3">
<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 <label class="form-check-label" for="flexCheckDefault">admin</label>
			</div>
				</div>




				<div class="col-9">


	   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="47" id="flexCheckDefault47">
				<label class="form-check-label" for="flexCheckDefault47">admin.user.menu</label>
			</div>
			
		<br>		
				</div>
				
			</div><!--  // end row  -->
						<div class="row"><!--  // Start row  -->
				<div class="col-3">
<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 <label class="form-check-label" for="flexCheckDefault">ads</label>
			</div>
				</div>




				<div class="col-9">


	   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="27" id="flexCheckDefault27">
				<label class="form-check-label" for="flexCheckDefault27">ads.menu</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="28" id="flexCheckDefault28">
				<label class="form-check-label" for="flexCheckDefault28">ads.list</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="29" id="flexCheckDefault29">
				<label class="form-check-label" for="flexCheckDefault29">ads.add</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="30" id="flexCheckDefault30">
				<label class="form-check-label" for="flexCheckDefault30">ads.edit</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="31" id="flexCheckDefault31">
				<label class="form-check-label" for="flexCheckDefault31">ads.delete</label>
			</div>
			
		<br>		
				</div>
				
			</div><!--  // end row  -->
						<div class="row"><!--  // Start row  -->
				<div class="col-3">
<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 <label class="form-check-label" for="flexCheckDefault">area</label>
			</div>
				</div>




				<div class="col-9">


	   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="37" id="flexCheckDefault37">
				<label class="form-check-label" for="flexCheckDefault37">area.menu</label>
			</div>
			
		<br>		
				</div>
				
			</div><!--  // end row  -->
						<div class="row"><!--  // Start row  -->
				<div class="col-3">
<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 <label class="form-check-label" for="flexCheckDefault">blog</label>
			</div>
				</div>




				<div class="col-9">


	   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="44" id="flexCheckDefault44">
				<label class="form-check-label" for="flexCheckDefault44">blog.menu</label>
			</div>
			
		<br>		
				</div>
				
			</div><!--  // end row  -->
						<div class="row"><!--  // Start row  -->
				<div class="col-3">
<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 <label class="form-check-label" for="flexCheckDefault">brand</label>
			</div>
				</div>




				<div class="col-9">


	   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="1" id="flexCheckDefault1">
				<label class="form-check-label" for="flexCheckDefault1">brand.menu</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="2" id="flexCheckDefault2">
				<label class="form-check-label" for="flexCheckDefault2">brand.list</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="3" id="flexCheckDefault3">
				<label class="form-check-label" for="flexCheckDefault3">brand.add</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="4" id="flexCheckDefault4">
				<label class="form-check-label" for="flexCheckDefault4">brand.edit</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="5" id="flexCheckDefault5">
				<label class="form-check-label" for="flexCheckDefault5">brand.delete</label>
			</div>
			
		<br>		
				</div>
				
			</div><!--  // end row  -->
						<div class="row"><!--  // Start row  -->
				<div class="col-3">
<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 <label class="form-check-label" for="flexCheckDefault">category</label>
			</div>
				</div>




				<div class="col-9">


	   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="6" id="flexCheckDefault6">
				<label class="form-check-label" for="flexCheckDefault6">cat.menu</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="8" id="flexCheckDefault8">
				<label class="form-check-label" for="flexCheckDefault8">category.list</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="9" id="flexCheckDefault9">
				<label class="form-check-label" for="flexCheckDefault9">category.add</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="10" id="flexCheckDefault10">
				<label class="form-check-label" for="flexCheckDefault10">category.edit</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="11" id="flexCheckDefault11">
				<label class="form-check-label" for="flexCheckDefault11">category.delete</label>
			</div>
			
		<br>		
				</div>
				
			</div><!--  // end row  -->
						<div class="row"><!--  // Start row  -->
				<div class="col-3">
<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 <label class="form-check-label" for="flexCheckDefault">coupon</label>
			</div>
				</div>




				<div class="col-9">


	   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="32" id="flexCheckDefault32">
				<label class="form-check-label" for="flexCheckDefault32">coupon.menu</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="33" id="flexCheckDefault33">
				<label class="form-check-label" for="flexCheckDefault33">coupon.list</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="34" id="flexCheckDefault34">
				<label class="form-check-label" for="flexCheckDefault34">coupon.add</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="35" id="flexCheckDefault35">
				<label class="form-check-label" for="flexCheckDefault35">coupon.edit</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="36" id="flexCheckDefault36">
				<label class="form-check-label" for="flexCheckDefault36">coupon.delete</label>
			</div>
			
		<br>		
				</div>
				
			</div><!--  // end row  -->
						<div class="row"><!--  // Start row  -->
				<div class="col-3">
<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 <label class="form-check-label" for="flexCheckDefault">order</label>
			</div>
				</div>




				<div class="col-9">


	   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="39" id="flexCheckDefault39">
				<label class="form-check-label" for="flexCheckDefault39">order.menu</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="40" id="flexCheckDefault40">
				<label class="form-check-label" for="flexCheckDefault40">order.list</label>
			</div>
			
		<br>		
				</div>
				
			</div><!--  // end row  -->
						<div class="row"><!--  // Start row  -->
				<div class="col-3">
<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 <label class="form-check-label" for="flexCheckDefault">product</label>
			</div>
				</div>




				<div class="col-9">


	   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="17" id="flexCheckDefault17">
				<label class="form-check-label" for="flexCheckDefault17">product.menu</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="18" id="flexCheckDefault18">
				<label class="form-check-label" for="flexCheckDefault18">product.list</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="19" id="flexCheckDefault19">
				<label class="form-check-label" for="flexCheckDefault19">product.add</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="20" id="flexCheckDefault20">
				<label class="form-check-label" for="flexCheckDefault20">product.edit</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="21" id="flexCheckDefault21">
				<label class="form-check-label" for="flexCheckDefault21">product.delete</label>
			</div>
			
		<br>		
				</div>
				
			</div><!--  // end row  -->
						<div class="row"><!--  // Start row  -->
				<div class="col-3">
<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 <label class="form-check-label" for="flexCheckDefault">report</label>
			</div>
				</div>




				<div class="col-9">


	   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="49" id="flexCheckDefault49">
				<label class="form-check-label" for="flexCheckDefault49">report.menu</label>
			</div>
			
		<br>		
				</div>
				
			</div><!--  // end row  -->
						<div class="row"><!--  // Start row  -->
				<div class="col-3">
<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 <label class="form-check-label" for="flexCheckDefault">return</label>
			</div>
				</div>




				<div class="col-9">


	   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="41" id="flexCheckDefault41">
				<label class="form-check-label" for="flexCheckDefault41">return.order.menu</label>
			</div>
			
		<br>		
				</div>
				
			</div><!--  // end row  -->
						<div class="row"><!--  // Start row  -->
				<div class="col-3">
<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 <label class="form-check-label" for="flexCheckDefault">review</label>
			</div>
				</div>




				<div class="col-9">


	   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="43" id="flexCheckDefault43">
				<label class="form-check-label" for="flexCheckDefault43">review.menu</label>
			</div>
			
		<br>		
				</div>
				
			</div><!--  // end row  -->
						<div class="row"><!--  // Start row  -->
				<div class="col-3">
<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 <label class="form-check-label" for="flexCheckDefault">role</label>
			</div>
				</div>




				<div class="col-9">


	   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="46" id="flexCheckDefault46">
				<label class="form-check-label" for="flexCheckDefault46">role.permission.menu</label>
			</div>
			
		<br>		
				</div>
				
			</div><!--  // end row  -->
						<div class="row"><!--  // Start row  -->
				<div class="col-3">
<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 <label class="form-check-label" for="flexCheckDefault">setting</label>
			</div>
				</div>




				<div class="col-9">


	   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="45" id="flexCheckDefault45">
				<label class="form-check-label" for="flexCheckDefault45">site.menu</label>
			</div>
			
		<br>		
				</div>
				
			</div><!--  // end row  -->
						<div class="row"><!--  // Start row  -->
				<div class="col-3">
<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 <label class="form-check-label" for="flexCheckDefault">slider</label>
			</div>
				</div>




				<div class="col-9">


	   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="22" id="flexCheckDefault22">
				<label class="form-check-label" for="flexCheckDefault22">slider.menu</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="23" id="flexCheckDefault23">
				<label class="form-check-label" for="flexCheckDefault23">slider.list</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="24" id="flexCheckDefault24">
				<label class="form-check-label" for="flexCheckDefault24">slider.add</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="25" id="flexCheckDefault25">
				<label class="form-check-label" for="flexCheckDefault25">slider.edit</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="26" id="flexCheckDefault26">
				<label class="form-check-label" for="flexCheckDefault26">slider.delete</label>
			</div>
			
		<br>		
				</div>
				
			</div><!--  // end row  -->
						<div class="row"><!--  // Start row  -->
				<div class="col-3">
<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 <label class="form-check-label" for="flexCheckDefault">stock</label>
			</div>
				</div>




				<div class="col-9">


	   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="48" id="flexCheckDefault48">
				<label class="form-check-label" for="flexCheckDefault48">stock.menu</label>
			</div>
			
		<br>		
				</div>
				
			</div><!--  // end row  -->
						<div class="row"><!--  // Start row  -->
				<div class="col-3">
<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 <label class="form-check-label" for="flexCheckDefault">subcategory</label>
			</div>
				</div>




				<div class="col-9">


	   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="12" id="flexCheckDefault12">
				<label class="form-check-label" for="flexCheckDefault12">subcategory.menu</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="13" id="flexCheckDefault13">
				<label class="form-check-label" for="flexCheckDefault13">subcategory.list</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="14" id="flexCheckDefault14">
				<label class="form-check-label" for="flexCheckDefault14">subcategory.add</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="15" id="flexCheckDefault15">
				<label class="form-check-label" for="flexCheckDefault15">subcategory.edit</label>
			</div>
		   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="16" id="flexCheckDefault16">
				<label class="form-check-label" for="flexCheckDefault16">subcategory.delete</label>
			</div>
			
		<br>		
				</div>
				
			</div><!--  // end row  -->
						<div class="row"><!--  // Start row  -->
				<div class="col-3">
<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 <label class="form-check-label" for="flexCheckDefault">user</label>
			</div>
				</div>




				<div class="col-9">


	   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="42" id="flexCheckDefault42">
				<label class="form-check-label" for="flexCheckDefault42">user.management.menu</label>
			</div>
			
		<br>		
				</div>
				
			</div><!--  // end row  -->
						<div class="row"><!--  // Start row  -->
				<div class="col-3">
<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 <label class="form-check-label" for="flexCheckDefault">vendor</label>
			</div>
				</div>




				<div class="col-9">


	   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="38" id="flexCheckDefault38">
				<label class="form-check-label" for="flexCheckDefault38">vendor.menu</label>
			</div>
			
		<br>		
				</div>
				
			</div><!--  // end row  -->
			 


			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-9 text-secondary">
					<input type="submit" class="btn btn-primary px-4" value="Save Changes" />
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


 
<script type="text/javascript">
	$('#flexCheckDefaultAll').click(function(){
		if ($(this).is(':checked')) {
			$('input[type = checkbox]').prop('checked',true);
		}else{
			$('input[type = checkbox]').prop('checked',false);
		}
	});

</script>

 


@endsection