@extends('layouts.app')

@section('title', isset($reminder) ? 'Kelola Reminder' : 'Tambah Reminder')

@section('contents')
{{-- {{ dd($reminder->reminder_detail) }} --}}
<form action="{{ isset($reminder) ? route('reminder.update', $reminder->id) : route('reminder.store') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($reminder) ? 'Form Kelola Reminder' : 'Form Tambah Reminder' }}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="reminder_title">Reminder Title</label>
                        <input type="text" class="form-control" id="reminder_title" name="reminder_title" value="{{ isset($reminder) ? $reminder->reminder_title : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="reminder_detail">Reminder Details</label>
                        <textarea type="text" class="form-control" id="reminder_detail" name="reminder_detail" style="height: 400px">{{ isset($reminder) ? $reminder->reminder_detail : '' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="created_by">Created by</label>
                        <input type="text" class="form-control" id="created_by" name="created_by" value="{{ isset($reminder) ? $reminder->created_by : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="status_notes">Status</label>
                        <input type="text" class="form-control" id="status_notes" name="status_notes" value="{{ isset($reminder) ? $reminder->status_notes : '' }}">
                    </div>
                </div>
                <div class="card-footer">
                    <button style="submit" class="btn btn-primary mr-2">{{ isset($reminder) ? 'Update' : 'Simpan' }}</button>
                    <a href="{{ route('reminder') }}" class="btn btn-secondary">Batalkan</a>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection