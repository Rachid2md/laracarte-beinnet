@extends('layouts.default', ['title'=>'contact'])

@section('content')
<br>
<div class="container">
	<div class="row">
		<div class="col-md-2 col-sm-1"></div>
		<div class="col-md-8 col-sm-8">
			<h1>Get In Touch</h1>
			<p class="text-muted">If you having trouble with this service, please ask <a href="mailto:rachid2md@gmail.com">for help</a></p>
			<form action="" method="POST">
				<div class="form-group">
					<label for="name" class="control-label">aaa</label>
					<input required="" id="name" type="text" class="form-control" name="name">
				</div>
				<div class="form-group">
					<label for="email" class="control-label">aaa</label>
					<input required="" id="email" type="email" class="form-control" name="email">
				</div>
				<div class="form-group">
					<label for="message" class="control-label">aaa</label>
					<textarea required="" id="message" class="form-control" rows="10"></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-primary btn-block">Submit enqury</button>
				</div>
			</form>
		</div>
		
	</div>
</div>
@stop