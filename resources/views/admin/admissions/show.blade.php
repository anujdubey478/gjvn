@extends('admin.layout')

@section('title', 'Student Profile')

@section('content')
<div class="container py-4">
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <h4 class="fw-bold text-dark m-0">Student Application Detail</h4>
        <a href="{{ route('admin.admissions.index') }}" class="btn btn-sm btn-outline-primary px-3 shadow-sm">
            <i class="bi bi-arrow-left me-1"></i> Back to List
        </a>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm text-center p-4">
                <div class="mb-3">
                    <img src="{{ $admission->photo_path ? asset('storage/' . $admission->photo_path) : 'https://ui-avatars.com/api/?name='.urlencode($admission->student_name).'&background=random' }}" 
                         class="rounded border p-1" width="150" height="150" style="object-fit: cover;">
                </div>
                <h4 class="fw-bold mb-1">{{ $admission->student_name }}</h4>
                <p class="badge bg-light text-dark border mb-4">Class: {{ $admission->admission_standard }}</p>
                
                <div class="p-3 border rounded-3 bg-light text-start">
                    <form action="{{ route('admin.admissions.updateStatus', $admission->id) }}" method="POST">
                        @csrf @method('PATCH')
                        <label class="form-label small fw-bold text-uppercase">Action / Status</label>
                        <select name="status" class="form-select mb-3 shadow-sm">
                            <option value="pending" {{ $admission->status == 'pending' ? 'selected' : '' }}>Pending Review</option>
                            <option value="approved" {{ $admission->status == 'approved' ? 'selected' : '' }}>Approve Admission</option>
                            <option value="rejected" {{ $admission->status == 'rejected' ? 'selected' : '' }}>Reject Admission</option>
                        </select>
                        <button type="submit" class="btn btn-primary w-100 fw-bold">Update Record</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card border-0 shadow-sm overflow-hidden">
                
                <div class="bg-primary text-white px-3 py-2 fw-bold text-uppercase" style="letter-spacing: 1px;">
                    <i class="bi bi-person-fill me-2"></i> Personal Information
                </div>
                <div class="card-body p-4">
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <label class="text-primary small fw-bold text-uppercase d-block mb-1">Date of Birth</label>
                            <div class="fs-5 fw-semibold">{{ \Carbon\Carbon::parse($admission->dob)->format('d F, Y') }}</div>
                        </div>
                        <div class="col-sm-6">
                            <label class="text-primary small fw-bold text-uppercase d-block mb-1">Gender / Sex</label>
                            <div class="fs-5 fw-semibold">{{ $admission->sex }}</div>
                        </div>
                        <div class="col-sm-6">
                            <label class="text-primary small fw-bold text-uppercase d-block mb-1">Aadhar Number</label>
                            <div class="fs-5 fw-semibold">{{ $admission->aadhar_no ?? 'Not Provided' }}</div>
                        </div>
                        <div class="col-sm-6">
                            <label class="text-primary small fw-bold text-uppercase d-block mb-1">Category</label>
                            <div class="fs-5 fw-semibold">{{ $admission->category ?? 'General' }}</div>
                        </div>
                        <div class="col-12">
                            <label class="text-primary small fw-bold text-uppercase d-block mb-1">Residential Address</label>
                            <div class="fs-6 fw-semibold bg-light p-2 rounded border-start border-primary border-4">
                                {{ $admission->residential_address }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-dark text-white px-3 py-2 fw-bold text-uppercase" style="letter-spacing: 1px;">
                    <i class="bi bi-people-fill me-2"></i> Family & Parent Details
                </div>
                <div class="card-body p-4">
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <label class="text-primary small fw-bold text-uppercase d-block mb-1">Father's Name</label>
                            <div class="fs-5 fw-semibold">{{ $admission->father_name }}</div>
                            <div class="small text-muted">{{ $admission->father_occupation }}</div>
                        </div>
                        <div class="col-sm-6">
                            <label class="text-primary small fw-bold text-uppercase d-block mb-1">Mother's Name</label>
                            <div class="fs-5 fw-semibold">{{ $admission->mother_name }}</div>
                            <div class="small text-muted">{{ $admission->mother_occupation }}</div>
                        </div>
                        <div class="col-sm-6">
                            <label class="text-primary small fw-bold text-uppercase d-block mb-1">Contact Mobile</label>
                            <div class="fs-5 fw-semibold text-success"><i class="bi bi-whatsapp me-1"></i> {{ $admission->res_mobile }}</div>
                        </div>
                    </div>
                </div>

                <div class="bg-secondary text-white px-3 py-2 fw-bold text-uppercase" style="letter-spacing: 1px;">
                    <i class="bi bi-mortarboard-fill me-2"></i> Academic History
                </div>
                <div class="card-body p-4">
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <label class="text-primary small fw-bold text-uppercase d-block mb-1">Previous School</label>
                            <div class="fs-5 fw-semibold">{{ $admission->last_school ?? 'Fresh Candidate' }}</div>
                        </div>
                        <div class="col-sm-6">
                            <label class="text-primary small fw-bold text-uppercase d-block mb-1">Sibling Details</label>
                            <div class="fs-5 fw-semibold">{{ $admission->sibling_details ?? 'N/A' }}</div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection