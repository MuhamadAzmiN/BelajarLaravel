@extends('layout.main')
@section('container')
<h1>Daftar Nama User</h1>

@php
	$i = 1
@endphp
@foreach ($post as $item)
<h1 style="font-size: 15px">{{ $i++ }}.<a href="authors/{{ $item->name}}">{{ $item->name}} </a>Bekerja Di {{ $item->role->name }}</h1>
	
@endforeach
	
@endsection