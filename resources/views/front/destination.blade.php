@extends('front')
@section('content')
<section class="wwa section-wrapper">
	<div class="container">
		<!-- <h2 class="section-title">
			Who we are?
		</h2>
		<p class="section-subtitle">
			Lorem Ipsum is simply dummy text of the industry.
		</p> -->
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				{!! str_replace('/?', '?', $destinations->render()) !!}
			</div>
			@foreach($destinations as $destination)
			<div class="col-sm-3 col-xs-6">
				<div class="who">
					@if(isset($destination->primary_image->image_name))
					<img src="<?php echo env('UPLOADS').$destination->primary_image->image_name;?>"  alt="{{ $destination->location_name}}" class="img-responsive who-img">
					@else
						<img src="public/admin/images/no_image.png"  alt="{{ $destination->location_name}}" class="img-responsive who-img">
						@endif
					<h2 class="location_heading">
						{{ $destination->location_name}}
					</h2>
					<p class="who-detail">
					{{ short($destination->description ) }}
					</p>
				</div>
			</div> <!-- /.col-sm-3 -->
			@endforeach
			
		</div> <!-- /.row -->
	</div> <!-- /.container -->
</section> <!-- /.wwa -->
@endsection
