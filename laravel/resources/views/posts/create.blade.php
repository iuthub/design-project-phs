@extends('layouts.app')

@section('content')
	<div class="container">
	<h1>Upload | Create</h1>

	{!!Form::open( ['action' =>'PostsController@store', 'method'=>'POST']) !!}

		<div class="form-group">
			{{Form::label('title', 'Title')}}
			{{Form::text('title', '', ['class'=> 'form-control', 'placeholder'=>'Title'])}}
		</div>

		<div class="form-group">
			{{Form::label('body', 'Body')}}
			{{Form::textarea('body', '', ['class'=> 'form-control', 'placeholder'=>'Body Text'])}}
		</div>
		{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

	{!!Form::close() !!}
	{{-- <div class="padding"></div> --}}
	.
	<ul class="nav navbar-nav navbar-right">
		<li ><a class="btn btn-secondary" href="/posts">Cancel</a></li>
	</ul>
	</div>
	
@endsection