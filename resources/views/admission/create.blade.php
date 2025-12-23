@extends('layouts.app')

@section('title', 'Admission Form - Gyan Jyoti Vidya Niketan')

@push('styles')
<style>
    body { background-color: #f4f7f6; }
    .admission-card {
        background: #ffffff;
        border-radius: 15px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        padding: 40px;
        border-top: 5px solid #0d6efd;
    }
    .form-section {
        background: #e9ecef;
        color: #333;
        padding: 12px 20px;
        border-radius: 8px;
        margin: 30px 0 20px 0;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-left: 5px solid #0d6efd;
    }
    .my-5 { margin-top: 5rem !important; margin-bottom: 3rem !important; }
    .photo-preview-container {
        width: 150px; height: 180px; border: 2px dashed #cbd5e0; border-radius: 10px;
        display: flex; align-items: center; justify-content: center;
        overflow: hidden; background-color: #f8f9fa; margin-bottom: 10px;
    }
    #photo-preview { width: 100%; height: 100%; object-fit: cover; display: none; }
    .preview-placeholder { text-align: center; color: #adb5bd; font-size: 12px; }
    .form-label { font-weight: 600; font-size: 0.9rem; color: #444; }
    .required { color: #dc3545; }
</style>
@endpush

@section('content')
<div class="container my-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary">GYAN JYOTI VIDYA NIKETAN</h1>
        <p class="text-muted">Recognised by Delhi Govt. | New Delhi - 110068</p>
        <span class="badge bg-dark px-3 py-2">ADMISSION FORM</span>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <form method="POST" action="{{ route('admission.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="admission-card">
            
            <div class="row">
                <div class="col-md-9">
                    <div class="form-section mt-0">1. Student Information</div>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label">Name of Student <span class="required">*</span></label>
                            <input type="text" name="student_name" value="{{ old('student_name') }}" 
                                   class="form-control @error('student_name') is-invalid @enderror">
                            @error('student_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date of Birth <span class="required">*</span></label>
                            <input type="date" name="dob" value="{{ old('dob') }}" 
                                   class="form-control @error('dob') is-invalid @enderror">
                            @error('dob') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Sex <span class="required">*</span></label>
                            <select name="sex" class="form-select @error('sex') is-invalid @enderror">
                                <option value="">Select</option>
                                <option value="Male" {{ old('sex') == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('sex') == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Other" {{ old('sex') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('sex') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nationality</label>
                            <input type="text" name="nationality" value="{{ old('nationality', 'Indian') }}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Place of Birth</label>
                            <input type="text" name="birth_place" value="{{ old('birth_place') }}" class="form-control">
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 d-flex flex-column align-items-center">
                    <label class="form-label">Student Photo</label>
                    <div class="photo-preview-container" id="photo-container">
                        <img id="photo-preview" src="#" alt="Preview" />
                        <div class="preview-placeholder" id="placeholder-text">Click to Upload</div>
                    </div>
                    <input type="file" name="photo" class="form-control form-control-sm @error('photo') is-invalid @enderror" onchange="previewImage(this)">
                    @error('photo') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="form-section">2. Parent / Guardian Details</div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Mother's Name <span class="required">*</span></label>
                    <input type="text" name="mother_name" value="{{ old('mother_name') }}" class="form-control @error('mother_name') is-invalid @enderror">
                    @error('mother_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-3">
                    <label class="form-label">Mother's Occupation</label>
                    <input type="text" name="mother_occupation" value="{{ old('mother_occupation') }}" class="form-control">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Mother's Education</label>
                    <input type="text" name="mother_education" value="{{ old('mother_education') }}" class="form-control">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Father's Name <span class="required">*</span></label>
                    <input type="text" name="father_name" value="{{ old('father_name') }}" class="form-control @error('father_name') is-invalid @enderror">
                    @error('father_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-3">
                    <label class="form-label">Father's Occupation</label>
                    <input type="text" name="father_occupation" value="{{ old('father_occupation') }}" class="form-control">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Father's Education</label>
                    <input type="text" name="father_education" value="{{ old('father_education') }}" class="form-control">
                </div>
            </div>

            <div class="form-section">3. Contact & Financials</div>
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label">Residential Address <span class="required">*</span></label>
                    <textarea name="residential_address" class="form-control @error('residential_address') is-invalid @enderror" rows="2">{{ old('residential_address') }}</textarea>
                    @error('residential_address') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <input type="text" name="res_mobile" value="{{ old('res_mobile') }}" 
                                   class="form-control mt-1 @error('res_mobile') is-invalid @enderror" placeholder="Mobile No.">
                            @error('res_mobile') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Office Address</label>
                    <textarea name="office_address" class="form-control" rows="2">{{ old('office_address') }}</textarea>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Parents Income</label>
                    <input type="text" name="parents_income" value="{{ old('parents_income') }}" class="form-control">
                </div>
                <div class="col-md-4">
                <label class="form-label">Category <span class="required">*</span></label>
                <select name="category" class="form-select @error('category') is-invalid @enderror" requ>
                <option value="">Select Category</option>
                <option value="GEN" {{ old('category') == 'GEN' ? 'selected' : '' }}>GEN</option>
                <option value="SC" {{ old('category') == 'SC' ? 'selected' : '' }}>SC</option>
                <option value="ST" {{ old('category') == 'ST' ? 'selected' : '' }}>ST</option>
                <option value="OBC" {{ old('category') == 'OBC' ? 'selected' : '' }}>OBC</option>
                </select>
                @error('category')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-md-4">
                    <label class="form-label">Aadhar No.</label>
                    <input type="text" name="aadhar_no" value="{{ old('aadhar_no') }}" class="form-control @error('aadhar_no') is-invalid @enderror">
                    @error('aadhar_no') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="form-section">4. Previous Schooling</div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Name of School last attended & Medium</label>
                    <input type="text" name="last_school" value="{{ old('last_school') }}" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Standard to which admission sought <span class="required">*</span></label>
                    <input type="text" name="admission_standard" value="{{ old('admission_standard') }}" 
                           class="form-control @error('admission_standard') is-invalid @enderror">
                    @error('admission_standard') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label">Real brothers/sisters studying in this school (Name & Class)</label>
                    <input type="text" name="sibling_details" value="{{ old('sibling_details') }}" class="form-control">
                </div>
            </div>

            <div class="form-section">5. Declaration</div>
            <div class="card bg-light border-0">
                <div class="card-body">
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="dec1" required>
                        <label class="form-check-label small" for="dec1">
                            I hereby declare that the particulars given above are correct to the best of my knowledge.
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="dec2" required>
                        <label class="form-check-label small" for="dec2">
                            I and my ward will abide by the rules and regulations of the school.
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="dec3" required>
                        <label class="form-check-label small" for="dec3">
                            I will not claim refund of any dues once paid to <strong>GYAN JYOTI VIDYA NIKETAN</strong>.
                        </label>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <button type="submit" class="btn btn-primary btn-lg px-5 shadow">SUBMIT ADMISSION FORM</button>
            </div>
        </div>
    </form>
</div>

<script>
    function previewImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('photo-preview');
                const placeholder = document.getElementById('placeholder-text');
                preview.src = e.target.result;
                preview.style.display = 'block';
                placeholder.style.display = 'none';
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection