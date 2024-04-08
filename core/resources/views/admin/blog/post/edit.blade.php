@extends('layouts.admin-master')

@section('title')
    Edit Post
@endsection

@section('body')
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin/blog/post/index') }}">Posts</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Post</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <span class="card-subtitle">Edit Post</span>
                <a href="{{ route('admin/blog/post/index') }}" class="btn btn-sm btn-primary float-end"><i
                        class='bx bx-table'></i> Posts</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">

                        @include('templates.alert')

                        <form action="{{ route('admin/blog/post/update', ['id' => $post->id]) }}"
                              enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" value="{{ $post->title }}" id="title"
                                           class="form-control-sm form-control" required/>
                                    @if ($errors->has('title'))
                                        <small class="text-danger">{{ $errors->first('title') }}</small>
                                    @endif
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="category_id">Category <span class="text-danger">*</span></label>
                                    <select class="form-select form-select-sm" name="category_id" id="category_id"
                                            required>
                                        <option value="">--Select--</option>
                                        @foreach($categories as $category)
                                            <option
                                                value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category_id'))
                                        <small class="text-danger">{{ $errors->first('category_id') }}</small>
                                    @endif
                                </div>
                                <div class="col-12 mt-2">
                                    <label for="photo_file">Feature Image <span class="text-danger">*</span></label>
                                    <input type="file" name="photo_file" id="photo_file"
                                           class="form-control-sm form-control"/>
                                    @if ($errors->has('photo_file'))
                                        <small class="text-danger">{{ $errors->first('photo_file') }}</small>
                                    @endif
                                </div>
                                <div class="col-12 mt-2">
                                    <label for="description">Description <span class="text-danger">*</span></label>
                                    <textarea name="description" id="description" class="ckEditor form-control-sm form-control"
                                              required>{{ $post->description  }}</textarea>
                                    @if ($errors->has('description'))
                                        <small class="text-danger">{{ $errors->first('description') }}</small>
                                    @endif
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="meta_keyword">Meta Keyword</label>
                                    <input type="text" name="meta_keyword" value="{{ $post->meta_keyword }}"
                                           id="meta_keyword" class="form-control-sm form-control"/>
                                    @if ($errors->has('meta_keyword'))
                                        <small class="text-danger">{{ $errors->first('meta_keyword') }}</small>
                                    @endif
                                </div>
                                <div class="col-12 mt-2">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description"
                                              class="form-control-sm form-control">{{ $post->meta_description }}</textarea>
                                    @if ($errors->has('meta_description'))
                                        <small class="text-danger">{{ $errors->first('meta_description') }}</small>
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
