@extends('master')



@section('content')
    <h1>Medische ingrepen Overzicht </h1>
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
                                                        <td>
                                                            {!! Form::open(
                                                                array(
                                                                    'url' => '/patients',
                                                                    )
                                                                ) 
                                                            !!}
                                                                 <input type="submit" value="Terug" class="btn btn-primary" name="bekijken">
                                                            {!! Form::close() !!}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    
                                                        <th> Datum </th>
                                                        <th> Titel </th>
                                                        <th> Omschrijving </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <tr>

                                                        <td> 13-06-2016 </td>
                                                        <td> Een titel van de ingreep </td>
                                                        <td> Een omschrijving van de ingreep </td>
                                                        
                                                    </tr>

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
