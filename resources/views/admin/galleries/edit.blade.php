@extends('admin.layout')

@section('title', 'Edit Gallery Image')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Edit Gallery Image</h2>
    <a href="{{ route('admin.galleries.index') }}" class="btn btn-secondary">Back</a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.galleries.update', $gallery) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $gallery->title) }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                @if($gallery->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" style="max-width: 300px; max-height: 300px;">
                    </div>
                @endif
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                <small class="text-muted">Leave empty to keep current image</small>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category *</label>
                <select class="form-select" id="category" name="category" required>
                    <option value="">Select Category</option>
                    <option value="Art" {{ old('category', $gallery->category) == 'Art' ? 'selected' : '' }}>Art</option>
                    <option value="Pradarsani" {{ old('category', $gallery->category) == 'Pradarsani' ? 'selected' : '' }}>Pradarsani</option>
                    <option value="Activity" {{ old('category', $gallery->category) == 'Activity' ? 'selected' : '' }}>Activity</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="order" class="form-label">Order</label>
                <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $gallery->order) }}">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ old('is_active', $gallery->is_active) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_active">Active</label>
            </div>
            <button type="submit" class="btn btn-primary">Update Gallery Image</button>
        </form>
    </div>
</div>
@endsection

