@extends('master')

@section('content')

	<table>
		<tr>
			@foreach($visitations as $visitation)
				{{ $visitation }}
			@endforeach
		</tr>
	</table>

@stop