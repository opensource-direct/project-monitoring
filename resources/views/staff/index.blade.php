@extends('layouts.app')

@section('title','Dashboard')

@section('contents')
<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <a href="#" style="text-decoration: none">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xl font-weight-bold text-danger mb-1">
                                <span class="badge badge-warning">Waiting to Test</span>&nbsp;&nbsp;<span class="badge badge-success">In Assign</span></div>
                                <h4 class="small font-weight-bold mt-2" style="text-transform: capitalize; margin-right: 1px; font-size: 17px; color: #36b9cc">Testing Tickets Available<span class="float-right">2/10</span></h4>
                            <div class="progress progress-lg">
                                <div class="progress-bar bg-info" role="progressbar"
                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <a href="#" style="text-decoration: none">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xl font-weight-bold text-danger mb-1">
                                <span class="badge badge-danger">Waiting to Validate</span></div>
                                <h4 class="small font-weight-bold mt-2" style="text-transform: capitalize; margin-right: 1px; font-size: 17px; color: #e74a3b">Issue & Bug<span class="float-right">7/25</span></h4>
                            <div class="progress progress-lg">
                                <div class="progress-bar bg-danger" role="progressbar"
                                    style="width: 25%" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection