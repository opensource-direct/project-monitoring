@extends('layouts.app')

@section('title','Data Reminder')

@section('contents')
<div id="content-wrapper" class="d-flex flex-column">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Reminder</h6>
        </div>
        <div class="card-body">
            {{-- PROGRESS REMINDER --}}
            <h4 class="small font-weight-bold" style="text-transform: uppercase;">REMINDER IS CLOSED<span
                class="float-right">{{ $percentage }}%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-success" role="progressbar" style="width: {{ $percentage }}%"
                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            {{-- TABLE LIST DATA REMINDER --}}
            <a href="{{ route('reminder.create') }}" class="btn btn-primary mb-3" style="box-shadow: 2px 2px 4px rgba(0.2, 0.2, 0.2, 0.2);">Tambah Data Reminder</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        @if($reminder->count() > 0)
                            <tr>
                                <th style="width: 5%;">No.</th>
                                <th style="width: 15%">Reminder Highlight</th>
                                <th>Detail Reminder</th>
                                <th style="width: 8%">Created by</th>
                                <th style="width: 10%">Project Name</th>
                                <th style="width: 8%">Status</th>
                                <th>Created at</th>
                                <th>Aksi</th>
                            </tr>
                        @else
                            <tr>
                                <th style="width: 5%; border-left: 1pt solid #e7e5e5;">No.</th>
                                <th style="width: 15%">Highlight Reminder</th>
                                <th>Detail Reminder</th>
                                <th style="width: 8%">Created by</th>
                                <th>Project Name</th>
                                <th style="width: 8%">Status</th>
                                <th>Created at</th>
                                <th>Aksi</th>
                            </tr>
                        @endif
                    </thead>
                    <tbody>
                        @if($reminder->count() > 0)
                            @php($no = 1)
                            @foreach($reminder as $item)
                                <tr>
                                    <td style="vertical-align: middle; text-align: center;">{{ $no++ }}</td>
                                    <td style="vertical-align: middle">{{ $item->reminder_title }}</td>
                                    <td style="vertical-align: middle">{{ $item->reminder_detail }}</td>
                                    <td style="vertical-align: middle">{{ $item->created_by }}</td>
                                    <td style="vertical-align: middle">{{ $item->project_name }}</td>
                                    @if ($item->status_notes == 1)
                                        <td style="text-align: center; vertical-align: middle;"><label class="btn btn-danger btn-sm mt-2" style="box-shadow: 2px 2px 4px rgba(0.2, 0.2, 0.2, 0.2);">Open</label></td>
                                    @else
                                        <td style="text-align: center; vertical-align: middle;"><label class="btn btn-success btn-sm mt-2" style="box-shadow: 2px 2px 4px rgba(0.2, 0.2, 0.2, 0.2);">Closed</label></td>
                                    @endif
                                    <td style="vertical-align: middle">{{ $item->created_at }}</td>
                                    <td style="vertical-align: middle">
                                        <div style="flex-direction: column">
                                            <a href="{{ route('reminder.edit', $item->id) }}" class="btn btn-primary btn-sm" style="width: 100%; box-shadow: 2px 2px 4px rgba(0.2, 0.2, 0.2, 0.2);">Preview</a>
                                            @if ($item->status_notes == 1)
                                                <a href="{{ route('reminder.close', $item->id) }}" class="btn btn-success btn-sm mt-1" style="width: 100%;">Close</a>
                                            @else
                                                <a href="{{ route('reminder.open', $item->id) }}" class="btn btn-danger btn-sm mt-1" style="width: 100%; box-shadow: 2px 2px 4px rgba(0.2, 0.2, 0.2, 0.2);">Re-Open</a>
                                            @endif
                                            <a href="{{ route('reminder.delete', $item->id) }}" class="btn btn-danger btn-sm mt-1" style="width: 100%; box-shadow: 2px 2px 4px rgba(0.2, 0.2, 0.2, 0.2);">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="8" style="text-align: center; border-width: 1px;">Tidak ada data terecord dalam database</td>
                            </tr>  
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection