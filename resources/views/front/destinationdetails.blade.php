@extends('front')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-7 wow fadeInLeft">
			<h2 class="section-title">{{ $destinations[0]->location_name}}</h2>
			<figure>
				@if(isset($destinations[0]->primary_image->image_name))
					<img src="<?php echo env('IMAGE_SHOW_PATH').env('UPLOADS').$destinations[0]->primary_image->image_name;?>"  alt="{{ $destinations[0]->location_name}}">
					@else
					<img src="public/admin/images/no_image.png"  alt="{{ $destinations[0]->location_name}}">
				@endif
			</figure>
			<p>
				{{ short($destinations[0]->description ) }}
			</p>
		</div>
		<!-- <div class="col-md-4 col-md-push-1 wow fadeInRight">
			<h2 class="section-title">Principle</h2>
			<a href="#" class="boxed-link">Proin placeat condinemtum nulla</a>
			<a href="#" class="boxed-link">Gamma bomb explosion while trying</a>
			<a href="#" class="boxed-link">Perez and other quintessential</a>
			<a href="#" class="boxed-link">Take on familiar enemies</a>
			<a href="#" class="boxed-link">Avengers go up against Ultron</a>

		</div> -->
	</div>
</div>
@endsection