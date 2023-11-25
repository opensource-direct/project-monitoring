@extends('layouts.app')

@section('title', isset($reminder) ? 'Edit Reminder' : 'Tambah Reminder')

@section('contents')
<form action="{{ isset($reminder) ? route('reminder.update', $reminder->id) : route('reminder.store') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($reminder) ? 'Form Kelola Reminder' : 'Form Tambah Reminder' }}</h6>
                </div>
                <div class="card-body">
                    <label for="reminder_title">Reminder Title</label>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M168.2 384.9c-15-5.4-31.7-3.1-44.6 6.4c-8.2 6-22.3 14.8-39.4 22.7c5.6-14.7 9.9-31.3 11.3-49.4c1-12.9-3.3-25.7-11.8-35.5C60.4 302.8 48 272 48 240c0-79.5 83.3-160 208-160s208 80.5 208 160s-83.3 160-208 160c-31.6 0-61.3-5.5-87.8-15.1zM26.3 423.8c-1.6 2.7-3.3 5.4-5.1 8.1l-.3 .5c-1.6 2.3-3.2 4.6-4.8 6.9c-3.5 4.7-7.3 9.3-11.3 13.5c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c5.1 0 10.2-.3 15.3-.8l.7-.1c4.4-.5 8.8-1.1 13.2-1.9c.8-.1 1.6-.3 2.4-.5c17.8-3.5 34.9-9.5 50.1-16.1c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9zM144 272a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm144-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm80 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg></span>
                        </div>
                        <input type="text" class="form-control" id="reminder_title" name="reminder_title" value="{{ isset($reminder) ? $reminder->reminder_title : '' }}" placeholder="{{ isset($reminder) ? $reminder->reminder_title : 'Inputkan title reminder' }}">
                    </div>
                    <label for="reminder_detail">Reminder Details</label>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#3a4d4d}</style><path d="M64 464c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H224v80c0 17.7 14.3 32 32 32h80V448c0 8.8-7.2 16-16 16H64zM64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V154.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0H64zm56 256c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120z"/></svg>
                            </span>
                        </div>
                        <textarea type="text" class="form-control" id="reminder_detail" name="reminder_detail" style="height: 200px" placeholder="{{ isset($reminder) ? $reminder->reminder_title : 'Isikan juga detail reminder' }}">{{ isset($reminder) ? $reminder->reminder_detail : '' }}</textarea>
                    </div>
                    <label for="created_by">Created by</label>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#00676e}</style><path d="M406.5 399.6C387.4 352.9 341.5 320 288 320H224c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3h64c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z"/></svg>
                            </span>
                        </div>
                        <input type="text" class="form-control" id="created_by" name="created_by" value="{{ isset($reminder) ? $reminder->created_by : Auth::user()->name }}" {{ isset($reminder) ? null : 'readonly' }}>
                    </div>
                    <label for="project_name">Project</label>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#334b4b}</style><path d="M16.1 260.2c-22.6 12.9-20.5 47.3 3.6 57.3L160 376V479.3c0 18.1 14.6 32.7 32.7 32.7c9.7 0 18.9-4.3 25.1-11.8l62-74.3 123.9 51.6c18.9 7.9 40.8-4.5 43.9-24.7l64-416c1.9-12.1-3.4-24.3-13.5-31.2s-23.3-7.5-34-1.4l-448 256zm52.1 25.5L409.7 90.6 190.1 336l1.2 1L68.2 285.7zM403.3 425.4L236.7 355.9 450.8 116.6 403.3 425.4z"/></svg>    
                            </span>
                        </div>
                        <input type="text" class="form-control" id="project_name" name="project_name" value="{{ isset($reminder) ? $reminder->project_name : '' }}"  placeholder="{{ isset($reminder) ? $reminder->reminder_title : 'Inputkan nama project terkait' }}">
                    </div>
                    <label for="status_notes">Pilih Status</label>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256-96a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/></svg>    
                            </span>
                        </div>
                        <select name="status_notes" id="status_notes" class="form-control" >
                            @foreach ($status_cases as $status_case)
                            <option value="{{$status_case->value}}">{{ $status_case->name }}</option>
                            @endforeach
                          </select>
                        {{-- <input type="text" class="form-control" id="status_notes" name="status_notes" value="{{ isset($reminder) ? $reminder->status_notes : '' }}"> --}}
                    </div>
                </div>
                <div class="card-footer">
                    <button style="submit; box-shadow: 2px 2px 4px rgba(0.2, 0.2, 0.2, 0.2);" class="btn btn-primary mr-2">{{ isset($reminder) ? 'Update' : 'Simpan' }}</button>
                    <a href="{{ route('reminder.index') }}" class="btn btn-secondary" style="box-shadow: 2px 2px 4px rgba(0.2, 0.2, 0.2, 0.2);">Batalkan</a>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
