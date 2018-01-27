@if (Session::has('success'))

	<div class="alert alert-success alert-dismissible fade show" role="success">
		{{ Session::get('success') }}
		
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>

@endif

@if (count($errors) > 0)
	<div class="alert alert-danger alert-dismissible fade show">
		 <ul>
		    @foreach ($errors->all() as $error)
		       <li>{{ $error }}</li>
		    @endforeach
		</ul>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
	</button>
	 </div>
@endif