@extends('admin.layout')

@section('title', 'Create Gallery Image')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Create New Gallery Image</h2>
    <a href="{{ route('admin.galleries.index') }}" class="btn btn-secondary">Back</a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image *</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category *</label>
                <select class="form-select" id="category" name="category" required>
                    <option value="">Select Category</option>
                    <option value="Art" {{ old('category') == 'Art' ? 'selected' : '' }}>Art</option>
                    <option value="Pradarsani" {{ old('category') == 'Pradarsani' ? 'selected' : '' }}>Pradarsani</option>
                    <option value="Activity" {{ old('category') == 'Activity' ? 'selected' : '' }}>Activity</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="order" class="form-label">Order</label>
                <input type="number" class="form-control" id="order" name="order" value="{{ old('order', 0) }}">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_active">Active</label>
            </div>
            <button type="submit" class="btn btn-primary">Create Gallery Image</button>
        </form>
    </div>
</div>
@endsection

