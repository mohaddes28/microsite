@extends('layouts.admin-master')

@section('title')
    Categories
@endsection
@section('body')
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Blog</li>
                <li class="breadcrumb-item active" aria-current="page">Categories</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <span class="card-subtitle">Categories</span>
                <a href="{{ route('admin/blog/category/create') }}" class="btn btn-sm btn-primary float-end"><i
                        class='bx bx-plus'></i> Add Category</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">

                        @include('templates.alert')

                        <table class="table table-sm table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">#SL</th>
                                <th>Category Name</th>
                                <th>Slug</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td class="text-center">{{ ++$i }}</td>
                                    <td>{{ $category->category_name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td class="text-center">
                                        <form class="btn-group-sm" id="delete-form"
                                              action="{{ route('admin/blog/category/destroy', $category->id) }}"
                                              method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('admin/blog/category/edit', $category->id) }}"
                                               type="button"
                                               class="btn btn-sm btn-warning"><i class='bx bx-message-edit'></i></a>
                                            <button type="button" onclick="ConfirmForm('delete-form')"
                                                    class="btn btn-danger btn-sm"><i class='bx bx-trash'></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="col-12">
                        <div class="float-end mt-3">{{ $categories->links('pagination::bootstrap-4') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
