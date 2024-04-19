@extends('layout.main')
@section('container')
<h1>Daftar Nama User</h1>

@php
	$i = 1
@endphp
@foreach ($post as $item)
<h1 class="text-decoration-none" style="font-size: 15px">{{ $i++ }}.<a href="authors/{{ $item->name}}"></a>{{ $item->author->name }} Bekerja Di {{ $item->roles->name }} Sebagai {{ $item->category->name  }}</h1>

@endforeach
	
@endsection