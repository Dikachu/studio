<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EASY TREND LUXE - Create Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap');
        
        :root {
            --primary-color: #0a0a0a;
            --secondary-color: #f8f3e9;
            --accent-color: #d4af37; /* More vibrant gold */
            --text-color: #333333;
            --light-gray: #f5f5f5;
            --error-color: #d84c4c;
            --success-color: #4cd84c;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--primary-color);
            color: var(--secondary-color);
            line-height: 1.6;
            min-height: 100vh;
            overflow-x: hidden;
        }
        
        .container {
            display: flex;
            min-height: 100vh;
        }
        
        .image-side {
            flex: 1;
            background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('/api/placeholder/1000/1600') no-repeat center center;
            background-size: cover;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        
        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0) 60%);
            z-index: 1;
        }
        
        .brand {
            position: relative;
            padding: 40px;
            z-index: 2;
        }
        
        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 700;
            letter-spacing: 3px;
            color: var(--secondary-color);
        }
        
        .tagline {
            font-family: 'Montserrat', sans-serif;
            font-size: 12px;
            font-weight: 300;
            letter-spacing: 3px;
            color: var(--secondary-color);
            opacity: 0.8;
            margin-top: 4px;
        }
        
        .image-content {
            position: relative;
            padding: 40px;
            z-index: 2;
        }
        
        .image-quote {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            font-weight: 500;
            line-height: 1.4;
            color: var(--secondary-color);
            max-width: 90%;
        }
        
        .image-author {
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            font-weight: 500;
            color: var(--accent-color);
            margin-top: 16px;
        }
        
        .form-side {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
            background-color: var(--primary-color);
            position: relative;
            overflow-y: auto;
        }
        
        .form-container {
            width: 100%;
            max-width: 440px;
            padding: 20px;
        }
        
        .form-header {
            margin-bottom: 40px;
        }
        
        .form-title {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 16px;
            color: var(--secondary-color);
        }
        
        .form-subtitle {
            font-size: 14px;
            font-weight: 300;
            color: var(--secondary-color);
            opacity: 0.7;
        }
        
        .social-login {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin-bottom: 30px;
        }
        
        .social-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.05);
            color: var(--secondary-color);
            transition: all 0.3s ease;
            cursor: pointer;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .social-btn:hover {
            background-color: var(--accent-color);
            transform: translateY(-3px);
            color: var(--primary-color);
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 30px 0;
            color: var(--secondary-color);
            opacity: 0.5;
        }
        
        .divider-line {
            flex: 1;
            height: 1px;
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        .divider-text {
            padding: 0 16px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .form-group {
            margin-bottom: 24px;
            position: relative;
        }
        
        .form-group label {
            display: block;
            font-size: 12px;
            font-weight: 500;
            margin-bottom: 8px;
            color: var(--secondary-color);
            letter-spacing: 1px;
        }
        
        .input-group {
            position: relative;
        }
        
        .form-control {
            width: 100%;
            padding: 16px;
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 4px;
            color: var(--secondary-color);
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 2px rgba(212, 175, 55, 0.2);
        }
        
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.3);
        }
        
        .toggle-password {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
        }
        
        .toggle-password:hover {
            color: var(--accent-color);
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            font-size: 12px;
        }
        
        .checkbox-container {
            display: flex;
            align-items: center;
        }
        
        .checkbox-container input {
            margin-right: 8px;
            accent-color: var(--accent-color);
        }
        
        .forgot-link {
            color: var(--secondary-color);
            text-decoration: none;
            opacity: 0.7;
            transition: all 0.3s ease;
        }
        
        .forgot-link:hover {
            opacity: 1;
            color: var(--accent-color);
        }
        
        .btn-primary {
            width: 100%;
            padding: 16px;
            background-color: var(--accent-color);
            color: var(--primary-color);
            border: none;
            border-radius: 4px;
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.6s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .btn-primary:hover::before {
            left: 100%;
        }
        
        .login-link {
            text-align: center;
            margin-top: 24px;
            font-size: 14px;
            color: var(--secondary-color);
            opacity: 0.7;
        }
        
        .login-link a {
            color: var(--accent-color);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .login-link a:hover {
            text-decoration: underline;
        }
        
        .password-requirements {
            margin-top: 12px;
        }
        
        .requirement {
            display: flex;
            align-items: center;
            font-size: 11px;
            margin-bottom: 4px;
            color: rgba(255, 255, 255, 0.6);
        }
        
        .requirement i {
            margin-right: 6px;
            font-size: 10px;
        }
        
        .requirement.valid {
            color: var(--success-color);
        }
        
        .requirement.invalid {
            color: var(--error-color);
        }
        
        .error-message {
            font-size: 12px;
            color: var(--error-color);
            margin-top: 4px;
            display: none;
        }
        
        .benefits {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 36px;
            padding-top: 24px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .benefits-title {
            font-size: 14px;
            font-weight: 600;
            color: var(--secondary-color);
            margin-bottom: 8px;
        }
        
        .benefit-item {
            display: flex;
            align-items: center;
            font-size: 13px;
            color: var(--secondary-color);
            opacity: 0.8;
        }
        
        .benefit-icon {
            color: var(--accent-color);
            margin-right: 12px;
        }
        
        .language-dropdown {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 10;
        }
        
        .language-select {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 4px;
            color: var(--secondary-color);
            padding: 6px 12px;
            font-family: 'Montserrat', sans-serif;
            font-size: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .language-select:focus {
            outline: none;
            border-color: var(--accent-color);
        }
        
        .language-select option {
            background-color: var(--primary-color);
            color: var(--secondary-color);
        }

        /* Animation classes */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .animated {
            animation: fadeIn 0.5s ease forwards;
            opacity: 0;
        }
        
        /* Responsive styles */
        @media (max-width: 992px) {
            .container {
                flex-direction: column;
            }
            
            .image-side {
                min-height: 40vh;
            }
            
            .form-side {
                min-height: 60vh;
            }
            
            .image-content {
                padding-bottom: 60px;
            }
        }
        
        @media (max-width: 768px) {
            .form-container {
                max-width: 100%;
                padding: 10px;
            }
            
            .brand {
                padding: 20px;
            }
            
            .image-content {
                padding: 20px;
            }
            
            .image-quote {
                font-size: 20px;
            }
        }
        
        @media (max-width: 576px) {
            .image-side {
                min-height: 30vh;
            }
            
            .form-side {
                padding: 20px 15px 40px;
            }
            
            .logo {
                font-size: 24px;
            }
            
            .form-title {
                font-size: 28px;
            }
        }

        /* Added shimmer effect for luxury feel */
        .logo::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 200%;
            height: 100%;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.2) 50%, transparent 100%);
            animation: shimmer 3s infinite;
            transform: translateX(-100%);
        }
        
        @keyframes shimmer {
            100% {
                transform: translateX(100%);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-side">
            <div class="image-overlay"></div>
            <div class="brand">
                <div class="logo">EASY TREND LUXE</div>
                <div class="tagline">FASHION & PHOTOGRAPHY</div>
            </div>
            <div class="image-content">
                <div class="image-quote">"Style is a way to say who you are without having to speak."</div>
                <div class="image-author">— Rachel Zoe</div>
            </div>
        </div>
        
        <div class="form-side">
            <!-- <div class="language-dropdown">
                <select class="language-select" id="language-select">
                    <option value="en">English</option>
                    <option value="fr">Français</option>
                    <option value="es">Español</option>
                    <option value="de">Deutsch</option>
                    <option value="it">Italiano</option>
                    <option value="ja">日本語</option>
                </select>
            </div> -->
            
            <div class="form-container">
                <div class="form-header animated" style="animation-delay: 0.1s;">
                    <h1 class="form-title">Create Your Account</h1>
                    <p class="form-subtitle">Join our exclusive community of fashion enthusiasts</p>
                </div>
                
                <div class="social-login animated" style="animation-delay: 0.2s;">
                    <div class="social-btn">
                        <i class="fab fa-google"></i>
                    </div>
                    <div class="social-btn">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <div class="social-btn">
                        <i class="fab fa-apple"></i>
                    </div>
                </div>
                
                <div class="divider animated" style="animation-delay: 0.3s;">
                    <div class="divider-line"></div>
                    <div class="divider-text">or with email</div>
                    <div class="divider-line"></div>
                </div>
                
                <form id="signup-form">
                    <div class="form-group animated" style="animation-delay: 0.4s;">
                        <label for="fullname">FULL NAME</label>
                        <div class="input-group">
                            <input type="text" id="fullname" class="form-control" placeholder="Enter your full name" required>
                        </div>
                        <div class="error-message" id="fullname-error">Please enter your full name</div>
                    </div>
                    
                    <div class="form-group animated" style="animation-delay: 0.5s;">
                        <label for="email">EMAIL ADDRESS</label>
                        <div class="input-group">
                            <input type="email" id="email" class="form-control" placeholder="Enter your email address" required>
                        </div>
                        <div class="error-message" id="email-error">Please enter a valid email address</div>
                    </div>
                    
                    <div class="form-group animated" style="animation-delay: 0.6s;">
                        <label for="password">PASSWORD</label>
                        <div class="input-group">
                            <input type="password" id="password" class="form-control" placeholder="Create a strong password" required>
                            <span class="toggle-password">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                        <div class="password-requirements">
                            <div class="requirement" id="length">
                                <i class="fas fa-circle"></i> 
                                <span>At least 8 characters</span>
                            </div>
                            <div class="requirement" id="uppercase">
                                <i class="fas fa-circle"></i> 
                                <span>At least 1 uppercase letter</span>
                            </div>
                            <div class="requirement" id="lowercase">
                                <i class="fas fa-circle"></i> 
                                <span>At least 1 lowercase letter</span>
                            </div>
                            <div class="requirement" id="number">
                                <i class="fas fa-circle"></i> 
                                <span>At least 1 number</span>
                            </div>
                            <div class="requirement" id="special">
                                <i class="fas fa-circle"></i> 
                                <span>At least 1 special character</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="remember-forgot animated" style="animation-delay: 0.7s;">
                        <div class="checkbox-container">
                            <input type="checkbox" id="newsletter" checked>
                            <label for="newsletter">Subscribe to newsletter</label>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn-primary animated" style="animation-delay: 0.8s;">CREATE ACCOUNT</button>
                    
                    <div class="login-link animated" style="animation-delay: 0.9s;">
                        Already have an account? <a href="#">Sign in</a>
                    </div>
                </form>
                
                <div class="benefits animated" style="animation-delay: 1s;">
                    <div class="benefits-title">MEMBERSHIP BENEFITS</div>
                    <div class="benefit-item">
                        <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                        <span>Early access to new collections</span>
                    </div>
                    <div class="benefit-item">
                        <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                        <span>Exclusive member pricing</span>
                    </div>
                    <div class="benefit-item">
                        <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                        <span>Priority studio booking</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // DOM Elements
        const passwordInput = document.getElementById('password');
        const requirements = {
            length: document.getElementById('length'),
            uppercase: document.getElementById('uppercase'),
            lowercase: document.getElementById('lowercase'),
            number: document.getElementById('number'),
            special: document.getElementById('special')
        };
        
        // Password validation function
        function validatePassword() {
            const password = passwordInput.value;
            
            // Check each requirement
            const checks = {
                length: password.length >= 8,
                uppercase: /[A-Z]/.test(password),
                lowercase: /[a-z]/.test(password),
                number: /[0-9]/.test(password),
                special: /[^A-Za-z0-9]/.test(password)
            };
            
            // Update the UI for each requirement
            for (const [requirement, isValid] of Object.entries(checks)) {
                const el = requirements[requirement];
                if (isValid) {
                    el.classList.add('valid');
                    el.classList.remove('invalid');
                    el.querySelector('i').className = 'fas fa-check-circle';
                } else {
                    el.classList.add('invalid');
                    el.classList.remove('valid');
                    el.querySelector('i').className = 'fas fa-times-circle';
                }
            }
            
            // Return true if all requirements are met
            return Object.values(checks).every(check => check);
        }
        
        // Toggle password visibility
        document.querySelector('.toggle-password').addEventListener('click', function() {
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
        
        // Password validation on input
        passwordInput.addEventListener('input', validatePassword);
        
        // Form validation
        document.getElementById('signup-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            let isValid = true;
            const fullname = document.getElementById('fullname');
            const email = document.getElementById('email');
            
            // Validate fullname
            if (fullname.value.trim() === '') {
                document.getElementById('fullname-error').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('fullname-error').style.display = 'none';
            }
            
            // Validate email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email.value)) {
                document.getElementById('email-error').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('email-error').style.display = 'none';
            }
            
            // Validate password
            const isPasswordValid = validatePassword();
            if (!isPasswordValid) {
                isValid = false;
            }
            
            if (isValid) {
                // In a real application, you would submit the form data to your server here
                alert('Account created successfully!');
                this.reset();
                // Reset password requirements UI
                for (const req of Object.values(requirements)) {
                    req.classList.remove('valid', 'invalid');
                    req.querySelector('i').className = 'fas fa-circle';
                }
            }
        });
        
        // Language selector functionality
        // document.getElementById('language-select').addEventListener('change', function() {
        //     // In a real application, you would implement language switching here
        //     const selectedLanguage = this.value;
        //     console.log(`Language changed to: ${selectedLanguage}`);
        //     // Mock language change with alert
        //     alert(`Language changed to: ${this.options[this.selectedIndex].text}`);
        // });
        
        // Initialize animations on load
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                const elements = document.querySelectorAll('.animated');
                elements.forEach(el => {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                });
            }, 100);
        });
    </script>
</body>
</html>