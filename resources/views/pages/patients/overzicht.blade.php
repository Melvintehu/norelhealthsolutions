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
                                <div class='row'>
                                {!! Form::open(
                                    array(
                                        'method' => 'POST',
                                        'action' => 'PatientsController@search'
                                        )
                                    )
                                !!}
                                        <div class="col-md-3 col-sm-3 col-xs-3">  
                                            <div class="form-group">
                                                <input type='text' name='last' placeholder='Achternaam..' class='form-control' />
                                            </div>
                                        </div>

                                        <div class='col-md-3 col-sm-3 col-xs-3'>
                                            <div class="form-group">
                                                <input type='submit' class='btn btn-primary' value='zoeken' />
                                            </div>
                                        </div>
                                        <div class='col-md-3 col-sm-3 col-xs-3'>
                                            <div class="form-group">
                                                <a href="{{ URL::to("../patient") }}"><i class="ion-close"></i> Verwijder filter</a>
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                    </div>
                                </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                       
                                        <div class="table-responsive">




                                            <table class="table table-striped">
                                                <tr> 
                                                {!! $data['patients']->render() !!}
                                                </tr>

                                                <thead>

                                                    <tr>
                                                        <th> Documentnummer </th>
                                                        <th> Noodtelefoonnummer </th>
                                                        <th> Naam </th>
                                                        <th> Achternaam </th>
                                                        <th> Geboortedatum </th>
                                                        <th> Gewicht </th>
                                                        <th> Details </th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                 @foreach($data['patients'] as $patient)
                                                    <tr>
                                                        <td> {{ $patient->document_number }} </td>
                                                        <td> {{ $patient->telephone_number }} </td>
                                                        <td> {{ $patient->first_name }} </td>
                                                        <td> {{ $patient->last_name }}</td>
                                                        <td> {{ str_limit( $patient->date_of_birth['date'], 10, $end = "") }} </td>
                                                        <td> {{ $patient->weight }}<strong> KG </strong></td>
                                                    
                                                        <td> 
                                                            {!! 
                                                            Form::open(
                                                                array(
                                                                    'method' => 'GET',
                                                                    'action' => ['PatientsController@show', $patient->document_number]   
                                                                )
                                                            ) 
                                                            !!}

                                                                 <input type="submit" value="Bekijken" class="btn btn-primary" > 


                                                            {!! Form::close() !!}

                                                        </td>
                                                      

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
