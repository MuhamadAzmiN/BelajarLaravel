@extends('layout.main')

@section('container')
	@foreach($Prog as $item)



	<h1>{{ $item->judul }}</h1>
	<p>{{ $item->body }}</p>
		<img src="https://source.unsplash.com/500x400/?{{ $item->judul}}" class="card-img-top" alt="...">

	@endforeach

	{{-- <h1>{{ $prog }}</h1> --}}
@endsection


