@extends('layouts.admin-master')

@section('title')
    Add Apps
@endsection

@section('body')
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Global Seo</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <span class="card-subtitle">Homepage</span>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        @include('templates.alert')
                        <div class="row">
                            <div class="col-3 ps-0">
                                @include('admin.pages.home.includes.sidebar-list')
                            </div>
                            <div class="col-9 p-0">
                                <div class="tab-content p-3 card" >
                                    <div class="tab-pane fade show active">
                                        <form action="{{ route('admin.page.home.section.update', 'working-section') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="row">

                                                <div class="col-md-12 mb-2">
                                                    <label for="title">Title <span class="text-danger">*</span></label>
                                                    <input type="text" name="title" value="{{ $section->title ?? '' }}" id="title"
                                                           class="form-control-sm form-control" required />
                                                    @if ($errors->has('title'))
                                                        <small class="text-danger">{{ $errors->first('title') }}</small>
                                                    @endif
                                                </div>

                                                <div class="col-md-12 mb-2">
                                                    <label for="description">Description <span class="text-danger">*</span></label>
                                                    <textarea type="text" name="description" id="description"
                                                              class="form-control-sm form-control ckEditor" required >{!!  $section->description ?? '<h1 style="text-align:center">Write A Description</h1>' !!}</textarea>
                                                    @if ($errors->has('description'))
                                                        <small class="text-danger">{{ $errors->first('description') }}</small>
                                                    @endif
                                                </div>

                                                <div class="col-md-12 mb-2">
                                                    <label for="more_content">More Content <span class="text-danger">*</span></label>
                                                    <textarea type="text" name="more_content" id="more_content"
                                                              class="form-control-sm form-control ckEditor" required >{!!  $section->more_content ?? '<h1 style="text-align:center">Write A Description</h1>' !!}</textarea>
                                                    @if ($errors->has('more_content'))
                                                        <small class="text-danger">{{ $errors->first('more_content') }}</small>
                                                    @endif
                                                </div>

                                                <div class="col-12 text-end mb-2">
                                                    <button class="btn btn-sm btn-primary"><i class='bx bx-save'></i>Save Changes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
