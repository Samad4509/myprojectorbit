
@extends('frontend.master')
@section('body')

    <style>
       


        h1 {
            font-size: 2.2rem;
            color: #ffffff;
        }

        h2, h3 {
            color: #ffffff;
        }

        .partner-hero {
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 20px;
            text-align: center;
            margin-bottom: 40px;
            border-radius: 8px;
            border: 1px solid #333;
        }

        .partner-hero h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .partner-hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 30px;
            color: #cccccc;
        }

        .btn {
            display: inline-block;
            background-color: #e74c3c;
            color: white;
            padding: 12px 30px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #c0392b;
        }

        .registration-container {
            display: flex;
            gap: 30px;
            margin-bottom: 50px;
        }

        .registration-form {
            flex: 1;
            background-color: #1e1e1e;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border: 1px solid #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #cccccc;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="url"],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            background-color: #2d2d2d;
            border: 1px solid #444;
            border-radius: 4px;
            font-size: 16px;
            color: #e0e0e0;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .terms-container {
            flex: 1;
            background-color: #1e1e1e;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            max-height: 600px;
            overflow-y: auto;
            border: 1px solid #333;
        }

        .terms-container h2 {
            margin-bottom: 20px;
            color: #ffffff;
        }

        .terms-content {
            margin-bottom: 20px;
        }

        .terms-content h3 {
            margin: 20px 0 10px;
            color: #ffffff;
        }

        .terms-content p {
            margin-bottom: 15px;
            color: #cccccc;
        }

        .terms-content ul {
            margin-left: 20px;
            margin-bottom: 15px;
            color: #cccccc;
        }

        .checkbox-group {
            display: flex;
            align-items: flex-start;
            margin: 25px 0;
        }

        .checkbox-group input {
            margin-right: 10px;
            margin-top: 5px;
        }

        .checkbox-group label {
            color: #cccccc;
        }

        .submit-btn {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 14px 30px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
            font-weight: bold;
        }

        .submit-btn:hover {
            background-color: #c0392b;
        }

        .benefits {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .benefit-card {
            background-color: #1e1e1e;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            border: 1px solid #333;
        }

        .benefit-icon {
            font-size: 3rem;
            color: #e74c3c;
            margin-bottom: 20px;
        }

        .benefit-card h3 {
            margin-bottom: 15px;
            color: #ffffff;
        }

        .benefit-card p {
            color: #cccccc;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #2d2d2d;
        }

        ::-webkit-scrollbar-thumb {
            background: #555;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #777;
        }

        @media (max-width: 768px) {
            .registration-container {
                flex-direction: column;
            }
            
            .partner-hero h2 {
                font-size: 2rem;
            }
            
            .benefits {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <div class="container">
        
        <section class="partner-hero">
            <h2>Grow Your Business With Our Partnership Program</h2>
            <p>Join our network of trusted partners and unlock new opportunities for growth, revenue, and success.</p>
            {{-- <a href="#registration" class="btn ">Apply Now</a> --}}
            <div class="banner-btn-group mt--30 mx-auto">
               <a class="rainbow-gradient-btn mx-auto" href="{{route('contact')}}"><span>Contact us</span></a>
            </div>
            
        </section>
        <section class="benefits">
            <div class="benefit-card">
                <div class="benefit-icon">💼</div>
                <h3>Increased Revenue</h3>
                <p>Earn competitive commissions for every successful referral or sale you generate through our partnership program.</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon">🚀</div>
                <h3>Marketing Support</h3>
                <p>Access our marketing resources, co-branded materials, and campaigns to help promote our joint offerings.</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon">🤝</div>
                <h3>Dedicated Support</h3>
                <p>Get personalized support from our partnership team to help you maximize the benefits of our collaboration.</p>
            </div>
        </section>

        <section id="registration" class="registration-container">
            <div class="registration-form">
                <h2>Partner Registration</h2>
                <form id="partnerForm">
                    <div class="form-group">
                        <label for="company">Company Name*</label>
                        <input type="text" id="company" name="company" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="contact">Contact Person*</label>
                        <input type="text" id="contact" name="contact" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address*</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number*</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="website">Website URL</label>
                        <input type="url" id="website" name="website">
                    </div>
                    
                    <div class="form-group">
                        <label for="type">Partnership Type*</label>
                        <select id="type" name="type" required>
                            <option value="">Select partnership type</option>
                            <option value="reseller">Reseller</option>
                            <option value="referral">Referral Partner</option>
                            <option value="technology">Technology Partner</option>
                            <option value="affiliate">Affiliate</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Tell Us About Your Business*</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    
                    <div class="checkbox-group">
                        <input type="checkbox" id="agree" name="agree" required>
                        <label for="agree">I have read and agree to the Terms and Conditions*</label>
                    </div>
                    {{-- <button type="submit" class="submit-btn">Submit Application</button> --}}
                    <div class="banner-btn-group mt--30 mx-auto">
                        <a class="rainbow-gradient-btn" href=""><span>Submit</span></a>
                    </div>
                </form>
            </div>
            
            <div class="terms-container">
                <h2>Partnership Terms & Conditions</h2>
                
                <div class="terms-content">
                    <h3>1. Partnership Agreement</h3>
                    <p>This Partnership Agreement ("Agreement") is made and entered into as of the date of acceptance by the Partner ("Effective Date") by and between Our Company ("Company") and the applicant ("Partner").</p>
                    
                    <h3>2. Partnership Types</h3>
                    <p>The Company offers several types of partnership arrangements:</p>
                    <ul>
                        <li><strong>Reseller Partners:</strong> Purchase our products at a discount and resell to end customers</li>
                        <li><strong>Referral Partners:</strong> Refer potential customers and earn commissions</li>
                        <li><strong>Technology Partners:</strong> Integrate our solutions with your products</li>
                        <li><strong>Affiliate Partners:</strong> Promote our products through your marketing channels</li>
                    </ul>
                    
                    <h3>3. Partner Responsibilities</h3>
                    <p>Partner agrees to:</p>
                    <ul>
                        <li>Represent the Company's products and services professionally and ethically</li>
                        <li>Not make any false or misleading claims about the Company's offerings</li>
                        <li>Comply with all applicable laws and regulations</li>
                        <li>Maintain the confidentiality of any proprietary information</li>
                    </ul>
                    
                    <h3>4. Commission Structure</h3>
                    <p>Commission rates vary by partnership type and product category. Standard rates are:</p>
                    <ul>
                        <li>Reseller Partners: 20-30% discount from retail price</li>
                        <li>Referral Partners: 10-15% of first-year contract value</li>
                        <li>Affiliate Partners: 5-10% of sale amount</li>
                    </ul>
                    <p>Commissions are paid within 30 days of receipt of payment from the customer.</p>
                    
                    <h3>5. Intellectual Property</h3>
                    <p>All trademarks, logos, and marketing materials remain the property of the Company. Partners may use approved marketing materials but may not modify them without written consent.</p>
                    
                    <h3>6. Term and Termination</h3>
                    <p>This Agreement begins on the Effective Date and continues until terminated by either party with 30 days written notice. The Company may terminate immediately for breach of terms.</p>
                    
                    <h3>7. Limitation of Liability</h3>
                    <p>The Company shall not be liable for any indirect, incidental, or consequential damages arising from this partnership.</p>
                    
                    <h3>8. Governing Law</h3>
                    <p>This Agreement shall be governed by the laws of the state where the Company is headquartered.</p>
                    
                    <h3>9. Entire Agreement</h3>
                    <p>This document constitutes the entire agreement between the parties and supersedes all prior agreements.</p>
                </div>
            </div>
        </section>
    </div>

    <script>
        document.getElementById('partnerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic form validation
            const requiredFields = document.querySelectorAll('#partnerForm [required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.style.borderColor = '#e74c3c';
                    isValid = false;
                } else {
                    field.style.borderColor = '#444';
                }
            });
            
            if (!document.getElementById('agree').checked) {
                alert('You must agree to the Terms and Conditions');
                isValid = false;
            }
            
            if (isValid) {
                // Here you would typically send the form data to a server
                alert('Thank you for your application! We will review your information and contact you soon.');
                this.reset();
            }
        });
    </script>
@endsection
