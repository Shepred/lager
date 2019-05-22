@extends('layout.master')
@section('content')

<h1>Tilføj ny position</h1>
<form method="post" action="{{ url('/position/create') }}">
	@csrf
	<p>Reol:
		<select name="reol">
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
		</select>
	</p>
	<p>Række:
		<select name="row">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
		</select>
	</p>
	<p>Niveau:
		<select name="niveau">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select>
	</p>
	<p>Position på palle:
		<select name="palle">
			<option value="I">Inderst</option>
			<option value="Y">Yderst</option>
		</select>
	</p>
	<p>SKU (hvis nogen):
		<input type="text" name="sku"/>
	</p>
	<input type="submit" value="Tilføj"/>
</form>

@endsection