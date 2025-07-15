@extends('admin.master')
@section('title')
Site Setting
@endsection
@section('body')

<div class="container-fluid px-4">
    <h1 class="mt-4">Site Settings</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Manage your website settings</li>
    </ol>
    
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-cog me-1"></i>
                    Settings Menu
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">
                            <i class="fas fa-image me-2"></i> Logo Settings
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-list-alt me-2"></i> Features & Overview
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fab fa-google me-2"></i> Google Tag Manager
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fab fa-facebook me-2"></i> Facebook Pixel
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-envelope me-2"></i> Email Settings
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-globe me-2"></i> SEO Settings
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-9">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-image me-1"></i>
                    Logo Settings
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="logoUpload" class="form-label">Upload Logo</label>
                            <input class="form-control" type="file" id="logoUpload">
                        </div>
                        <div class="mb-3">
                            <label for="faviconUpload" class="form-label">Upload Favicon</label>
                            <input class="form-control" type="file" id="faviconUpload">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection