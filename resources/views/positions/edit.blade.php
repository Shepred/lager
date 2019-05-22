@extends('layout.master')
@section('content')

<h1>Opdater position</h1>
<form method="post" action="{{ url('/position/update') }}">
	@csrf
	<p class="scanner">Position:
		<input type="text" name="name" autofocus/>
	</p>
	<p>EAN:
		<input type="text" name="ean" />
	</p>

	<input type="submit" value="Opdater" />
</form>

@endsection