@extends('master')

@section('content')

	<h1>Nieuw bezoek</h1>
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-body">
			{!! Form::model(null, ['url' => 'visitations/'.$id, 'method' => 'post']) !!}
				<div class="form-group">
					{!! Form::label('patient_id', 'Patiënt id') !!}
					{!! Form::text('patient_id', $id, ['class' => 'form-control', 'disabled']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('description', 'Omschrijving') !!}		
					{!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Omschrijving']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('symptoms', 'Symptomen') !!}
					{!! Form::textarea('symptoms', null, ['class' => 'form-control', 'placeholder' => 'Symptomen', 'rows' => '3']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('date_arrival', 'Tijd aankomst') !!}
					<div class='input-group date datetimepicker'>
	                    <input type='text' name='date_arrival' class="form-control" />
	                    <span class="input-group-addon">
	                        <span class="glyphicon glyphicon-calendar"></span>
	                    </span>
                	</div>
				</div>
				<div class="form-group">
					{!! Form::label('date_discharged', 'Tijd ontslag') !!}
					<div class='input-group date datetimepicker'>
	                    <input type='text' name='date_discharged' class="form-control" />
	                    <span class="input-group-addon">
	                        <span class="glyphicon glyphicon-calendar"></span>
	                    </span>
                	</div>
				</div>
				<div class="form-group">
					{!! Form::label('emergency', 'Noodgeval') !!}
					{!! Form::checkbox('emergency', '1', false, ['class' => 'checkbox']) !!}
				</div>
				{!! Form::submit('Bezoek aamaken', ['class' => 'btn btn-primary']) !!}
			{!! Form::close() !!}
			@include('partials.form-errors')
			</div>
		</div>
	</div>
@include('partials.init-datetime-picker')
@stop

