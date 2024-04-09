

@extends('layout.main')

@section('container')
<style>
	h1 {
		font-size: 15px
	}
</style>
	{{-- <h1>{{ $Judul }}</h1> --}}
	@foreach ($categories as $item)
	<h1>
		<a href="{{ BASEURL }}/categories/{{ $item->slug }}">{{ $item->name }}</a>
	
	</h1>
	{{-- <h1>{{ $item["author"] }}</h1> --}}
	
		
	@endforeach
@endsection
