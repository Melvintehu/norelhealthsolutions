@extends('master')

@section('title')
    Dashboard
@stop

@section('content')
	  <div class="row">
        <div class="col-lg-12"> 
            
            <hr>
            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <h2>Statistieken</h2>
                        	<div class="panel-body">
                        		<div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                     	<h3>Er zijn {{ $data['employee']->count() }} werknemers</h3>

                                     	<canvas id='graph' data-amount='{{ $data['employee']->count() }}'> </canvas>
                                    </div>
                                </div>
                                <br/>
                                <?php
                                    $departmentArray = '';
                                    $departmentCounter = '';
                                    $departmentCount = $data['departmentCount']->count();

                                    foreach($data['department'] as $department) {
                                      $departmentArray .= $department->name . ",";
                                      $departmentCounter .= $department->employees()->count() . ",";
                                    }
                                ?>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <h3>Er zijn {{ $departmentCount }} afdelingen</h3>
                                     	<canvas id='employee_graph' data-department='{{ $departmentArray }}' data-count='{{ $departmentCounter }}'></canvas>
                                    </div>
                        	</div>
                        </div>
                    </div>
            </div>
        </div>
     </div>
@stop