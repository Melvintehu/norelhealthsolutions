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
                                                        <th> Documentnummer </th>
                                                        <th> Noodtelefoonnummer </th>
                                                        <th> Naam </th>
                                                        <th> Achternaam </th>
                                                        <th> Geboortedatum </th>
                                                        <th> Gewicht </th>
                                                        <th> Bezoeken </th>
                                                        <th> Medische ingrepen </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>

                                                        <td> 123 </td>
                                                        <td> 0630063231 </td>
                                                        <td> Melvin </td>
                                                        <td> Tehubijuluw </td>
                                                        <td> 12 - 02 - 1992 </td>
                                                        <td> 80 kilo </td>
                                                        <td> 
                                                            <a href="visitations/<?php echo 1 ?>" class="btn btn-primary" role="button">Bekijken</a>
                                                        </td>
                                                        <td>
                                                            {!! Form::open(
                                                                array(

                                                                    'action' => 'MedicalOperationsController@getMedicalOperations'
                                                                    )

                                                                ) 
                                                            !!}
                                                                 <input type="submit" value="Bekijken" class="btn btn-primary" name="bekijken">
                                                            {!! Form::close() !!}
                                                        </td>

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
