@extends('admin.master')

@section('body')
<section class="content py-5">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card card-primary shadow-lg">
                    <div class="card-header bg-gradient-primary">
                        <h3 class="card-title text-black">
                            <i class="fas fa-cube mr-2"></i>Create Features
                        </h3>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ route('itemfeaturs.store') }}" class="needs-validation" novalidate>
                        @method('POST')
                        @csrf
                        <div class="card-body">

                            {{-- Product Dropdown --}}
                            <div class="form-group">
                                <label for="ProductName" class="font-weight-bold">Product Name <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-box"></i></span>
                                    </div>
                                    <select class="form-control form-control-lg" id="ProductName" name="product_id" required>
                                        <option value="">-- Select a Product --</option>
                                        @foreach($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('product_id')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                                <div class="invalid-feedback">Please select a product.</div>
                            </div>

                            {{-- Section Title --}}
                            <div class="form-group mt-4">
                                <label for="section_title" class="font-weight-bold">Features Section Title <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-heading"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" id="section_title" name="section_title" required placeholder="Enter section title">
                                </div>
                                @error('section_title')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                                <div class="invalid-feedback">Please enter a section title.</div>
                            </div>

                            {{-- Feature Title --}}
                            <div class="form-group mt-4">
                                <label for="feature_title" class="font-weight-bold">Feature Title <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" id="feature_title" name="feature_title" required placeholder="Enter feature title">
                                </div>
                                @error('feature_title')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                                <div class="invalid-feedback">Please enter a feature title.</div>
                            </div>

                            {{-- Feature Sub Title --}}
                            <div class="form-group mt-4">
                                <label for="feature_sub_title" class="font-weight-bold">Feature Sub Title <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-text-width"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" id="feature_sub_title" name="feature_sub_title" required placeholder="Enter feature sub title">
                                </div>
                                @error('feature_sub_title')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                                <div class="invalid-feedback">Please enter a feature sub title.</div>
                            </div>

                            {{-- Feature Description --}}
                            <div class="form-group mt-4">
                                <label for="feature_description" class="font-weight-bold">Feature Description <span class="text-danger">*</span></label>
                                <textarea class="form-control form-control-lg" id="feature_description" name="feature_description" rows="4" required placeholder="Enter feature description"></textarea>
                                @error('feature_description')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                                <div class="invalid-feedback">Please enter a feature description.</div>
                            </div>

                        </div>

                        <div class="card-footer bg-white text-right">
                            <button type="submit" class="btn btn-primary rounded-pill px-4 shadow-sm">
                                <i class="fas fa-save mr-2"></i>Save
                            </button>
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
