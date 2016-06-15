@extends('master')

@section('title')
    Medewerkers
@stop

@section('content')


    <h1>Medewerkers overzicht </h1>
    <hr>

    <div class="row">
        <div class="col-lg-12"> 
            
            <hr>
            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                                <div class='row'>
                                {!! Form::open(
                                    array(
                                        'method' => 'POST',
                                        'action' => 'EmployeesController@search'
                                        )
                                    )
                                !!}
                                        <div class="col-md-3 col-sm-3 col-xs-3">  
                                            <div class="form-group">
                                                <input type='text' name='last' placeholder='Achternaam..' class='form-control' required/>
                                            </div>
                                        </div>
                                        <div class='col-md-3 col-sm-3 col-xs-3'>
                                            <div class="form-group">
                                                <input type='submit' class='btn btn-primary' value='zoeken' />
                                            </div>
                                        </div>
                                        <div class='col-md-3 col-sm-3 col-xs-3'>
                                            <div class="form-group">
                                                <a href="{{ URL::to("../employee") }}"><i class="ion-close"></i> Verwijder filter</a>
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        
                                        <div class="table-responsive">        
                                            <table class="table table-hover">
                                            @if(!empty($employees[0]))
                                                <tr>
                                                    {!! $employees->render() !!}
                                                </tr>
                                                <thead>
                                                    <tr>
                                                        <th>#<span class='ion-arrow-down-b table-head'></span></th>
                                                        <th>Afdeling</th>
                                                        <th>Voornaam</th>
                                                        <th>Achternaam</th>
                                                        <th>Email</th>
                                                        <th>Volledig overzicht</th>
                                                        <th>Aanpassen</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($employees as $employee)
                                                       
                                                        <tr>
                                                            <td>{{ $employee->id }}</td>
                                                            <td>{{ $employee->department->name }}</td>
                                                             <td>{{ $employee->first_name }}</td>
                                                              <td>{{ $employee->last_name }}</td>
                                                               <td>{{ $employee->user->email }}</td>
                                                               {!! Form::open(
                                                                    array(
                                                                        'method' => 'GET',
                                                                        'action' => ['EmployeesController@show', $employee]
                                                                        )
                                                                    )
                                                                !!}
                                                               <td><input type='submit' class='btn btn-primary' value='overzicht' /></td>
                                                               {!! Form::close() !!}
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
                                                    @endforeach
                                                </tbody>
                                                @else
                                                    <tr>
                                                        <td>Er zijn geen werknemers gevonden.</td>
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
