@extends('layouts.default', ['title'=>'contact'])

@section('content')
<br>
<div class="container">
	<div class="row">
		<div class="col-md-2 col-sm-1"></div>
		<div class="col-md-8 col-sm-8">
			<h1>Get In Touch</h1>
			<p class="text-muted">If you having trouble with this service, please ask <a href="mailto:{{config('laracarte.admin_support_email')}}">for help</a></p>
			<form action="{{ route('contact_path') }}" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="name" class="control-label {{ $errors->has('name') ? 'text-danger' : '' }}">Name</label>
					<input required="" value="{{ old('name') }}" id="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name">
					{!! $errors->first('name', '<span class="help-block invalid-feedback">:message</span>') !!}
				</div>
				<div class="form-group">
					<label for="email" class="control-label {{ $errors->has('email') ? 'text-danger' : '' }}">Email</label>
					<input required="" value="{{ old('email') }}" id="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email">
					{!! $errors->first('email', '<span class="help-block invalid-feedback">:message</span>') !!}
				</div>
				<div class="form-group">
					<label for="message" class="control-label sr-only {{ $errors->has('message') ? 'text-danger' : '' }}">Message</label>
					<textarea name="message" required="" id="message" class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" rows="10">{{ old('message') }}</textarea>
					{!! $errors->first('message', '<span class="help-block invalid-feedback">:message</span>') !!}
				</div>
				<div class="form-group">
					<button name="submit_contact" class="btn btn-primary btn-block">Submit enquiry >></button>
				</div>
			</form>
		</div>
		
	</div>
</div>
@stop