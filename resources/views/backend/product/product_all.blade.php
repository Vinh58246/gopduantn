@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">All Product</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">All Product  <span class="badge rounded-pill bg-danger"> 23 </span> </li>
				</ol>
			</nav>
		</div>
		<div class="ms-auto">
			<div class="btn-group">
<a href="{{route('add.product')}}" class="btn btn-primary">Add Product</a> 				 
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
	<th>Image </th>
	<th>Product Name </th>
	<th>Price </th>
	<th>QTY </th>
	<th>Discount </th>
	<th>Status </th> 
	<th>Action</th> 
</tr>
</thead>
<tbody>

<tr>
	<td> 1 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740391997743770.webp" style="width: 70px; height:40px;" >  </td>
	<td>APPLE iPhone 13 (Starlight, 128 GB)</td>
	<td>1100</td>
	<td>400</td>

	<td>
							<span class="badge rounded-pill bg-danger"> 9%</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/28" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/28" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/28" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/28" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 2 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740391379244561.webp" style="width: 70px; height:40px;" >  </td>
	<td>FurnitureKraft Nancy Metal Double</td>
	<td>360</td>
	<td>400</td>

	<td>
							<span class="badge rounded-pill bg-danger"> 17%</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/22" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/22" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/22" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/22" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 3 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740391924552351.webp" style="width: 70px; height:40px;" >  </td>
	<td>APPLE iPhone 13 (Pink, 128 GB</td>
	<td>1200</td>
	<td>195</td>

	<td>
							<span class="badge rounded-pill bg-danger"> 17%</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/27" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/27" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/27" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/27" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 4 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740391863075855.webp" style="width: 70px; height:40px;" >  </td>
	<td>SAMSUNG Galaxy F13</td>
	<td>500</td>
	<td>200</td>

	<td>
					<span class="badge rounded-pill bg-info">No Discount</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/26" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/26" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/26" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/26" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 5 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740391793359745.webp" style="width: 70px; height:40px;" >  </td>
	<td>SAMSUNG Galaxy F22</td>
	<td>1200</td>
	<td>201</td>

	<td>
							<span class="badge rounded-pill bg-danger"> 17%</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/25" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/25" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/25" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/25" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 6 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740391723890141.webp" style="width: 70px; height:40px;" >  </td>
	<td>Infinix HOT 12 Play</td>
	<td>800</td>
	<td>400</td>

	<td>
							<span class="badge rounded-pill bg-danger"> 38%</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/24" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/24" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/24" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/24" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 7 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740391448274795.webp" style="width: 70px; height:40px;" >  </td>
	<td>FURINNO Solid Wood King Box Bed</td>
	<td>1200</td>
	<td>400</td>

	<td>
							<span class="badge rounded-pill bg-danger"> 17%</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/23" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/23" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/23" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/23" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 8 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740391171768623.webp" style="width: 70px; height:40px;" >  </td>
	<td>Aakriti Solar Laughing Buddha Holding</td>
	<td>600</td>
	<td>201</td>

	<td>
					<span class="badge rounded-pill bg-info">No Discount</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/21" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/21" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/21" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/21" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 9 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740391100708280.webp" style="width: 70px; height:40px;" >  </td>
	<td>Fashion Bizz Antique Handmade Vintag</td>
	<td>590</td>
	<td>400</td>

	<td>
							<span class="badge rounded-pill bg-danger"> 15%</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/20" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/20" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/20" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/20" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 10 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740391009693051.webp" style="width: 70px; height:40px;" >  </td>
	<td>Chhariya Crafts Metal Feng Shui Tortoise</td>
	<td>590</td>
	<td>400</td>

	<td>
							<span class="badge rounded-pill bg-danger"> 15%</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/19" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/19" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/19" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/19" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 11 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740390741204758.webp" style="width: 70px; height:40px;" >  </td>
	<td>Portronics POR-1196 Modesk Plus</td>
	<td>700</td>
	<td>200</td>

	<td>
					<span class="badge rounded-pill bg-info">No Discount</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/18" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/18" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/18" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/18" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 12 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740390669284753.webp" style="width: 70px; height:40px;" >  </td>
	<td>Meraki Wonder Adjustable Cell Phone Holder</td>
	<td>1200</td>
	<td>400</td>

	<td>
							<span class="badge rounded-pill bg-danger"> 17%</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/17" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/17" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/17" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/17" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 13 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740390521459260.jpeg" style="width: 70px; height:40px;" >  </td>
	<td>Epson L3200 Multi-function Color</td>
	<td>1200</td>
	<td>400</td>

	<td>
							<span class="badge rounded-pill bg-danger"> 67%</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/16" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/16" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/16" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/16" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 14 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740390426441547.webp" style="width: 70px; height:40px;" >  </td>
	<td>brother DCP-T220 Multi-function</td>
	<td>590</td>
	<td>400</td>

	<td>
							<span class="badge rounded-pill bg-danger"> 15%</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/15" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/15" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/15" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/15" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 15 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740390365626068.webp" style="width: 70px; height:40px;" >  </td>
	<td>HP 315 Multi-function Color Printe</td>
	<td>300</td>
	<td>400</td>

	<td>
					<span class="badge rounded-pill bg-info">No Discount</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/14" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/14" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/14" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/14" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 16 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740390277372812.webp" style="width: 70px; height:40px;" >  </td>
	<td>Canon PIXMA G1010 Single Function</td>
	<td>1200</td>
	<td>400</td>

	<td>
							<span class="badge rounded-pill bg-danger"> 17%</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/13" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/13" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/13" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/13" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 17 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740390147168644.webp" style="width: 70px; height:40px;" >  </td>
	<td>Regular Fit Men Beige Cotton Blend Trousers</td>
	<td>700</td>
	<td>400</td>

	<td>
							<span class="badge rounded-pill bg-danger"> 7%</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/12" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/12" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/12" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/12" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 18 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740390058801111.webp" style="width: 70px; height:40px;" >  </td>
	<td>Pack of 2 Solid Men Black, Blue Track</td>
	<td>600</td>
	<td>200</td>

	<td>
							<span class="badge rounded-pill bg-danger"> 17%</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/11" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/11" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/11" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/11" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 19 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740389985066584.webp" style="width: 70px; height:40px;" >  </td>
	<td>Skinny Men Blue Jeans</td>
	<td>590</td>
	<td>199</td>

	<td>
							<span class="badge rounded-pill bg-danger"> 15%</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/10" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/10" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/10" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/10" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 20 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740389864437655.webp" style="width: 70px; height:40px;" >  </td>
	<td>Color Block Men Round Neck Pink T-Shirt</td>
	<td>590</td>
	<td>200</td>

	<td>
							<span class="badge rounded-pill bg-danger"> 32%</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/9" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/9" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/9" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/9" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 21 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740389783829401.webp" style="width: 70px; height:40px;" >  </td>
	<td>Solid Men Mandarin Collar Black</td>
	<td>500</td>
	<td>399</td>

	<td>
					<span class="badge rounded-pill bg-info">No Discount</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/8" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/8" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/8" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/8" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 22 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740389668728493.webp" style="width: 70px; height:40px;" >  </td>
	<td>Men Regular Fit Solid Button Down</td>
	<td>400</td>
	<td>-1</td>

	<td>
							<span class="badge rounded-pill bg-danger"> 10%</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/7" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/7" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/7" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/7" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
		
<tr>
	<td> 23 </td>				
	<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740389527616484.webp" style="width: 70px; height:40px;" >  </td>
	<td>Color Block Men Hooded Neck Red</td>
	<td>500</td>
	<td>200</td>

	<td>
							<span class="badge rounded-pill bg-danger"> 20%</span>
					 </td>



	<td> 					<span class="badge rounded-pill bg-success">Active</span>
						   </td>
	
	<td>

		
<a href="https://digi-poly.id.vn/edit/product/6" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

<a href="https://digi-poly.id.vn/delete/product/6" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
<a href="https://digi-poly.id.vn/edit/category/6" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

<a href="https://digi-poly.id.vn/product/inactive/6" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

	</td> 
</tr>
			 

</tbody>
<tfoot>
<tr>
	<th>Sl</th>
	<th>Image </th>
	<th>Product Name </th>
	<th>Price </th>
	<th>QTY </th>
	<th>Discount </th>
	<th>Status </th> 
	<th>Action</th> 
</tr>
</tfoot>
</table>
			</div>
		</div>
	</div>


	 
</div>




@endsection