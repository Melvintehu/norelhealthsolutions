@extends('master')

@section('title')
    Toevoegen
@stop

@section('content')
    <h1>Afdeling toevoegen </h1>
    <hr>

    <div class="row">
        <div class="col-lg-12"> 
            
            <hr>
            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        
                                        <div class="table-responsive">        
                                            <div>
                                                {!! Form::open(
                                                    array(
                                                        'method' => 'POST',
                                                        'action' => 'DepartmentsController@store'
                                                        )
                                                    )
                                                !!}
                                                    <div class='form-group'>
                                                        <input type='text' class='form-control' name='name' required/>
                                                    </div>
                                                    <div class='form-group'>
                                                        <input type='submit' class='btn btn-primary' value='Toevoegen' />
                                                    </div>
                                                {!! Form::close() !!}
                                            </div>
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
