@php
    $breadcrumbs = [
        ['page_title' => 'Super Admin', 'url' => route('admin.dashboard')],
        ['page_title' => 'Projects', 'url' => '#'],
    ];
@endphp
@extends('layouts.dashboard.master')
@section('title', 'Projects Management')
@section('content')
    <div class="container-fluid">
        <h6 class="mb-2"><strong>Purpose</strong>: View all projects across all companies with full administrative control.
        </h6>
        <ul class="doted-list">
            <li>View all projects from all companies</li>
            <li>Filter projects by company, status, or date</li>
            <li>Monitor project progress and milestones</li>
            <li>View project details and documentation</li>
            <li>Track project performance metrics</li>
            <li>Generate global project reports</li>
            <li>Manage project categories and types</li>
            <li>Export project data and analytics</li>
        </ul>
        <div class="alert alert-primary dark" role="alert"><p class="txt-light"><strong>Note</strong>: This section will be fully functional when you request the implementation. Currently showing the planned structure and features.</p></div>
    </div>
@endsection
