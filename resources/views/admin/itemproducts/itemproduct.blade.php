@extends('admin.master')

@section('title')
    Banners
@endsection

@section('body')
<section>
    <div class="container">  
        <div class="row">
            <div class="col-">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Product Create</h3>
                    </div>

                    <!-- Show all errors at the top -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('all.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <!-- Product selection -->
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="ProductName">Products</label>
                                    <select class="form-control @error('product_id') is-invalid @enderror" id="ProductName" name="product_id" required>
                                        <option value="">-- Select Product --</option>
                                        @foreach($products as $product)
                                            <option value="{{ $product->id }}" {{ old('product_id') == $product->id ? 'selected' : '' }}>
                                                {{ $product->product_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('product_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Single Banner Image -->
                                <div class="form-group col-sm-6">
                                    <label for="BannerImage">Banner Image</label>
                                    <div class="upload-area" id="uploadArea">
                                        <div class="upload-area-content">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <p>Drag & Drop files here or click to browse</p>
                                            <span class="file-info">Maximum file size: 5MB</span>
                                        </div>
                                        <input type="file" id="BannerImage" name="banner_image" accept="image/*" hidden>
                                    </div>
                                    <div id="imagePreview" class="mt-2"></div>
                                    @error('banner_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Banner Titles -->
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="BannerTitle">Banner Title</label>
                                    <input type="text" class="form-control @error('banner_title') is-invalid @enderror" id="BannerTitle" name="banner_title" value="{{ old('banner_title') }}" required>
                                    @error('banner_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="BannerSubTitle">Banner SubTitle</label>
                                    <input type="text" class="form-control @error('banner_subtitle') is-invalid @enderror" id="BannerSubTitle" name="banner_subtitle" value="{{ old('banner_subtitle') }}">
                                    @error('banner_subtitle')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Descriptions -->
                            <div class="form-group">
                                <label for="BannerDescription">Banner Description</label>
                                <textarea name="banner_description" class="form-control @error('banner_description') is-invalid @enderror" rows="5">{{ old('banner_description') }}</textarea>
                                @error('banner_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Product Features and Details</label>
                                <textarea id="summernote" name="product_features" class="form-control @error('product_features') is-invalid @enderror" rows="5">{{ old('product_features') }}</textarea>
                                @error('product_features')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Multiple Images -->
                            <div class="form-group">
                                <label>Using Technology for Professional Development</label>
                                <div class="multi-upload-area" id="multiUploadArea">
                                    <div class="upload-area-content">
                                        <i class="fas fa-images"></i>
                                        <p>Drag & Drop multiple images here or click to browse</p>
                                        <span class="file-info">Maximum 10 files (5MB each)</span>
                                    </div>
                                    <input type="file" name="tech_images[]" multiple accept="image/*" hidden id="multiUploadInput">
                                </div>
                                <div id="multiImagePreview" class="row mt-2"></div>
                                @error('tech_images')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                @error('tech_images.*')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- SEO Fields -->
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="MetaTitle">Meta Title</label>
                                    <input type="text" class="form-control @error('meta_title') is-invalid @enderror" id="MetaTitle" name="meta_title" value="{{ old('meta_title') }}" placeholder="Enter SEO Meta Title">
                                    @error('meta_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="MetaKeywords">Meta Keywords</label>
                                    <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror" id="metaKeywords" name="meta_keywords" value="{{ old('meta_keywords', $seo->meta_keywords ?? '') }}" placeholder="e.g., SEO Laravel Blade">
                                    @error('meta_keywords')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="MetaDescription">Meta Description</label>
                                <textarea name="meta_description" class="form-control @error('meta_description') is-invalid @enderror" id="MetaDescription" rows="3" placeholder="Short SEO description">{{ old('meta_description') }}</textarea>
                                @error('meta_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="box-footer text-center py-5">
                            <button type="submit" class="btn btn-dark">Create Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upload Styles -->
<style>
    .upload-area, .multi-upload-area {
        border: 2px dashed #ccc;
        border-radius: 8px;
        padding: 25px;
        text-align: center;
        cursor: pointer;
        background-color: #f9f9f9;
        transition: all 0.3s;
    }
    .upload-area:hover, .multi-upload-area:hover {
        border-color: #3c8dbc;
        background-color: #f0f7fc;
    }
    .upload-area i, .multi-upload-area i {
        font-size: 48px;
        color: #3c8dbc;
        margin-bottom: 10px;
    }
    .file-info {
        font-size: 12px;
        color: #999;
    }
    #imagePreview img {
        max-width: 100%;
        max-height: 200px;
        margin-top: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    .preview-item {
        position: relative;
        margin-bottom: 15px;
    }
    .preview-item img {
        width: 100%;
        height: 120px;
        object-fit: cover;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    .remove-btn {
        position: absolute;
        top: -10px;
        right: -10px;
        background: #ff5a5f;
        color: white;
        border-radius: 50%;
        width: 25px;
        height: 25px;
        text-align: center;
        line-height: 25px;
        cursor: pointer;
        font-size: 12px;
    }
    .progress-bar {
        height: 5px;
        background: #3c8dbc;
        width: 0%;
        transition: width 0.3s;
        margin-top: 5px;
        border-radius: 2px;
    }
</style>

<!-- Upload Scripts -->
<script>
document.addEventListener('DOMContentLoaded', function() {

    // SINGLE IMAGE
    const uploadArea = document.getElementById('uploadArea');
    const bannerInput = document.getElementById('BannerImage');
    const imagePreview = document.getElementById('imagePreview');

    uploadArea.addEventListener('click', () => bannerInput.click());

    ['dragover', 'drop'].forEach(evt => {
        uploadArea.addEventListener(evt, e => e.preventDefault());
    });

    uploadArea.addEventListener('drop', (e) => {
        resetStyle(uploadArea);
        if (e.dataTransfer.files.length) {
            bannerInput.files = e.dataTransfer.files;
            previewSingleImage(e.dataTransfer.files[0]);
        }
    });

    bannerInput.addEventListener('change', () => {
        if (bannerInput.files.length) {
            previewSingleImage(bannerInput.files[0]);
        }
    });

    function previewSingleImage(file) {
        if (file.size > 5 * 1024 * 1024 || !file.type.startsWith('image/')) {
            alert('Invalid file. Must be image under 5MB.');
            return;
        }

        const reader = new FileReader();
        reader.onload = (e) => {
            imagePreview.innerHTML = `
                <img src="${e.target.result}" alt="Preview">
                <div class="progress-bar" id="uploadProgress"></div>
            `;
            simulateUploadProgress('uploadProgress');
        };
        reader.readAsDataURL(file);
    }

    // MULTIPLE IMAGES
    const multiUploadArea = document.getElementById('multiUploadArea');
    const multiUploadInput = document.getElementById('multiUploadInput');
    const multiImagePreview = document.getElementById('multiImagePreview');

    multiUploadArea.addEventListener('click', () => multiUploadInput.click());

    ['dragover', 'drop'].forEach(evt => {
        multiUploadArea.addEventListener(evt, e => e.preventDefault());
    });

    multiUploadArea.addEventListener('drop', (e) => {
        resetStyle(multiUploadArea);
        const files = Array.from(e.dataTransfer.files);
        handleMultipleFiles(files);
    });

    multiUploadInput.addEventListener('change', () => {
        const files = Array.from(multiUploadInput.files);
        handleMultipleFiles(files);
    });

    function handleMultipleFiles(files) {
        if (files.length > 10) {
            alert('You can upload a maximum of 10 images.');
            return;
        }

        const validFiles = files.filter(file => {
            if (file.size > 5 * 1024 * 1024 || !file.type.startsWith('image/')) {
                alert(`"${file.name}" is invalid.`);
                return false;
            }
            return true;
        });

        multiImagePreview.innerHTML = '';

        validFiles.forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = (e) => {
                const col = document.createElement('div');
                col.className = 'col-md-3 col-sm-4 col-6';
                col.innerHTML = `
                    <div class="preview-item">
                        <img src="${e.target.result}">
                        <span class="remove-btn" data-index="${index}">&times;</span>
                        <div class="progress-bar" id="multiUploadProgress-${index}"></div>
                    </div>
                `;
                multiImagePreview.appendChild(col);
                simulateUploadProgress(`multiUploadProgress-${index}`);
            };
            reader.readAsDataURL(file);
        });
    }

    multiImagePreview.addEventListener('click', (e) => {
        if (e.target.classList.contains('remove-btn')) {
            const index = parseInt(e.target.dataset.index);
            const files = Array.from(multiUploadInput.files);
            files.splice(index, 1);
            const dt = new DataTransfer();
            files.forEach(file => dt.items.add(file));
            multiUploadInput.files = dt.files;
            handleMultipleFiles(files);
        }
    });

    function simulateUploadProgress(id) {
        let progress = 0;
        const bar = document.getElementById(id);
        const interval = setInterval(() => {
            progress += 10;
            if (bar) bar.style.width = `${progress}%`;
            if (progress >= 100) clearInterval(interval);
        }, 100);
    }

    function resetStyle(el) {
        el.style.borderColor = '#ccc';
        el.style.backgroundColor = '#f9f9f9';
    }

});
</script>
@endsection
