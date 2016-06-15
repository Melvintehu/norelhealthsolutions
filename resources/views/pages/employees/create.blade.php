@extends('master')

@section('title')
    Toevoegen medewerker
@stop

@section('content')
    <h1>Medewerkers toevoegen </h1>
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
                                            {!! Form::open(['method' => 'POST', 'action' => 'EmployeesController@store' ]) !!}

                                                <table class="table table-hover">
                                                    <tbody>
                                                    
                                                        <tr>
                                                           <td>
                                                                {!! Form::label('first_name', ' Voornaam ') !!} 
                                                                {!! Form::text('first_name', null, ['class' => 'form-control']); !!} 
                                                           </td>
                                                        </tr>
                                                        <tr>
                                                           <td> 
                                                                {!! Form::label('last_name', ' Achternaam ') !!} 
                                                                {!! Form::text('last_name', null, ['class' => 'form-control']); !!}
                                                           </td>

                                                        </tr>
                                                        <tr>
                                                           <td> 
                                                                {!! Form::label('email', ' Emailadres ') !!} 
                                                                {!! Form::text('email', null, ['class' => 'form-control']); !!}
                                                           </td>

                                                        </tr>
                                                        <tr>
                                                           <td> 
                                                                {!! Form::label('password', ' Password ') !!} 
                                                                {!! Form::password('password', ['class' => 'form-control']); !!}
                                                           </td>

                                                        </tr>
                                                        <tr>
                                                           <td> 
                                                                {!! Form::label('department', ' Afdeling toewijzen') !!} 
                                                                {!! Form::select('department_id', $data['departments'], null,['class' => 'form-control'] ) !!}
                                                           </td>

                                                        </tr>
                                                        <tr>
                                                           <td> 
                                                                {!! Form::label('job', ' Baan toewijzen') !!} 
                                                                
                                                                 {!! Form::select('job_id', $data['jobs'],null, ['class' => 'form-control'] ) !!}
                                                           </td>

                                                        </tr>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="submit" value="opslaan" class="btn btn-primary" name="opslaan">   
                                                            </td>
                                                        </tr> 

                                                    </tbody>
                                                </table>
                                            {!! Form::close() !!}
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
