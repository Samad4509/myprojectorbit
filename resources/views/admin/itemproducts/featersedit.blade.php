@extends('admin.master')

@section('title')
    Edit Feature | Orbit
@endsection

@section('body')
<section class="content py-5">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card card-primary shadow-lg">
                    <div class="card-header bg-gradient-primary">
                        <h3 class="card-title text-black">
                            <i class="fas fa-cube mr-2"></i>Edit Feature
                        </h3>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ route('itemfeaturs.update', $feature->id) }}" class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="card-body">

                            {{-- Product Dropdown --}}
                            <div class="form-group">
                                <label class="font-weight-bold">Product Name <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-box"></i></span>
                                    </div>
                                    <select class="form-control form-control-lg" name="product_id" required disabled>
                                        <option value="">-- Select a Product --</option>
                                        @foreach($products as $product)
                                            <option value="{{ $product->id }}" {{ $feature->product_id == $product->id ? 'selected' : '' }}>
                                                {{ $product->product_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('product_id')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Section Title --}}
                            <div class="form-group mt-4">
                                <label class="font-weight-bold">Features Section Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" name="section_title"
                                       value="{{ old('section_title', $feature->section_title) }}" required>
                                @error('section_title')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Feature Title --}}
                            <div class="form-group mt-4">
                                <label class="font-weight-bold">Feature Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" name="feature_title"
                                       value="{{ old('feature_title', $feature->feature_title) }}" required>
                                @error('feature_title')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Feature Sub Title --}}
                            <div class="form-group mt-4">
                                <label class="font-weight-bold">Feature Sub Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" name="feature_sub_title"
                                       value="{{ old('feature_sub_title', $feature->feature_sub_title) }}" required>
                                @error('feature_sub_title')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Feature Description --}}
                            <div class="form-group mt-4">
                                <label class="font-weight-bold">Feature Description <span class="text-danger">*</span></label>
                                <textarea class="form-control form-control-lg" name="feature_description" rows="4" required>{{ old('feature_description', $feature->feature_description) }}</textarea>
                                @error('feature_description')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="card-footer bg-white text-right">
                            <button type="submit" class="btn btn-primary rounded-pill px-4 shadow-sm">
                                <i class="fas fa-save mr-2"></i>Update
                            </button>
                            <a href="{{ route('itemfeaturs.index') }}" class="btn btn-secondary rounded-pill px-4">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    .card-primary { border-top: 3px solid #007bff; border-radius: 0.5rem; }
    .bg-gradient-primary { background: linear-gradient(87deg, #007bff 0, #2998ff 100%) !important; }
    .form-control-lg { height: calc(2.5em + 1rem + 2px); }
    .rounded-pill { border-radius: 50rem !important; }
    .shadow-lg { box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important; }
    .input-group-text { background-color: #f8f9fa; }
</style>
@endsection

@section('scripts')
<script>
    (() => {
        'use strict';
        window.addEventListener('load', () => {
            const forms = document.getElementsByClassName('needs-validation');
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        });
    })();
</script>
@endsection
