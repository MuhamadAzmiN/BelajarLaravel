





@extends('layout.main')


@section('container')
<article>
	<h1>{{ $post["title"] }}</h1>
	<h1>{{ $post["author"] }}</h1>
	<p>
		<a href="{{ BASEURL }}/categories/{{ $post->category->name }}">{{ $post->category->name }}</a>
	</p>
	{!! $post->body !!}
</article>
<a href="{{ BASEURL }}/blog"> Back</a>
	
@endsection