

@extends('layout.main')
@section('container')
<h1>Daftar Nama User</h1>
@foreach ($post as $item)
<p>{{ $item->author->name }}</p>
@endforeach
	
@endsection