@extends('admin.layout')

@section('title', 'Toppers')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Manage Toppers</h2>
    <a href="{{ route('admin.toppers.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle me-2"></i>Add New Topper
    </a>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Class</th>
                    <th>1st Rank</th>
                    <th>2nd Rank</th>
                    <th>3rd Rank</th>
                    <th>Order</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($toppers as $topper)
                    <tr>
                        <td>{{ $topper->class_name }}</td>
                        <td>{{ $topper->first_rank_name ?? '-' }}</td>
                        <td>{{ $topper->second_rank_name ?? '-' }}</td>
                        <td>{{ $topper->third_rank_name ?? '-' }}</td>
                        <td>{{ $topper->order }}</td>
                        <td>
                            <span class="badge bg-{{ $topper->is_active ? 'success' : 'secondary' }}">
                                {{ $topper->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.toppers.edit', $topper) }}" class="btn btn-sm btn-primary">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('admin.toppers.destroy', $topper) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
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
                        <td colspan="7" class="text-center">No toppers found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

