@extends('layouts.app')

@section('title', 'Home')

@section('styles')
<style>
        /* Hero Section Styles */
        .hero {
            background: linear-gradient(135deg, rgba(0, 121, 193, 0.9), rgba(240, 90, 40, 0.8)), url('/images/hero-bg.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 150px 0 100px;
            text-align: center;
            position: relative;
            overflow: hidden;
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
            color: #0079C1;
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
            border: 1px solid #0079C1;
            color: #0079C1;
        }
        
        .btn-signin {
            background-color: #F05A28;
            color: #fff;
            border: 1px solid #F05A28;
        }
        
        .btn-free-demo:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 121, 193, 0.3);
        }
        
        .btn-signin:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(240, 90, 40, 0.3);
        }
        
        /* Hero Section Styles */
        .hero {
            background: linear-gradient(135deg, rgba(0, 121, 193, 0.9), rgba(240, 90, 40, 0.8)), url('/images/hero-bg.jpg');
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
            color: #0079C1;
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
            background-color: #0079C1;
            color: white;
        }
        
        .btn-secondary {
            background-color: transparent;
            border: 2px solid #0079C1;
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
            color: #0079C1;
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
            color: #0079C1;
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
            background-color: #0079C1;
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
            color: #0079C1;
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
            color: #0079C1;
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
            color: #0079C1;
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
            color: #0079C1;
            font-weight: 500;
        }
        
        .service-link:hover {
            text-decoration: underline;
        }
        
        /* CTA Section */
        .cta {
            background: linear-gradient(135deg, #0079C1, #0099CC);
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
            color: #0079C1;
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
            color: #0079C1;
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
            color: #0079C1;
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
            border: 2px solid #0079C1;
            color: #0079C1;
            border-radius: 30px;
            font-weight: 500;
            margin: 0 10px;
            transition: all 0.3s;
            display: inline-block;
        }
        
        .btn-outlined:hover {
            background-color: #0079C1;
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
            color: #0079C1;
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
            background-color: #0079C1;
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
        }
    </style>
@endsection

@section('content')

    <!-- Hero Section -->
    <section class="relative text-white py-[150px] pb-[100px] text-center overflow-hidden bg-gradient-to-br from-[rgba(33,37,41)] to-[rgba(33,37,41)] bg-center bg-cover hero">
        <div id="particles-js"></div>
        <div class="tech-circles"></div>
        <div class="neural-network"></div>
        <div class="container mx-auto px-5 relative z-10">
            <h1 class="text-[2.5rem] md:text-[3rem] lg:text-[3.5rem] mb-2.5 leading-tight">Innovating <span class="text-[#F05A28]">Technology</span>,<br>Empowering <span class="text-[#0079C1]">People</span></h1>
            <h2 class="text-[1.3rem] md:text-[1.5rem] lg:text-[1.8rem] font-semibold mb-5 text-[#ddd]">Software Development | Web Solutions | IT Training</h2>
            <p class="text-base md:text-lg lg:text-xl max-w-[800px] mx-auto mb-[30px] text-[#bbb] px-4">We create world-class technology solutions that transform businesses and empower individuals through innovative software development and industry-ready training programs.</p>
            <div class="mt-[30px] flex flex-col sm:flex-row justify-center">
                <a href="#design" class="inline-block py-[12px] sm:py-[15px] px-[20px] sm:px-[30px] rounded-[30px] font-semibold mx-2.5 mb-4 sm:mb-0 transition-all duration-300 hover:-translate-y-[3px] bg-[#F05A28] text-white">Get Free Demo Design</a>
                <a href="#talk" class="inline-block py-[12px] sm:py-[15px] px-[20px] sm:px-[30px] rounded-[30px] font-semibold mx-2.5 transition-all duration-300 hover:-translate-y-[3px] bg-transparent border-2 border-[#0079C1] text-white">Let's Talk</a>
            </div>
            <div class="flex flex-wrap justify-center mt-[60px]">
                <div class="mx-5 md:mx-10 text-center mb-6 md:mb-0">
                    <div class="text-[2rem] md:text-[2.5rem] font-bold text-[#0079C1] mb-[5px] stat-number">{{ $totalproject }}</div>
                    <div class="text-[#ddd] text-base stat-text">Projects Completed</div>
                </div>
                <div class="mx-5 md:mx-10 text-center mb-6 md:mb-0">
                    <div class="text-[2rem] md:text-[2.5rem] font-bold text-[#0079C1] mb-[5px] stat-number">100+</div>
                    <div class="text-[#ddd] text-base stat-text">Expert Developers</div>
                </div>
                <div class="mx-5 md:mx-10 text-center mb-6 md:mb-0">
                    <div class="text-[2rem] md:text-[2.5rem] font-bold text-[#0079C1] mb-[5px] stat-number">98%</div>
                    <div class="text-[#ddd] text-base stat-text">Client Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-[100px] text-center" id="about">
        <div class="container mx-auto px-5">
            <h2 class="text-[2.5rem] mb-[50px] relative inline-block">About <span class="text-[#0079C1]">Comestro Techlabs</span></h2>
            <p class="max-w-[800px] mx-auto mb-[30px] text-[1.1rem] text-[#666]">Leading the future of technology with innovative solutions and expert training</p>
            
            <div class="flex flex-col lg:flex-row justify-center gap-[30px] mt-[50px]">
                <div class="bg-[#f8f9fa] rounded-[10px] p-[30px] text-left flex-1 max-w-full lg:max-w-[350px] mb-8 lg:mb-0 transition-all duration-300 hover:-translate-y-[10px]">
                    <div class="w-[50px] h-[50px] bg-[#0079C1] rounded-[10px] flex justify-center items-center mb-5">
                        <i class="fas fa-eye text-white text-2xl"></i>
                    </div>
                    <h3 class="text-[1.3rem] font-semibold mb-[15px]">Our Vision</h3>
                    <p class="text-[#666] leading-[1.7]">To create cutting-edge technology solutions that transform businesses and empower individuals to achieve their digital aspirations through cutting-edge innovative and excellence.</p>
                    <div class="flex items-center mb-2.5">
                        <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                        <span>Global Technology Leadership</span>
                    </div>
                </div>
                <div class="bg-[#f8f9fa] rounded-[10px] p-[30px] text-left flex-1 max-w-full lg:max-w-[350px] transition-all duration-300 hover:-translate-y-[10px]">
                    <div class="w-[50px] h-[50px] bg-[#0079C1] rounded-[10px] flex justify-center items-center mb-5">
                        <i class="fas fa-bullseye text-white text-2xl"></i>
                    </div>
                    <h3 class="text-[1.3rem] font-semibold mb-[15px]">Our Mission</h3>
                    <p class="text-[#666] leading-[1.7]">To deliver high-quality software solutions, provide impactful training programs, and foster long-term growth for our clients and students through dedication, expertise, and commitment.</p>
                    <div class="flex items-center mb-2.5">
                        <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                        <span>Excellence in Every Project</span>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-wrap justify-center mt-[70px] gap-x-[20px] md:gap-x-[50px] gap-y-[30px]">
                <div class="text-center w-[calc(50%-20px)] md:w-auto">
                    <div class="text-[2rem] font-bold text-[#0079C1]">14+</div>
                    <div class="text-[#666] text-[0.9rem]">Years Experience</div>
                </div>
                <div class="text-center w-[calc(50%-20px)] md:w-auto">
                    <div class="text-[2rem] font-bold text-[#0079C1]">50+</div>
                    <div class="text-[#666] text-[0.9rem]">Expert Developers</div>
                </div>
                <div class="text-center w-[calc(50%-20px)] md:w-auto">
                    <div class="text-[2rem] font-bold text-[#0079C1]">24/7</div>
                    <div class="text-[#666] text-[0.9rem]">Support Available</div>
                </div>
                <div class="text-center w-[calc(50%-20px)] md:w-auto">
                    <div class="text-[2rem] font-bold text-[#0079C1]">100%</div>
                    <div class="text-[#666] text-[0.9rem]">Quality Assured</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="bg-gradient-to-b from-white to-[#f8f9fa] py-[100px] text-center" id="services">
        <div class="container mx-auto px-[10%]">
            <h2 class="text-[2.5rem] mb-[50px] relative inline-block font-bold">Our <span class="text-[#0079C1]">Services</span></h2>
            <div class="max-w-[800px] mx-auto mb-[50px]">
                <p class="text-lg text-gray-600">Comprehensive technology solutions designed to transform your business</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-[50px]">
                <div class="bg-white rounded-[15px] p-10 text-left transition-all duration-300 hover:-translate-y-[10px] border border-gray-100">
                    <div class="w-[70px] h-[70px] bg-[#f1f8ff] rounded-[20px] flex justify-center items-center mb-5">
                        <i class="fas fa-globe text-[#0079C1] text-3xl"></i>
                    </div>
                    <h3 class="text-[1.4rem] font-semibold mb-[15px]">Web Designing</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Create, implement, and maintain websites with seamless user experience.</p>
                    <div class="mt-5">
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                            <span>Responsive Design</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                            <span>UI/UX Integration</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                            <span>Fast Loading</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                            <span>SEO Ready</span>
                        </div>
                    </div>
                    <a href="#web-design" class="inline-block mt-5 text-[#0079C1] font-medium hover:underline">Learn More</a>
                </div>
                
                <div class="bg-white rounded-[15px] p-10 text-left transition-all duration-300 hover:-translate-y-[10px] border border-gray-100">
                    <div class="w-[70px] h-[70px] bg-[#f1f8ff] rounded-[20px] flex justify-center items-center mb-5">
                        <i class="fas fa-mobile-alt text-[#0079C1] text-3xl"></i>
                    </div>
                    <h3 class="text-[1.4rem] font-semibold mb-[15px] text-gray-800">Android Development</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Scalable and powerful mobile apps built with latest Android technologies.</p>
                    <div class="mt-5">
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                            <span>Native Android</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                            <span>Cross Platform</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                            <span>Performance Optimized</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                            <span>App Testing</span>
                        </div>
                    </div>
                    <a href="#android-dev" class="inline-block mt-5 text-[#0079C1] font-medium hover:underline">Learn More</a>
                </div>
                
                <div class="bg-white rounded-[15px] p-10 text-left transition-all duration-300 hover:-translate-y-[10px] border border-gray-100">
                    <div class="w-[70px] h-[70px] bg-[#f1f8ff] rounded-[20px] flex justify-center items-center mb-5">
                        <i class="fas fa-server text-[#0079C1] text-3xl"></i>
                    </div>
                    <h3 class="text-[1.4rem] font-semibold mb-[15px]">SaaS Development</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Cloud based solutions designed to improve your business growth and efficiency.</p>
                    <div class="mt-5">
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                            <span>Scalable Architecture</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                            <span>Cloud Integration</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                            <span>API Development</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                            <span>Data Management</span>
                        </div>
                    </div>
                    <a href="#saas-dev" class="inline-block mt-5 text-[#0079C1] font-medium hover:underline">Learn More</a>
                </div>
                
                <div class="bg-white rounded-[15px] p-10 text-left transition-all duration-300 hover:-translate-y-[10px] border border-gray-100">
                    <div class="w-[70px] h-[70px] bg-[#f1f8ff] rounded-[20px] flex justify-center items-center mb-5">
                        <i class="fas fa-code text-[#0079C1] text-3xl"></i>
                    </div>
                    <h3 class="text-[1.4rem] font-semibold mb-[15px]">MVP in 1 Week</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Launch your minimum viable product quickly for market validation and rapid development.</p>
                    <div class="mt-5">
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                            <span>Rapid Prototyping</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                            <span>Agile Development</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                            <span>Core Features</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                            <span>Market Ready</span>
                        </div>
                    </div>
                    <a href="#mvp-dev" class="inline-block mt-5 text-[#0079C1] font-medium hover:underline">Learn More</a>
                </div>
                
                <div class="bg-white rounded-[15px] p-10 text-left transition-all duration-300 hover:-translate-y-[10px] border border-gray-100">
                    <div class="w-[70px] h-[70px] bg-[#f1f8ff] rounded-[20px] flex justify-center items-center mb-5">
                        <i class="fas fa-paint-brush text-[#0079C1] text-3xl"></i>
                    </div>
                    <h3 class="text-[1.4rem] font-semibold mb-[15px]">100% Free Demo Design</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Experience our design expertise with a free sample before making any commitment.</p>
                    <div class="mt-5">
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                            <span>No Commitment</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                            <span>Professional Design</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                            <span>Feedback Integration</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#0079C1] mr-2.5"></i>
                            <span>Design Consultation</span>
                        </div>
                    </div>
                    <a href="#free-demo" class="inline-block mt-5 text-[#0079C1] font-medium hover:underline">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="bg-gradient-to-br from-[#0079C1] to-[#0099CC] py-[70px] text-center text-white">
        <div class="container mx-auto px-[10%]">
            <h2 class="text-4xl mb-5">Ready to Transform Your Business?</h2>
            <p class="max-w-[700px] mx-auto mb-[30px]">Let's discuss your project requirements and start something amazing together.</p>
            <a href="#quote" class="inline-block bg-white text-[#0079C1] py-[15px] px-[30px] rounded-[30px] font-semibold transition-all duration-300 hover:-translate-y-[3px]">Get Free Quote</a>
        </div>
    </section>

    <!-- Training Programs Section -->
    <section class="py-[100px] text-center bg-gradient-to-b from-white to-[#f8f9fa]" id="training">
        <div class="container mx-auto px-[10%]">
            <h2 class="text-[2.5rem] mb-[50px] relative inline-block font-bold">Software Engineer <span class="text-[#0079C1]">Training Programs</span></h2>
            <p class="mb-8 text-lg text-gray-600">Industry-ready coding programs designed for students to excel in their careers</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-[50px]">
                <div class="bg-white rounded-[15px] p-8 text-left transition-all duration-300 hover:-translate-y-[10px] border border-gray-100">
                    <div class="w-[60px] h-[60px] bg-[#f1f8ff] rounded-[15px] flex justify-center items-center mb-6">
                        <i class="fas fa-laptop-code text-[#0079C1] text-[28px]"></i>
                    </div>
                    <h3 class="text-[1.3rem] font-semibold mb-4 text-gray-800">BCA Students</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Specialized programming foundation for Bachelor of Computer Applications students.</p>
                    <div class="flex justify-between mb-5 text-[#777] bg-gray-50 p-3 rounded-lg">
                        <span class="flex items-center"><i class="far fa-clock mr-2 text-[#0079C1]"></i> 4 months</span>
                        <span class="flex items-center"><i class="fas fa-signal mr-2 text-[#0079C1]"></i> Basic</span>
                    </div>
                    <a href="#bca-details" class="text-[#0079C1] font-medium inline-flex items-center hover:underline group">
                        View Details <i class="fas fa-arrow-right ml-[5px] transition-transform duration-300 group-hover:translate-x-[5px]"></i>
                    </a>
                </div>
                
                <div class="bg-white rounded-[15px] p-8 text-left transition-all duration-300 hover:-translate-y-[10px] border border-gray-100">
                    <div class="w-[60px] h-[60px] bg-[#f1f8ff] rounded-[15px] flex justify-center items-center mb-6">
                        <i class="fas fa-cogs text-[#0079C1] text-[28px]"></i>
                    </div>
                    <h3 class="text-[1.3rem] font-semibold mb-4 text-gray-800">B.Tech Students</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Advanced software engineering concepts for engineering students.</p>
                    <div class="flex justify-between mb-5 text-[#777] bg-gray-50 p-3 rounded-lg">
                        <span class="flex items-center"><i class="far fa-clock mr-2 text-[#0079C1]"></i> 6 Months</span>
                        <span class="flex items-center"><i class="fas fa-signal mr-2 text-[#0079C1]"></i> Intermediate</span>
                    </div>
                    <a href="#btech-details" class="text-[#0079C1] font-medium inline-flex items-center hover:underline group">
                        View Details <i class="fas fa-arrow-right ml-[5px] transition-transform duration-300 group-hover:translate-x-[5px]"></i>
                    </a>
                </div>
                
                <div class="bg-white rounded-[15px] p-8 text-left transition-all duration-300 hover:-translate-y-[10px] border border-gray-100">
                    <div class="w-[60px] h-[60px] bg-[#f1f8ff] rounded-[15px] flex justify-center items-center mb-6">
                        <i class="fas fa-graduation-cap text-[#0079C1] text-[28px]"></i>
                    </div>
                    <h3 class="text-[1.3rem] font-semibold mb-4 text-gray-800">MCA Students</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Project management skills for Master of Computer Applications students.</p>
                    <div class="flex justify-between mb-5 text-[#777] bg-gray-50 p-3 rounded-lg">
                        <span class="flex items-center"><i class="far fa-clock mr-2 text-[#0079C1]"></i> 3 Months</span>
                        <span class="flex items-center"><i class="fas fa-signal mr-2 text-[#0079C1]"></i> Advanced</span>
                    </div>
                    <a href="#mca-details" class="text-[#0079C1] font-medium inline-flex items-center hover:underline group">
                        View Details <i class="fas fa-arrow-right ml-[5px] transition-transform duration-300 group-hover:translate-x-[5px]"></i>
                    </a>
                </div>
                
                <div class="bg-white rounded-[15px] p-8 text-left transition-all duration-300 hover:-translate-y-[10px] border border-gray-100">
                    <div class="w-[60px] h-[60px] bg-[#f1f8ff] rounded-[15px] flex justify-center items-center mb-6">
                        <i class="fas fa-chalkboard-teacher text-[#0079C1] text-[28px]"></i>
                    </div>
                    <h3 class="text-[1.3rem] font-semibold mb-4 text-gray-800">Hands-on Training</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Learn by practice to develop real technologies.</p>
                    <div class="flex justify-between mb-5 text-[#777] bg-gray-50 p-3 rounded-lg">
                        <span class="flex items-center"><i class="far fa-clock mr-2 text-[#0079C1]"></i> Flexible</span>
                        <span class="flex items-center"><i class="fas fa-signal mr-2 text-[#0079C1]"></i> All Levels</span>
                    </div>
                    <a href="#hands-on-details" class="text-[#0079C1] font-medium inline-flex items-center hover:underline">
                        View Details <i class="fas fa-arrow-right ml-[5px] transition-transform duration-300 group-hover:translate-x-[5px]"></i>
                    </a>
                </div>
                
                <div class="bg-white rounded-[15px] p-8 text-left transition-all duration-300 hover:-translate-y-[10px] border border-gray-100">
                    <div class="w-[60px] h-[60px] bg-[#f1f8ff] rounded-[15px] flex justify-center items-center mb-6">
                        <i class="fas fa-industry text-[#0079C1] text-[28px]"></i>
                    </div>
                    <h3 class="text-[1.3rem] font-semibold mb-[15px]">Industry Mentors</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Learn from experienced professionals with years of expertise.</p>
                    <div class="flex justify-between mb-5 text-[#777] bg-gray-50 p-3 rounded-lg">
                        <span class="flex items-center"><i class="far fa-star mr-2 text-[#0079C1]"></i> 10+ years</span>
                        <span class="flex items-center"><i class="fas fa-signal mr-2 text-[#0079C1]"></i> Expert</span>
                    </div>
                    <a href="#industry-mentors" class="text-[#0079C1] font-medium inline-flex items-center hover:underline">
                        View Details <i class="fas fa-arrow-right ml-[5px] transition-transform duration-300 group-hover:translate-x-[5px]"></i>
                    </a>
                </div>
                
                <div class="bg-white rounded-[15px] p-8 text-left transition-all duration-300 hover:-translate-y-[10px] border border-gray-100">
                    <div class="w-[60px] h-[60px] bg-[#f1f8ff] rounded-[15px] flex justify-center items-center mb-6">
                        <i class="fas fa-certificate text-[#0079C1] text-[28px]"></i>
                    </div>
                    <h3 class="text-[1.3rem] font-semibold mb-[15px]">Certification</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Get industry recognized certificates on completion.</p>
                    <div class="flex justify-between mb-5 text-[#777] bg-gray-50 p-3 rounded-lg">
                        <span class="flex items-center"><i class="fas fa-globe mr-2 text-[#0079C1]"></i> Global</span>
                        <span class="flex items-center"><i class="fas fa-award mr-2 text-[#0079C1]"></i> High Value</span>
                    </div>
                    <a href="#certification" class="text-[#0079C1] font-medium inline-flex items-center hover:underline">
                        View Details <i class="fas fa-arrow-right ml-[5px] transition-transform duration-300 group-hover:translate-x-[5px]"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Journey Section -->
    <section class="bg-[#f8f9fa] py-[80px] text-center" id="journey">
        <div class="container mx-auto px-[10%]">
            <h2 class="text-[2rem] md:text-[2.5rem] mb-[30px] md:mb-[50px] relative inline-block">Ready to Start Your <span class="text-[#0079C1]">Tech Journey?</span></h2>
            <p>Join thousands of students who have successfully launched their careers with our training programs.</p>
            <div class="mt-[30px] flex flex-col sm:flex-row justify-center">
                <a href="#explore" class="py-3 px-6 border-2 border-[#0079C1] text-[#0079C1] rounded-[30px] font-medium mx-2.5 mb-4 sm:mb-0 transition-all duration-300 hover:bg-[#0079C1] hover:text-white inline-block">Explore Training Programs</a>
                <a href="#download" class="py-3 px-6 border-2 border-[#0079C1] text-[#0079C1] rounded-[30px] font-medium mx-2.5 transition-all duration-300 hover:bg-[#0079C1] hover:text-white inline-block">Download Curriculum</a>
            </div>
        </div>
    </section>
    
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
                            "value": "#0079C1"
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
                            "color": "#0079C1",
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
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    // Initialize particles.js
    if(document.getElementById('particles-js')) {
        particlesJS('particles-js', {
            "particles": {
                "number": {
                    "value": 80,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#0079C1"
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
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#0079C1",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
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
                            "opacity": 1
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
</script>
@endsection
