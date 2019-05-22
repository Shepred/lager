@extends('layout.master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-6">
			<div class="jumbotron jumbotron-fluid">
				<div class="container">
    				<h1 class="display-4">Søg efter varekode</h1>
					<form class="form-inline" method="post" action="{{ url('/sku/search') }}">
						@csrf
						<input class="form-control" type="text" name="sku"/>&nbsp;
						<input class="btn btn-submit" type="submit" value="Søg!"/>
					</form>
  				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="jumbotron jumbotron-fluid">
				<div class="container">
    				<h1 class="display-4">Søg efter position</h1>
					<form class="form-inline" method="post" action="{{ url('/position/search') }}">
						@csrf
						<input class="form-control" type="text" name="position"/>&nbsp;
						<input class="btn btn-submit" type="submit" value="Søg!"/>
					</form>
  				</div>
			</div>
		</div>
	</div>
</div>
@endsection

