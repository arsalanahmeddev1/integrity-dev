@php
    $blogCount = 1;
    $breadcrumbs = [
        ['page_title' => 'Super Admin', 'url' => route('companies.index')],
        ['page_title' => 'Companies Management', 'url' => '#'],
    ];
@endphp
@extends('layouts.dashboard.master')
@section('title', 'Companies Management')
@section('content')
    <div class="container-fluid">
        <h6 class="mb-2"><strong>Purpose</strong>: Full control of the platform - Manage registered electrical contractor
            companies.
        </h6>
        <ul class="doted-list">
            <li>View all registered electrical contractor companies</li>
            <li>Add new companies to the platform</li>
            <li>Edit company information and details</li>
            <li>Manage company status (active/inactive)</li>
            <li>View company subscription details</li>
            <li>Assign company admins and users</li>
            <li>Monitor company activity and usage</li>
            <li>Generate company reports and analytics</li>
        </ul>
        <div class="alert alert-primary dark" role="alert">
            <p class="txt-light"><strong>Note</strong>: This section will be fully functional when you request the
                implementation. Currently showing the planned structure and features.</p>
        </div>
    </div>
@endsection
