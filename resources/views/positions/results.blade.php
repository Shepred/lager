@extends('layout.master')
@section('content')

@if(! empty($position->sku))
	<h1>Der er følgende vare på positionen:</h1>
	<ul>
		<li>
			{{ $position->sku }}
		</li>
	</ul>
@elseif(empty($position->sku))
	<h1>Der er ingen vare på positionen.</h1>
@endif

<form action="{{ url('/') }}">
	<input type="submit" value="Tilbage"/>
</form>

@endsection