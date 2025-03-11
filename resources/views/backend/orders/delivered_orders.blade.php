@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">All Delivered Order</div>
		<div class="ps-3"> 
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">All Delivered Order</li>
				</ol>
			</nav>
		</div>
		<div class="ms-auto">
			<div class="btn-group">
			  
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
	<th>Date </th>
	<th>Invoice </th>
	<th>Amount </th>
	<th>Payment </th>
	<th>State </th>
	<th>Action</th> 
</tr>
</thead>
<tbody>

<tr>
	<td> 1 </td>
	<td>26 February 2025</td>
	<td>EOS94401997</td>
	<td>$602.00</td>
	<td>Cash On Delivery</td>
	<td> <span class="badge rounded-pill bg-success"> deliverd</span></td> 
	
	<td>
<a href="{{route('admin.order.details')}}" class="btn btn-info" title="Details"><i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/admin/invoice/download/15" class="btn btn-danger" title="Invoice Pdf"><i class="fa fa-download"></i> </a>
	</td> 
</tr>
		
<tr>
	<td> 2 </td>
	<td>04 September 2022</td>
	<td>EOS32039722</td>
	<td>$4800.00</td>
	<td>Cash On Delivery</td>
	<td> <span class="badge rounded-pill bg-success"> deliverd</span></td> 
	
	<td>
<a href="{{route('admin.order.details')}}" class="btn btn-info" title="Details"><i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/admin/invoice/download/9" class="btn btn-danger" title="Invoice Pdf"><i class="fa fa-download"></i> </a>
	</td> 
</tr>
		
<tr>
	<td> 3 </td>
	<td>04 September 2022</td>
	<td>EOS56179409</td>
	<td>$400.00</td>
	<td>Cash On Delivery</td>
	<td> <span class="badge rounded-pill bg-success"> deliverd</span></td> 
	
	<td>
<a href="{{route('admin.order.details')}}" class="btn btn-info" title="Details"><i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/admin/invoice/download/8" class="btn btn-danger" title="Invoice Pdf"><i class="fa fa-download"></i> </a>
	</td> 
</tr>
		
<tr>
	<td> 4 </td>
	<td>29 August 2022</td>
	<td>EOS82094998</td>
	<td>$320.00</td>
	<td>Cash On Delivery</td>
	<td> <span class="badge rounded-pill bg-success"> deliverd</span></td> 
	
	<td>
<a href="{{route('admin.order.details')}}" class="btn btn-info" title="Details"><i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/admin/invoice/download/7" class="btn btn-danger" title="Invoice Pdf"><i class="fa fa-download"></i> </a>
	</td> 
</tr>
		
<tr>
	<td> 5 </td>
	<td>23 August 2022</td>
	<td>EOS38157400</td>
	<td>$500.00</td>
	<td>Cash On Delivery</td>
	<td> <span class="badge rounded-pill bg-success"> deliverd</span></td> 
	
	<td>
<a href="{{route('admin.order.details')}}" class="btn btn-info" title="Details"><i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/admin/invoice/download/6" class="btn btn-danger" title="Invoice Pdf"><i class="fa fa-download"></i> </a>
	</td> 
</tr>
		
<tr>
	<td> 6 </td>
	<td>22 August 2022</td>
	<td>EOS28106487</td>
	<td>$720.00</td>
	<td>Cash On Delivery</td>
	<td> <span class="badge rounded-pill bg-success"> deliverd</span></td> 
	
	<td>
<a href="{{route('admin.order.details')}}" class="btn btn-info" title="Details"><i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/admin/invoice/download/4" class="btn btn-danger" title="Invoice Pdf"><i class="fa fa-download"></i> </a>
	</td> 
</tr>
		
<tr>
	<td> 7 </td>
	<td>22 August 2022</td>
	<td>EOS32084004</td>
	<td>$960.00</td>
	<td>Stripe</td>
	<td> <span class="badge rounded-pill bg-success"> deliverd</span></td> 
	
	<td>
<a href="{{route('admin.order.details')}}" class="btn btn-info" title="Details"><i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/admin/invoice/download/3" class="btn btn-danger" title="Invoice Pdf"><i class="fa fa-download"></i> </a>
	</td> 
</tr>
			 

</tbody>
<tfoot>
<tr>
	<th>Sl</th>
	<th>Date </th>
	<th>Invoice </th>
	<th>Amount </th>
	<th>Payment </th>
	<th>State </th>
	<th>Action</th> 
</tr>
</tfoot>
</table>
			</div>
		</div>
	</div>


	 
</div>





@endsection