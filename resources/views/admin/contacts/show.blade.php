@extends('admin.layout')

@section('title', 'View Contact')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Contact Message Details</h2>
    <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">Back</a>
</div>

<div class="card">
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-6">
                <strong>Name:</strong>
                <p class="mb-0">{{ $contact->name }}</p>
            </div>
            <div class="col-md-6">
                <strong>Email:</strong>
                <p class="mb-0">
                    <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                </p>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <strong>Subject:</strong>
                <p class="mb-0">{{ $contact->subject }}</p>
            </div>
            <div class="col-md-6">
                <strong>Date:</strong>
                <p class="mb-0">{{ $contact->created_at->format('F d, Y h:i A') }}</p>
            </div>
        </div>
        <div class="mb-3">
            <strong>Message:</strong>
            <div class="border p-3 rounded mt-2" style="background: #f8f9fa;">
                <p class="mb-0">{{ $contact->message }}</p>
            </div>
        </div>
        <div class="d-flex gap-2">
            @if($contact->is_read)
                <form action="{{ route('admin.contacts.mark-unread', $contact) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-warning">
                        <i class="bi bi-envelope me-2"></i>Mark as Unread
                    </button>
                </form>
            @else
                <form action="{{ route('admin.contacts.mark-read', $contact) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check me-2"></i>Mark as Read
                    </button>
                </form>
            @endif
            <a href="mailto:{{ $contact->email }}?subject=Re: {{ $contact->subject }}" class="btn btn-primary">
                <i class="bi bi-reply me-2"></i>Reply via Email
            </a>
            <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this contact?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    <i class="bi bi-trash me-2"></i>Delete
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

