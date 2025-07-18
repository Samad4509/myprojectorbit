@extends('admin.master')

@section('title')
    Edit Feature | Orbit
@endsection

@section('body')
    <div class="card mb-4">
        <div class="card-header bg-gradient-primary text-white">
            <h3>Edit Feature</h3>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form method="POST" action="{{ route('features.update', $feature->id) }}" class="needs-validation" novalidate>
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name <span class="text-danger">*</span></label>
                    <input type="text" id="product_name" name="product_name" class="form-control"
                           value="{{ old('product_name', $feature->product->product_name) }}" required disabled>
                    @error('product_name')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">Please enter product name.</div>
                </div>

                <div class="mb-3">
                    <label for="feature_name" class="form-label">Feature Name <span class="text-danger">*</span></label>
                    <input type="text" id="feature_name" name="feature_name" class="form-control"
                           value="{{ old('feature_name', $feature->feature_name) }}" required>
                    @error('feature_name')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">Please enter feature name.</div>
                </div>

                <button type="submit" class="btn btn-primary px-4 rounded-pill">
                    <i class="fas fa-save me-1"></i> Update
                </button>
                <a href="{{ route('features.index') }}" class="btn btn-secondary px-4 rounded-pill ms-2">Cancel</a>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    (() => {
        'use strict';
        const forms = document.querySelectorAll('.needs-validation');
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>
@endsection
