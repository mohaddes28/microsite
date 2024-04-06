@extends('layouts.admin-master')

@section('title')
    Add Feature
@endsection

@section('body')
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.feature.index') }}">Feature</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Feature</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <span class="card-subtitle">Add Feature</span>
                <a href="{{ route('admin.feature.index') }}" class="btn btn-sm btn-primary float-end"><i
                        class='bx bx-table'></i> Feature</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">

                        @include('templates.alert')

                        <form action="{{ route('admin.feature.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" value="{{ old('name') }}" id="name"
                                           class="form-control-sm form-control" required/>
                                    @if ($errors->has('name'))
                                        <small class="text-danger">{{ $errors->first('name') }}</small>
                                    @endif
                                </div>
                                <div class="col-12 mt-2">
                                    <label for="description">Description <span class="text-danger">*</span></label>
                                    <textarea name="description" id="description" class="form-control-sm form-control"
                                              required>{{ old('description') }}</textarea>
                                    @if ($errors->has('description'))
                                        <small class="text-danger">{{ $errors->first('description') }}</small>
                                    @endif
                                </div>
                                <div class="col-12 mt-2">
                                    <label for="icon_file">Icon <span class="text-danger">*</span></label>
                                    <input type="file" name="icon_file" id="icon_file"
                                           class="form-control-sm form-control" required/>
                                    @if ($errors->has('icon_file'))
                                        <small class="text-danger">{{ $errors->first('icon_file') }}</small>
                                    @endif
                                </div>
                                <div class="col-12 text-end mt-2">
                                    <button class="btn btn-sm btn-primary"><i class='bx bx-save'></i> Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#description').summernote({
                height: 150
            });
        });
    </script>
@endsection
