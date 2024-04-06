





@extends('layout.main')


@section('container')
<article>
	<h1>{{ $post["title"] }}</h1>
	<h1>{{ $post["author"] }}</h1>
	<p>
		<a href="{{ BASEURL }}/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
	</p>
	{!! $post->body !!}
</article>
<a class="mt-5e" href="{{ BASEURL }}/blog"> Back</a>
	
@endsection