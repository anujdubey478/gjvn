@extends('admin.layout')

@section('title', 'Edit News')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Edit News</h2>
    <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">Back</a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title *</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $news->title) }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description *</label>
                <textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description', $news->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                @if($news->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" style="max-width: 200px; max-height: 200px;">
                    </div>
                @endif
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                <small class="text-muted">Leave empty to keep current image</small>
            </div>
            <div class="mb-3">
                <label for="published_date" class="form-label">Published Date *</label>
                <input type="date" class="form-control" id="published_date" name="published_date" value="{{ old('published_date', $news->published_date->format('Y-m-d')) }}" required>
            </div>
            <div class="mb-3">
                <label for="order" class="form-label">Order</label>
                <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $news->order) }}">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ old('is_active', $news->is_active) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_active">Active</label>
            </div>
            <button type="submit" class="btn btn-primary">Update News</button>
        </form>
    </div>
</div>
@endsection

