@extends('layout.main')
@section('container')
<h1>Daftar Nama User</h1>
@foreach ($post as $item)
<h1 style="font-size: 15px"><a href="authors/{{ $item->author->id }}">{{ $item->author->name }} </a></h1>
	
@endforeach
	
@endsection