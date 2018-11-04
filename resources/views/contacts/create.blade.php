@extends('layouts.default', ['title' => 'Contact'])


@section('content')

   <div class="container" style="padding-top: 4%;">
	   	<div class="row">
	   		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
	   			<h2>Get in Touch</h2>
	   			<p class="text-muted">If you having trouble with the service, please please <a href="mailto:oudjira90@gmail.com">ask for help.</a></p>

	   			<form action="#" method="POST">
	   				<div class="form-group">
	   					<label for="name" class="control-label">Name</label>
	   					<input type="text" name="name" id="name" class="form-control" required="required">
	   				</div>
	   				<div class="form-group">
	   					<label for="email" class="control-label">Email</label>
	   					<input type="email" name="name" id="email" class="form-control" required="required">
	   				</div>
	   				<div class="form-group">
	   					<label for="message" class="control-label sr-only">Message</label>
	   					<textarea type="message" name="message" id="message" class="form-control" required="required" rows="10" cols="10"></textarea>
	   				</div>
					<div class="form-group">
						<button class="btn btn-info btn-block">
							Submit Enquiry &raquo;
						</button>
					</div>
	   			</form>
	   		</div>
	   	</div>
   </div>
@stop









