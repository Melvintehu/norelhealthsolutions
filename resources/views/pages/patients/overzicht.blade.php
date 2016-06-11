@extends('master')



@section('content')
    <h1>Patienten Overzicht </h1>
    <hr>

    <div class="row">
        <div class="col-lg-12"> 
           
            
            <hr>
            <div class="row">
                    
                    <div class="col-md-12">

                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                       
                                        <div class="table-responsive">

                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Afdeling</th>
                                                        <th>Voornaam</th>
                                                        <th>Achternaam</th>
                                                        <th>Email</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    @foreach ($employees as $employee)
                                                        <tr>
                                                            <td>{{ $employee->id }}</td>
                                                            <td>{{ $employee->department_id }}</td>
                                                             <td>{{ $employee->first_name }}</td>
                                                              <td>{{ $employee->last_name }}</td>
                                                               <td>{{ $employee->emailadres }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
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
