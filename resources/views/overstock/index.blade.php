@extends('layout.master')
@section('content')

<h1>Overstock</h1>

<form method="post" action="{{ url('overstock/search') }}">
	@csrf
	<p>Vælg palle: 
		<select name="department">
			<option value="data">Data</option>
			<option value="whitegoods">Hvidevarer</option>
			<option value="tele">Tele</option>
			<option value="tv">Radio / TV</option>
		</select>
	</p>

	<p>Søg på EAN: 
		<input type="text" name="ean" />
	</p>

	<input type="submit" value="Søg!" />
</form>
@endsection