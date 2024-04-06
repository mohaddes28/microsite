@extends('layouts.admin-master')

@section('title')
    Apps
@endsection
@section('body')
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Apps</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <span class="card-subtitle">Apps</span>
                <a href="{{ route('admin.apps.create') }}" class="btn btn-sm btn-primary float-end"><i
                        class='bx bx-plus'></i> Add Apps</a>
            </div>
            <div class="card-body">
                @include('templates.alert')
                <div class="row">
                    <div class="col-12 mt-2">
                        <table class="table table-sm table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">#SL</th>
                                <th>Version</th>
                                <th>File Size</th>
                                <th>Latest</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($apps as $row)
                                <tr>
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td>{{ $row->version }}</td>
                                    <td>{{ $row->file_size }}</td>
                                    <td>{{ $row->latest }}</td>
                                    <td class="text-center text-nowrap">
                                        <form class="btn-group-sm" id="delete-form-{{ $row->id }}"
                                              action="{{ route('admin.apps.destroy', $row->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('admin.apps.edit', $row->id) }}" type="button"
                                               class="btn btn-sm btn-warning"><i class='bx bx-message-edit'></i></a>
                                            <button type="button" onclick="ConfirmForm('delete-form-{{ $row->id }}')"
                                                    class="btn btn-danger btn-sm"><i class='bx bx-trash'></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="col-12">
                        <div class="float-end mt-3">{{ $apps->links('pagination::bootstrap-4') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
