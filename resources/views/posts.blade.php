

@extends('layout.main')

@section('container')
<style>
	h1 {
		font-size: 15px
	}
</style>
	{{-- <h1>{{ $Judul }}</h1> --}}
	@foreach ($posts as $item)
	<h1>

		<article class="mb-3 border-bottom pb-1">
		<a style="font-size: 30px" class="text-decoration-none" href="{{ BASEURL }}/posts/{{ $item->slug }}">{{ $item->title }}</a>

		<h1 style="font-size: 15px"><a href="authors/{{ $item->author->username }}">{{ $item->author->name }} </a></h1>

			<a class="text-decoration-none" href="categories/{{ $item->category->slug }}">{{ $item->category->name }}</a>
		</p>

		
	</h1>
	{{-- opsional --}}
	{{-- <h1>
		<a href="{{ BASEURL }}/author/{{ $item->slug}}">Author</a>
	</h1> --}}
	{{-- <h1>{{ $item["author"] }}</h1> --}}
	<h1>{{ $item["excerpt"] }}</h1>
	
	<p><a class="text-decoration-none" href="{{ BASEURL }}/posts/{{ $item->slug }}">Read More..</a></p>
</article>
	@endforeach
@endsection
