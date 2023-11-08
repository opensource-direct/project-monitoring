@extends('layouts.app')

@section('title','Data Reminder')
@php
use App\Lib\ReminderStatus;
@endphp

@section('contents')
<div id="content-wrapper" class="d-flex flex-column">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Reminder</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('reminder.create') }}" class="btn btn-primary mb-3">Tambah Data Reminder</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th style="width: 15%">Reminder Info</th>
                            <th>Detail Reminder</th>
                            <th style="width: 8%">Created by</th>
                            <th style="width: 8%">Status</th>
                            <th>Created at</th>
                            <th style="width: 12%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($reminder->count() > 0)
                            @php($no = 1)
                            @foreach($reminder as $item)
                                <tr>
                                    <td style="vertical-align: middle">{{ $no++ }}</td>
                                    <td style="vertical-align: middle">{{ $item->reminder_title }}</td>
                                    <td style="vertical-align: middle">{{ $item->reminder_detail }}</td>
                                    <td style="vertical-align: middle">{{ $item->created_by }}</td>
                                    @if ($item->status_notes == ReminderStatus::OPEN->value)
                                        <td><label class="btn btn-outline-danger disabled">Checked Open</label></td>
                                    @else
                                        <td><label class="btn btn-outline-success disabled">Checked Close</label></td>
                                    @endif
                                    <td style="vertical-align: middle">{{ $item->created_at }}</td>
                                    <td style="vertical-align: middle">
                                        <a href="{{ route('reminder.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        @if ($item->status_notes == ReminderStatus::OPEN->value)
                                            <a href="{{ route('reminder.close', $item->id) }}" class="btn btn-primary btn-sm">Close</a>
                                        @else
                                            <a href="{{ route('reminder.open', $item->id) }}" class="btn btn-info btn-sm">Open</a>
                                        @endif
                                        <a href="{{ route('reminder.delete', $item->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="8" style="text-align: center">Tidak ada data terecord dalam database</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
