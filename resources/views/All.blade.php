



@extends('layout.main')


@section('container')
<h1>Macam Macam Category</h1>
<article>
	@foreach ($post as $item)	

	<ul style="font-size: 10px">
	
		<li>{{ $item->category->name }}</li>
		<li>{{ $item->excerpt }}</li>
	</ul>
		
	@endforeach

</article>
<a class="mt-5e" href="{{ BASEURL }}/home"> Back</a>
	
@endsection