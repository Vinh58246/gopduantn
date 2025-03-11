@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">All Return Order</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">All Return Order</li>
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
				<th>Reason </th>
				<th>Action</th> 
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>29 August 2022</td>
				<td>EOS82094998</td>
				<td>$320.00</td>
				<td>Cash On Delivery</td>
                <td> 

				<span class="badge rounded-pill bg-danger"> Pending </span>
  	         </td> 

  	         <td>Not Happy</td>
				
				<td>
<a href="" class="btn btn-info" title="Details"><i class="fa fa-eye"></i> </a>

<a href="" class="btn btn-danger" title="Approved" id="approved"><i class="fa-solid fa-person-circle-check"></i> </a>
 

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
				<th>Reason </th>
				<th>Action</th> 
			</tr>
		</tfoot>
	</table>
						</div>
					</div>
				</div>
 

				 
			</div>




@endsection