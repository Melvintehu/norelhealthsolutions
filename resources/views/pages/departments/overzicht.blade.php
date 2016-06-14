@extends('master')

@section('title')
    Afdeling
@stop

@section('content')
    <h1>Afdeling overzicht </h1>
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
                                            <table class="table table-hover">
                                                <tr>
                                                    {!! $departments->render() !!}
                                                </tr>
                                                <thead>
                                                    <tr>
                                                        <th>#<span class='ion-arrow-down-b table-head'></span></th>
                                                        <th>Afdeling naam</th>
                                                        <th>Aanpassen</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($departments as $department)
                                                        <tr>
                                                            <td>{{ $department->id }}</td>
                                                            <td>{{ $department->name }}</td>

                                                                <td><input type='submit' class='btn btn-primary' value='aanpassen' /></td>

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
