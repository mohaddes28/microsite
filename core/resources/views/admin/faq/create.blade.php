@extends('layouts.admin-master')

@section('title')
    Add Faq
@endsection

@section('body')
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.faq.index') }}">Faq</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Faq</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <span class="card-subtitle">Add Faq</span>
                <a href="{{ route('admin.faq.index') }}" class="btn btn-sm btn-primary float-end"><i
                        class='bx bx-table'></i> Faq</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">

                        @include('templates.alert')

                        <form action="{{ route('admin.faq.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <label for="question">Question <span class="text-danger">*</span></label>
                                    <input type="text" name="question" value="{{ old('question') }}" id="question"
                                           class="form-control-sm form-control" required/>
                                    @if ($errors->has('question'))
                                        <small class="text-danger">{{ $errors->first('question') }}</small>
                                    @endif
                                </div>
                                <div class="col-12 mt-2">
                                    <label for="answer">Answer <span class="text-danger">*</span></label>
                                    <textarea name="answer" id="answer" class="ckEditor form-control-sm form-control"
                                              required>{{ old('answer') }}</textarea>
                                    @if ($errors->has('answer'))
                                        <small class="text-danger">{{ $errors->first('answer') }}</small>
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
