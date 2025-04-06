<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EASY TREND LUXE - Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }
        
        body {
            background-color: #0a0a0a;
            color: #ffffff;
            height: 100vh;
            display: flex;
            overflow: hidden;
        }
        
        .background-animation {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(125deg, #0a0a0a 0%, #1a1a1a 100%);
            z-index: -1;
        }
        
        .background-animation::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 200%;
            height: 200%;
            background: radial-gradient(ellipse at center, rgba(255,255,255,0.1) 0%, rgba(0,0,0,0) 70%);
            animation: pulse 15s infinite;
        }
        
        @keyframes pulse {
            0% { transform: translate(-50%, -50%) scale(1); opacity: 0.5; }
            50% { transform: translate(-50%, -50%) scale(1.5); opacity: 0.2; }
            100% { transform: translate(-50%, -50%) scale(1); opacity: 0.5; }
        }
        
        .split-container {
            display: flex;
            width: 100%;
            height: 100%;
        }
        
        .visual-side {
            flex: 1;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .visual-slider {
            position: absolute;
            width: 100%;
            height: 100%;
        }
        
        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
            background-size: cover;
            background-position: center;
        }
        
        .slide:nth-child(1) {
            background-image: url('/api/placeholder/800/1200');
            opacity: 1;
        }
        
        .slide:nth-child(2) {
            background-image: url('/api/placeholder/800/1200');
        }
        
        .slide:nth-child(3) {
            background-image: url('/api/placeholder/800/1200');
        }
        
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(0,0,0,0.3));
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 5%;
        }
        
        .brand-content {
            max-width: 80%;
        }
        
        .brand-logo {
            font-size: 2rem;
            font-weight: 300;
            letter-spacing: 8px;
            margin-bottom: 2rem;
            opacity: 0;
            animation: fadeIn 1s ease-in-out forwards 0.5s;
        }
        
        .brand-tagline {
            font-size: 3rem;
            font-weight: 200;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            opacity: 0;
            animation: fadeIn 1s ease-in-out forwards 0.8s;
        }
        
        .brand-description {
            font-size: 1rem;
            font-weight: 300;
            line-height: 1.6;
            max-width: 80%;
            opacity: 0;
            animation: fadeIn 1s ease-in-out forwards 1.1s;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .form-side {
            flex: 0.7;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 5%;
            background-color: #0a0a0a;
            position: relative;
        }
        
        .form-side::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 1px;
            height: 100%;
            background: linear-gradient(to bottom, rgba(255,255,255,0), rgba(255,255,255,0.1), rgba(255,255,255,0));
        }
        
        .login-container {
            width: 100%;
            max-width: 400px;
        }
        
        .login-header {
            margin-bottom: 3rem;
            text-align: center;
        }
        
        .login-title {
            font-size: 2rem;
            font-weight: 300;
            letter-spacing: 2px;
            margin-bottom: 1rem;
        }
        
        .login-subtitle {
            font-size: 0.9rem;
            font-weight: 300;
            color: #aaaaaa;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .form-label {
            position: absolute;
            left: 0;
            top: 10px;
            color: #aaaaaa;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            pointer-events: none;
        }
        
        .form-input {
            width: 100%;
            padding: 10px 0;
            background: transparent;
            border: none;
            border-bottom: 1px solid #444;
            color: #ffffff;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        
        .form-input:focus {
            outline: none;
            border-bottom-color: #d4af37;
        }
        
        .form-input:focus + .form-label,
        .form-input:not(:placeholder-shown) + .form-label {
            top: -20px;
            font-size: 0.8rem;
            color: #d4af37;
        }
        
        .form-input::placeholder {
            opacity: 0;
        }
        
        .forgot-password {
            text-align: right;
            margin-bottom: 2rem;
        }
        
        .forgot-link {
            color: #aaaaaa;
            font-size: 0.8rem;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .forgot-link:hover {
            color: #d4af37;
        }
        
        .cta-button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(to right, #d4af37, #f3da85, #d4af37);
            border: none;
            border-radius: 30px;
            color: #000000;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 1.5rem;
            position: relative;
            overflow: hidden;
        }
        
        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.7s ease;
        }
        
        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.4);
        }
        
        .cta-button:hover::before {
            left: 100%;
        }
        
        .social-login {
            margin-top: 2rem;
            text-align: center;
        }
        
        .social-text {
            font-size: 0.8rem;
            color: #aaaaaa;
            margin-bottom: 1rem;
            position: relative;
        }
        
        .social-text::before,
        .social-text::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 35%;
            height: 1px;
            background: #444;
        }
        
        .social-text::before {
            left: 0;
        }
        
        .social-text::after {
            right: 0;
        }
        
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #1a1a1a;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .social-icon:hover {
            transform: translateY(-3px);
            background-color: #222;
            box-shadow: 0 5px 10px rgba(0,0,0,0.3);
        }
        
        .register-prompt {
            text-align: center;
            margin-top: 2rem;
            font-size: 0.9rem;
            color: #aaaaaa;
        }
        
        .register-link {
            color: #d4af37;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .register-link:hover {
            text-decoration: underline;
        }
        
        @media (max-width: 768px) {
            .split-container {
                flex-direction: column;
            }
            
            .visual-side {
                display: none;
            }
            
            .form-side {
                flex: 1;
                padding: 10% 5%;
            }
            
            .form-side::before {
                display: none;
            }
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background-animation"></div>
    
    <div class="split-container">
        <div class="visual-side">
            <div class="visual-slider">
                <div class="slide"></div>
                <div class="slide"></div>
                <div class="slide"></div>
            </div>
            <div class="overlay">
                <div class="brand-content">
                    <div class="brand-logo">EASY TREND LUXE</div>
                    <h1 class="brand-tagline">Where luxury meets contemporary design</h1>
                    <p class="brand-description">Discover our curated collection of designer clothing, fine perfumes, and immersive studio experiences.</p>
                </div>
            </div>
        </div>
        
        <div class="form-side">
            <div class="login-container">
                <div class="login-header">
                    <h2 class="login-title">Welcome Back</h2>
                    <p class="login-subtitle">Enter your credentials to access your account</p>
                </div>
                
                <form>
                    <div class="form-group">
                        <input type="email" id="email" class="form-input" placeholder=" ">
                        <label for="email" class="form-label">Email Address</label>
                    </div>
                    
                    <div class="form-group">
                        <input type="password" id="password" class="form-input" placeholder=" ">
                        <label for="password" class="form-label">Password</label>
                    </div>
                    
                    <div class="forgot-password">
                        <a href="#" class="forgot-link">Forgot Password?</a>
                    </div>
                    
                    <button type="submit" class="cta-button">Sign In</button>
                    
                    <div class="social-login">
                        <p class="social-text">Or continue with</p>
                        <div class="social-icons">
                            <div class="social-icon">
                                <i class="fab fa-google" style="color: #ffffff;"></i>
                            </div>
                            <div class="social-icon">
                                <i class="fab fa-facebook-f" style="color: #ffffff;"></i>
                            </div>
                            <div class="social-icon">
                                <i class="fab fa-apple" style="color: #ffffff;"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="register-prompt">
                        Don't have an account? <a href="register.php" class="register-link">Create Account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script>
        // Image slider animation
        const slides = document.querySelectorAll('.slide');
        let currentSlide = 0;
        
        function nextSlide() {
            slides[currentSlide].style.opacity = 0;
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].style.opacity = 1;
        }
        
        // Change slide every 5 seconds
        setInterval(nextSlide, 5000);
        
        // Form input animation
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', () => {
                if (input.value === '') {
                    input.parentElement.classList.remove('focused');
                }
            });
        });
    </script>
</body>
</html>