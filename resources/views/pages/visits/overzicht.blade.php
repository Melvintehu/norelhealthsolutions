@extends('master')



@section('content')
    <h1>Bezoeken Overzicht </h1>
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
                                                        <th> Tijdstip </th>
                                                        <th> Omschrijving </th>
                                                        <th> Symptomen </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td> 13-06-2016 </td>
                                                        <td> 13:16 </td>
                                                        <td> Een omschrijving van het bezoek </td>
                                                        <td> Moe, Hoofdpijn, pijn in de buik, slapeloosheid</td>
                                                    
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
