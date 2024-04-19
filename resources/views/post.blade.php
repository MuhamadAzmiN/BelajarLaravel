





@extends('layout.main')


@section('container')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h1 class="">{{ $post->title }}</h1>
				<p>
					by <a href="
					{{ BASEURL }}/authors/{{ $post->author->username }}">{{ $post->author->username }}</a>
					<a href="{{ BASEURL }}/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
				</p>
				<img class="img-fluid" src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
				<article class="my-3">{!! $post->body !!}
				</article>
				
			
			<a class="mt-5e" href="{{ BASEURL }}/blog"> Back</a>
		</div>
	</div>
</div>

	
@endsection