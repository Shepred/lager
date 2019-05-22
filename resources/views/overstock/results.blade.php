@extends('layout.master')
@section('content')

<table>
	<tr>
		<th>Antal</th>
		<th>EAN</th>
	</tr>

		<tr>
			<td>lul</td>
			<td>{{ $database->ean }}
		</tr>

</table>

@endsection