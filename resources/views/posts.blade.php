

@extends('layout.main')

@section('container')
<style>
	h1 {
		font-size: 15px
	}
</style>
	{{-- <h1>{{ $Judul }}</h1> --}}
	@foreach ($post as $item)
	<h1>

		<article class="mb-3 border-bottom pb-1">
		<a style="font-size: 30px" class="text-decoration-none" href="{{ BASEURL }}/posts/{{ $item->slug }}">{{ $item->title }}</a>
		<p><a href="{{ BASEURL }}/authors/{{ $item->user->id }}">by {{ $item->user->name }}</a></p>

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
