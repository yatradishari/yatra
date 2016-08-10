@extends('front')
@section('content')
<section class="features section-wrapper">
	<div class="container">
		<h2 class="section-title">
			{{ $destinations[0]->location_name}}
		</h2>
		<p class="section-subtitle">
			Lorem Ipsum is simply dummy text of the industry.
		</p>
		<div class="row custom-table">
			<div class="grid-50 table-cell">
				<p class="features-details">
					{{ short($destinations[0]->description ) }}
				</p>
				<ul class="features-list">
					<li>Vestibulum pulvinar commodo malesuada.</li>
					<li>Pellentesque id massa et ligula convallis porta.</li>
					<li>Vivamus sed nunc sed ligula rhoncus sit amet eu elit.</li>
					<li> Curabitur in ipsum vel ipsum vehicula congue.</li>
				</ul>
				<a href="#" class="btn btn-default custom-button border-radius">
					PURCHASE
				</a>
			</div>

			<div class="grid-50 table-cell">
				@if(isset($destinations[0]->primary_image->image_name))
					<img src="<?php echo env('UPLOADS').$destinations[0]->primary_image->image_name;?>"  alt="{{ $destinations[0]->location_name}}" class="img-responsive who-img">
				@else
					<img src="public/admin/images/no_image.png"  alt="{{ $destinations[0]->location_name}}" class="img-responsive who-img">
				@endif
			</div>
		</div> <!-- /.row -->
	</div> <!-- /.container -->
</section> <!-- /.features -->
@endsection
