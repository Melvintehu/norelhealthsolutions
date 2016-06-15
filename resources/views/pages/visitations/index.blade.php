@extends('master')

@section('content')

	<table>
		<tr>
			@foreach($visitations as $visitation)
				{{ $visitation }}
				<br>
			@endforeach
		</tr>
	</table>

@stop