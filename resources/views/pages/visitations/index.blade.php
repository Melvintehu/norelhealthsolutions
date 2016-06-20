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
                                                            <a class="btn btn-primary" role="button" href="/patient">Terug</a>
                                                        </td>
                                                    </tr>
                                                    <tr>

                                                        <th> Datum aankomst </th>
                                                        <th> Datum ontslagen </th>
                                                        <th> Tijdstip </th>
                                                        <th> Omschrijving </th>
                                                        <th> Symptomen </th>
                                                        <th> </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                	@foreach($visitations as $visitation)
                                                	<tr>
                                                		<td>{{ $visitation->date_arrival }}</td>
                                                		<td>{{ $visitation->date_discharged }}</td>
                                                		<td>{{ $visitation->patient->document_number }}</td>
                                                		<td>{{ $visitation->description }}</td>
                                                		<td>{{ $visitation->symptoms }}</td>
                                                		<td><a href="visitation/<?php echo $visitation->id ?>" class="btn btn-primary" role="button">View</a></td>
                                                	</tr>
                                                	@endforeach
                                                	<tr>
                                                		<td colspan="6"><a href="visitations/create">+ Nieuw bezoek TODO: patient id meegeven</a></td>
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
