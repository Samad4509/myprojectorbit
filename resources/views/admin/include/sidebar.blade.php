<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <!-- Core Section -->
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="index.html">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            
            <!-- Interface Section -->
            <div class="sb-sidenav-menu-heading">Interface</div>
            
            <!-- Brand Section -->
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#brand" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-tag"></i></div>
                Brand
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-chevron-down"></i></div>
            </a>
            <div class="collapse" id="brand" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="layout-static.html"><i class="fas fa-plus-circle me-2"></i>Create Brand</a>
                    <a class="nav-link" href="layout-sidenav-light.html"><i class="fas fa-list-ul me-2"></i>Manage Brand</a>
                </nav>
            </div>
            
            <!-- Service Section -->
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#service" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-concierge-bell"></i></div>
                Service
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-chevron-down"></i></div>
            </a>
            <div class="collapse" id="service" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="layout-static.html"><i class="fas fa-plus-circle me-2"></i>Create Service</a>
                    <a class="nav-link" href="layout-sidenav-light.html"><i class="fas fa-tasks me-2"></i>Manage Service</a>
                </nav>
            </div>
            
            <!-- Product Section -->
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#product" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-box-open"></i></div>
                Product
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-chevron-down"></i></div>
            </a>
            <div class="collapse" id="product" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('product.create')}}"><i class="fas fa-plus-circle me-2"></i>Create Product</a>
                    <a class="nav-link" href="{{route('product.index')}}"><i class="fas fa-boxes me-2"></i>Manage Product</a>
                </nav>
            </div>
            
            <!-- Blog Section -->
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#blog" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-blog"></i></div>
                Blog
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-chevron-down"></i></div>
            </a>
            <div class="collapse" id="blog" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="layout-static.html"><i class="fas fa-plus-circle me-2"></i>Create Blog</a>
                    <a class="nav-link" href="layout-sidenav-light.html"><i class="fas fa-edit me-2"></i>Manage Blog</a>
                </nav>
            </div>
            
            <!-- User Section -->
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#user" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-users-cog"></i></div>
                User Management
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-chevron-down"></i></div>
            </a>
            <div class="collapse" id="user" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('roles.index')}}"><i class="fas fa-user-tag me-2"></i>Roles</a>
                    <a class="nav-link" href="{{route('users.index')}}"><i class="fas fa-users me-2"></i>All Users</a>
                    <a class="nav-link" href="#"><i class="fas fa-user-shield me-2"></i>Permissions</a>
                </nav>
            </div>
            
            <!-- Settings Section -->
            <!-- Settings Section - Simple Link -->
                <a class="nav-link" href="{{ route('site.setting') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-cogs"></i></div>
                    Site Settings
                </a>

            {{-- <div class="collapse" id="settings" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="layout-static.html"><i class="fas fa-image me-2"></i>Logo</a>
                    <a class="nav-link" href="layout-sidenav-light.html"><i class="fas fa-list-alt me-2"></i>Features & Overview</a>
                    <a class="nav-link" href="layout-sidenav-light.html"><i class="fab fa-google me-2"></i>Google Tag Manager</a>
                    <a class="nav-link" href="layout-sidenav-light.html"><i class="fab fa-facebook me-2"></i>Facebook Pixel</a>
                </nav>
            </div> --}}
           <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#seo" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-cogs"></i></div>
                SEO
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-chevron-down"></i></div>
            </a>
            <div class="collapse" id="seo" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('seo.create') }}">
                        <i class="fas fa-file-alt me-2"></i>All Pages
                    </a>
                    <a class="nav-link" href="{{ route('seo.index') }}">
                        <i class="fas fa-tools me-2"></i>SEO Manage
                    </a>
                </nav>
            </div>
            <!-- Cache Section -->
           <a class="nav-link" href="{{ route('cache.clear') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-sync-alt me-2"></i></div>
               Clear Cache
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        <span class="fw-bold"><i class="fas fa-user-circle me-1"></i> Orbit</span>
    </div>
</nav>