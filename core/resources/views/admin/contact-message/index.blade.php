@extends('layouts.admin-master')

@section('title')
    Contact Message
@endsection
@section('body')
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Message</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <span class="card-subtitle">Contact Message</span>
            </div>
            <div class="card-body">
                @include('templates.alert')
                <div class="row">
                    <div class="col-12 mt-2">
                        <table class="table table-sm table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">#SL</th>
                                <th>Sender</th>
                                <th>Subject</th>
                                <th class="text-center">Message</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contactMessages as $row)
                                <tr>
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td>
                                        {{ $row->name }}
                                        <br>
                                        <small>{{ $row->email }}</small>
                                    </td>
                                    <td>{{ $row->subject }}</td>
                                    <td>{{ $row->comments }}</td>
                                    <td class="text-center text-nowrap">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-light dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bxs-cog"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#"
                                                       type="button" class="dropdown-item">
                                                        @if($row->approve == 1)
                                                            Not Approve
                                                        @else
                                                            Approve
                                                        @endif
                                                    </a>
                                                </li>
                                                <li>
                                                    <form class="btn-group-sm" id="delete-form-{{ $row->id }}"
                                                          method="POST"
                                                          action="">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="button"
                                                                onclick="ConfirmForm('delete-form-{{ $row->id }}')"
                                                                class="dropdown-item">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="col-12">
                        <div class="float-end mt-3">{{ $contactMessages->links('pagination::bootstrap-4') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
