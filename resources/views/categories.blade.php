

@extends('layout.main')

@section('container')
<style>
	h1 {
		font-size: 15px
	}
</style>
@if ($post->isEmpty())
    <h1 style="text-align: center;font-size:50px;margin-top: 300px">No Postingan</h1>
@else
    @foreach ($post as $item)
        <h1>
            <a href="{{ BASEURL }}/posts/{{ $item->slug }}">{{ $item->title }}</a>
        </h1>
        <h1>
            <a href="{{ BASEURL }}/author/{{ $item->slug}}">Author</a>
        </h1>
        <h1>{{ $item->excerpt }}</h1>
    @endforeach
@endif

@endsection
