@extends('layouts.admin-master')

@section('title')
    Screenshot
@endsection
@section('body')
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Screenshot</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <span class="card-subtitle">Screenshots</span>
                <a href="{{ route('admin.screenshot.create') }}" class="btn btn-sm btn-primary float-end"><i
                        class='bx bx-plus'></i> Add Screenshot</a>
            </div>
            <div class="card-body">
                @include('templates.alert')
                <div class="row">
                    <div class="col-12 mt-2">
                        <table class="table table-sm table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">#SL</th>
                                <th>Image</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($screenshots as $row)
                                <tr>
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td class="text-center"><img src="{{ asset($row->image ) }}"
                                                                 alt="{{ $row->id }}" style="height: 50px"></td>
                                    <td class="text-center text-nowrap">
                                        <form class="btn-group-sm" id="delete-form-{{ $row->id }}"
                                              action="{{ route('admin.screenshot.destroy', $row->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('admin.screenshot.edit', $row->id) }}" type="button"
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
                        <div class="float-end mt-3">{{ $screenshots->links('pagination::bootstrap-4') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
