@extends('master')



@section('content')
    <h1>Patienten Overzicht </h1>
    <hr>

    <div class="row">
        <div class="col-lg-12"> 
           
            
            <hr>
            <div class="row">
                    
                    <div class="col-md-4">

                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                                
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <h2>Personalia</h2>
                                        <div class="table-responsive">

                                            <table class="table table-hover">
                                                <tbody>
                                                    <tr>
                                                        <th> Documentnummer </th>
                                                        <td> {{ $data['patient']->document_number }} </td>
                                                    </tr>
                                                    <tr>
                                                        <th> Noodtelefoonnummer </th>
                                                        <td> {{ $data['patient']->telephone_number }} </td>
                                                    </tr>
                                                    <tr>
                                                        <th> Naam </th>
                                                        <td> {{ $data['patient']->first_name }} </td>

                                                    </tr>
                                                        <th> Achternaam </th>
                                                        <td> {{ $data['patient']->last_name }}</td>

                                                    </tr>
                                                    <tr>
                                                        <th> Geboortedatum </th>
                                                        <td> {{ str_limit($data['patient']->date_of_birth['date'], 10, $end = "") }} </td>

                                                    </tr>
                                                    <tr>
                                                        <th> Gewicht </th>
                                                        <td> {{ $data['patient']->weight }} <strong> KG </strong></td>

                                                    </tr>
                                                        
                                                    
                                                </tbody>
                                            
                                              

                                            </table>


                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>

               
                    
                    <div class="col-md-8">

                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                       <h2>Huidige medicijnen</h2>
                                        <div class="table-responsive">

                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th> Date Start </th>
                                                       
                                                        <th> Name </th>
                                                        <th> Description </th>
                                                        <th> Dosage </th>

                                                    </tr>
                                                </thead>
                                                <tbody>



                                                    @foreach($data['current_medicines'] as $medicine)
                                                    <tr>
                                                    
                                                        <td> {{str_limit($medicine->date_start['date'], 10, $end = "")  }} </td>
                                                        
                                                        <td><strong> {{ $medicine->name }}</strong> </td>
                                                        <td> {{ $medicine->description}} </td>
                                                        <td> {{ $medicine->dosage }} <strong>ml </strong> </td>

                                                    </tr>
                                                    @endforeach
                                                         @if($data['current_medicines']->isEmpty())
                                                         <td>   Geen data. </td>
                                                        @endif

                                                </tbody>
                                            </table>

                                            
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>

                </div> <!-- End row -->
                <div class="row">
                    
                    <div class="col-md-12">

                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <h2>Medicatie historie</h2>
                                        <div class="table-responsive">

                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th> Date Start </th>
                                                        <th> Date End </th>
                                                        <th> Name </th>
                                                        <th> Description </th>
                                                        <th> Dosage </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($data['medicines_history'] as $medicine)
                                                    <tr>

                                                        <td> {{  str_limit($medicine->date_start['date'], 10, $end = "") }} </td>
                                                        <td> {{ str_limit( $medicine->date_end['date'], 10, $end = "")  }} </td>
                                                        <td> <strong>{{ $medicine->name }} </strong> </td>
                                                        <td> {{ $medicine->description}} </td>
                                                        <td> {{ $medicine->dosage }} <strong>ml </strong> </td>


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
                <div class="row">
                    
                    <div class="col-md-12">

                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <h2>Medische ingrepen</h2>
                                        <div class="table-responsive">

                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th> Datum </th>
                                                        <th> Description </th>
                                                        <th> Name </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($data['EpdMedicalProcedure'] as $EpdMedicalProcedure)
                                                    <tr>

                                                        <td> {{str_limit($EpdMedicalProcedure->date['date'], 10, $end = "")  }} </td>
                                                        <td> {{ $EpdMedicalProcedure->description }} </td>
                                                        <td> {{ $EpdMedicalProcedure->name }} </td>
                                                        

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
