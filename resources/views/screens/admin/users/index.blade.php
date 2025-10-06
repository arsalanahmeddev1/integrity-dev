@php
    $user = Auth::user();
    $roleName = $user ? $user->getRoleNames()->first() : null;
    // $breadcrumbs = [
    //     ['page_title' => $roleName, 'url' => route('admin.dashboard')],
    //     ['page_title' => 'Dashboard', 'url' => '#'],
    // ];
@endphp
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('./assets/libs/css/vendors/jquery.dataTables.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('./assets/libs/css/vendors/select.bootstrap5.css') }}" />
@endpush
@section('title', 'User List')
@extends('layouts.dashboard.master')
@section('content')
    <div class="container-fluid user-list-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-no-border text-end">
                        <div class="card-header-right-icon">
                            <a class="btn btn-primary f-w-500" href="add-user.html"><i class="fa-solid fa-plus pe-2"></i>Add
                                User</a>
                        </div>
                    </div>
                    <div class="card-body pt-0 px-0">
                        <div class="list-product user-list-table">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table" id="users-table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <span class="c-o-light f-w-600">Name</span>
                                            </th>
                                            <th>
                                                <span class="c-o-light f-w-600">Email</span>
                                            </th>
                                            <th>
                                                <span class="c-o-light f-w-600">Role</span>
                                            </th>
                                            <th>
                                                <span class="c-o-light f-w-600">Creation Date</span>
                                            </th>
                                            <th>
                                                <span class="c-o-light f-w-600">Actions</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($users as $user)
                                            <tr class="product-removes inbox-data">
                                                <td></td>
                                                <td>
                                                    <a href="user-profile.html">{{$user->name}}</a>
                                                </td>
                                                <td>
                                                    <p>{{$user->email}}</p>
                                                </td>
                                                <td>
                                                    <p>{{$user->getRoleNames()->first() ?? 'Not Set'}}</p>
                                                </td>
                                                <td>
                                                    <p>20 Mar 2024,06:12 AM</p>
                                                </td>
                                                <td>
                                                    <span class="badge badge-light-success">Active</span>
                                                </td>
                                                <td>
                                                    <div class="common-align gap-2 justify-content-start">
                                                        <a class="square-white" href="add-user.html"><svg>
                                                                <use
                                                                    href="{{ asset('../assets/libs/svg/icon-sprite.svg#edit-content') }}">
                                                                </use>
                                                            </svg></a><a class="square-white trash-7" href="#!"><svg>
                                                                <use
                                                                    href="{{ asset('./assets/libs/svg/icon-sprite.svg#trash1') }}">
                                                                </use>
                                                            </svg></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('./assets/libs/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('./assets/libs/js/datatable/datatables/dataTables.js') }}"></script>
        <script src="{{ asset('./assets/libs/js/datatable/datatables/dataTables.select.js') }}"></script>
        <script src="{{ asset('./assets/libs/js/datatable/datatables/select.bootstrap5.js') }}"></script>
        <script src="{{ asset('./assets/libs/js/datatable/datatables/datatable.custom.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#users-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('users.data') }}",
                    columns: [
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'role',
                            name: 'role',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'actions',
                            name: 'actions',
                            orderable: false,
                            searchable: false
                        }
                    ]
                });
            });
        </script>
    @endpush


@endsection
