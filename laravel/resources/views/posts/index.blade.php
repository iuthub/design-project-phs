@extends('layouts.app')

@section('content')
	<div class="container">
	<h1>Images | Gallery</h1>
	<ul class="nav navbar-nav navbar-right">
		<li ><a class="btn btn-primary" href="/posts/create">Create/Upload</a></li>
	</ul>
	<div class="padding"></div>
	@if(count($posts)>0)

		@foreach($posts as $post)

			<div class="well">
				<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
				<small>Uploaded on {{$post->created_at}}</small>
			</div>
			<div class="padding">
				
			</div>
			@endforeach
			{{-- <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a> --}}
			{{$posts->links()}}
	@else
		<p>No posts Found</p>
	@endif

	</div>
@endsection