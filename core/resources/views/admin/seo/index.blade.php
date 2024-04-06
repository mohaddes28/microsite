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
                <span class="card-subtitle">Global Seo</span>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">

                        @include('templates.alert')

                        <form action="{{ route('admin.seo.update', $seoData->id) }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('put')
                            <div class="row">

                                <div class="col-md-12 mt-2">
                                    <label for="site_name">Site Name <span class="text-danger">*</span></label>
                                    <input type="text" name="site_name" value="{{ $seoData->site_name }}" id="site_name"
                                              class="form-control-sm form-control" required/>
                                    @if ($errors->has('site_name'))
                                        <small class="text-danger">{{ $errors->first('site_name') }}</small>
                                    @endif
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="title">Meta Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" value="{{ $seoData->title }}" id="title"
                                              class="form-control-sm form-control" required/>
                                    @if ($errors->has('title'))
                                        <small class="text-danger">{{ $errors->first('title') }}</small>
                                    @endif
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="description">Meta Description <span class="text-danger">*</span></label>
                                    <textarea type="text" name="description" id="description"
                                              class="form-control-sm form-control" required>{{ $seoData->description }}</textarea>
                                    @if ($errors->has('description'))
                                        <small class="text-danger">{{ $errors->first('description') }}</small>
                                    @endif
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="keywords">Meta Keywords <span class="text-danger">*</span></label>
                                    <input type="text" name="keywords" value="{{ $seoData->keywords }}" id="keywords"
                                           class="form-control-sm form-control" required/>
                                    @if ($errors->has('keywords'))
                                        <small class="text-danger">{{ $errors->first('keywords') }}</small>
                                    @endif
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="og_title">OG Title <span class="text-danger">*</span></label>
                                    <input type="text" name="og_title" value="{{ $seoData->og_title }}" id="og_title"
                                           class="form-control-sm form-control" required/>
                                    @if ($errors->has('og_title'))
                                        <small class="text-danger">{{ $errors->first('og_title') }}</small>
                                    @endif
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="og_description">OG Description<span class="text-danger">*</span></label>
                                    <textarea type="text" name="og_description" id="og_description"
                                              class="form-control-sm form-control" required>{{ $seoData->og_description }}</textarea>
                                    @if ($errors->has('og_description'))
                                        <small class="text-danger">{{ $errors->first('og_description') }}</small>
                                    @endif
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="og_site_name">OG Site Name<span class="text-danger">*</span></label>
                                    <input type="text" name="og_site_name" value="{{ $seoData->og_site_name }}" id="og_site_name"
                                           class="form-control-sm form-control" required/>
                                    @if ($errors->has('og_site_name'))
                                        <small class="text-danger">{{ $errors->first('og_site_name') }}</small>
                                    @endif
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="og_updated_time">OG Updated Time<span class="text-danger">*</span></label>
                                    <input type="datetime-local" name="og_updated_time" value="{{ $seoData->og_updated_time }}" id="og_updated_time"
                                           class="form-control-sm form-control" required/>
                                    @if ($errors->has('og_updated_time'))
                                        <small class="text-danger">{{ $errors->first('og_updated_time') }}</small>
                                    @endif
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="og_image">OG Image <small>( jpg/png )</small><span class="text-danger">*</span></label>
                                    <hr>
                                    <img src="{{ asset($seoData->og_image) }}" alt="" width="200" class="border">
                                    <hr>
                                    <input type="file" name="og_image" value="{{ $seoData->og_image }}" id="og_image"
                                           class="form-control-sm form-control" required/>
                                    @if ($errors->has('og_image'))
                                        <small class="text-danger">{{ $errors->first('og_image') }}</small>
                                    @endif
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="article_published_time">Article Published Time<span class="text-danger">*</span></label>
                                    <input type="datetime-local" name="article_published_time" value="{{ $seoData->article_published_time }}" id="article_published_time"
                                           class="form-control-sm form-control" required/>
                                    @if ($errors->has('article_published_time'))
                                        <small class="text-danger">{{ $errors->first('article_published_time') }}</small>
                                    @endif
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="article_modified_time">Article Modified Time<span class="text-danger">*</span></label>
                                    <input type="datetime-local" name="article_modified_time" value="{{ $seoData->article_modified_time }}" id="article_modified_time"
                                           class="form-control-sm form-control" required/>
                                    @if ($errors->has('article_modified_time'))
                                        <small class="text-danger">{{ $errors->first('article_modified_time') }}</small>
                                    @endif
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="twitter_card">Twitter Card<span class="text-danger">*</span></label>
                                    <input type="text" name="twitter_card" value="{{ $seoData->twitter_card }}" id="twitter_card"
                                           class="form-control-sm form-control" required/>
                                    @if ($errors->has('twitter_card'))
                                        <small class="text-danger">{{ $errors->first('twitter_card') }}</small>
                                    @endif
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="twitter_title">Twitter Title<span class="text-danger">*</span></label>
                                    <input type="text" name="twitter_title" value="{{ $seoData->twitter_title }}" id="twitter_title"
                                           class="form-control-sm form-control" required/>
                                    @if ($errors->has('twitter_title'))
                                        <small class="text-danger">{{ $errors->first('twitter_title') }}</small>
                                    @endif
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="twitter_description">Twitter Description<span class="text-danger">*</span></label>
                                    <textarea type="text" name="twitter_description" id="twitter_description"
                                              class="form-control-sm form-control" required>{{ $seoData->twitter_description }}</textarea>
                                    @if ($errors->has('twitter_description'))
                                        <small class="text-danger">{{ $errors->first('twitter_description') }}</small>
                                    @endif
                                </div>


                                <div class="col-md-12 mt-2">
                                    <label for="twitter_image">Twitter Image <small>( jpg/png )</small><span class="text-danger">*</span></label>
                                    <hr>
                                    <img src="{{ asset($seoData->twitter_image) }}" alt="" width="200" class="border">
                                    <hr>
                                    <input type="file" name="twitter_image" value="{{ $seoData->twitter_image }}" id="twitter_image"
                                           class="form-control-sm form-control" required/>
                                    @if ($errors->has('twitter_image'))
                                        <small class="text-danger">{{ $errors->first('twitter_image') }}</small>
                                    @endif
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="favicon">Favicon <small>( png )</small><span class="text-danger">*</span></label>
                                    <hr>
                                    <img src="{{ asset($seoData->favicon) }}" alt="" width="200" class="border">
                                    <hr>
                                    <input type="file" name="favicon" value="{{ $seoData->favicon}}" id="favicon"
                                           class="form-control-sm form-control" required/>
                                    @if ($errors->has('favicon'))
                                        <small class="text-danger">{{ $errors->first('favicon') }}</small>
                                    @endif
                                </div>

                                <div class="col-12 text-end mt-2">
                                    <button class="btn btn-sm btn-primary"><i class='bx bx-save'></i>Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
