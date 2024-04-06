@extends('layouts.admin-master')

@section('title')
    Change Password
@endsection

@section('body')
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Change Password</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <span class="card-subtitle">Change Password</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        @include('templates.alert')
                        <form action="{{ route('admin/profile/storeChangePassword') }}" method="POST">
                            @csrf
                            <div class="row">
                                <label for="current_password" class="col-md-4 text-end">Current Password <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-6">
                                    <input type="password" name="current_password" value="{{ old('current_password') }}"
                                           id="current_password" class="form-control-sm form-control" required/>
                                    @if ($errors->has('current_password'))
                                        <small class="text-danger">{{ $errors->first('current_password') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="new_password" class="col-md-4 text-end">New Password <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-6">
                                    <input type="password" name="new_password" value="{{ old('new_password') }}"
                                           id="new_password" class="form-control-sm form-control" required/>
                                    @if ($errors->has('new_password'))
                                        <small class="text-danger">{{ $errors->first('new_password') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="confirm_new_password" class="col-md-4 text-end">Confirm New Password <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-6">
                                    <input type="password" name="confirm_new_password"
                                           value="{{ old('confirm_new_password') }}" id="confirm_new_password"
                                           class="form-control-sm form-control" required/>
                                    @if ($errors->has('confirm_new_password'))
                                        <small class="text-danger">{{ $errors->first('confirm_new_password') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-10 text-end">
                                    <button class="btn btn-sm btn-primary"><i class='bx bx-save'></i> Save Changes
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
