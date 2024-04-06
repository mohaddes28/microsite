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
                                        <form action="{{ route('admin.page.home.section.update', 'download-section') }}" method="post" enctype="multipart/form-data">
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
                                                              class="form-control-sm form-control ckEditor" required >{!!  $section->more_content ?? '<h1 style="text-align:center">Add More Content</h1>' !!}</textarea>
                                                    @if ($errors->has('more_content'))
                                                        <small class="text-danger">{{ $errors->first('more_content') }}</small>
                                                    @endif
                                                </div>

                                                <div class="col-md-12 mb-2">
                                                    <label for="button_text">Button Text<span class="text-danger">*</span></label>
                                                    <input type="text" name="button_text" value="{{ $section->button_text ?? '' }}" id="button_text"
                                                           class="form-control-sm form-control" required />
                                                    @if ($errors->has('button_text'))
                                                        <small class="text-danger">{{ $errors->first('button_text') }}</small>
                                                    @endif
                                                </div>

                                                <div class="col-md-12 mb-2">
                                                    <div id="button-holder">
                                                        <input type="hidden" id="count" value="{{ $section->more_button ? count(json_decode($section->more_button, false)) : 0 }}">
                                                        @if($section->more_button)
                                                        @foreach(json_decode($section->more_button, false) as $key => $value)
                                                            <div class="col-md-12 mb-2" id="counter-{{ $key }}">
                                                                <label for="">New Button<span class="text-danger">*</span></label>
                                                                <input type="text" name="more_button[{{ $key }}][url]" value="{{ $value->url }}" class="form-control-sm form-control mb-2" placeholder="Button Text" required />
                                                                <input type="text" name="more_button[{{ $key }}][link]" value="{{ $value->link }}" class="form-control-sm form-control" placeholder="Button Link" required />
                                                            </div>
                                                        @endforeach
                                                        @endif
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <button type="button" class="float-end btn btn-sm btn-success" onclick="addMoreLink(event)">Add Button Field</button>
                                                            <button id="removeButton" type="button" class="float-end btn btn-sm btn-danger me-2" onclick="removeMoreLink(event)" style="display: {{ $section->more_button ? 'block' : 'none' }};">Remove Button Field</button>
                                                        </div>
                                                    </div>
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
@section('script')
    <script>
        function addMoreLink(event){
            let count =Number($('#button-holder #count').val());
            $('#button-holder').append(
                `<div class="col-md-12 mb-2" id="counter-`+count+`">
                    <label for="">New Button<span class="text-danger">*</span></label>
                    <input type="text" name="more_button[`+count+`][url]" class="form-control-sm form-control mb-2" placeholder="Button Text" required />
                    <input type="text" name="more_button[`+count+`][link]" class="form-control-sm form-control" placeholder="Button Link" required />
                </div>`
            );
            $('#button-holder #count').val(count+=1);
            if(count)
                $('#removeButton').show();
        }

        function removeMoreLink(event){
            let count =Number($('#button-holder #count').val());
                $(`#counter-`+(count-=1)).remove();
                if(!count)
                    $('#removeButton').hide();

            $('#button-holder #count').val(count);
        }
    </script>
@endsection
