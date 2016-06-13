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
                                                <a href="{{ URL::to("../employees") }}"><i class="ion-arrow-left-c"></i> Ga terug</a>
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
                                                            <td>{{ $employee->department_id }}</td>
                                                             <td>{{ $employee->first_name }}</td>
                                                              <td>{{ $employee->last_name }}</td>
                                                               <td>{{ $employee->emailadres }}</td>
                                                                <td><input type='submit' class='btn btn-primary' value='aanpassen' /></td>
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <h2>Werkzaamheden</h2>

                                        GESCHIEDENIS PER ROW HIER
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>

                </div> <!-- End row -->
                
        </div>
    </div>
@stop
