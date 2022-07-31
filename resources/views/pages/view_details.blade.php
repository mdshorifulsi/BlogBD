@extends('layout')
@section('content')





	

	
	<div class="slider display-table center-text">
		<h1 class="title display-table-cell"><b>{{$view_details_info->post_title}}</b></h1>

	</div><!-- slider -->
	<div class="glyphicon glyphicon-user"><h6>author By {{$view_details_info->author_name}}</h6></div>
	

	<section class="blog-area section">
		<div class="container">
			

		
			<div class="row">
				<div class="col-lg-2 col-md-0"></div>
				<div class="col-lg-8 col-md-12">
					<div class="post-wrapper">

					

						

						<p class="para">{{URL::to($view_details_info->post_body)}}</p>
<div class="blog-image"><img src="{{URL::to($view_details_info->post_image)}}" alt="Blog Image" style="width: 700px; height: 450px;"></div>
						

						

					</div><!-- post-wrapper -->
				</div><!-- col-sm-8 col-sm-offset-2 -->
			</div><!-- row -->


		</div><!-- container -->
	</section><!-- section -->



 @endsection