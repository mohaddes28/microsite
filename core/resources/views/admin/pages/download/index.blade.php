@extends('layouts.admin-master')

@section('title')
    Add Apps
@endsection

@section('body')
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pages</li>
                <li class="breadcrumb-item active" aria-current="page">Download</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <span class="card-subtitle">Download</span>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3 p-0">
                                @include('admin.pages.download.includes.sidebar-list')
                            </div>
                            <div class="col-9 p-0">
                                <div class="tab-content" >
                                    <div class="tab-pane fade show active">
                                        <h3 class="text-center">Select A section From List.</h3>
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
