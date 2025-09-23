@extends('layouts.app')

@section('title', 'Game Zone Management Software')

@section('styles')
<style>
    .feature-card {
        transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
    
    .mockup-shadow {
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
    }
    
    .device-wrapper {
        position: relative;
    }
    
    .laptop-mockup {
        width: 100%;
        height: auto;
        position: relative;
        z-index: 1;
    }
    
    .laptop-screen {
        position: absolute;
        top: 5.5%;
        left: 12.5%;
        width: 75%;
        height: 75%;
        overflow: hidden;
        background: #fff;
        z-index: 0;
    }
    
    .phone-mockup {
        width: 100%;
        max-width: 300px;
        position: relative;
        z-index: 1;
    }
    
    .phone-screen {
        position: absolute;
        top: 10%;
        left: 6%;
        width: 88%;
        height: 80%;
        overflow: hidden;
        border-radius: 30px;
        z-index: 0;
    }
    
    .scroll-animation {
        animation: scroll 20s linear infinite;
    }
    
    @keyframes scroll {
        0% {
            transform: translateY(0);
        }
        100% {
            transform: translateY(-100%);
        }
    }
</style>
@endsection

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container mx-auto px-[10%]">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Game Zone <span class="text-[#00B7FF]">Management Software</span></h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">Streamline operations, enhance customer experience, and boost profitability for your gaming center with our comprehensive management solution.</p>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Revolutionize Your <span class="text-[#00B7FF]">Game Zone Management</span></h2>
                    <p class="text-gray-600 mb-6">Our Game Zone Management Software is specifically designed for arcade centers, gaming cafes, and entertainment venues to streamline operations, improve customer experience, and maximize revenue potential.</p>
                    <p class="text-gray-600 mb-6">Whether you're running a small arcade or a large entertainment complex, our solution adapts to your specific needs with customizable features and scalable architecture.</p>
                    <div class="flex flex-wrap gap-4">
                        <button class="open-quote-modal px-6 py-3 bg-[#00B7FF] text-white rounded-full hover:shadow-lg transition duration-300" data-service="game-zone">Get a Quote</button>
                        <a href="#features" class="px-6 py-3 border border-[#00B7FF] text-[#00B7FF] rounded-full hover:bg-gray-50 transition duration-300">Explore Features</a>
                    </div>
                </div>
                <div class="device-wrapper mockup-shadow rounded-lg">
                    <div class="laptop-mockup">
                        <img src="https://cdn.pixabay.com/photo/2016/03/27/07/12/apple-1282241_960_720.jpg" alt="Laptop Mockup" class="w-full">
                        <div class="laptop-screen bg-gray-100">
                            <img src="https://images.unsplash.com/photo-1607853202273-797f1c22a38e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Game Zone Dashboard" class="w-full h-auto scroll-animation">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features -->
    <section id="features" class="py-16 bg-gray-50">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Key <span class="text-[#00B7FF]">Features</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Everything you need to manage your game zone efficiently</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card">
                    <div class="w-16 h-16 bg-[#e1f2ff] rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-desktop text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Gaming Station Management</h3>
                    <p class="text-gray-600">Monitor and control all gaming stations in real-time. Track usage, manage time limits, and identify maintenance needs instantly.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card">
                    <div class="w-16 h-16 bg-[#e1f2ff] rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-users text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Membership & Loyalty</h3>
                    <p class="text-gray-600">Create membership plans, track customer visits, and implement loyalty programs to encourage repeat business and increase revenue.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card">
                    <div class="w-16 h-16 bg-[#e1f2ff] rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-cash-register text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">POS Integration</h3>
                    <p class="text-gray-600">Seamlessly integrate with your existing point of sale system for food, beverages, and merchandise to create a unified business operation.</p>
                </div>
                
                <!-- Feature 4 -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card">
                    <div class="w-16 h-16 bg-[#e1f2ff] rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-calendar-check text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Booking & Reservations</h3>
                    <p class="text-gray-600">Allow customers to book gaming sessions, party rooms, or special events online with an intuitive reservation system.</p>
                </div>
                
                <!-- Feature 5 -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card">
                    <div class="w-16 h-16 bg-[#e1f2ff] rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-chart-line text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Analytics & Reporting</h3>
                    <p class="text-gray-600">Access comprehensive reports on usage patterns, revenue streams, and customer behavior to make data-driven business decisions.</p>
                </div>
                
                <!-- Feature 6 -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card">
                    <div class="w-16 h-16 bg-[#e1f2ff] rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-mobile-alt text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Mobile App</h3>
                    <p class="text-gray-600">Provide customers with a mobile app for booking, checking wait times, joining waitlists, and accessing exclusive promotions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Screenshots -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Software <span class="text-[#00B7FF]">Interface</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">A glimpse of our intuitive and user-friendly interface</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Laptop Mockup -->
                <div class="device-wrapper mockup-shadow rounded-lg">
                    <div class="laptop-mockup">
                        <img src="https://cdn.pixabay.com/photo/2016/03/27/07/12/apple-1282241_960_720.jpg" alt="Laptop Mockup" class="w-full">
                        <div class="laptop-screen bg-gray-100">
                            <img src="https://images.unsplash.com/photo-1544652478-6653e09f18a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Admin Dashboard" class="w-full h-auto">
                        </div>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-2xl font-bold mb-4">Powerful Admin Dashboard</h3>
                    <p class="text-gray-600 mb-6">Monitor your entire operation from a single, intuitive dashboard. Get real-time insights into station usage, revenue, and customer activity.</p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-2"></i>
                            <span class="text-gray-600">Real-time station monitoring and control</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-2"></i>
                            <span class="text-gray-600">Comprehensive analytics and customizable reports</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-2"></i>
                            <span class="text-gray-600">Staff management and scheduling</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-2"></i>
                            <span class="text-gray-600">Inventory tracking and automated alerts</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mt-24">
                <div class="order-2 lg:order-1">
                    <h3 class="text-2xl font-bold mb-4">Mobile Customer Experience</h3>
                    <p class="text-gray-600 mb-6">Enhance your customer's experience with our feature-rich mobile application designed for seamless interaction with your game zone.</p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-2"></i>
                            <span class="text-gray-600">Easy station booking and reservation management</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-2"></i>
                            <span class="text-gray-600">Digital membership cards and reward tracking</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-2"></i>
                            <span class="text-gray-600">Push notifications for promotions and events</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-2"></i>
                            <span class="text-gray-600">In-app payments and digital receipts</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Phone Mockup -->
                <div class="order-1 lg:order-2 flex justify-center">
                    <div class="device-wrapper mockup-shadow">
                        <div class="phone-mockup">
                            <img src="https://www.pngkey.com/png/full/246-2467547_smartphone-outline-comments-cell-phone-vector-png.png" alt="Phone Mockup" class="w-full">
                            <div class="phone-screen bg-gray-100">
                                <img src="https://images.unsplash.com/photo-1575089976121-8ed7b2a54265?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Mobile App" class="w-full h-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Business <span class="text-[#00B7FF]">Benefits</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">How our solution drives growth and efficiency for your gaming center</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Benefit 1 -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card">
                    <h3 class="text-xl font-semibold mb-4">Increased Revenue</h3>
                    <p class="text-gray-600">Optimize station usage, implement dynamic pricing, and boost customer retention with loyalty programs that drive revenue growth.</p>
                </div>
                
                <!-- Benefit 2 -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card">
                    <h3 class="text-xl font-semibold mb-4">Operational Efficiency</h3>
                    <p class="text-gray-600">Automate routine tasks, reduce manual errors, and streamline workflows to maximize staff productivity and reduce operational costs.</p>
                </div>
                
                <!-- Benefit 3 -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card">
                    <h3 class="text-xl font-semibold mb-4">Enhanced Customer Experience</h3>
                    <p class="text-gray-600">Provide a seamless, hassle-free experience from booking to checkout, encouraging repeat visits and positive word-of-mouth.</p>
                </div>
                
                <!-- Benefit 4 -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card">
                    <h3 class="text-xl font-semibold mb-4">Data-Driven Decisions</h3>
                    <p class="text-gray-600">Leverage comprehensive analytics to identify trends, optimize pricing strategies, and make informed business decisions.</p>
                </div>
                
                <!-- Benefit 5 -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card">
                    <h3 class="text-xl font-semibold mb-4">Scalable Solution</h3>
                    <p class="text-gray-600">Easily scale from a single location to multiple venues with centralized management and customizable configurations.</p>
                </div>
                
                <!-- Benefit 6 -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card">
                    <h3 class="text-xl font-semibold mb-4">24/7 Technical Support</h3>
                    <p class="text-gray-600">Rest easy with our dedicated technical support team available around the clock to address any issues promptly.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">What Our <span class="text-[#00B7FF]">Clients Say</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Success stories from game zone owners using our software</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 p-8 rounded-lg shadow-sm">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1566492031773-4f4e44671857?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Client" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-semibold">Rahul Sharma</h3>
                            <p class="text-gray-500 text-sm">Owner, GamersHub Arcade</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "Implementing this Game Zone Management Software has been a game-changer for our business. We've increased our revenue by 35% in just six months, and our customers love the seamless booking experience."
                    </p>
                    <div class="flex text-[#FFD700]">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-gray-50 p-8 rounded-lg shadow-sm">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Client" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-semibold">Priya Patel</h3>
                            <p class="text-gray-500 text-sm">Manager, FunZone Entertainment</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "The analytics features have been invaluable for our business planning. We can now identify peak hours, optimize staffing, and create targeted promotions that actually work. Customer retention has improved dramatically."
                    </p>
                    <div class="flex text-[#FFD700]">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Flexible <span class="text-[#00B7FF]">Pricing Plans</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Choose the right package for your gaming center</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Basic Plan -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card border-t-4 border-gray-300">
                    <h3 class="text-xl font-semibold mb-2">Basic</h3>
                    <div class="text-3xl font-bold mb-6">₹12,999<span class="text-gray-500 text-base font-normal">/month</span></div>
                    <p class="text-gray-600 mb-6">Perfect for small gaming centers with up to 10 stations</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Station management</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Basic reporting</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Customer management</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Email support</span>
                        </li>
                        <li class="flex items-start text-gray-400">
                            <i class="fas fa-times-circle mt-1 mr-2"></i>
                            <span>Advanced analytics</span>
                        </li>
                        <li class="flex items-start text-gray-400">
                            <i class="fas fa-times-circle mt-1 mr-2"></i>
                            <span>Mobile app</span>
                        </li>
                    </ul>
                    <button class="open-quote-modal w-full py-3 bg-gray-200 text-gray-800 rounded-full hover:bg-gray-300 transition duration-300" data-service="game-zone">Get Started</button>
                </div>
                
                <!-- Pro Plan -->
                <div class="bg-white p-8 rounded-lg shadow-md feature-card border-t-4 border-[#00B7FF] transform scale-105">
                    <div class="absolute top-0 right-0 bg-[#00B7FF] text-white text-xs font-bold px-3 py-1 rounded-bl-lg rounded-tr-lg">POPULAR</div>
                    <h3 class="text-xl font-semibold mb-2">Professional</h3>
                    <div class="text-3xl font-bold mb-6">₹24,999<span class="text-gray-500 text-base font-normal">/month</span></div>
                    <p class="text-gray-600 mb-6">Ideal for medium gaming centers with up to 30 stations</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Everything in Basic</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Advanced analytics</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Mobile app</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">POS integration</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Priority phone support</span>
                        </li>
                        <li class="flex items-start text-gray-400">
                            <i class="fas fa-times-circle mt-1 mr-2"></i>
                            <span>Multi-location management</span>
                        </li>
                    </ul>
                    <button class="open-quote-modal w-full py-3 bg-[#00B7FF] text-white rounded-full hover:bg-[#0099cc] transition duration-300" data-service="game-zone">Get Started</button>
                </div>
                
                <!-- Enterprise Plan -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card border-t-4 border-gray-800">
                    <h3 class="text-xl font-semibold mb-2">Enterprise</h3>
                    <div class="text-3xl font-bold mb-6">₹49,999<span class="text-gray-500 text-base font-normal">/month</span></div>
                    <p class="text-gray-600 mb-6">For large gaming centers or multiple locations</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Everything in Professional</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Multi-location management</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Custom integrations</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">White-label mobile app</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Dedicated account manager</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">24/7 premium support</span>
                        </li>
                    </ul>
                    <button class="open-quote-modal w-full py-3 bg-gray-800 text-white rounded-full hover:bg-gray-700 transition duration-300" data-service="game-zone">Get Started</button>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-gradient-to-r from-[#00B7FF] to-[#0099CC] text-white">
        <div class="container mx-auto px-[10%] text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Transform Your Game Zone?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Get in touch with our team for a personalized demo and see how our software can help you streamline operations and boost revenue.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <button class="open-quote-modal px-8 py-3 bg-white text-[#00B7FF] font-semibold rounded-full hover:shadow-lg transition duration-300" data-service="game-zone">Request a Demo</button>
                <a href="#features" class="px-8 py-3 bg-transparent border-2 border-white text-white font-semibold rounded-full hover:bg-white hover:text-[#00B7FF] transition duration-300">Learn More</a>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Frequently Asked <span class="text-[#00B7FF]">Questions</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Answers to common questions about our Game Zone Management Software</p>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <div class="mb-6 border-b border-gray-200 pb-6">
                    <h3 class="text-xl font-semibold mb-2">What hardware requirements do I need?</h3>
                    <p class="text-gray-600">Our software is cloud-based and works on standard computers and tablets with internet access. For POS integration, compatible hardware may be required.</p>
                </div>
                
                <div class="mb-6 border-b border-gray-200 pb-6">
                    <h3 class="text-xl font-semibold mb-2">Can I upgrade my plan as my business grows?</h3>
                    <p class="text-gray-600">Yes, you can easily upgrade your plan at any time as your business expands. We offer seamless transitions between different service tiers.</p>
                </div>
                
                <div class="mb-6 border-b border-gray-200 pb-6">
                    <h3 class="text-xl font-semibold mb-2">Is training provided with the software?</h3>
                    <p class="text-gray-600">Yes, all plans include comprehensive training for your staff. Additional training sessions can be arranged as needed.</p>
                </div>
                
                <div class="mb-6 border-b border-gray-200 pb-6">
                    <h3 class="text-xl font-semibold mb-2">Can the software be customized for my specific needs?</h3>
                    <p class="text-gray-600">Absolutely. While our software comes with a robust set of features out of the box, we offer customization options to meet your specific business requirements.</p>
                </div>
                
                <div>
                    <h3 class="text-xl font-semibold mb-2">How secure is my data?</h3>
                    <p class="text-gray-600">We implement bank-level security measures with data encryption, regular backups, and strict access controls to ensure your business and customer data remains secure.</p>
                </div>
            </div>
        </div>
    </section>
@endsection