@extends('master')



@section('content')
    <h1>Bezoek</h1>
    <hr>

    <div class="row">
        <div class="col-lg-12"> 
           
            
            <hr>
            <div class="row">
                    
                    <div class="col-md-12">

                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                                <div class="table-responsive">
                                    {{$visitation}}
                                    <table class="table">
                                        <tr>
                                            <th>Omschrijving</th>
                                            <th>Symptomen</th>
                                            <th>Datum aankomst</th>
                                            <th>Datum ontslagen</th>
                                        </tr>
                                        @if (isset($visitation))
                                        <tr>
                                            <td>{{$visitation->description}}</td>
                                            <td>{{$visitation->symptoms}}</td>
                                            <td>{{$visitation->date_arrival}}</td>
                                            <td>{{$visitation->date_discharged}}</td>
                                        </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>
                           
                        </div>
                    </div>

                </div> <!-- End row -->
                
        </div>
    </div>
@stop
