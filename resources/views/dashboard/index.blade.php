@extends('layouts.app')

@section('title','Dashboard')

@section('contents')
<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <a href="{{ route('reminder') }}" style="text-decoration: none">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xl font-weight-bold text-primary mb-1">
                                Reminder Task Open</div>
                            <div class="h5 mb-0 font-weight-bold" style="color: #4e73df; font-size: 35px;">{{ $data['reminderCount'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-thumbtack fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection