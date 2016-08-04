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
			@foreach($destination as $destination)
			<div class="col-sm-3 col-xs-6">
				<div class="who">
					<img src="front/assets/images/ab-1.png" alt="" class="img-responsive who-img">
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
