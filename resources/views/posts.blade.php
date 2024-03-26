

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
		<a href="{{ BASEURL }}/posts/{{ $item["slug"] }}">{{ $item["title"] }}</a>
		
	</h1>
	<h1>
		<a href="{{ BASEURL }}/author/{{ $item["slug"] }}">hahaha</a>
	</h1>
	<h1>{{ $item["author"] }}</h1>
	<h1>{{ $item["body"] }}</h1>
		
	@endforeach
@endsection
