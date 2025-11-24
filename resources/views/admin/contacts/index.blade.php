@extends('admin.layout')
@php
    use Illuminate\Support\Str;
@endphp

@section('title', 'Contacts')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Contact Messages</h2>
    <div>
        <span class="badge bg-primary">Total: {{ $contacts->count() }}</span>
        <span class="badge bg-warning">Unread: {{ $contacts->where('is_read', false)->count() }}</span>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contacts as $contact)
                    <tr class="{{ !$contact->is_read ? 'table-warning' : '' }}">
                        <td><strong>{{ $contact->name }}</strong></td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ Str::limit($contact->subject, 50) }}</td>
                        <td>{{ $contact->created_at->format('M d, Y h:i A') }}</td>
                        <td>
                            @if($contact->is_read)
                                <span class="badge bg-success">Read</span>
                            @else
                                <span class="badge bg-warning">Unread</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.contacts.show', $contact) }}" class="btn btn-sm btn-primary">
                                <i class="bi bi-eye"></i> View
                            </a>
                            @if($contact->is_read)
                                <form action="{{ route('admin.contacts.mark-unread', $contact) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-warning">
                                        <i class="bi bi-envelope"></i> Mark Unread
                                    </button>
                                </form>
                            @else
                                <form action="{{ route('admin.contacts.mark-read', $contact) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-success">
                                        <i class="bi bi-check"></i> Mark Read
                                    </button>
                                </form>
                            @endif
                            <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No contact messages found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

