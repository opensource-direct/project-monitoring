@extends('layouts.app')

@section('title','Kelola Users')

@section('contents')
<div id="content-wrapper" class="d-flex flex-column">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Users</h6>
        </div>
        <div class="card-body">
            <a href="#" class="btn btn-primary mb-3" style="box-shadow: 2px 2px 4px rgba(0.2, 0.2, 0.2, 0.2);">Tambah Data User Baru</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        @if($users->count() > 0)                            
                            <tr>
                                <th style="width: 0%;">No.</th>
                                <th style="width: 0%">Nama Lengkap</th>
                                <th style="width: 0%; text-align: center"">Photo Profile</th>
                                <th>Email</th>
                                <th style="width: 0%">Role</th>
                                <th>Terdaftar pada</th>
                                <th style="width: 6%">Aksi</th>
                            </tr>
                        @else
                            <tr>
                                <th style="width: 0%; border-left: 1pt solid #e7e5e5;">No.</th>
                                <th style="width: 0%">Nama Lengkap</th>
                                <th style="width: 0%">Photo Profile</th>
                                <th>Email</th>
                                <th style="width: 0%">Role</th>
                                <th>Terdaftar pada</th>
                                <th>Aksi</th>
                            </tr>
                        @endif
                    </thead>
                    <tbody>
                        @if($users->count() > 0)
                            @php($no = 1)
                            @foreach($users as $item)
                                <tr>
                                    <td style="vertical-align: middle; text-align: center">{{ $no++ }}</td>
                                    <td style="vertical-align: middle">{{ $item->name }} ({{ $item->username  }})</td>
                                    <td style="vertical-align: middle; text-align: center">
                                        @if ($item->user_picture === NULL)
                                            <img src="{{ asset('sbadmin') }}/img/undraw_profile.svg" alt="User Picture" width="50" style="border-radius: 50%;">
                                        @else
                                            <img src="{{ asset('sbadmin') }}/img/{{ $item->user_picture }}" alt="User Picture" width="50" style="border-radius: 50%;">
                                        @endif
                                    </td>
                                    <td style="vertical-align: middle">{{ $item->email }}</td>
                                    <td style="vertical-align: middle">
                                        @if ($item->role === "1")
                                            Administrator
                                        @elseif($item->role === "2")
                                            Staff
                                        @endif
                                    </td>
                                    <td style="vertical-align: middle">{{ $item->created_at }}</td>
                                    <td style="vertical-align: middle">
                                        <div style="flex-direction: column">
                                            <a href="{{ route('users.edit', $item->id) }}" class="btn btn-primary btn-sm" style="width: 100%; box-shadow: 2px 2px 4px rgba(0.2, 0.2, 0.2, 0.2);">Preview</a>
                                            @if ($item->role === "1")
                                                {{-- NO ACTION FOR ADMINISTRATOR --}}
                                            @elseif($item->role === "2")
                                                <a href="{{ route('reminder.delete', $item->id) }}" class="btn btn-danger btn-sm mt-1" style="width: 100%; box-shadow: 2px 2px 4px rgba(0.2, 0.2, 0.2, 0.2);">Hapus</a>
                                            @endif
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