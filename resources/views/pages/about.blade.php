@extends('layouts.default', ['title'=>'about'])

@section('content')

<div class="container">
	<br><br>
	<h2>What is {{ config('app.name') }}?</h2>
	<p>{{ config('app.name') }} is a clone app of <a href="http://laramap.com" target="_blank">Laramap.com</a>.</p>
	<div class="row">
		<div class="col-md-7">
			<p class="alert alert-warning"><i class="fa fa-warning"></i> This app has been built (clowned) by <a href="http://twitter.com/beinnetcorporat">@BeInNet</a> for learning purposes.</p>
			
		</div>
	</div>
	<p>Feel free to help to improve the <a href="https://github.com/Rachid2md/{{ config('app.name') }}-beinnet">source code</a>.</p>
	<hr>
	<h2>What is Laramap?</h2>
	<p>Laramap is the website by which {{ config('app.name') }} was inspired :).</p>
	<p>More info <a href="#">here.</a></p>
	<hr>
	<p>Which tools and services are used in {{ config('app.name') }}?</p>
	<p>
	Basically it's built on Laravel & Bootstrap. But there's a bunch of services used for email and other sections.
	<ul>
		<li>Laravel</li>
		<li>Bootstrap</li>
		<li>Amazon S3</li>
		<li>Mandrill</li>
		<li>Google Maps</li>
		<li>Gravatar</li>
		<li>Antony Martin's Geolocation Package</li>
		<li>Michel Fortin's Markdown Parser Package</li>
		<li>Heroku</li>
	</ul>
	</p>
</div>

@stop