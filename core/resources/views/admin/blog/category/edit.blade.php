@extends('layouts.admin-master')

@section('title')
    Edit Category
@endsection

@section('body')
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Blog</li>
                <li class="breadcrumb-item"><a href="{{ route('admin/blog/category/index') }}">Categories</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <span class="card-subtitle">Edit Category</span>
                <a href="{{ route('admin/blog/category/index') }}" class="btn btn-sm btn-primary float-end"><i
                        class='bx bx-table'></i> Categories</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">

                        @include('templates.alert')

                        <form action="{{ route('admin/blog/category/update', ['id' => $category->id]) }}" method="POST">
                            @csrf
                            <div class="row">
                                <label for="category_name" class="col-md-4 text-end">Category Name <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-6">
                                    <input type="text" name="category_name" value="{{ $category->category_name }}"
                                           id="category_name" class="form-control-sm form-control" required/>
                                    @if ($errors->has('category_name'))
                                        <small class="text-danger">{{ $errors->first('category_name') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-10 text-end">
                                    <button class="btn btn-sm btn-primary"><i class='bx bx-edit'></i> Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
