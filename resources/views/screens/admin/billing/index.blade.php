@php
    $blogCount = 1;
    $breadcrumbs = [
        ['page_title' => 'Super Admin', 'url' => route('billing.index')],
        ['page_title' => 'Companies Management', 'url' => '#'],
    ];
@endphp
@extends('layouts.dashboard.master')
@section('title', 'Companies Management')
@section('content')
    <div class="container-fluid">
        <h6 class="mb-2"><strong>Purpose</strong>: Manage subscriptions, invoices, and payments for all companies.
            companies.
        </h6>
        <ul class="doted-list">
            <li>View all company subscriptions and plans</li>
            <li>Manage subscription pricing and packages</li>
            <li>Generate and send invoices to companies</li>
            <li>Track payment status and history</li>
            <li>Process payments and refunds</li>
            <li>Send billing reminders and notifications</li>
            <li>Generate revenue reports and analytics</li>
            <li>Manage billing disputes and issues</li>
            <li>Export billing data and reports</li>

        </ul>
        <div class="alert alert-primary dark" role="alert">
            <p class="txt-light"><strong>Note</strong>: This section will be fully functional when you request the
                implementation. Currently showing the planned structure and features.</p>
        </div>
    </div>
@endsection
