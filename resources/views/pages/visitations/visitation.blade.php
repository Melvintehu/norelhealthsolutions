@extends('master')



@section('content')
    <div class="row">
        <div class="col-lg-12"> 
           
            
            <hr>
            <div class="row">
                    
                    <div class="col-md-12">

                        <div class="panel panel-default">
                            <h2>Bezoek</h2>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Omschrijving</th>
                                            <th>Symptomen</th>
                                            <th>Datum aankomst</th>
                                            <th>Datum ontslagen</th>
                                            <th>Noodgeval</th>
                                        </tr>
                                        @if (isset($visitation))
                                        <tr>
                                            <td>{{$visitation->description}}</td>
                                            <td>{{$visitation->symptoms}}</td>
                                            <td>{{$visitation->date_arrival}}</td>
                                            <td>{{$visitation->date_discharged}}</td>
                                            <td>{!! $visitation->emergency == 1 ? '<i class="ion-checkmark"></i>' : '<i class="ion-close"></i>' !!}</td>
                                        </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>
                           
                        </div>
                        <div class="panel panel-default">
                            <h2>Personeel</h2>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Voornaam</th>
                                            <th>Achternaam</th>
                                            <th>Van</th>
                                            <th>Tot</th>
                                        </tr>
                                        @if(isset($visitation->employees))
                                        @foreach($visitation->employees()->get() as $employees)
                                        <tr>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                        @endif
                                        <tr>
                                            <td colspan="4"><a href="{{$visitation->id}}/add-employee"><i class="ion-plus-round"></i>Personeel toevoegen</a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                           
                        </div>
                    </div>

                </div> <!-- End row -->
                
        </div>
    </div>
@stop
