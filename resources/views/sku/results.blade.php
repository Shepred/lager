@extends('layout.master')
@section('content')

@if (count($positions) > 0)
<div class="container-fluid">
	<h1>Varen er at finde på følgende positioner:</h1>
	<table class="table table-striped">
		<thead>
		<tr>
			<th>SKU</th>
			<th>Position</th>
			<th>Aktion</th>
		</tr>
	</thead>
	<tbody>
		@foreach($positions as $position)
			<tr>
				<td>
					{{ $position->sku }}
				</td>
				<td>
					{{ $position->name }}
				</td>
				<td>
					<a href="{{ url('/position/destroy/' . $position->name . '') }}">Udlever</a>
				</td>
			</tr>
		@endforeach
	</tbody>
	</table>
@elseif (count($positions) == 0)
	<h1>Varen findes ikke på lageret.</h1>
@endif

<form action="{{ url('/') }}">
	<input type="submit" value="Tilbage"/>
</form>
</div>
@endsection