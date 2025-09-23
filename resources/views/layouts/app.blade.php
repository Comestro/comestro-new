<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Comestro - Innovating Technology, Empowering People</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
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
        
        /* Page Header Styles */
        .page-header {
            background: linear-gradient(135deg, rgba(33, 37, 41, 0.9), rgba(33, 37, 41, 0.8)), url('/images/hero-bg.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 150px 0 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
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
            .footer-content {
                flex-direction: column;
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

        /* Additional styles for specific pages */
        @yield('styles')
    </style>
</head>
<body>
    <!-- Header -->
    <header class="bg-white py-4 fixed w-full z-50 px-[10%]">
        <div class="container mx-auto px-5 flex justify-between items-center">
            <a href="/">
                <img src="{{ asset('comestro.png') }}" alt="Comestro" class="w-[140px] lg:w-[180px]">
            </a>
            <ul class="hidden lg:flex list-none">
                <li class="ml-[30px]"><a href="/" class="text-[#555] font-medium hover:text-[#00B7FF] transition-colors duration-300">Home</a></li>
                <li class="ml-[30px]"><a href="{{ route('about') }}" class="text-[#555] font-medium hover:text-[#00B7FF] transition-colors duration-300">About Us</a></li>
                <li class="ml-[30px] relative group">
                    <a href="{{ route('services') }}" class="text-[#555] font-medium hover:text-[#00B7FF] transition-colors duration-300 flex items-center">
                        Services <i class="fas fa-chevron-down text-xs ml-1 mt-1 transition-transform duration-300 group-hover:rotate-180"></i>
                    </a>
                    <div class="absolute left-0 mt-2 w-64 rounded-md bg-white ring-1 ring-black ring-opacity-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-right z-50">
                        <div class="py-1">
                            <a href="{{ route('services') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">All Services</a>
                            <a href="{{ route('services.game-zone') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Game Zone Management</a>
                            <a href="{{ route('services.hospital') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Hospital Appointment System</a>
                        </div>
                    </div>
                </li>
                <li class="ml-[30px]"><a href="{{ route('portfolio') }}" class="text-[#555] font-medium hover:text-[#00B7FF] transition-colors duration-300">Portfolio</a></li>
                <li class="ml-[30px]"><a href="{{ route('training') }}" class="text-[#555] font-medium hover:text-[#00B7FF] transition-colors duration-300">Training</a></li>
                <li class="ml-[30px]"><a href="{{ route('careers') }}" class="text-[#555] font-medium hover:text-[#00B7FF] transition-colors duration-300">Careers</a></li>
                <li class="ml-[30px]"><a href="{{ route('contact') }}" class="text-[#555] font-medium hover:text-[#00B7FF] transition-colors duration-300">Contact</a></li>
            </ul>
            <div class="hidden md:flex">
                <a href="#demo" class="py-2.5 px-5 rounded-[30px] ml-4 font-medium transition-all duration-300 hover:transform hover:-translate-y-0.5 border border-[#00B7FF] text-[#00B7FF] bg-transparent">Free Demo</a>
                <a href="#signin" class="py-2.5 px-5 rounded-[30px] ml-4 font-medium transition-all duration-300 hover:transform hover:-translate-y-0.5 border border-[#00B7FF] bg-[#00B7FF] text-white">Sign In</a>
            </div>
            <button class="lg:hidden text-[#555] focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </header>

    <!-- Page Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="bg-[#212529] text-[#adb5bd] py-[70px] pb-5 bg-[url('footer.png')] bg-cover bg-no-repeat">
        <div class="container mx-auto px-[10%]">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-[50px]">
                <div class="max-w-[300px]">
                    <img src="{{ asset('comestro.png') }}" alt="Comestro" class="w-[120px] mb-4">
                    <p>Pioneering technology solutions that transform businesses through cutting-edge software development and expert training.</p>
                    <div class="flex gap-4 mt-5">
                        <a href="#" class="w-[35px] h-[35px] bg-[rgba(255,255,255,0.1)] rounded-full flex justify-center items-center transition-all duration-300 hover:bg-[#00B7FF] hover:-translate-y-[3px]">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                        <a href="#" class="w-[35px] h-[35px] bg-[rgba(255,255,255,0.1)] rounded-full flex justify-center items-center transition-all duration-300 hover:bg-[#00B7FF] hover:-translate-y-[3px]">
                            <i class="fab fa-twitter text-white"></i>
                        </a>
                        <a href="#" class="w-[35px] h-[35px] bg-[rgba(255,255,255,0.1)] rounded-full flex justify-center items-center transition-all duration-300 hover:bg-[#00B7FF] hover:-translate-y-[3px]">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                        <a href="#" class="w-[35px] h-[35px] bg-[rgba(255,255,255,0.1)] rounded-full flex justify-center items-center transition-all duration-300 hover:bg-[#00B7FF] hover:-translate-y-[3px]">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-white text-[1.2rem] mb-5 font-semibold">Quick Links</h3>
                    <ul class="list-none">
                        <li class="mb-2.5"><a href="/" class="text-[#adb5bd] hover:text-[#00B7FF] transition-colors duration-300">Home</a></li>
                        <li class="mb-2.5"><a href="{{ route('about') }}" class="text-[#adb5bd] hover:text-[#00B7FF] transition-colors duration-300">About</a></li>
                        <li class="mb-2.5"><a href="{{ route('services') }}" class="text-[#adb5bd] hover:text-[#00B7FF] transition-colors duration-300">Services</a></li>
                        <li class="mb-2.5"><a href="{{ route('portfolio') }}" class="text-[#adb5bd] hover:text-[#00B7FF] transition-colors duration-300">Portfolio</a></li>
                        <li class="mb-2.5"><a href="{{ route('training') }}" class="text-[#adb5bd] hover:text-[#00B7FF] transition-colors duration-300">Training</a></li>
                        <li class="mb-2.5"><a href="{{ route('careers') }}" class="text-[#adb5bd] hover:text-[#00B7FF] transition-colors duration-300">Careers</a></li>
                        <li class="mb-2.5"><a href="{{ route('contact') }}" class="text-[#adb5bd] hover:text-[#00B7FF] transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-white text-[1.2rem] mb-5 font-semibold">Our Services</h3>
                    <ul class="list-none">
                        <li class="mb-2.5"><a href="{{ route('services') }}#web-design" class="text-[#adb5bd] hover:text-[#00B7FF] transition-colors duration-300">Web Development</a></li>
                        <li class="mb-2.5"><a href="{{ route('services') }}#android-dev" class="text-[#adb5bd] hover:text-[#00B7FF] transition-colors duration-300">Android Development</a></li>
                        <li class="mb-2.5"><a href="{{ route('services') }}#saas-dev" class="text-[#adb5bd] hover:text-[#00B7FF] transition-colors duration-300">SaaS Development</a></li>
                        <li class="mb-2.5"><a href="{{ route('services') }}#mvp-dev" class="text-[#adb5bd] hover:text-[#00B7FF] transition-colors duration-300">MVP in 1 Week</a></li>
                        <li class="mb-2.5"><a href="{{ route('services.game-zone') }}" class="text-[#adb5bd] hover:text-[#00B7FF] transition-colors duration-300">Game Zone Management</a></li>
                        <li class="mb-2.5"><a href="{{ route('services.hospital') }}" class="text-[#adb5bd] hover:text-[#00B7FF] transition-colors duration-300">Hospital Appointment</a></li>
                        <li class="mb-2.5"><a href="{{ route('training') }}" class="text-[#adb5bd] hover:text-[#00B7FF] transition-colors duration-300">Training</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-white text-[1.2rem] mb-5 font-semibold">Stay Updated</h3>
                    <p>Subscribe to our newsletter for the latest updates and tech insights.</p>
                    <form class="mt-4">
                        <input type="email" placeholder="Your Email Address" class="p-3 rounded w-full">
                        <button type="submit" class="bg-[#00B7FF] text-white border-0 p-3 rounded mt-2.5 cursor-pointer w-full">Subscribe</button>
                    </form>
                </div>
            </div>
            
            <div class="border-t border-[rgba(255,255,255,0.1)] pt-5 flex flex-col md:flex-row justify-between items-center text-[0.9rem]">
                <p>© 2025 Comestro Techlabs Pvt. Ltd. All rights reserved.</p>
                <div class="mt-4 md:mt-0">
                    <a href="#" class="md:ml-5 mx-2.5 md:mx-0 text-[#adb5bd] hover:text-[#00B7FF] transition-colors duration-300">Privacy Policy</a>
                    <a href="#" class="md:ml-5 mx-2.5 md:mx-0 text-[#adb5bd] hover:text-[#00B7FF] transition-colors duration-300">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Quote Modal -->
    <div id="quoteModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4" id="modal-title">Get a Quote</h3>
                            <form id="quoteForm" class="space-y-4">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-[#00B7FF] focus:border-[#00B7FF]" required>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" name="email" id="email" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-[#00B7FF] focus:border-[#00B7FF]" required>
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                    <input type="tel" name="phone" id="phone" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-[#00B7FF] focus:border-[#00B7FF]" required>
                                </div>
                                <div>
                                    <label for="service" class="block text-sm font-medium text-gray-700">Service</label>
                                    <select name="service" id="service" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-[#00B7FF] focus:border-[#00B7FF]">
                                        <option value="" selected disabled>Select a Service</option>
                                        <option value="game-zone">Game Zone Management Software</option>
                                        <option value="hospital">Hospital Appointment System</option>
                                        <option value="web">Web Development</option>
                                        <option value="mobile">Mobile App Development</option>
                                        <option value="saas">SaaS Development</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                    <textarea name="message" id="message" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-[#00B7FF] focus:border-[#00B7FF]" required></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" id="submitQuoteBtn" class="w-full inline-flex justify-center rounded-md border border-transparent px-4 py-2 bg-[#00B7FF] text-base font-medium text-white hover:bg-[#0099CC] focus:outline-none sm:ml-3 sm:w-auto sm:text-sm">Submit</button>
                    <button type="button" id="closeModalBtn" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                </div>
            </div>
        </div>
    </div>

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
            
            // Modal handling
            const modal = document.getElementById('quoteModal');
            const openModalBtns = document.querySelectorAll('.open-quote-modal');
            const closeModalBtn = document.getElementById('closeModalBtn');
            const submitQuoteBtn = document.getElementById('submitQuoteBtn');
            
            // Open modal
            if (openModalBtns) {
                openModalBtns.forEach(btn => {
                    btn.addEventListener('click', function(e) {
                        e.preventDefault();
                        modal.classList.remove('hidden');
                        document.body.style.overflow = 'hidden';
                        
                        // If there's a data attribute for service, select it in the dropdown
                        if (this.dataset.service) {
                            document.getElementById('service').value = this.dataset.service;
                        }
                    });
                });
            }
            
            // Close modal
            if (closeModalBtn) {
                closeModalBtn.addEventListener('click', function() {
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                });
            }
            
            // Close on outside click
            window.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }
            });
            
            // Form submission
            if (submitQuoteBtn) {
                submitQuoteBtn.addEventListener('click', function() {
                    const form = document.getElementById('quoteForm');
                    if (form.checkValidity()) {
                        // In a real application, you would submit the form data to your backend here
                        alert('Thank you for your quote request. We will contact you shortly!');
                        modal.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                        form.reset();
                    } else {
                        // Trigger HTML5 validation
                        const submitEvent = new Event('submit', {
                            'bubbles': true,
                            'cancelable': true
                        });
                        form.dispatchEvent(submitEvent);
                    }
                });
            }
        });
    </script>

    @yield('scripts')
</body>
</html>
