

@extends('layout.main')

@section('container')
<style>
	h1 {
		font-size: 15px
	}
</style>
	<h1 class="text-center">{{ $title }}</h1>

	<div class="row justify-content-center">
		<div class="col-md-6">
			<form action="{{ BASEURL }}/blog" method="GET">
				<div class="input-group mb-3">
					<input type="text" class="form-control" value="{{ request('cari') }}" placeholder="Seacrh" name="cari">
					<button class="btn btn-primary" type="submit" id="button-addon2">Seacrh</button>
				  </div>
			</form>
		</div>
	</div>

	@if ($posts->count())
	<div class="card mb-3">

		<div class="card-body text-center">
			<img src="https://source.unsplash.com/500x200/?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
		  <h5 class="card-title"><a class="text-decoration-none text-dark" href="{{ BASEURL }}/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h5>
		  <h1 style="font-size: 15px"><a href="{{ BASEURL }}/authors/{{$posts[0]->author->username }}">{{$posts[0]->author->name }} </a>

		  <a class="text-decoration-none" href="{{ BASEURL }}/categories/{{$posts[0]->category->slug}}">{{$posts[0]->category->name }}</a>
			</h1>
		  <p class="card-text"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
		  <p class="card-text">{{ $posts[0]->excerpt }}</p>

		  <a class="text-decoration-none btn btn-primary" href="{{ BASEURL }}/posts/{{ $posts[0]->slug }}">Read More..</a>
		</div>
	  </div>
	  
	  <div class="container">
		<div class="row">
			@foreach ($posts->skip(1) as $post)
			<div class="col-md-4 mb-3">
				<div class="card">
					<div class="position-absolute bg-dark px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
					<a class="text-decoration-none text-white" href="categories/{{ $post->category->name }}">{{ $post->category->slug }}</a></div>
					<img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}" class="card-img-top" alt="...">
					<div class="card-body">
					  <h5 class="card-title">{{ $post->title }}</h5>
					  <p>
					  <small class="text-muted">
						By <a class="text-decoration-none" href="authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
						<a class="text-decoration-none" href="{{ BASEURL }}/categories/{{ $post->category->name }}">{{ $post->category->name }}</class>
						<a class="text-decoration-none" href="#">{{ $posts[0]->created_at->diffForHumans() }}</a>
					  </small>
						</p>
					  <p class="card-text">{{ $post->excerpt }}</p>
					  
		  				<a class="text-decoration-none btn btn-primary" href="{{ BASEURL }}/posts/{{ $posts[0]->slug }}">Read More..</a>
					</div>
				  </div>
			</div>
			@endforeach
		</div>
	  </div>
	  @else
	  <p style="color: " class="text-center fs-4">No Post Found</p>
 	 @endif

@endsection
