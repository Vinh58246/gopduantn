@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content"> 
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Seo Setting</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Seo Setting</li>
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
							 
<div class="col-lg-8">
	<div class="card">
		<div class="card-body">

		<form method="post" action=""  >
			<input type="hidden" name="_token" value="AX74D0kgjE5ZpBbqQCsnyV3n5Mq0VL59uplVCD3f">		
		<input type="hidden" name="id" value="1">

			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Meta Title</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" class="form-control" name="meta_title" value="Building The E-Commerce Website FOUR TVP" />
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Meta Author</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="meta_author" class="form-control" value="Kazi Ariyan" />
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Meta Keyword</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="meta_keyword" class="form-control" value="best online shop, best tshirt, best shop" />
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Meta Description </h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="text" name="meta_description" class="form-control" value="Learn Programing skills, from absolute beginner to advanced mastery.We try to create project base course which help your to learn professionally and make you fell as a complete developer" />
				</div>
			</div>
 



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
 



@endsection