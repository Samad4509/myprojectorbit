@extends('frontend.master')
@section('body')
<style>
    /* ========== Dark Theme Variables ========== */
    :root {
        --primary-color: #6366f1;
        --primary-dark: #4f46e5;
        --secondary-color: #8b5cf6;
        --accent-color: #a78bfa;
        --dark-bg: #0f172a;
        --darker-bg: #020617;
        --card-bg: #1e293b;
        --card-hover: #334155;
        --text-light: #f8fafc;
        --text-muted: #94a3b8;
        --border-color: #334155;
        --success-color: #10b981;
        --error-color: #ef4444;
        --font-primary: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        --font-size-base: 1.05rem;
        --line-height-base: 1.7;
        --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        --border-radius: 0.5rem;
        --box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.2);
    }

    /* ========== Base Styles ========== */
   

    .container {
        max-width: 1400px;
        padding: 0 1.5rem;
    }

    /* ========== Typography ========== */
    h1, h2, h3, h4, h5, h6 {
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 1.25rem;
        color: var(--text-light);
    }

    h1 { font-size: 2.8rem; }
    h2 { font-size: 2.4rem; }
    h3 { font-size: 1.8rem; }
    h4 { font-size: 1.5rem; }

    p {
        margin-bottom: 1.5rem;
        color: var(--text-muted);
    }

    a {
        color: var(--accent-color);
        text-decoration: none;
        transition: var(--transition);
    }

    a:hover {
        color: var(--primary-color);
    }

    /* ========== Hero Section ========== */
    .partner-hero {
        background: linear-gradient(135deg, rgba(15, 23, 42, 0), rgba(15, 23, 42, 0)),
                    url('https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: var(--text-light);
        padding: 8rem 1rem;
        text-align: center;
        margin-bottom: 4rem;
        position: relative;
        overflow: hidden;
        border-radius: var(--border-radius);
        box-shadow: var(--box-shadow);
        border: 1px solid var(--border-color);
      
    }

    .partner-hero::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at 20% 50%, transparent 0%, rgba(2, 6, 23, 0.7) 100%);
        z-index: 0;
    }

    .partner-hero-content {
        position: relative;
        z-index: 1;
        max-width: 800px;
        margin: 0 auto;
    }

    .partner-hero h2 {
        font-size: clamp(2.5rem, 5vw, 3.5rem);
        margin-bottom: 1.5rem;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        line-height: 1.2;
        letter-spacing: -0.5px;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .partner-hero p {
        font-size: clamp(1.2rem, 2vw, 1.5rem);
        margin: 0 auto 2.5rem;
        color: var(--text-light);
        line-height: 1.6;
        opacity: 0.9;
        max-width: 700px;
    }

   

    /* ========== Benefits Section ========== */
    .benefits-section {
        padding: 5rem 0;
        margin-bottom: 4rem;
    }

    .benefits-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .section-title {
        text-align: center;
        margin-bottom: 4rem;
    }

    .section-title h2 {
        position: relative;
        display: inline-block;
        padding-bottom: 1rem;
    }

    .section-title h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        border-radius: 2px;
    }

    .section-title p {
        max-width: 700px;
        margin: 0 auto;
        font-size: 1.2rem;
    }

    .benefits {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }

    .benefit-card {
        background-color: var(--card-bg);
        padding: 2.5rem 2rem;
        border-radius: var(--border-radius);
        border: 1px solid var(--border-color);
        transition: var(--transition);
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .benefit-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
    }

    .benefit-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        background-color: var(--card-hover);
        border-color: var(--accent-color);
    }

    .benefit-icon {
        font-size: 3rem;
        margin-bottom: 1.5rem;
        color: var(--accent-color);
    }

    .benefit-card h3 {
        margin-bottom: 1.2rem;
        font-size: 1.5rem;
    }

    .benefit-card p {
        font-size: 1rem;
        opacity: 0.9;
    }

    /* ========== Form Section ========== */
    .form-section {
        padding: 5rem 0;
        margin-bottom: 4rem;
    }

    .form-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2.5rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Form Column */
    .form-column {
        background-color: var(--card-bg);
        border-radius: var(--border-radius);
        padding: 2.5rem;
        border: 1px solid var(--border-color);
        box-shadow: var(--box-shadow);
    }

    .form-title {
        margin-bottom: 2.5rem;
        text-align: center;
    }

    .form-title h2 {
        color: var(--text-light);
        margin-bottom: 0.75rem;
    }

    .form-title p {
        color: var(--text-muted);
    }

    /* Success Message */
    .success-message {
        display: none;
        text-align: center;
        padding: 2rem;
        background-color: rgba(16, 185, 129, 0.1);
        border: 1px solid rgba(16, 185, 129, 0.2);
        border-radius: var(--border-radius);
        margin-bottom: 2rem;
    }

    .success-message i {
        font-size: 3rem;
        color: var(--success-color);
        margin-bottom: 1rem;
    }

    .success-message h3 {
        color: var(--success-color);
    }

    /* Form Elements */
    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: var(--text-light);
        font-weight: 500;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 0.75rem 1rem;
        background-color: rgba(30, 41, 59, 0.7);
        border: 1px solid var(--border-color);
        color: var(--text-light);
        border-radius: 0.375rem;
        transition: var(--transition);
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        border-color: var(--accent-color);
        box-shadow: 0 0 0 3px rgba(167, 139, 250, 0.2);
        background-color: var(--darker-bg);
        outline: none;
    }

    .form-group textarea {
        min-height: 120px;
        resize: vertical;
    }

    /* Checkbox Group */
    .checkbox-group {
        display: flex;
        align-items: center;
        margin-bottom: 2rem;
    }

    .checkbox-group input {
        width: auto;
        margin-right: 0.75rem;
    }

    .checkbox-group label {
        margin-bottom: 0;
        font-weight: 400;
    }

    /* Submit Button */
    .form-submit-btn {
        width: 100%;
        padding: 0.875rem;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        border: none;
        border-radius: 0.375rem;
        color: white;
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
    }

    .form-submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.3);
    }

    /* Error Message */
    .error-message {
        font-size: 0.875rem;
        margin-top: 0.25rem;
        display: none;
    }

    .is-invalid {
        border-color: var(--error-color) !important;
    }

    .is-invalid + .error-message {
        display: block;
    }

    /* Terms Column */
    .terms-column {
        background-color: var(--card-bg);
        border-radius: var(--border-radius);
        padding: 2.5rem;
        border: 1px solid var(--border-color);
        box-shadow: var(--box-shadow);
    }

    .terms-title {
        margin-bottom: 2rem;
    }

    .terms-title h2 {
        color: var(--text-light);
        margin-bottom: 0.75rem;
    }

    .terms-title p {
        color: var(--text-muted);
    }

    .terms-content h3 {
        color: var(--accent-color);
        font-size: 1.3rem;
        margin-top: 1.5rem;
        margin-bottom: 0.75rem;
    }

    .terms-content p,
    .terms-content ul {
        margin-bottom: 1rem;
        color: var(--text-muted);
        font-size: 0.95rem;
    }

    .terms-content ul {
        padding-left: 1.25rem;
    }

    .terms-content li {
        margin-bottom: 0.5rem;
    }

    .terms-content strong {
        color: var(--text-light);
    }

    /* ========== Animations ========== */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade {
        animation: fadeInUp 0.6s ease-out forwards;
    }

    /* ========== Responsive Styles ========== */
    @media (max-width: 1200px) {
        .form-container {
            grid-template-columns: 1fr;
            max-width: 800px;
        }
    }

    @media (max-width: 992px) {
        .partner-hero {
            padding: 6rem 1rem;
        }
    }

    @media (max-width: 768px) {
        :root {
            --font-size-base: 1rem;
        }

        .partner-hero {
            padding: 5rem 1rem;
            background-attachment: scroll;
        }

        .benefits {
            grid-template-columns: 1fr;
        }

        .section-title h2 {
            font-size: 2rem;
        }

        .form-column,
        .terms-column {
            padding: 1.5rem;
        }
    }

    @media (max-width: 576px) {
        .rainbow-gradient-btn {
            padding: 0.65rem 1.5rem;
            font-size: 0.9rem;
        }
    }
 .error-message {
    color: #dc3545;
    font-size: 0.875em;
    display: block;
    margin-top: 5px;
}
</style>

<div class="container py-5">
    <!-- Hero Section -->
    <section>
        <div class="partner-hero">
            <div class="partner-hero-content animate-fade">
                <h2>Partner With Us</h2>
                <p>Join our network of partners and unlock powerful growth opportunities with competitive commissions,
                    dedicated support, and premium resources to help your business thrive.</p>
                <div class="banner-btn-group mt--30 mx-auto">
                    <a class="rainbow-gradient-btn mx-auto" href="{{ route('contact') }}">
                        <span>Get in Touch</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section">
        <div class="benefits-container">
            <div class="section-title animate-fade" style="animation-delay: 0.2s;">
                <h2>Why Partner With Us?</h2>
                <p>We provide everything you need to grow your business while delivering exceptional value to your
                    clients.</p>
            </div>

            <div class="benefits">
                <div class="benefit-card animate-fade" style="animation-delay: 0.3s;">
                    <div class="benefit-icon">💼</div>
                    <h3>Lucrative Commissions</h3>
                    <p>Earn industry-leading commissions with our tiered revenue sharing model that rewards your
                        performance and helps you grow your income.</p>
                </div>

                <div class="benefit-card animate-fade" style="animation-delay: 0.4s;">
                    <div class="benefit-icon">🚀</div>
                    <h3>Marketing Resources</h3>
                    <p>Access our library of high-converting marketing materials, templates, and proven campaign
                        strategies to accelerate your success.</p>
                </div>

                <div class="benefit-card animate-fade" style="animation-delay: 0.5s;">
                    <div class="benefit-icon">🤝</div>
                    <h3>Dedicated Support</h3>
                    <p>Get personalized assistance from our partnership team to maximize your success and overcome any
                        challenges you may face.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Section -->
    <section class="form-section">
        <div class="form-container">
            <!-- Registration Form Column -->
            <div class="form-column animate-fade" style="animation-delay: 0.3s;">
                <div class="form-title">
                    <h2>Partner Registration</h2>
                    <p>Complete this form to begin your partnership application process</p>
                </div>

                <div class="success-message" id="successMessage">
                    <i class="fas fa-check-circle"></i>
                    <h3>Application Submitted Successfully!</h3>
                    <p>Thank you for your interest in partnering with us. Our team will review your application and
                        respond within 2 business days.</p>
                </div>
               <form id="register" method="post" novalidate>
                    <p class="text-center text-success fw-bolter">{{ session('message') }}</p>
                    @csrf

                    <div class="form-group">
                        <label for="companyName">Company Name *</label>
                        <input type="text" id="companyName" name="companyName" 
                            placeholder="Your company name" required>
                        <div class="error-message"></div>
                    </div>

                    <div class="form-group">
                        <label for="fullName">Your Full Name *</label>
                        <input type="text" id="fullName" name="fullName" placeholder="First and last name" required>
                        <div class="error-message"></div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" placeholder="Your business email" required>
                        <div class="error-message"></div>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" placeholder="+1 (123) 456-7890" required>
                        <div class="error-message"></div>
                    </div>

                    <div class="form-group">
                        <label for="businessType">Type of Business *</label>
                        <select id="businessType" name="businessType" required>
                            <option value="">Select your business type</option>
                            <option value="agency">Digital Agency</option>
                            <option value="freelancer">Freelancer/Consultant</option>
                            <option value="reseller">Reseller</option>
                            <option value="saas">SaaS Company</option>
                            <option value="other">Other</option>
                        </select>
                        <div class="error-message"></div>
                    </div>

                    <div class="form-group">
                        <label for="website">Website (if applicable)</label>
                        <input type="url" id="website" name="website" placeholder="https://yourwebsite.com">
                        <div class="error-message"></div>
                    </div>

                    <div class="form-group">
                        <label for="message">Tell us about your business *</label>
                        <textarea id="message" name="message" 
                            placeholder="Describe your business, clients, and why you want to partner with us" required></textarea>
                        <div class="error-message"></div>
                    </div>

                    <div class="checkbox-group">
                        <input type="checkbox" id="agree" name="agree" required>
                        <label for="agree">I agree to the <a href="#" id="termsLink">Terms and Conditions</a>
                            and Privacy Policy</label>
                        <div class="error-message"></div>
                    </div>

                    <button type="submit" class="form-submit-btn">
                        <span id="submitText">Submit Application</span>
                        <span id="spinner" style="display:none;"><i class="fas fa-spinner fa-spin"></i>
                            Processing...</span>
                    </button>
                </form>
            </div>

            <!-- Terms Column -->
            <div class="terms-column animate-fade" style="animation-delay: 0.4s;">
                <div class="terms-title">
                    <h2>Partnership Terms & Conditions</h2>
                    <p>Review our partnership agreement terms and conditions</p>
                </div>

                <div class="terms-content">
                    <h3>1. Partnership Eligibility</h3>
                    <p>To qualify for our partnership program, applicants must operate a legally registered business
                        with relevant industry experience. We evaluate each application carefully and reserve the right
                        to approve or reject applications at our discretion.</p>

                    <h3>2. Commission Structure</h3>
                    <p>Our performance-based commission structure offers increasing payouts as you grow:</p>
                    <ul>
                        <li><strong>Standard Tier:</strong> 20% commission on first-year revenue from referred clients
                        </li>
                        <li><strong>Silver Tier:</strong> 25% commission (after generating $10,000 in referrals)</li>
                        <li><strong>Gold Tier:</strong> 30% commission (after generating $50,000 in referrals)</li>
                    </ul>
                    <p>All commissions are paid monthly via your preferred payment method (PayPal, bank transfer, etc.).
                    </p>

                    <h3>3. Marketing Guidelines</h3>
                    <p>Partners must adhere to our brand guidelines when promoting our services. You may use approved
                        marketing materials from our partner portal but may not:</p>
                    <ul>
                        <li>Make false or misleading claims about our services</li>
                        <li>Use spam marketing tactics or unsolicited communications</li>
                        <li>Bid on our branded keywords in paid search campaigns</li>
                        <li>Represent yourself as an employee or official representative of our company</li>
                    </ul>

                    <h3>4. Confidentiality Agreement</h3>
                    <p>All proprietary information shared with partners, including pricing structures, client lists, and
                        internal processes, is strictly confidential and may not be disclosed to third parties without
                        our written consent.</p>

                    <h3>5. Program Termination</h3>
                    <p>Either party may terminate the partnership with 30 days written notice. We reserve the right to
                        immediately terminate partnerships for violations of these terms or fraudulent activity.</p>

                    <h3>6. Agreement Modifications</h3>
                    <p>We may update these terms with 30 days notice. Continued participation in the program after
                        changes take effect constitutes acceptance of the modified terms.</p>

                    <h3>7. Contact Information</h3>
                    <p>For questions about our partnership program, please <a href="{{ route('contact') }}"
                            style="color: var(--accent-color); font-weight: 500;">contact our partnership team</a>.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection