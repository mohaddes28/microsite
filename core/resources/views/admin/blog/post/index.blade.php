@extends('layouts.admin-master')

@section('title')
    Feature
@endsection
@section('body')
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Posts</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <span class="card-subtitle">Posts</span>
                <a href="{{ route('admin/blog/post/create') }}" class="btn btn-sm btn-primary float-end"><i
                        class='bx bx-plus'></i> Add Post</a>
            </div>
            <div class="card-body">
                @include('templates.alert')
                <div class="row">
                    <div class="col-md-10 offset-1">
                        <form action="{{ route('admin/blog/post/index') }}">
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" value="{{ request()->input('title') }}" name="title" id="title"
                                           class="form-control form-control-sm">
                                </div>
                                <div class="col-4">
                                    <select name="cat_id" id="cat_id" class="form-select form-select-sm">
                                        <option value="">--All Category--</option>
                                        @foreach($categories as $category)
                                            <option
                                                value="{{ $category->id }}" {{ $category->id == request()->input('cat_id') ? 'selected' : '' }}>{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-4 d-grid">
                                    <button type="submit" class="btn btn-primary btn-sm"><i class="bx bx-search"></i>
                                        Search
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 mt-2">
                        <table class="table table-sm table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">#SL</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th class="text-center">Feature Image</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rows as $row)
                                <tr>
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td>{{ $row->title }}</td>
                                    <td>{{ $row->category_name }}</td>
                                    <td class="text-center"><img src="{{ asset($row->feature_image ) }}"
                                                                 alt="{{ $row->title }}" style="height: 50px"></td>
                                    <td class="text-center text-nowrap">
                                        <form class="btn-group-sm" id="delete-form-{{ $row->id }}"
                                              action="{{ route('admin/blog/post/destroy', $row->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('admin/blog/post/edit', $row->id) }}" type="button"
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
                        <div class="float-end mt-3">{{ $rows->links('pagination::bootstrap-4') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
