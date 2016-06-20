@extends('master')

@section('content')

	<h1>Voeg medewerker toe</h1>
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-body">
				{!! Form::model(null, ['url' => ]) !!}
					<div class="form-group">
						{!! Form::label('employees', 'Medewerker') !!}
						{!! Form::select('employees', $employees, null, ['class' => 'form-control', 'placeholder' => 'Kies een medewerker...']) !!}
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>

@stop