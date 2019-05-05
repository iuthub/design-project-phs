@extends('layouts.app')

@section('content')
	<div class="container">
		<a href="/posts" class="btn btn-default">Go Back</a>
	<h2> {{$post->title}} </h2>
	
	<img src="/img/{{$post->id}}.jpg">
	<div>
		{{$post->body}}
	</div>
	<small> Upload date: {{$post->created_at}}</small>
	<a href="#" class="btn  btn-primary">Buy This image</a>
	<hr>
	<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
	
	</div>
@endsection