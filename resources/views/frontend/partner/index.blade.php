@extends('frontend.master')
@section('body')

<style>
    /* Base Styles */
    :root {
        --primary-color: #6699ff;
        --primary-dark: #6699ff;
        --secondary-color: #3498db;
        --dark-bg: #1a1a1a;
        --darker-bg: #121212;
        --card-bg: #242424;
        --text-light: #f8f9fa;
        --text-muted: #adb5bd;
        --border-color: #444;
        --success-color: #2ecc71;
        --font-primary: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        --font-size-base: 1.1rem; /* Increased base font size */
        --line-height-base: 1.7;
    }
    
    body {
        font-family: var(--font-primary);
        font-size: var(--font-size-base);
        line-height: var(--line-height-base);
        color: var(--text-light);
        -webkit-font-smoothing: antialiased;
        text-rendering: optimizeLegibility;
    }
    
    /* Improved Typography Scale */
    h1 { font-size: 2.5rem; line-height: 1.3; }
    h2 { font-size: 2rem; line-height: 1.35; }
    h3 { font-size: 1.75rem; line-height: 1.4; }
    h4 { font-size: 1.5rem; line-height: 1.45; }
    h5 { font-size: 1.25rem; line-height: 1.5; }
    h6 { font-size: 1.1rem; line-height: 1.6; }
    
    p {
        font-size: var(--font-size-base);
        line-height: var(--line-height-base);
        margin-bottom: 1.5rem;
    }
    
    .partner-hero {
        background-image: linear-gradient(135deg, rgba(0, 0, 0, 0.85), rgba(39, 39, 39, 0.8)), 
                         url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: var(--text-light);
        padding: 6rem 1rem;
        text-align: center;
        margin-bottom: 3rem;
        border-radius: 0.5rem;
        border: 1px solid var(--border-color);
        position: relative;
        overflow: hidden;
    }

    .partner-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at 20% 50%, transparent 0%, rgba(0,0,0,0.7) 100%);
        z-index: 0;
    }

    .partner-hero-content {
        position: relative;
        z-index: 1;
        max-width: 800px;
        margin: 0 auto;
    }

    .partner-hero h2 {
        font-size: clamp(2.5rem, 5vw, 3.5rem); /* Larger heading */
        margin-bottom: 1.5rem;
        font-weight: 700;
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-shadow: 0 2px 10px rgba(0,0,0,0.2);
        line-height: 1.2;
        letter-spacing: -0.5px;
    }

    .partner-hero p {
        font-size: clamp(1.2rem, 2vw, 1.5rem); /* Larger paragraph */
        margin: 0 auto 2.5rem;
        color: var(--text-light);
        line-height: 1.6;
        opacity: 0.9;
        max-width: 700px;
        font-weight: 400;
    }

    /* Benefits Section */
    .benefits-section {
        padding: 4rem 1rem;
        background-color: var(--darker-bg);
        margin-bottom: 3rem;
    }

    .section-title {
        text-align: center;
        margin-bottom: 3rem;
    }

    .section-title h2 {
        font-size: 2.5rem; /* Larger section title */
        color: var(--text-light);
        margin-bottom: 1.5rem;
        position: relative;
        display: inline-block;
        font-weight: 700;
        line-height: 1.2;
    }

    .section-title h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        border-radius: 3px;
    }

    .section-title p {
        color: var(--text-light);
        max-width: 700px;
        margin: 0 auto;
        font-size: 1.2rem; /* Larger description */
        opacity: 0.8;
        line-height: 1.6;
    }

    .benefits-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .benefits {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }

    .benefit-card {
        background-color: var(--card-bg);
        padding: 2.5rem; /* Increased padding */
        border-radius: 0.5rem;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        text-align: center;
        border: 1px solid var(--border-color);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .benefit-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
    }

    .benefit-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
    }

    .benefit-icon {
        font-size: 3.5rem;
        margin-bottom: 1.5rem;
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .benefit-card h3 {
        margin-bottom: 1.2rem;
        color: var(--text-light);
        font-size: 1.5rem; /* Larger card title */
        font-weight: 600;
        line-height: 1.4;
    }

    .benefit-card p {
        color: var(--text-light);
        line-height: 1.7;
        font-size: 15px; /* Larger card text */
        opacity: 0.8;
        margin-bottom: 0;
    }

    /* Form Section */
    .form-section {
        padding: 4rem 1rem;
        background-color: var(--dark-bg);
    }

    .form-container {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
    }

    @media (max-width: 992px) {
        .form-container {
            grid-template-columns: 1fr;
        }
    }

    /* Form Styles */
    .form-column {
        background-color: var(--card-bg);
        padding: 2.5rem;
        border-radius: 0.5rem;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        border: 1px solid var(--border-color);
    }

    .form-title {
        text-align: center;
        margin-bottom: 2rem;
    }

    .form-title h2 {
        font-size: 2rem; /* Larger form title */
        color: var(--text-light);
        margin-bottom: 0.5rem;
        font-weight: 700;
        line-height: 1.3;
    }

    .form-title p {
        color: var(--text-light);
        font-size: 1.15rem; /* Larger form description */
        opacity: 0.8;
        line-height: 1.6;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: var(--text-light);
        font-weight: 500;
        font-size: 15px; /* Larger form labels */
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 1rem; /* Increased padding */
        background-color: var(--darker-bg);
        border: 1px solid var(--border-color);
        border-radius: 0.25rem;
        color: var(--text-light);
        font-size: 1.1rem; /* Larger form input text */
        transition: all 0.3s ease;
        font-family: var(--font-primary);
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(102, 153, 255, 0.2);
    }

    .form-group textarea {
        min-height: 150px; /* Taller textarea */
        resize: vertical;
        line-height: 1.6;
    }

    .checkbox-group {
        display: flex;
        align-items: flex-start;
        margin: 1.5rem 0;
    }

    .checkbox-group input {
        margin-right: 0.75rem;
        margin-top: 0.25rem;
    }

    .checkbox-group label {
        color: var(--text-light);
        font-size: 1.05rem; /* Larger checkbox text */
        line-height: 1.6;
        opacity: 0.9;
    }

    .checkbox-group a {
        color: var(--primary-color);
        text-decoration: none;
        transition: color 0.3s ease;
        font-weight: 500;
    }

    .checkbox-group a:hover {
        color: var(--secondary-color);
        text-decoration: underline;
    }

    /* Terms Container */
    .terms-column {
        background-color: var(--card-bg);
        padding: 2.5rem;
        border-radius: 0.5rem;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        border: 1px solid var(--border-color);
        height: 100%;
    }

    .terms-title {
        text-align: center;
        margin-bottom: 2rem;
    }

    .terms-title h2 {
        font-size: 2rem; /* Larger terms title */
        color: var(--text-light);
        margin-bottom: 0.5rem;
        font-weight: 700;
        line-height: 1.3;
    }

    .terms-title p {
        color: var(--text-light);
        font-size: 1.15rem; /* Larger terms description */
        opacity: 0.8;
        line-height: 1.6;
    }

    .terms-content {
        max-height: 500px;
        overflow-y: auto;
        padding-right: 1rem;
    }

    .terms-content h3 {
        color: var(--primary-color);
        margin: 1.8rem 0 0.8rem;
        font-size: 1.4rem; /* Larger terms headings */
        font-weight: 600;
        line-height: 1.4;
    }

    .terms-content p, 
    .terms-content li {
        color: var(--text-light);
        line-height: 1.7;
        margin-bottom: 0.8rem;
        font-size: 15px; /* Larger terms text */
        opacity: 0.8;
    }

    .terms-content ul {
        padding-left: 1.5rem;
        margin-bottom: 1rem;
    }

    .terms-content li {
        margin-bottom: 0.5rem;
    }

    /* Button Styles */
    .form-submit-btn {
        background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
        color: white;
        border: none;
        padding: 1.1rem 1.5rem; /* Larger button */
        font-size: 1.1rem; /* Larger button text */
        border-radius: 0.25rem;
        cursor: pointer;
        display: block;
        width: 100%;
        font-weight: 600;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-top: 1rem;
        font-family: var(--font-primary);
    }

    .form-submit-btn:hover {
        background: linear-gradient(135deg, var(--primary-dark), var(--primary-color));
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 153, 255, 0.3);
    }

    /* Success Message */
    .success-message {
        display: none;
        background-color: rgba(46, 204, 113, 0.1);
        border: 1px solid var(--success-color);
        color: var(--text-light);
        padding: 1.5rem;
        border-radius: 0.25rem;
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .success-message i {
        color: var(--success-color);
        font-size: 2.5rem; /* Larger icon */
        margin-bottom: 1rem;
        display: block;
    }

    .success-message h3 {
        font-size: 1.8rem; /* Larger success heading */
        margin-bottom: 0.5rem;
        font-weight: 700;
        line-height: 1.4;
    }

    .success-message p {
        font-size: 1.15rem; /* Larger success text */
        line-height: 1.6;
        opacity: 0.9;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        :root {
            --font-size-base: 1rem; /* Slightly smaller base size on mobile */
        }
        
        .partner-hero {
            padding: 4rem 1rem;
            background-attachment: scroll;
        }
        
        .partner-hero h2 {
            font-size: 2.2rem;
        }
        
        .partner-hero p {
            font-size: 1.1rem;
        }
        
        .section-title h2 {
            font-size: 2rem;
        }
        
        .section-title p {
            font-size: 1.05rem;
        }
        
        .benefit-card h3 {
            font-size: 1.3rem;
        }
        
        .benefit-card p {
            font-size: 1rem;
        }
        
        .form-title h2,
        .terms-title h2 {
            font-size: 1.7rem;
        }
        
        .form-title p,
        .terms-title p {
            font-size: 1.05rem;
        }
        
        .form-group label {
            font-size: 15px;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            font-size: 1rem;
            padding: 0.9rem;
        }
        
        .terms-content h3 {
            font-size: 1.2rem;
        }
        
        .terms-content p,
        .terms-content li {
            font-size: 1rem;
        }
    }

    /* Rest of your existing styles... */
</style>

<div class="container py-5">
<section>
    <div class="partner-hero">
        <div class="partner-hero-content animate-fade">
            <h2>Partner With Us</h2>
            <p>Join our network of partners and unlock powerful growth opportunities with competitive commissions, dedicated support, and premium resources to help your business thrive.</p>
            <div class="banner-btn-group mt--30 mx-auto">
                <a class="rainbow-gradient-btn mx-auto" href="{{route('contact')}}">
                    <span>Get in Touch</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="benefits-section">
    <div class="benefits-container">
        <div class="section-title animate-fade" style="animation-delay: 0.2s;">
            <h2>Why Partner With Us?</h2>
            <p>We provide everything you need to grow your business while delivering exceptional value to your clients.</p>
        </div>
        
        <div class="benefits">
            <div class="benefit-card animate-fade" style="animation-delay: 0.3s;">
                <div class="benefit-icon">💼</div>
                <h3>Lucrative Commissions</h3>
                <p>Earn industry-leading commissions with our tiered revenue sharing model that rewards your performance and helps you grow your income.</p>
            </div>
            
            <div class="benefit-card animate-fade" style="animation-delay: 0.4s;">
                <div class="benefit-icon">🚀</div>
                <h3>Marketing Resources</h3>
                <p>Access our library of high-converting marketing materials, templates, and proven campaign strategies to accelerate your success.</p>
            </div>
            
            <div class="benefit-card animate-fade" style="animation-delay: 0.5s;">
                <div class="benefit-icon">🤝</div>
                <h3>Dedicated Support</h3>
                <p>Get personalized assistance from our partnership team to maximize your success and overcome any challenges you may face.</p>
            </div>
        </div>
    </div>
</section>

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
                <p>Thank you for your interest in partnering with us. Our team will review your application and respond within 2 business days.</p>
            </div>
            
            <form id="partnerForm">
                <div class="form-group">
                    <label for="companyName">Company Name *</label>
                    <input type="text" id="companyName" name="companyName" required placeholder="Your company name">
                </div>
                
                <div class="form-group">
                    <label for="fullName">Your Full Name *</label>
                    <input type="text" id="fullName" name="fullName" required placeholder="First and last name">
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" required placeholder="Your business email">
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number *</label>
                    <input type="tel" id="phone" name="phone" required placeholder="+1 (123) 456-7890">
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
                </div>
                
                <div class="form-group">
                    <label for="website">Website (if applicable)</label>
                    <input type="url" id="website" name="website" placeholder="https://yourwebsite.com">
                </div>
                
                <div class="form-group">
                    <label for="message">Tell us about your business *</label>
                    <textarea id="message" name="message" required placeholder="Describe your business, clients, and why you want to partner with us"></textarea>
                </div>
                
                <div class="checkbox-group">
                    <input type="checkbox" id="agree" name="agree" required>
                    <label for="agree">I agree to the <a href="#" id="termsLink">Terms and Conditions</a> and Privacy Policy</label>
                </div>
                
                <button type="submit" class="form-submit-btn">
                    <span id="submitText">Submit Application</span>
                    <span id="spinner" style="display:none;"><i class="fas fa-spinner fa-spin"></i> Processing...</span>
                </button>
            </form>
        </div>
        
        <!-- Terms Column -->
        <div class="terms-column animate-fade" style="animation-delay: 0.4s;">
            <div class="terms-title">
                <h2>Partnership Terms</h2>
                <p>Review our partnership agreement terms and conditions</p>
            </div>
            
            <div class="terms-content">
                <h3>1. Partnership Eligibility</h3>
                <p>To qualify for our partnership program, applicants must operate a legally registered business with relevant industry experience. We evaluate each application carefully and reserve the right to approve or reject applications at our discretion.</p>
                
                <h3>2. Commission Structure</h3>
                <p>Our performance-based commission structure offers increasing payouts as you grow:</p>
                <ul>
                    <li><strong>Standard Tier:</strong> 20% commission on first-year revenue from referred clients</li>
                    <li><strong>Silver Tier:</strong> 25% commission (after generating $10,000 in referrals)</li>
                    <li><strong>Gold Tier:</strong> 30% commission (after generating $50,000 in referrals)</li>
                </ul>
                <p>All commissions are paid monthly via your preferred payment method (PayPal, bank transfer, etc.).</p>
                
                <h3>3. Marketing Guidelines</h3>
                <p>Partners must adhere to our brand guidelines when promoting our services. You may use approved marketing materials from our partner portal but may not:</p>
                <ul>
                    <li>Make false or misleading claims about our services</li>
                    <li>Use spam marketing tactics or unsolicited communications</li>
                    <li>Bid on our branded keywords in paid search campaigns</li>
                    <li>Represent yourself as an employee or official representative of our company</li>
                </ul>
                
                <h3>4. Confidentiality Agreement</h3>
                <p>All proprietary information shared with partners, including pricing structures, client lists, and internal processes, is strictly confidential and may not be disclosed to third parties without our written consent.</p>
                
                <h3>5. Program Termination</h3>
                <p>Either party may terminate the partnership with 30 days written notice. We reserve the right to immediately terminate partnerships for violations of these terms or fraudulent activity.</p>
                
                <h3>6. Agreement Modifications</h3>
                <p>We may update these terms with 30 days notice. Continued participation in the program after changes take effect constitutes acceptance of the modified terms.</p>
                
                <h3>7. Contact Information</h3>
                <p>For questions about our partnership program, please <a href="{{ route('contact') }}" style="color: var(--primary-color); font-weight: 500;">contact our partnership team</a>.</p>
            </div>
        </div>
    </div>
</section>

</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('partnerForm');
        const successMessage = document.getElementById('successMessage');
        const submitText = document.getElementById('submitText');
        const spinner = document.getElementById('spinner');
        const termsLink = document.getElementById('termsLink');
        
        // Scroll to terms when link is clicked
        termsLink.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector('.terms-column').scrollIntoView({
                behavior: 'smooth'
            });
        });
        
        // Form submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validate form
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.style.borderColor = 'var(--primary-color)';
                    isValid = false;
                    
                    // Add shake animation to empty required fields
                    field.classList.add('field-error');
                    setTimeout(() => {
                        field.classList.remove('field-error');
                    }, 500);
                } else {
                    field.style.borderColor = 'var(--border-color)';
                }
            });
            
            if (!document.getElementById('agree').checked) {
                alert('Please agree to the Terms and Conditions');
                isValid = false;
                return;
            }
            
            if (isValid) {
                // Show loading state
                submitText.style.display = 'none';
                spinner.style.display = 'inline';
                
                // Simulate form submission (replace with actual AJAX call)
                setTimeout(() => {
                    // Hide form and show success message
                    form.style.display = 'none';
                    successMessage.style.display = 'block';
                    
                    // Scroll to success message
                    successMessage.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    
                    // Reset form (for demo purposes)
                    form.reset();
                }, 1500);
            }
        });
        
        // Clear error styles when user types
        form.querySelectorAll('input, textarea, select').forEach(element => {
            element.addEventListener('input', function() {
                this.style.borderColor = 'var(--border-color)';
            });
        });
    });
</script>
@endsection