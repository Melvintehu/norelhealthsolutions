@extends('master')



@section('content')

<!-- Pusher -->
<script src="https://js.pusher.com/3.1/pusher.min.js" type="text/javascript"></script>

    <h1>Jobs Overzicht </h1>
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
                                                        <th> # </th>
                                                        <th> Naam </th>
                                                        <th> Tier </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($data['jobs'] as $job)
                                                    <tr>
                                                        <td> {{ $job->id }} </td>
                                                        <td> {{ $job->name }} </td>
                                                        <td> {{ $job->tier }} </td>
                                                        <td >
                                                            {!! Form::open([
                                                                'method' => 'delete', 
                                                                'action' => [
                                                                                'JobController@destroy',  
                                                                                $job->id 
                                                                            ]  
                                                            ]) 
                                                            !!}
                                                                
                                                            <td> <input type="submit" name="verwijderen" value="verwijderen" class="btn btn-danger"> </td>

                                                            {!! Form::close() !!}  
                                                        </td>
                                                        <td >
                                                            {!! Form::open([
                                                                'method' => 'GET', 
                                                                'action' => [
                                                                                'JobController@show',  
                                                                                $job->id 
                                                                            ]  
                                                            ]) 
                                                            !!}
                                                        <td> <input type="submit" name="aanpassen" value="aanpassen" class="btn btn-primary"> </td>                                                              
                                                            {!! Form::close() !!}  
                                                        </td>    
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                       
                                        <script type="text/javascript">
                                            Pusher.logToConsole = true;

                                            var pusher = new Pusher('c55ddaae77712160de12', {
                                              cluster: 'eu',
                                              encrypted: true
                                            });

                                            var channel = pusher.subscribe('updates');
                                            channel.bind('job_added', function(data) {
                                                

                                                alert(data.message);
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>

                </div> <!-- End row -->
                
        </div>
    </div>
@stop


