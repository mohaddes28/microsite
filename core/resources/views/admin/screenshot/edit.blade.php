@extends('layouts.admin-master')

@section('title')
    Edit Screenshot
@endsection

@section('body')
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.screenshot.index') }}">Screenshot</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Screenshot</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <span class="card-subtitle">Edit Screenshot</span>
                <a href="{{ route('admin.screenshot.index') }}" class="btn btn-sm btn-primary float-end"><i
                        class='bx bx-table'></i> Screenshot</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">

                        @include('templates.alert')

                        <form action="{{ route('admin.screenshot.update', $screenshot->id) }}" enctype="multipart/form-data" method="POST">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-12 mt-2">
                                    <label for="image">Image <span class="text-danger">*</span></label>
                                    <input type="file" name="image" id="image"
                                           class="form-control-sm form-control" required/>
                                    @if ($errors->has('image'))
                                        <small class="text-danger">{{ $errors->first('image') }}</small>
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
