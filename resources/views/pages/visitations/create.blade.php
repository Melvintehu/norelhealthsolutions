@extends('master')

@section('content')

	<h1>Nieuw bezoek</h1>
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-body">
			{!! Form::open(['action' => 'PatientVisitsController@index', 'method' => 'post']) !!}
				<div class="form-group">
					{!! Form::label('documentNumber', 'Documentnummer') !!}
					{!! Form::text('documentNumber', null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('description', 'Omschrijving') !!}		
					{!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Omschrijving']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('date_arrival', 'Datum aankomst') !!}
					{!! Form::date('date_arrival', \Carbon\Carbon::now()->subDays(3), ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('date_discharged', 'Datum ontslag') !!}
					{!! Form::date('date_discharged', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('emergency', 'Noodgeval') !!}
					{!! Form::checkbox('emergency', '1', false, ['class' => 'checkbox']) !!}
				</div>
				{!! Form::submit('Bezoek aamaken', ['class' => 'btn btn-primary']) !!}
			{!! Form::close() !!}
			</div>
		</div>
	</div>

@stop