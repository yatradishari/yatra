@extends('admin')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Destination</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>

<div class="row">
	<div class="panel-body">
		<div class="row">
			<div class="col-lg-8">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Image</th>								
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($destinationimages as $destinationimage)
								<tr>
									<td>3326</td>
									<td>																				
										<img src="{{'../../public/uploads/'.$destinationimage->image_name}}" width="80"  alt="{{ $destinationimage->image_name}}">		
									</td>									
									<td>
										<p>
											<a href="{{ URL::to('/admin/destination/edit/'.$destinationimage->id) }}">
												<button class="btn btn-primary btn-xs" type="button">Edit</button>
											</a>
										</p>
										<p>
											<a onclick="return confirm('Are you sure?')" href="{{ URL::to('/admin/destination/deleteimage/'.$destinationimage->id) }}">
												<button class="btn btn-danger btn-xs" type="button">Delete</button>
											</a>
										</p>									
										<p>											
											<a href="{{ URL::to('/admin/destination/deleteimage/'.$destinationimage->id) }}	">
												<button class="btn btn-primary btn-xs" type="button">Add Image</button>
											</a>
										</p>
									</td>
								</tr>
							@endforeach
							<tr>
								<td colspan="6">									
									<button class="btn btn-primary" type="button" onclick="window.location.href='destination/create'">Add</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /.table-responsive -->
			</div>
			<!-- /.col-lg-4 (nested) -->
			<div class="col-lg-8">
				<div id="morris-bar-chart"></div>
			</div>
			<!-- /.col-lg-8 (nested) -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.panel-body -->
</div>
</div>
@endsection
