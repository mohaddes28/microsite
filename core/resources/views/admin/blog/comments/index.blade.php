@extends('layouts.admin-master')

@section('title')
    Comments
@endsection

@section('body')
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Blog</li>
                <li class="breadcrumb-item active" aria-current="page">Comments</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <span class="card-subtitle">Comments</span>
            </div>
            <div class="card-body">
                @include('templates.alert')
                <div class="row">
                    <div class="col-12">
                        <table class="table table-sm table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">#SL</th>
                                <th>Title</th>
                                <th>Commenter</th>
                                <th>Commenter Email</th>
                                <th>Comments</th>
                                <th class="text-center">Approval Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($comments as $row)
                                <tr>
                                    <td class="text-center">{{ ++$i }}</td>
                                    <td>{{ $row->title }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->comments }}</td>
                                    <td class="text-center ">
                                        @if($row->approve === 1)
                                            <i class="bx bx-check text-success"></i>
                                        @else
                                            <i class="bx bx-checkbox-minus text-danger"></i>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-light dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bxs-cog"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="{{ route('admin/blog/comments/toggleApprove', ['id' => $row->id]) }}"
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
                                                          action="{{ route('admin/blog/comments/destroy', ['id' => $row->id]) }}">
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
                    <div class="col-12 text-end">
                        {{ $comments->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
