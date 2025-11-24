@extends('admin.layout')

@section('title', 'Edit Topper')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Edit Topper</h2>
    <a href="{{ route('admin.toppers.index') }}" class="btn btn-secondary">Back</a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.toppers.update', $topper) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="class_name" class="form-label">Class Name *</label>
                <input type="text" class="form-control" id="class_name" name="class_name" value="{{ old('class_name', $topper->class_name) }}" required>
            </div>
            <div class="mb-3">
                <label for="first_rank_name" class="form-label">1st Rank Name</label>
                <input type="text" class="form-control" id="first_rank_name" name="first_rank_name" value="{{ old('first_rank_name', $topper->first_rank_name) }}">
            </div>
            <div class="mb-3">
                <label for="second_rank_name" class="form-label">2nd Rank Name</label>
                <input type="text" class="form-control" id="second_rank_name" name="second_rank_name" value="{{ old('second_rank_name', $topper->second_rank_name) }}">
            </div>
            <div class="mb-3">
                <label for="third_rank_name" class="form-label">3rd Rank Name</label>
                <input type="text" class="form-control" id="third_rank_name" name="third_rank_name" value="{{ old('third_rank_name', $topper->third_rank_name) }}">
            </div>
            <div class="mb-3">
                <label for="order" class="form-label">Order</label>
                <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $topper->order) }}">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ old('is_active', $topper->is_active) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_active">Active</label>
            </div>
            <button type="submit" class="btn btn-primary">Update Topper</button>
        </form>
    </div>
</div>
@endsection

