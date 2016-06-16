@extends('master')

@section('title')
    Overzicht
@stop

@section('content')


    <h1>{{ $employee->first_name }} {{ $employee->last_name }}</h1>
    <hr>

    <div class="row">
        <div class="col-lg-12"> 
            
            <hr>
            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                                <div class='row'>
                                        <div class='col-md-3 col-sm-3 col-xs-3'>
                                            <div class="form-group">
                                                <a href="{{ URL::to("../employee") }}"><i class="ion-arrow-left-c"></i> Ga terug</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        
                                        <div class="table-responsive">        
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#<span class='ion-arrow-down-b table-head'></span></th>
                                                        <th>Afdeling</th>
                                                        <th>Voornaam</th>
                                                        <th>Achternaam</th>
                                                        <th>Email</th>
                                                        <th>Aanpassen</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                            <td>{{ $employee->id }}</td>
                                                            <td>{{ $employee->department->name }}</td>
                                                             <td>{{ $employee->first_name }}</td>
                                                              <td>{{ $employee->last_name }}</td>
                                                               <td>{{ $employee->user->email }}</td>
                                                                {!! Form::open(
                                                                    array(
                                                                        'method' => 'GET',
                                                                        'action' => ['EmployeesController@edit', $employee->id ]
                                                                        )
                                                                    )
                                                                !!} 
                                                                <td><input type='submit' class='btn btn-primary' value='aanpassen' /></td>
                                                                {!! Form::close() !!}
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <h2>Werkzaamheden</h2>
                                        <div class="table-responsive">        
                                            <table class="table table-hover">
                                            @if(!empty($employee->jobs[0]))
                                                <tr>
                                                   
                                                </tr>
                                                <thead>
                                                    <tr>
                                                        <th>Baan</th>
                                                        <th>Begindatum</th>
                                                        <th>Einddatum</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($employee->jobs->reverse() as $job)
                                                    <tr>
                                                        <td>{{ $job->name }} </td>
                                                        <td>{{ $job->pivot->date_start }} </td>
                                                        <td>@if ($job->pivot->date_end == "0000-00-00 00:00:00")
                                                            {{ $job->pivot->date_end = "Heden" }}
                                                        @else
                                                             {{ $job->pivot->date_end }}
                                                        @endif </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            @else
                                                <tr>
                                                    Geen werkzaamheden gevonden.
                                                </tr>
                                            @endif
                                            </table>
                                        </div>


                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>

                </div> <!-- End row -->
                
        </div>
    </div>
@stop
