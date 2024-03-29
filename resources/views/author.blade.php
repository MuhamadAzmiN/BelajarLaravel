@extends('layout.main')

@section('container')

<h1>Author: {{ $aut["author"] }}</h1>
<a href="{{ BASEURL }}/blog">Back</a>
	
@endsection