@extends('layouts/base')

{{-- Page title --}}
@section('title')

@parent
@stop

<!-- User Sidebar -->
@include('simulation/_simulation-sidebar')

{{-- Page content --}}
@section('content')

<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            Simulation of Attrition Using Region
        </h1>
    </div>
</div>
<!-- /. ROW  -->

<!-- Input and Results Charts -->
@include('simulation/region/_region-total')

@stop

@section('javascript')

@include('simulation/region/scripts/_region-total-scripts')

@stop