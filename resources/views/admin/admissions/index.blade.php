@extends('admin.layout')

@section('title', 'Manage Admissions')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-dark">Admission Management</h2>
        <span class="text-muted">{{ now()->format('D, d M Y') }}</span>
    </div>

    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-primary text-white">
                <div class="card-body">
                    <h6>Total Applications</h6>
                    <h2 class="fw-bold">{{ $admissions->count() }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-warning text-dark">
                <div class="card-body">
                    <h6>Pending Review</h6>
                    <h2 class="fw-bold">{{ $admissions->where('status', 'pending')->count() }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-success text-white">
                <div class="card-body">
                    <h6>Approved</h6>
                    <h2 class="fw-bold">{{ $admissions->where('status', 'approved')->count() }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-danger text-white">
                <div class="card-body">
                    <h6>Rejected</h6>
                    <h2 class="fw-bold">{{ $admissions->where('status', 'rejected')->count() }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-8">
                    <input type="text" id="searchInput" class="form-control" placeholder="Search by name, mobile, or class...">
                </div>
                <div class="col-md-4">
                    <select id="statusFilter" class="form-select">
                        <option value="">All Statuses</option>
                        <option value="pending">Pending</option>
                        <option value="approved">Approved</option>
                        <option value="rejected">Rejected</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" id="admissionTable">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4">Student</th>
                            <th>Class</th>
                            <th>Mobile</th>
                            <th>Applied Date</th>
                            <th>Status</th>
                            <th class="text-end pe-4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($admissions as $data)
                        <tr class="admission-row" data-status="{{ $data->status }}">
                            <td class="ps-4">
                                <div class="d-flex align-items-center">
                                    <img src="{{ $data->photo_path ? asset('storage/' . $data->photo_path) : 'https://ui-avatars.com/api/?name='.urlencode($data->student_name).'&background=random' }}" 
                                         width="40" height="40" class="rounded-circle me-3 object-fit-cover shadow-sm">
                                    <div>
                                        <div class="fw-bold text-dark">{{ $data->student_name }}</div>
                                        <small class="text-muted">ID: #ADM-{{ str_pad($data->id, 4, '0', STR_PAD_LEFT) }}</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-light text-dark border">{{ $data->admission_standard }}</span></td>
                            <td>{{ $data->res_mobile }}</td>
                            <td>{{ $data->created_at->format('d M, Y') }}</td>
                            <td>
                                @php
                                    $badgeClass = [
                                        'pending' => 'bg-warning text-dark',
                                        'approved' => 'bg-success',
                                        'rejected' => 'bg-danger'
                                    ][$data->status] ?? 'bg-secondary';
                                @endphp
                                <span class="badge {{ $badgeClass }} px-3 py-2 text-uppercase" style="font-size: 0.7rem;">
                                    {{ $data->status }}
                                </span>
                            </td>
                            <td class="text-end pe-4">
                                <a href="{{ route('admin.admissions.show', $data->id) }}" class="btn btn-sm btn-primary shadow-sm">
                                    <i class="bi bi-eye"></i> View Details
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const statusFilter = document.getElementById('statusFilter');
    const tableRows = document.querySelectorAll('.admission-row');

    function performFilter() {
        const query = searchInput.value.toLowerCase();
        const selectedStatus = statusFilter.value.toLowerCase();

        tableRows.forEach(row => {
            // Get all text from the row (Name, Mobile, Class)
            const rowText = row.innerText.toLowerCase();
            // Get status from the data attribute
            const rowStatus = row.getAttribute('data-status').toLowerCase();

            const matchesSearch = rowText.includes(query);
            const matchesStatus = selectedStatus === "" || rowStatus === selectedStatus;

            if (matchesSearch && matchesStatus) {
                row.style.setProperty('display', '', 'important');
            } else {
                row.style.setProperty('display', 'none', 'important');
            }
        });
    }

    searchInput.addEventListener('keyup', performFilter);
    statusFilter.addEventListener('change', performFilter);
});
</script>
@endpush
@endsection