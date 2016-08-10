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
			@foreach($destinations as $destination)
			<div class="col-sm-3 col-xs-6">
				<div class="who">					
					@if(isset($destination->primary_image->image_name))
						<img src="<?php echo env('UPLOADS').$destination->primary_image->image_name;?>"  alt="{{ $destination->location_name}}" class="img-responsive who-img">
					@else
						<img src="public/admin/images/no_image.png"  alt="{{ $destination->location_name}}" class="img-responsive who-img">
					@endif
					<h3>
						<a href="destination/details/{{ $destination->id}}">{{ $destination->location_name}}</a>
					</h3>
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
