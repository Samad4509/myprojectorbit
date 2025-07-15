@extends('admin.master')

@section('body')
<section class="">
  <div class="container">
    <div class="row">
      <div class="mx-auto">
        <div class="box-header with-border text-center">
          <h6 class="">Page SEO Settings</h6>
        </div>
        <form method="POST" action="{{route('seo.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="box-body">
            <!-- Page Selection -->
            <div class="form-group">
              <label for="pageSelect">Select Page</label>
              <select class="form-control" id="pageSelect" name="page">
                <option value="home" {{ old('page', $seo->page ?? '') == 'home' ? 'selected' : '' }}>Home</option>
                <option value="brand" {{ old('page', $seo->page ?? '') == 'brand' ? 'selected' : '' }}>Brand</option>
                <option value="service" {{ old('page', $seo->page ?? '') == 'service' ? 'selected' : '' }}>Service</option>
                <option value="product" {{ old('page', $seo->page ?? '') == 'product' ? 'selected' : '' }}>Product</option>
                <option value="about" {{ old('page', $seo->page ?? '') == 'about' ? 'selected' : '' }}>About</option>
                <option value="contact" {{ old('page', $seo->page ?? '') == 'contact' ? 'selected' : '' }}>Contact</option>
              </select>
              @error('page')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <!-- Meta Title -->
            <div class="form-group">
              <label for="metaTitle">Meta Title</label>
              <input type="text" class="form-control" id="metaTitle" name="meta_title" 
                     value="{{ old('meta_title', $seo->meta_title ?? '') }}" placeholder="Enter meta title">
              @error('meta_title')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <!-- Meta Description -->
            <div class="form-group">
              <label for="metaDescription">Meta Description</label>
              <textarea class="form-control" id="metaDescription" name="meta_description" rows="3" 
                        placeholder="Enter meta description">{{ old('meta_description', $seo->meta_description ?? '') }}</textarea>
              @error('meta_description')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <!-- Meta Keywords -->
            <div class="form-group">
              <label for="metaKeywords">Meta Keywords</label>
              <input type="text" class="form-control" id="metaKeywords" name="meta_keywords" 
                     value="{{ old('meta_keywords', $seo->meta_keywords ?? '') }}" placeholder="e.g., SEO Laravel Blade">
              @error('meta_keywords')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

          </div>

          <div class="text-center py-5">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Add scripts directly -->
<!-- Tagify CSS and JS -->

@endsection
