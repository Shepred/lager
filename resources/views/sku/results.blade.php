@extends('layout.master')
@section('content')

@if (count($positions) > 0)
	<h1>Varen er at finde på følgende positioner:</h1>
	<table>
		<tr>
			<th>SKU</th>
			<th>Position</th>
			<th>Aktion</th>
		</tr>
		@foreach($positions as $position)
			<tr>
				<td>
					{{ $position->sku }}
				</td>
				<td>
					{{ $position->name }}
				</td>
				<td>
					<a href="">Udlever</a>
				</td>
			</tr>
		@endforeach
	</table>
@elseif (count($positions) == 0)
	<h1>Varen findes ikke på lageret.</h1>
@endif

<form action="{{ url('/') }}">
	<input type="submit" value="Tilbage"/>
</form>

@endsection