@extends('layout.main')
@section('container')
<h1>Daftar Nama User</h1>
@if ($role->isEmpty())
	<h1 class="mt-4" style="text-align: center">No User</h1>
@else
@foreach ($role as $item)
<h1 style="font-size: 15px"><a href="RoleSingle/{{ $item->name }}">{{ $item->name }}</a></h1>


	
@endforeach
@endif
@endsection


ss