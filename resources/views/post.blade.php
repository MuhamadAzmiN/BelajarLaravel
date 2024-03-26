





@extends('layout.main')


@section('container')
<article>
	<h1>{{ $post["title"] }}</h1>
	<h1>{{ $post["author"] }}</h1>
	<p>{{ $post["body"] }}</p>
</article>
<a href="{{ BASEURL }}/blog"> Back</a>
	
@endsection