@extends('layouts.admin-master')

@section('title')
    Feature
@endsection
@section('body')
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Feature</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <span class="card-subtitle">Features</span>
                <a href="{{ route('admin.feature.create') }}" class="btn btn-sm btn-primary float-end"><i
                        class='bx bx-plus'></i> Add Feature</a>
            </div>
            <div class="card-body">
                @include('templates.alert')
                <div class="row">
                    <div class="col-12 mt-2">
                        <table class="table table-sm table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">#SL</th>
                                <th class="text-center">Icon</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($features as $row)
                                <tr>
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td class="text-center"><img src="{{ asset($row->icon ) }}" alt="{{ $row->name }}" style="height: 50px"></td>
                                    <td>{{ $row->name }}</td>
                                    <td>{!! $row->description !!}</td>
                                    <td class="text-center text-nowrap">
                                        <form class="btn-group-sm" id="delete-form-{{ $row->id }}"
                                              action="{{ route('admin.feature.destroy', $row->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('admin.feature.edit', $row->id) }}" type="button"
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
                        <div class="float-end mt-3">{{ $features->links('pagination::bootstrap-4') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
