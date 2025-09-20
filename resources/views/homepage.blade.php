<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comestro - Innovating Technology, Empowering People</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            color: #333;
            line-height: 1.6;
        }
        
        a {
            text-decoration: none;
            color: inherit;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        header {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            position: fixed;
            width: 100%;
            z-index: 1000;
        }
        
        .logo {
            width: 150px;
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
        }
        
        .nav-menu li {
            margin-left: 30px;
        }
        
        .nav-menu a {
            color: #555;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-menu a:hover {
            color: #00B7FF;
        }
        
        .header-buttons {
            display: flex;
        }
        
        .btn-free-demo, .btn-signin {
            padding: 10px 20px;
            border-radius: 30px;
            margin-left: 15px;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-free-demo {
            background-color: transparent;
            border: 1px solid #00B7FF;
            color: #00B7FF;
        }
        
        .btn-signin {
            background-color: #00B7FF;
            color: #fff;
            border: 1px solid #00B7FF;
        }
        
        .btn-free-demo:hover, .btn-signin:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 183, 255, 0.3);
        }
        
        /* Hero Section Styles */
        .hero {
            background: linear-gradient(135deg, rgba(33, 37, 41, 0.9), rgba(33, 37, 41, 0.8)), url('/images/hero-bg.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 150px 0 100px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero::after {
            content: '';
            position: absolute;
            bottom: -150px;
            left: 0;
            width: 100%;
            height: 300px;
            background: url('/images/wave.svg');
            background-size: cover;
            z-index: 1;
        }
        
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
        }
        
        .tech-circles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }
        
        .tech-circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(0, 183, 255, 0.05);
            border: 2px solid rgba(0, 183, 255, 0.1);
            animation: floatAnimation 8s infinite ease-in-out;
        }
        
        @keyframes floatAnimation {
            0%, 100% {
                transform: translateY(0) scale(1);
            }
            50% {
                transform: translateY(-20px) scale(1.05);
            }
        }
        
        .glow {
            position: absolute;
            background: radial-gradient(circle, rgba(0, 183, 255, 0.2) 0%, rgba(0, 183, 255, 0) 70%);
            border-radius: 50%;
            animation: glowAnimation 4s infinite alternate;
        }
        
        @keyframes glowAnimation {
            0% {
                opacity: 0.3;
                transform: scale(1);
            }
            100% {
                opacity: 0.7;
                transform: scale(1.2);
            }
        }
        
        /* Removed vertical scanning line animation */
        
        /* Neural Network Animation Styles */
        .neural-network {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            overflow: hidden;
        }
        
        .node {
            position: absolute;
            width: 6px;
            height: 6px;
            background-color: rgba(0, 183, 255, 0.6);
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 183, 255, 0.8);
            animation: nodeFloat 15s infinite ease-in-out;
            transform-origin: center center;
        }
        
        @keyframes nodeFloat {
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }
            25% {
                transform: translate(20px, -15px) scale(1.1);
            }
            50% {
                transform: translate(-10px, 10px) scale(0.9);
            }
            75% {
                transform: translate(15px, 5px) scale(1.05);
            }
        }
        
        .connection {
            position: absolute;
            height: 1px;
            background: linear-gradient(90deg, rgba(0, 183, 255, 0), rgba(0, 183, 255, 0.3), rgba(0, 183, 255, 0));
            animation: connectionPulse 4s infinite;
            transform-origin: left center;
        }
        
        @keyframes connectionPulse {
            0%, 100% {
                opacity: 0.1;
            }
            50% {
                opacity: 0.5;
            }
        }
        
        .data-particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background-color: #fff;
            border-radius: 50%;
            opacity: 0.7;
            animation: particleMove 3s linear;
            z-index: 1;
        }
        
        @keyframes particleMove {
            0% {
                opacity: 0;
                transform: translate(0, 0);
            }
            10% {
                opacity: 0.8;
            }
            90% {
                opacity: 0.8;
            }
            100% {
                opacity: 0;
                transform: translate(var(--endX), var(--endY));
            }
        }
        
        .synapse-pulse {
            position: absolute;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0, 183, 255, 0.7) 0%, rgba(0, 183, 255, 0) 70%);
            opacity: 0;
            animation: synapseFire 4s infinite;
        }
        
        @keyframes synapseFire {
            0%, 100% {
                opacity: 0;
                transform: scale(0.5);
            }
            50% {
                opacity: 0.8;
                transform: scale(1.2);
            }
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 10px;
            line-height: 1.2;
        }
        
        .hero h1 .highlight {
            color: #00B7FF;
        }
        
        .hero h2 {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #ddd;
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 30px;
            color: #bbb;
        }
        
        .hero-buttons {
            margin-top: 30px;
        }
        
        .btn-primary, .btn-secondary {
            padding: 15px 30px;
            border-radius: 30px;
            font-weight: 600;
            margin: 0 10px;
            transition: all 0.3s;
            display: inline-block;
        }
        
        .btn-primary {
            background-color: #00B7FF;
            color: white;
        }
        
        .btn-secondary {
            background-color: transparent;
            border: 2px solid #00B7FF;
            color: white;
        }
        
        .btn-primary:hover, .btn-secondary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 183, 255, 0.3);
        }
        
        .stats {
            display: flex;
            justify-content: center;
            margin-top: 60px;
        }
        
        .stat-item {
            margin: 0 40px;
            text-align: center;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #00B7FF;
            margin-bottom: 5px;
        }
        
        .stat-text {
            color: #ddd;
            font-size: 1rem;
        }
        
        /* About Section */
        .about {
            padding: 100px 0;
            text-align: center;
        }
        
        .section-title {
            font-size: 2.5rem;
            margin-bottom: 50px;
            position: relative;
            display: inline-block;
        }
        
        .section-title .highlight {
            color: #00B7FF;
        }
        
        .about p {
            max-width: 800px;
            margin: 0 auto 30px;
            font-size: 1.1rem;
            color: #666;
        }
        
        .values {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 50px;
        }
        
        .value-card {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 30px;
            text-align: left;
            flex: 1;
            max-width: 350px;
            transition: all 0.3s;
        }
        
        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .value-icon {
            width: 50px;
            height: 50px;
            background-color: #00B7FF;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .value-icon i {
            color: white;
            font-size: 24px;
        }
        
        .value-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .value-text {
            color: #666;
            line-height: 1.7;
        }
        
        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .feature-icon {
            color: #00B7FF;
            margin-right: 10px;
        }
        
        .value-stats {
            display: flex;
            justify-content: center;
            margin-top: 70px;
            gap: 50px;
        }
        
        .value-stat-item {
            text-align: center;
        }
        
        .value-stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: #00B7FF;
        }
        
        .value-stat-text {
            color: #666;
            font-size: 0.9rem;
        }
        
        /* Services Section */
        .services {
            background-color: #f8f9fa;
            padding: 100px 0;
            text-align: center;
        }
        
        .services-intro {
            max-width: 800px;
            margin: 0 auto 50px;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .service-card {
            background-color: white;
            border-radius: 10px;
            padding: 40px 30px;
            text-align: left;
            transition: all 0.3s;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .service-icon {
            width: 70px;
            height: 70px;
            background-color: #f1f8ff;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .service-icon i {
            color: #00B7FF;
            font-size: 32px;
        }
        
        .service-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .service-text {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.7;
        }
        
        .service-features {
            margin-top: 20px;
        }
        
        .service-link {
            display: inline-block;
            margin-top: 20px;
            color: #00B7FF;
            font-weight: 500;
        }
        
        .service-link:hover {
            text-decoration: underline;
        }
        
        /* CTA Section */
        .cta {
            background: linear-gradient(135deg, #00B7FF, #0099CC);
            padding: 70px 0;
            text-align: center;
            color: white;
        }
        
        .cta h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }
        
        .cta p {
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        .btn-cta {
            background-color: white;
            color: #00B7FF;
            padding: 15px 30px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s;
            display: inline-block;
        }
        
        .btn-cta:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(255, 255, 255, 0.3);
        }
        
        /* Training Section */
        .training {
            padding: 100px 0;
            text-align: center;
        }
        
        .training-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .training-card {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 30px;
            text-align: left;
            transition: all 0.3s;
        }
        
        .training-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .training-icon {
            width: 60px;
            height: 60px;
            background-color: #f1f8ff;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .training-icon i {
            color: #00B7FF;
            font-size: 28px;
        }
        
        .training-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .training-text {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.7;
        }
        
        .training-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            color: #777;
        }
        
        .btn-view-details {
            color: #00B7FF;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
        }
        
        .btn-view-details i {
            margin-left: 5px;
            transition: transform 0.3s;
        }
        
        .btn-view-details:hover i {
            transform: translateX(5px);
        }
        
        /* Tech Journey Section */
        .tech-journey {
            background-color: #f8f9fa;
            padding: 80px 0;
            text-align: center;
        }
        
        .btn-outlined {
            padding: 12px 25px;
            border: 2px solid #00B7FF;
            color: #00B7FF;
            border-radius: 30px;
            font-weight: 500;
            margin: 0 10px;
            transition: all 0.3s;
            display: inline-block;
        }
        
        .btn-outlined:hover {
            background-color: #00B7FF;
            color: white;
        }
        
        /* Footer */
        footer {
            background-color: #212529;
            color: #adb5bd;
            padding: 70px 0 20px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }
        
        .footer-logo {
            width: 120px;
            margin-bottom: 15px;
        }
        
        .footer-about {
            max-width: 300px;
        }
        
        .footer-title {
            color: white;
            font-size: 1.2rem;
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #adb5bd;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: #00B7FF;
        }
        
        .footer-social {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-icon {
            width: 35px;
            height: 35px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.3s;
        }
        
        .social-icon:hover {
            background-color: #00B7FF;
            transform: translateY(-3px);
        }
        
        .social-icon i {
            color: white;
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.9rem;
        }
        
        .footer-bottom-links a {
            margin-left: 20px;
        }
        
        @media screen and (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .values, .footer-content {
                flex-direction: column;
            }
            
            .value-card {
                max-width: 100%;
                margin-bottom: 30px;
            }
            
            .stats, .value-stats {
                flex-wrap: wrap;
            }
            
            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }
            
            .footer-bottom-links {
                margin-top: 15px;
            }
            
            .footer-bottom-links a {
                margin: 0 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <a href="/">
                <img src="{{ asset('comestro.png') }}" alt="Comestro" class="logo">
            </a>
            <ul class="nav-menu">
                <li><a href="/">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#training">Training</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#careers">Careers</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="header-buttons">
                <a href="#demo" class="btn-free-demo">Free Demo</a>
                <a href="#signin" class="btn-signin">Sign In</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div id="particles-js"></div>
        <div class="tech-circles"></div>
        <div class="neural-network"></div>
        <div class="container" style="position: relative; z-index: 5;">
            <h1>Innovating <span class="highlight">Technology</span>,<br>Empowering People</h1>
            <h2>Software Development | Web Solutions | IT Training</h2>
            <p>We create world-class technology solutions that transform businesses and empower individuals through innovative software development and industry-ready training programs.</p>
            <div class="hero-buttons">
                <a href="#design" class="btn-primary">Get Free Demo Design</a>
                <a href="#talk" class="btn-secondary">Let's Talk</a>
            </div>
            <div class="stats">
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-text">Projects Completed</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">100+</div>
                    <div class="stat-text">Expert Developers</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">98%</div>
                    <div class="stat-text">Client Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <h2 class="section-title">About <span class="highlight">Comestro Techlabs</span></h2>
            <p>Leading the future of technology with innovative solutions and expert training</p>
            
            <div class="values">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="value-title">Our Vision</h3>
                    <p class="value-text">To create cutting-edge technology solutions that transform businesses and empower individuals to achieve their digital aspirations through cutting-edge innovative and excellence.</p>
                    <div class="feature-item">
                        <i class="fas fa-check feature-icon"></i>
                        <span>Global Technology Leadership</span>
                    </div>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="value-title">Our Mission</h3>
                    <p class="value-text">To deliver high-quality software solutions, provide impactful training programs, and foster long-term growth for our clients and students through dedication, expertise, and commitment.</p>
                    <div class="feature-item">
                        <i class="fas fa-check feature-icon"></i>
                        <span>Excellence in Every Project</span>
                    </div>
                </div>
            </div>
            
            <div class="value-stats">
                <div class="value-stat-item">
                    <div class="value-stat-number">5+</div>
                    <div class="value-stat-text">Years Experience</div>
                </div>
                <div class="value-stat-item">
                    <div class="value-stat-number">50+</div>
                    <div class="value-stat-text">Expert Developers</div>
                </div>
                <div class="value-stat-item">
                    <div class="value-stat-number">24/7</div>
                    <div class="value-stat-text">Support Available</div>
                </div>
                <div class="value-stat-item">
                    <div class="value-stat-number">100%</div>
                    <div class="value-stat-text">Quality Assured</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <h2 class="section-title">Our <span class="highlight">Services</span></h2>
            <div class="services-intro">
                <p>Comprehensive technology solutions designed to transform your business</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3 class="service-title">Web Designing</h3>
                    <p class="service-text">Create, implement, and maintain websites with seamless user experience.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <i class="fas fa-check feature-icon"></i>
                            <span>Responsive Design</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check feature-icon"></i>
                            <span>UI/UX Integration</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check feature-icon"></i>
                            <span>Fast Loading</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check feature-icon"></i>
                            <span>SEO Ready</span>
                        </div>
                    </div>
                    <a href="#web-design" class="service-link">Learn More</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="service-title">Android Development</h3>
                    <p class="service-text">Scalable and powerful mobile apps built with latest Android technologies.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <i class="fas fa-check feature-icon"></i>
                            <span>Native Android</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check feature-icon"></i>
                            <span>Cross Platform</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check feature-icon"></i>
                            <span>Performance Optimized</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check feature-icon"></i>
                            <span>App Testing</span>
                        </div>
                    </div>
                    <a href="#android-dev" class="service-link">Learn More</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3 class="service-title">SaaS Development</h3>
                    <p class="service-text">Cloud based solutions designed to improve your business growth and efficiency.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <i class="fas fa-check feature-icon"></i>
                            <span>Scalable Architecture</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check feature-icon"></i>
                            <span>Cloud Integration</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check feature-icon"></i>
                            <span>API Development</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check feature-icon"></i>
                            <span>Data Management</span>
                        </div>
                    </div>
                    <a href="#saas-dev" class="service-link">Learn More</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="service-title">MVP in 1 Week</h3>
                    <p class="service-text">Launch your minimum viable product quickly for market validation and rapid development.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <i class="fas fa-check feature-icon"></i>
                            <span>Rapid Prototyping</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check feature-icon"></i>
                            <span>Agile Development</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check feature-icon"></i>
                            <span>Core Features</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check feature-icon"></i>
                            <span>Market Ready</span>
                        </div>
                    </div>
                    <a href="#mvp-dev" class="service-link">Learn More</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3 class="service-title">100% Free Demo Design</h3>
                    <p class="service-text">Experience our design expertise with a free sample before making any commitment.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <i class="fas fa-check feature-icon"></i>
                            <span>No Commitment</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check feature-icon"></i>
                            <span>Professional Design</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check feature-icon"></i>
                            <span>Feedback Integration</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check feature-icon"></i>
                            <span>Design Consultation</span>
                        </div>
                    </div>
                    <a href="#free-demo" class="service-link">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Ready to Transform Your Business?</h2>
            <p>Let's discuss your project requirements and start something amazing together.</p>
            <a href="#quote" class="btn-cta">Get Free Quote</a>
        </div>
    </section>

    <!-- Training Programs Section -->
    <section class="training" id="training">
        <div class="container">
            <h2 class="section-title">Software Engineer <span class="highlight">Training Programs</span></h2>
            <p>Industry-ready coding programs designed for students to excel in their careers</p>
            
            <div class="training-cards">
                <div class="training-card">
                    <div class="training-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="training-title">BCA Students</h3>
                    <p class="training-text">Specialized programming foundation for Bachelor of Computer Applications students.</p>
                    <div class="training-details">
                        <span>Duration: 4 months</span>
                        <span>Level: Basic</span>
                    </div>
                    <a href="#bca-details" class="btn-view-details">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="training-card">
                    <div class="training-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="training-title">B.Tech Students</h3>
                    <p class="training-text">Advanced software engineering concepts for engineering students.</p>
                    <div class="training-details">
                        <span>Duration: 6 Months</span>
                        <span>Level: Intermediate</span>
                    </div>
                    <a href="#btech-details" class="btn-view-details">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="training-card">
                    <div class="training-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="training-title">MCA Students</h3>
                    <p class="training-text">Project management skills for Master of Computer Applications students.</p>
                    <div class="training-details">
                        <span>Duration: 3 Months</span>
                        <span>Level: Advanced</span>
                    </div>
                    <a href="#mca-details" class="btn-view-details">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="training-card">
                    <div class="training-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h3 class="training-title">Hands-on Training</h3>
                    <p class="training-text">Learn by practice to develop real technologies.</p>
                    <div class="training-details">
                        <span>Duration: Flexible</span>
                        <span>Level: All Levels</span>
                    </div>
                    <a href="#hands-on-details" class="btn-view-details">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="training-card">
                    <div class="training-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3 class="training-title">Industry Mentors</h3>
                    <p class="training-text">Learn from experienced professionals with years of expertise.</p>
                    <div class="training-details">
                        <span>Experience: 10+ years</span>
                        <span>Level: Expert</span>
                    </div>
                    <a href="#industry-mentors" class="btn-view-details">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="training-card">
                    <div class="training-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3 class="training-title">Certification</h3>
                    <p class="training-text">Get industry recognized certificates on completion.</p>
                    <div class="training-details">
                        <span>Recognition: Global</span>
                        <span>Value: High</span>
                    </div>
                    <a href="#certification" class="btn-view-details">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Journey Section -->
    <section class="tech-journey" id="journey">
        <div class="container">
            <h2 class="section-title">Ready to Start Your <span class="highlight">Tech Journey?</span></h2>
            <p>Join thousands of students who have successfully launched their careers with our training programs.</p>
            <div style="margin-top: 30px;">
                <a href="#explore" class="btn-outlined">Explore Training Programs</a>
                <a href="#download" class="btn-outlined">Download Curriculum</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <img src="{{ asset('comestro.png') }}" alt="Comestro" class="footer-logo">
                    <p>Pioneering technology solutions that transform businesses through cutting-edge software development and expert training.</p>
                    <div class="footer-social">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-links-section">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-links-section">
                    <h3 class="footer-title">Our Services</h3>
                    <ul class="footer-links">
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Android Development</a></li>
                        <li><a href="#">SaaS Development</a></li>
                        <li><a href="#">MVP in 1 Week</a></li>
                        <li><a href="#">Training</a></li>
                    </ul>
                </div>
                
                <div class="footer-links-section">
                    <h3 class="footer-title">Stay Updated</h3>
                    <p>Subscribe to our newsletter for the latest updates and tech insights.</p>
                    <form style="margin-top: 15px;">
                        <input type="email" placeholder="Your Email Address" style="padding: 12px; border-radius: 5px; border: none; width: 100%;">
                        <button type="submit" style="background: #00B7FF; color: white; border: none; padding: 12px 20px; border-radius: 5px; margin-top: 10px; cursor: pointer; width: 100%;">Subscribe</button>
                    </form>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>© 2025 Comestro Techlabs Pvt. Ltd. All rights reserved.</p>
                <div class="footer-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Particles.js Library for the technology particle effect -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    
    <script>
        // Add any JavaScript you need here
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        window.scrollTo({
                            top: target.offsetTop - 100,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Sticky header
            const header = document.querySelector('header');
            const scrollWatcher = () => {
                window.scrollY > 10 
                    ? header.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)'
                    : header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
            };
            
            window.addEventListener('scroll', scrollWatcher);
            
            // Initialize particles.js
            if(document.getElementById('particles-js')) {
                particlesJS('particles-js', {
                    "particles": {
                        "number": {
                            "value": 50,
                            "density": {
                                "enable": true,
                                "value_area": 800
                            }
                        },
                        "color": {
                            "value": "#00B7FF"
                        },
                        "shape": {
                            "type": "circle",
                            "stroke": {
                                "width": 0,
                                "color": "#000000"
                            },
                            "polygon": {
                                "nb_sides": 5
                            }
                        },
                        "opacity": {
                            "value": 0.3,
                            "random": true,
                            "anim": {
                                "enable": true,
                                "speed": 1,
                                "opacity_min": 0.1,
                                "sync": false
                            }
                        },
                        "size": {
                            "value": 3,
                            "random": true,
                            "anim": {
                                "enable": true,
                                "speed": 2,
                                "size_min": 0.1,
                                "sync": false
                            }
                        },
                        "line_linked": {
                            "enable": true,
                            "distance": 150,
                            "color": "#00B7FF",
                            "opacity": 0.2,
                            "width": 1
                        },
                        "move": {
                            "enable": true,
                            "speed": 1,
                            "direction": "none",
                            "random": true,
                            "straight": false,
                            "out_mode": "out",
                            "bounce": false,
                            "attract": {
                                "enable": true,
                                "rotateX": 600,
                                "rotateY": 1200
                            }
                        }
                    },
                    "interactivity": {
                        "detect_on": "canvas",
                        "events": {
                            "onhover": {
                                "enable": true,
                                "mode": "grab"
                            },
                            "onclick": {
                                "enable": true,
                                "mode": "push"
                            },
                            "resize": true
                        },
                        "modes": {
                            "grab": {
                                "distance": 140,
                                "line_linked": {
                                    "opacity": 0.5
                                }
                            },
                            "bubble": {
                                "distance": 400,
                                "size": 40,
                                "duration": 2,
                                "opacity": 8,
                                "speed": 3
                            },
                            "repulse": {
                                "distance": 200,
                                "duration": 0.4
                            },
                            "push": {
                                "particles_nb": 4
                            },
                            "remove": {
                                "particles_nb": 2
                            }
                        }
                    },
                    "retina_detect": true
                });
            }
            
            // Create tech circles animation
            const techCirclesContainer = document.querySelector('.tech-circles');
            if (techCirclesContainer) {
                // Create technology-themed circles
                for (let i = 0; i < 15; i++) {
                    createTechCircle();
                }
                
                // Create glowing effects
                for (let i = 0; i < 5; i++) {
                    createGlowEffect();
                }
                
                // Digital scanning lines removed
            }
            
            // Create neural network animation
            const neuralNetworkContainer = document.querySelector('.neural-network');
            if (neuralNetworkContainer) {
                createNeuralNetwork();
            }
            
            function createTechCircle() {
                const circle = document.createElement('div');
                circle.classList.add('tech-circle');
                
                // Random size between 50px and 200px
                const size = Math.random() * 150 + 50;
                circle.style.width = `${size}px`;
                circle.style.height = `${size}px`;
                
                // Random position
                const left = Math.random() * 100;
                const top = Math.random() * 100;
                circle.style.left = `${left}%`;
                circle.style.top = `${top}%`;
                
                // Random animation delay
                circle.style.animationDelay = `${Math.random() * 5}s`;
                
                techCirclesContainer.appendChild(circle);
            }
            
            function createGlowEffect() {
                const glow = document.createElement('div');
                glow.classList.add('glow');
                
                // Random size between 100px and 300px
                const size = Math.random() * 200 + 100;
                glow.style.width = `${size}px`;
                glow.style.height = `${size}px`;
                
                // Random position
                const left = Math.random() * 100;
                const top = Math.random() * 100;
                glow.style.left = `${left}%`;
                glow.style.top = `${top}%`;
                
                // Random animation delay
                glow.style.animationDelay = `${Math.random() * 5}s`;
                
                techCirclesContainer.appendChild(glow);
            }
            
            // Digital line function removed
            
            function createNeuralNetwork() {
                // Create nodes for the neural network
                const nodeCount = 20; // Number of nodes in the network
                const nodes = [];
                
                // Create nodes (neurons)
                for (let i = 0; i < nodeCount; i++) {
                    const node = document.createElement('div');
                    node.classList.add('node');
                    
                    // Position nodes randomly within the container
                    const x = Math.random() * 100;
                    const y = Math.random() * 100;
                    node.style.left = `${x}%`;
                    node.style.top = `${y}%`;
                    
                    // Add random animation delay
                    node.style.animationDelay = `${Math.random() * 5}s`;
                    
                    neuralNetworkContainer.appendChild(node);
                    nodes.push({ element: node, x, y });
                }
                
                // Create connections between nodes
                for (let i = 0; i < nodes.length; i++) {
                    // Each node connects to 2-4 other nodes
                    const connectionCount = Math.floor(Math.random() * 3) + 2;
                    
                    for (let j = 0; j < connectionCount; j++) {
                        // Connect to a random node
                        const targetIndex = Math.floor(Math.random() * nodes.length);
                        if (targetIndex !== i) { // Don't connect to self
                            createConnection(nodes[i], nodes[targetIndex]);
                        }
                    }
                }
                
                // Create synapse pulses
                for (let i = 0; i < 10; i++) {
                    createSynapsePulse();
                }
                
                // Animate data particles along connections periodically
                setInterval(() => {
                    // Choose random nodes for data transfer
                    const sourceIndex = Math.floor(Math.random() * nodes.length);
                    const targetIndex = Math.floor(Math.random() * nodes.length);
                    
                    if (sourceIndex !== targetIndex) {
                        createDataParticle(nodes[sourceIndex], nodes[targetIndex]);
                    }
                }, 300);
            }
            
            function createConnection(sourceNode, targetNode) {
                const connection = document.createElement('div');
                connection.classList.add('connection');
                
                // Calculate position and dimensions
                const sourceX = parseFloat(sourceNode.x);
                const sourceY = parseFloat(sourceNode.y);
                const targetX = parseFloat(targetNode.x);
                const targetY = parseFloat(targetNode.y);
                
                // Calculate distance and angle
                const dx = targetX - sourceX;
                const dy = targetY - sourceY;
                const length = Math.sqrt(dx * dx + dy * dy);
                const angle = Math.atan2(dy, dx) * (180 / Math.PI);
                
                // Position the connection
                connection.style.width = `${length}%`;
                connection.style.left = `${sourceX}%`;
                connection.style.top = `${sourceY}%`;
                connection.style.transform = `rotate(${angle}deg)`;
                
                // Random animation delay
                connection.style.animationDelay = `${Math.random() * 4}s`;
                
                neuralNetworkContainer.appendChild(connection);
                return { element: connection, sourceNode, targetNode, length, angle };
            }
            
            function createDataParticle(sourceNode, targetNode) {
                const particle = document.createElement('div');
                particle.classList.add('data-particle');
                
                // Set starting position (at source node)
                const startX = parseFloat(sourceNode.x);
                const startY = parseFloat(sourceNode.y);
                particle.style.left = `${startX}%`;
                particle.style.top = `${startY}%`;
                
                // Calculate end position (at target node)
                const endX = parseFloat(targetNode.x) - startX;
                const endY = parseFloat(targetNode.y) - startY;
                
                // Set custom properties for the animation
                particle.style.setProperty('--endX', `${endX}%`);
                particle.style.setProperty('--endY', `${endY}%`);
                
                neuralNetworkContainer.appendChild(particle);
                
                // Remove particle after animation completes
                setTimeout(() => {
                    neuralNetworkContainer.removeChild(particle);
                }, 3000);
            }
            
            function createSynapsePulse() {
                const pulse = document.createElement('div');
                pulse.classList.add('synapse-pulse');
                
                // Random position
                const x = Math.random() * 100;
                const y = Math.random() * 100;
                pulse.style.left = `${x}%`;
                pulse.style.top = `${y}%`;
                
                // Random animation delay
                pulse.style.animationDelay = `${Math.random() * 10}s`;
                
                neuralNetworkContainer.appendChild(pulse);
            }
            
            // Count-up animation for stats
            const statNumbers = document.querySelectorAll('.stat-number');
            
            statNumbers.forEach(statNumber => {
                const targetValue = parseInt(statNumber.textContent);
                const duration = 2000; // 2 seconds
                const startTime = Date.now();
                const endValue = targetValue;
                
                function updateNumber() {
                    const currentTime = Date.now();
                    const elapsedTime = currentTime - startTime;
                    
                    if (elapsedTime < duration) {
                        const percentage = elapsedTime / duration;
                        // Easing function for smooth count-up
                        const easeOutQuad = percentage * (2 - percentage);
                        const currentValue = Math.floor(easeOutQuad * endValue);
                        
                        // Add "+" at the end if it was there in the original text
                        statNumber.textContent = statNumber.textContent.includes('+') 
                            ? currentValue + '+' 
                            : currentValue + (statNumber.textContent.includes('%') ? '%' : '');
                        
                        requestAnimationFrame(updateNumber);
                    } else {
                        // Ensure we end exactly on the target value
                        statNumber.textContent = statNumber.textContent.includes('+') 
                            ? endValue + '+' 
                            : endValue + (statNumber.textContent.includes('%') ? '%' : '');
                    }
                }
                
                // Start animation on scroll
                const observer = new IntersectionObserver(entries => {
                    if (entries[0].isIntersecting) {
                        updateNumber();
                        observer.disconnect();
                    }
                }, { threshold: 0.5 });
                
                observer.observe(statNumber);
            });
        });
    </script>
</body>
</html>