@extends('layouts.admin-master')

@section('title')
    Edit Faq
@endsection

@section('body')
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.faq.index') }}">Faq</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Faq</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <span class="card-subtitle">Edit Faq</span>
                <a href="{{ route('admin.screenshot.index') }}" class="btn btn-sm btn-primary float-end"><i
                        class='bx bx-table'></i> Faq</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">

                        @include('templates.alert')

                        <form action="{{ route('admin.faq.update', $faq->id) }}" enctype="multipart/form-data" method="POST">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <label for="question">Name <span class="text-danger">*</span></label>
                                    <input type="text" name="question" value="{{ $faq->question }}" id="question"
                                           class="form-control-sm form-control" required/>
                                    @if ($errors->has('question'))
                                        <small class="text-danger">{{ $errors->first('question') }}</small>
                                    @endif
                                </div>
                                <div class="col-12 mt-2">
                                    <label for="answer">Answer <span class="text-danger">*</span></label>
                                    <textarea name="answer" id="answer" class="form-control-sm form-control"
                                              required>{{ $faq->answer }}</textarea>
                                    @if ($errors->has('answer'))
                                        <small class="text-danger">{{ $errors->first('answer') }}</small>
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
