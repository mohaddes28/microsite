@extends('layouts.admin-master')

@section('title')
    Edit Apps
@endsection

@section('body')
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.apps.index') }}">Apps</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Apps</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <span class="card-subtitle">Edit Apps</span>
                <a href="{{ route('admin.apps.index') }}" class="btn btn-sm btn-primary float-end"><i
                        class='bx bx-table'></i> Apps</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">

                        @include('templates.alert')

                        <form action="{{ route('admin.apps.update', $app->id) }}" enctype="multipart/form-data" method="POST">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <label for="version">Version <span class="text-danger">*</span></label>
                                    <input type="text" name="version" value="{{ $app->version }}" id="version"
                                           class="form-control-sm form-control" required/>
                                    @if ($errors->has('version'))
                                        <small class="text-danger">{{ $errors->first('version') }}</small>
                                    @endif
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="file_size">File Size <span class="text-danger">*</span></label>
                                    <input type="text" name="file_size" value="{{ $app->file_size }}" id="file_size"
                                           class="form-control-sm form-control" required/>
                                    @if ($errors->has('file_size'))
                                        <small class="text-danger">{{ $errors->first('file_size') }}</small>
                                    @endif
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="file">File <span class="text-danger">*</span></label>
                                    <input type="file" name="file" id="file"
                                           class="form-control-sm form-control" />
                                    @if ($errors->has('file'))
                                        <small class="text-danger">{{ $errors->first('file') }}</small>
                                    @endif
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="latest">Version <span class="text-danger">*</span></label>
                                    <input type="text" name="latest" value="{{ $app->latest }}" id="latest"
                                           class="form-control-sm form-control" required/>
                                    @if ($errors->has('latest'))
                                        <small class="text-danger">{{ $errors->first('latest') }}</small>
                                    @endif
                                </div>
                                <div class="col-12 text-end mt-2">
                                    <button class="btn btn-sm btn-primary"><i class='bx bx-save'></i> Update</button>
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
