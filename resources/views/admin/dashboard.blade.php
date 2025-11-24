@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Dashboard</h2>
</div>

<div class="row g-4">
    <div class="col-md-3">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Toppers</h5>
                        <h2 class="mb-0">{{ $stats['toppers'] }}</h2>
                    </div>
                    <i class="bi bi-trophy fs-1"></i>
                </div>
                <a href="{{ route('admin.toppers.index') }}" class="text-white text-decoration-none">View All →</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-success">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">News</h5>
                        <h2 class="mb-0">{{ $stats['news'] }}</h2>
                    </div>
                    <i class="bi bi-newspaper fs-1"></i>
                </div>
                <a href="{{ route('admin.news.index') }}" class="text-white text-decoration-none">View All →</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-info">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Events</h5>
                        <h2 class="mb-0">{{ $stats['events'] }}</h2>
                    </div>
                    <i class="bi bi-calendar-event fs-1"></i>
                </div>
                <a href="{{ route('admin.events.index') }}" class="text-white text-decoration-none">View All →</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-warning">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Gallery</h5>
                        <h2 class="mb-0">{{ $stats['galleries'] }}</h2>
                    </div>
                    <i class="bi bi-images fs-1"></i>
                </div>
                <a href="{{ route('admin.galleries.index') }}" class="text-white text-decoration-none">View All →</a>
            </div>
        </div>
    </div>
    <div class="row g-4 mt-2">
        <div class="col-md-6">
            <div class="card text-white bg-secondary">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Total Contacts</h5>
                            <h2 class="mb-0">{{ $stats['contacts'] }}</h2>
                        </div>
                        <i class="bi bi-envelope fs-1"></i>
                    </div>
                    <a href="{{ route('admin.contacts.index') }}" class="text-white text-decoration-none">View All →</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-white bg-danger">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Unread Messages</h5>
                            <h2 class="mb-0">{{ $stats['unread_contacts'] }}</h2>
                        </div>
                        <i class="bi bi-envelope-exclamation fs-1"></i>
                    </div>
                    <a href="{{ route('admin.contacts.index') }}" class="text-white text-decoration-none">View All →</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

