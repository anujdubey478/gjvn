@extends('admin.layout')

@section('title', 'Create Event')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Create New Event</h2>
    <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">Back</a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.events.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title *</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description *</label>
                <textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="for_classes" class="form-label">For Classes</label>
                <input type="text" class="form-control" id="for_classes" name="for_classes" value="{{ old('for_classes') }}" placeholder="e.g., Class 5th to 8th">
            </div>
            <div class="mb-3">
                <label for="event_date" class="form-label">Event Date</label>
                <input type="date" class="form-control" id="event_date" name="event_date" value="{{ old('event_date') }}">
            </div>
            <div class="mb-3">
                <label for="order" class="form-label">Order</label>
                <input type="number" class="form-control" id="order" name="order" value="{{ old('order', 0) }}">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_active">Active</label>
            </div>
            <button type="submit" class="btn btn-primary">Create Event</button>
        </form>
    </div>
</div>
@endsection

