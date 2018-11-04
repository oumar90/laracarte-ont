@extends('layouts.default', ['title' => 'About'])


@section('content')

   <div class="container">
	   	<h2>What is Laracarte ?</h2>
	   	<p>Laracarte is a clone app of <a href="www.laramap.com" target="_blank">Laramap.com</a>.</p>

	   	<div class="row">
	   		<div class="col-md-6">
	   			<p class="alert alert-warning">
	   				<strong>
	   					<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
	   						This app been built by <a href="www.twitter.com/oudjira">@oudjira</a> for learning purpose.
	   				</strong>
	   			</p>
	   		</div>
	   	</div>

	   	<p>Feel free to help to imporve the <a href="https://github.com/oumar90/laracarte-ont">source code</a></p>

		<hr>
	   	<h2>What is Laramap ?</h2>
	   	<p>Laramap is the website by wich Laracarte inpired :).</p>
	   	<p>More info <a href="www.laramap.com/p/about">here</a></p>
	   	<hr>

	   	<h2>Which tools and services are used in Laracarte?</h2>
	   	<p>Basically it's built on Laravel & Bootstrap. But there's a bunch of services used for email and other sections.</p>
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
   </div>
@stop









