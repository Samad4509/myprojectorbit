@extends('admin.master')

@section('title')
    Edit Product Banner
@endsection

@section('body')
<section>
    <div class="container">  
        <div class="row">
            <div class="col-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Product</h3>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('all.update', $item->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="box-body">
                            <div class="row">
                                <!-- Product selection -->
                                <div class="form-group col-sm-6">
                                    <label for="ProductName">Products</label>
                                    <select class="form-control @error('product_id') is-invalid @enderror" id="ProductName" name="product_id" required>
                                        <option value="">-- Select Product --</option>
                                        @foreach($products as $product)
                                            <option value="{{ $product->id }}" {{ $item->product_id == $product->id ? 'selected' : '' }}>
                                                {{ $product->product_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('product_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Banner Image -->
                                <div class="form-group col-sm-6">
                                    <label for="BannerImage">Banner Image</label>
                                    <input type="file" class="form-control" name="banner_image">
                                    @if($item->banner_image)
                                        <img src="{{ asset($item->banner_image) }}" width="120" class="mt-2">
                                    @endif
                                    @error('banner_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Product Image -->
                                <div class="form-group col-sm-6">
                                    <label for="ProductImage">Product Image</label>
                                    <input type="file" class="form-control" name="product_image">
                                    @if($item->product_image)
                                        <img src="{{ asset($item->product_image) }}" width="120" class="mt-2">
                                    @endif
                                    @error('product_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="BannerTitle">Banner Title</label>
                                    <input type="text" class="form-control" name="banner_title" value="{{ old('banner_title', $item->banner_title) }}" required>
                                    @error('banner_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="BannerSubTitle">Banner Subtitle</label>
                                    <input type="text" class="form-control" name="banner_subtitle" value="{{ old('banner_subtitle', $item->banner_subtitle) }}">
                                    @error('banner_subtitle')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="form-group">
                                <label for="BannerDescription">Banner Description</label>
                                <textarea name="banner_description" class="form-control" rows="4">{{ old('banner_description', $item->banner_description) }}</textarea>
                                @error('banner_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Features -->
                            <div class="form-group">
                                <label for="ProductFeatures">Product Features</label>
                                <textarea name="product_features" id="summernote" class="form-control">{{ old('product_features', $item->product_features) }}</textarea>
                                @error('product_features')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Tech Title -->
                            <div class="form-group">
                                <label>Professional Development Title</label>
                                <input type="text" class="form-control" name="tech_title" value="{{ old('tech_title', $item->tech_title) }}">
                                @error('tech_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Multiple Images -->
                            <div class="form-group">
                                <label>Technology Images</label>
                                <input type="file" name="tech_images[]" multiple class="form-control">
                                @if($item->tech_images)
                                    <div class="row mt-3">
                                        @foreach(json_decode($item->tech_images, true) ?? [] as $img)
                                            <div class="col-md-2 mb-2">
                                                <img src="{{ asset($img) }}" width="100" height="100" style="object-fit: cover; border: 1px solid #ccc;">
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                                @error('tech_images')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                @error('tech_images.*')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- SEO -->
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="MetaTitle">Meta Title</label>
                                    <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $item->meta_title) }}">
                                    @error('meta_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- <div class="form-group col-sm-6">
                                    <label for="MetaKeywords">Meta Keywords</label>
                                    <input type="text" name="meta_keywords" class="form-control",id="metaKeywords" value="{{ old('meta_keywords', $item->meta_keywords) }}">
                                    @error('meta_keywords')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div> --}}
                                <div class="form-group col-sm-6">
                                    <label for="MetaKeywords">Meta Keywords</label>
                                    <input type="text" 
                                        class="form-control @error('meta_keywords') is-invalid @enderror" 
                                        id="metaKeywords" 
                                        name="meta_keywords" 
                                        value="{{ $item->meta_keywords }}" 
                                        placeholder="e.g., SEO Laravel Blade">
                                    @error('meta_keywords')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="MetaDescription">Meta Description</label>
                                <textarea name="meta_description" class="form-control" rows="3">{{ old('meta_description', $item->meta_description) }}</textarea>
                                @error('meta_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="box-footer text-center py-4">
                            <button type="submit" class="btn btn-primary">Update Product</button>
                            <a href="{{route('all.manage')}}" class="btn btn-secondary ml-2">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
