@extends('frontend.master')
@section('title')
RRP | Orbit
@endsection
@section('body')
  <!-- Imroz Preloader -->
        <div class="preloader">
            <div class='loader'>
                <div class='circle'></div>
                <div class='circle'></div>
                <div class='circle'></div>
                <div class='circle'></div>
                <div class='circle'></div>
            </div>
        </div>
       <!-- Start Banner Area -->
    <section class="rainbow-banner-area rainbow-banner-style-2 rainbow-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <h1 class="title">ERP<span class="theme-gradient">(Enterprise Resource Planning)</span> Solutions</h1>
                        <p class="subtitle">Unify Your Business Operations with a Powerful, Custom ERP System.</p>
                        <p id="ecommerce-text">
                             At Integrass, we believe our clients are not just looking for skilled developers; they seek true strategic partners. Our mission is to understand your unique enterprise challenges and solve them with custom ERP software tailored specifically to your needs.
                                Custom ERP systems are designed to meet the distinct operational and strategic demands of your enterprise. They offer a scalable, personalized approach, integrating all essential business functions and enabling data-driven decisions.

                                In today’s competitive landscape, managing disconnected systems leads to inefficiencies, data errors, and lost productivity. Our ERP (Enterprise Resource Planning) Solutions offer a centralized, fully integrated platform that connects every aspect of your organization—from finance, HR, and supply chain to manufacturing, sales, and inventory. Designed for businesses of all sizes and industries, our ERP software improves workflow, automates core functions, and delivers real-time data for smarter decision-making.
                                Whether you're a manufacturer, distributor, retailer, or service provider, we build scalable ERP systems tailored to your unique business processes.

                        </p>
                        <div class="banner-btn-group mt--30">
                                <a href="#" class="rainbow-gradient-btn" onclick="toggleReadMore(event)" id="readMoreBtn"><span>Read More ...</span></a>
                        </div>
                        <div class="banner-btn-group mt--30">
                            <a class="rainbow-gradient-btn" href="contact.html"><span>Get Started</span></a>
                            <a class="rainbow-gradient-btn rainbow-gradient-btn-2" href="#"><span>Our Features</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 py-5 fixed-image">
                        <div class="">
                            <img src="{{asset('frontend/assets/images/banner/05 - ERP/ERP.jpeg')}}" alt="Web Design Services">
                        </div>
                    </div>
            </div>
        </div>
    </section>
<!-- End Banner Area -->
        <section class="py-5 hero-section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="col-md-8 bg-dark card card-body mx-auto py-5">
                            <h5 class="mb-4 mx-auto text-center text-white">ERP (Enterprise Resource Planning) Solutions</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="list-unstyled">
                                        <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Human Resource Management
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" title="Customized Website Design" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Payroll & Salary Management
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Account & Finance Management
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>LC Management
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Product Sales Management
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Service Sales Management
                                        </a>
                                    </li>

                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Procurement Management
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Sales & Commission Management
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Employee Panel & App
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Customer Relationship Management
                                        </a>
                                    </li>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Production & Costing Management
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Export & Import Management
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Quality Control(QC) Management
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Damage & Wastage Control
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Dealer Distribution Management
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Sales & Commission Management
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Employee Panel & App
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Customer Relationship Management
                                        </a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                             <div class="banner-btn-group mt--30 mx-auto">
                                <a class="rainbow-gradient-btn" href="{{route('contact')}}"><span>Contact us</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
      <section class="py-5">
        <div class="rainbow-service-area rainbow-section-gap rainbow-section-gapBottom-big">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-lg-12 mx-auto">
                        <div class="section-title text-center">
                                <h5 class="mb-4 mx-auto text-white">E-commerce With App</h5>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Feature 1 -->
                    <div class="col-md-4">
                        <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fas fa-desktop fa-2x"></i>
                                </div>
                                <div class="description centered-shape">
                                    <h5 class="title text-white">Human Resource & Payroll (HRM) Management System</h5>
                                    <p class="fw-bolder">Simplify HR Processes, Automate Payroll & Empower Your Workforce</p>
                                    <p class="desc">Managing employees efficiently is key to business success—but manual HR tasks can slow you down. Our Human Resource & Payroll (HRM) Management System provides a centralized platform to handle employee records, attendance, leave, performance tracking, and automated payroll with ease. Built to support small, mid-size, and enterprise-level businesses, our HRM software helps reduce administrative workload, improve accuracy, and enhance employee satisfaction.From onboarding to payslips, our smart, secure, and user-friendly solution covers every aspect of your HR operations—compliantly and efficiently.</p>
                                </div>
                            </div>
                            <div class="bg-shaped d-none d-md-block">
                                <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                            </div>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="col-md-4">
                        <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fas fa-users fa-2x"></i>
                                </div>
                                <div class="description centered-shape">
                                    <h5 class="title text-white">Inventory Management Module</h5>
                                    <p class="fw-bolder">Track, Manage & Optimize Your Stock in Real Time</p>
                                    <p class="desc"> Managing inventory manually leads to stockouts, overstocking, and missed sales opportunities. Our Inventory Management Module provides a smart, real-time system that simplifies stock control, enhances warehouse efficiency, and improves supply chain visibility. Whether you operate a retail store, eCommerce platform, manufacturing unit, or wholesale distribution business, our inventory solution ensures you always have the right products—at the right time, in the right place.Seamlessly integrated with ERP, accounting, and eCommerce platforms, this module streamlines your operations, reduces inventory costs, and supports data-driven decisions.</p>
                                </div>
                            </div>
                            <div class="bg-shaped d-none d-md-block">
                                <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                            </div>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="col-md-4">
                        <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fas fa-share-alt fa-2x"></i>
                                </div>
                                <div class="description centered-shape">
                                    <h5 class="title text-white">Accounting & Finance Module</h5>
                                    <p class="fw-bolder">Streamline Sales & Procurement Processes with End-to-End Automation</p>
                                    <p class="desc"> Managing sales and procurement manually often leads to delays, miscommunication, and missed opportunities. Our Sales & Purchase Module offers a unified platform to automate the entire sales cycle and purchasing process—from quote to invoice and from purchase order to goods received. Seamlessly integrated into your ERP system, this module helps your teams close deals faster, maintain optimal inventory levels, and improve vendor and customer relationships.Built for flexibility and real-time visibility, this module helps businesses manage B2B and B2C transactions with complete accuracy and control.</p>
                                </div>
                            </div>
                            <div class="bg-shaped d-none d-md-block">
                                <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                            </div>
                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div class="col-md-4">
                        <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fas fa-search fa-2x"></i>
                                </div>
                                <div class="description centered-shape">
                                    <h5 class="title text-white">Sales & Purchase Module</h5>
                                    <p class="fw-bolder">Stand Out with a Unique Online Store Designed to Convert</p>
                                    <p class="desc">Sales process includes quotation drafting, accepting sales orders, drafting sales invoices with proper taxation, Shipment of material or service, tracking pending sales orders. Purchase modules take care of all the processes that are part of the procurement of items or raw materials that are required for the organization. The purchase module consists of functionalities like supplier item linking, quotation, receiving & recording quotations, preparing purchase orders, tracking the purchase items, preparing GRN & updating stocks & various reports.</p>
                                </div>
                            </div>
                            <div class="bg-shaped d-none d-md-block">
                                <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                            </div>
                        </div>
                    </div>

                    <!-- Feature 5 -->
                    <div class="col-md-4">
                        <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fas fa-paint-brush fa-2x"></i>
                                </div>
                                <div class="description centered-shape">
                                    <h5 class="title text-white">Customer Relationship Management (CRM) Module</h5>
                                   <p class="fw-bolder">
                                    Convert More Leads, Retain More Customers & Grow Revenue
                                   </p>
                                    <p class="desc"> Struggling to keep track of leads, follow-ups, and customer interactions? Our CRM (Customer Relationship Management) Module is designed to help you build stronger relationships, close deals faster, and improve customer satisfaction. With a centralized dashboard, real-time tracking, and sales automation tools, our CRM solution empowers your team to stay organized, nurture prospects, and turn first-time buyers into loyal customers.Whether you're in B2B or B2C, our CRM system adapts to your business processes and helps you scale your sales and service with precision and efficiency.</p>
                                </div>
                            </div>
                            <div class="bg-shaped d-none d-md-block">
                                <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                            </div>
                        </div>
                    </div>

                    <!-- Feature 6 -->
                    <div class="col-md-4">
                        <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fas fa-shield-alt fa-2x"></i>
                                </div>
                                <div class="description centered-shape">
                                    <h5 class="title text-white">Production and Manufacturing Module</h5>
                                    <p class="fw-bolder">Streamline Your Manufacturing Process with Smart Automation & Real-Time Control</p>
                                    <p class="desc"> Managing production workflows manually can result in delays, waste, and inefficiencies. Our Production and Manufacturing Module helps manufacturing businesses automate, monitor, and optimize their entire production cycle—from raw materials to finished goods. Whether you run a small workshop or a large-scale factory, this module enables smarter planning, efficient resource use, and complete visibility into every stage of production.With seamless ERP integration, the module connects your manufacturing floor with inventory, sales, procurement, and finance—ensuring a smooth, end-to-end workflow that increases productivity and profit.</p>
                                </div>
                            </div>
                            <div class="bg-shaped d-none d-md-block">
                                <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <section class="py-5">
        <div class="rainbow-service-area rainbow-section-gap rainbow-section-gapBottom-big">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-lg-12 mx-auto">
                        <div class="section-title text-center">
                            <h5 class="mb-4 mx-auto text-white">Industries Covers Smart ERP</h5>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Feature 1 -->
                    <div class="col-md-4">
                        <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fas fa-desktop fa-2x"></i>
                                </div>
                                <div class="description centered-shape">
                                    <h5 class="title text-white">Garments ERP</h5>
                                    <p class="fw-bolder">Transform Your Factory & Warehouse with Smart Automation and End-to-End ERP</p>
                                    <p class="desc">In the fast-paced world of manufacturing and distribution, success depends on efficiency, accuracy, and real-time control. Our industry-specific ERP and digital solutions are designed to streamline operations across the entire value chain—from raw material sourcing and production planning to warehousing, logistics, and customer fulfillment.Whether you run a production facility, a distribution hub, or both, our integrated platform helps you optimize processes, reduce operational costs, eliminate errors, and scale confidently.</p>
                                </div>
                            </div>
                            <div class="bg-shaped d-none d-md-block">
                                <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                            </div>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="col-md-4">
                        <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fas fa-users fa-2x"></i>
                                </div>
                                <div class="description centered-shape">
                                    <h5 class="title text-white">Pharmaceutical Sales & Distribution Management System</h5>
                                    <p class="fw-bolder">Ensure Compliance, Improve Efficiency & Scale Your Pharma Business Digitally</p>
                                    <p class="desc">
                                         The pharmaceutical industry demands precision, compliance, and speed—especially in sales and distribution. Our Pharmaceutical Sales & Distribution Management System is a fully integrated ERP solution that empowers pharma wholesalers, distributors, and retailers to manage orders, inventory, batch tracking, and sales operations efficiently and securely.
                                        Built with industry-specific features like batch-wise tracking, expiry management, cold chain monitoring, and regulatory compliance (like FDA, MHRA, GMP, and Health Canada), our platform helps you streamline your entire supply chain—from manufacturer to pharmacy shelf.
                                    </p>
                                </div>
                            </div>
                            <div class="bg-shaped d-none d-md-block">
                                <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                            </div>
                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div class="col-md-4">
                        <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fas fa-search fa-2x"></i>
                                </div>
                                <div class="description centered-shape">
                                    <h5 class="title text-white">Import & Export Business Management Solutions</h5>
                                    <p class="fw-bolder">Stand Out with a Unique Online Store Designed to Convert</p>
                                    <p class="desc">Managing an import/export business involves complex logistics, global compliance, multiple currencies, and extensive documentation. Our Import and Export ERP Solution is built to help trading businesses manage everything from shipment tracking and customs documentation to freight coordination and international invoicing—all in one centralized platform.
                                        Whether you're exporting goods to Europe or importing raw materials from Asia, our system simplifies international trade processes, reduces human error, and ensures compliance with trade regulations across multiple countries.
                                    </p>
                                </div>
                            </div>
                            <div class="bg-shaped d-none d-md-block">
                                <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                            </div>
                        </div>
                    </div>

                    <!-- Feature 5 -->
                    <div class="col-md-4">
                        <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fas fa-paint-brush fa-2x"></i>
                                </div>
                                <div class="description centered-shape">
                                    <h5 class="title text-white">Medical & Hospital Management System </h5>
                                    <p class="fw-bolder">Digitize Your Healthcare Operations for Efficiency, Accuracy & Patient Satisfaction</p>
                                    <p class="desc">Description:
                                        Running a modern medical facility or hospital requires more than just providing healthcare—it demands precision, digital record-keeping, regulatory compliance, and seamless coordination across departments. Our Medical & Hospital Management System is an all-in-one, cloud-based solution that automates and streamlines patient care, doctor scheduling, billing, inventory, HR, and electronic medical records (EMR/EHR).
                                        Designed for clinics, multi-specialty hospitals, diagnostic centers, and healthcare groups, our solution improves operational efficiency, enhances patient experience, and ensures medical data security across every touchpoint.
                                    </p>
                                </div>
                            </div>
                            <div class="bg-shaped d-none d-md-block">
                                <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                            </div>
                        </div>
                    </div>

                    <!-- Feature 6 -->
                    <div class="col-md-4">
                        <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fas fa-shield-alt fa-2x"></i>
                                </div>
                                <div class="description centered-shape">
                                    <h5 class="title text-white">Production & Manufacturing Management Module</h5>
                                    <p class="fw-bolder">Streamline Manufacturing Operations with Smart ERP Automation</p>
                                    <p class="desc">Manufacturers today face increasing pressure to produce faster, with fewer errors, and at lower costs. Our Production & Manufacturing ERP Module is designed to simplify and automate your entire manufacturing workflow—from raw material planning to final product output. It helps manufacturers of all sizes achieve greater visibility, reduced waste, real-time production tracking, and better cost control.
                                        With full integration across inventory, procurement, sales, and finance, this module empowers factories to boost productivity, improve accuracy, and scale operations effortlessly.
                                    </p>
                                </div>
                            </div>
                            <div class="bg-shaped d-none d-md-block">
                                <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection