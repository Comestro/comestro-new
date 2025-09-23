@extends('layouts.app')

@section('title', 'Hospital Doctor Appointment System')

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
    
    .benefits-gradient {
        background: linear-gradient(135deg, #f6f9fc, #edf2f7);
    }
</style>
@endsection

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container mx-auto px-[10%]">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Hospital <span class="text-[#00B7FF]">Doctor Appointment System</span></h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">Streamline patient scheduling, enhance healthcare delivery, and improve operational efficiency with our comprehensive appointment management solution.</p>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Modern Healthcare <span class="text-[#00B7FF]">Management Solution</span></h2>
                    <p class="text-gray-600 mb-6">Our Hospital Doctor Appointment System is designed to eliminate scheduling inefficiencies, reduce patient wait times, and optimize healthcare delivery with an intuitive digital platform that connects patients with doctors seamlessly.</p>
                    <p class="text-gray-600 mb-6">Whether you're running a small clinic or a multi-specialty hospital, our scalable solution adapts to your specific healthcare environment and workflow requirements.</p>
                    <div class="flex flex-wrap gap-4">
                        <button class="open-quote-modal px-6 py-3 bg-[#00B7FF] text-white rounded-full hover:shadow-lg transition duration-300" data-service="hospital">Get a Quote</button>
                        <a href="#features" class="px-6 py-3 border border-[#00B7FF] text-[#00B7FF] rounded-full hover:bg-gray-50 transition duration-300">Explore Features</a>
                    </div>
                </div>
                <div class="device-wrapper mockup-shadow rounded-lg">
                    <div class="laptop-mockup">
                        <img src="https://cdn.pixabay.com/photo/2016/03/27/07/12/apple-1282241_960_720.jpg" alt="Laptop Mockup" class="w-full">
                        <div class="laptop-screen bg-gray-100">
                            <img src="https://images.unsplash.com/photo-1581594549595-35f6edc7b762?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Hospital Dashboard" class="w-full h-auto scroll-animation">
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
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">A comprehensive solution for modern healthcare providers</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card">
                    <div class="w-16 h-16 bg-[#e1f2ff] rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-calendar-check text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Smart Scheduling</h3>
                    <p class="text-gray-600">Intelligent appointment booking system that optimizes doctor availability and reduces scheduling conflicts and wait times.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card">
                    <div class="w-16 h-16 bg-[#e1f2ff] rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-user-md text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Doctor Management</h3>
                    <p class="text-gray-600">Comprehensive profiles, availability tracking, and workload distribution for optimized healthcare delivery.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card">
                    <div class="w-16 h-16 bg-[#e1f2ff] rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-users text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Patient Portal</h3>
                    <p class="text-gray-600">User-friendly interface for patients to book, reschedule, or cancel appointments, access medical records, and communicate with healthcare providers.</p>
                </div>
                
                <!-- Feature 4 -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card">
                    <div class="w-16 h-16 bg-[#e1f2ff] rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-bell text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Automated Reminders</h3>
                    <p class="text-gray-600">Customizable SMS, email, and push notification reminders to reduce no-shows and improve appointment adherence.</p>
                </div>
                
                <!-- Feature 5 -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card">
                    <div class="w-16 h-16 bg-[#e1f2ff] rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-video text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Telemedicine Integration</h3>
                    <p class="text-gray-600">Seamless virtual consultation capabilities with secure video conferencing, prescription management, and follow-up scheduling.</p>
                </div>
                
                <!-- Feature 6 -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card">
                    <div class="w-16 h-16 bg-[#e1f2ff] rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-chart-line text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Analytics Dashboard</h3>
                    <p class="text-gray-600">Comprehensive reporting on patient flow, appointment trends, and resource utilization for data-driven operational improvements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Screenshots -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">System <span class="text-[#00B7FF]">Interface</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Intuitive design for administrators, doctors, and patients</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Laptop Mockup -->
                <div class="device-wrapper mockup-shadow rounded-lg">
                    <div class="laptop-mockup">
                        <img src="https://cdn.pixabay.com/photo/2016/03/27/07/12/apple-1282241_960_720.jpg" alt="Laptop Mockup" class="w-full">
                        <div class="laptop-screen bg-gray-100">
                            <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Hospital Admin Dashboard" class="w-full h-auto">
                        </div>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-2xl font-bold mb-4">Administrator Dashboard</h3>
                    <p class="text-gray-600 mb-6">A powerful command center for hospital administrators to manage appointments, doctor schedules, and patient flow with real-time insights.</p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-2"></i>
                            <span class="text-gray-600">Comprehensive overview of all departments and doctors</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-2"></i>
                            <span class="text-gray-600">Capacity planning and resource allocation tools</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-2"></i>
                            <span class="text-gray-600">Waiting time analytics and optimization suggestions</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-2"></i>
                            <span class="text-gray-600">Custom reporting and data export capabilities</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mt-24">
                <div class="order-2 lg:order-1">
                    <h3 class="text-2xl font-bold mb-4">Patient Mobile Experience</h3>
                    <p class="text-gray-600 mb-6">Empower patients with a user-friendly mobile application designed for seamless appointment scheduling and healthcare management.</p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-2"></i>
                            <span class="text-gray-600">Easy appointment booking and rescheduling</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-2"></i>
                            <span class="text-gray-600">Doctor profiles and specialty search</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-2"></i>
                            <span class="text-gray-600">Appointment reminders and notifications</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-2"></i>
                            <span class="text-gray-600">Secure access to medical records and prescriptions</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Phone Mockup -->
                <div class="order-1 lg:order-2 flex justify-center">
                    <div class="device-wrapper mockup-shadow">
                        <div class="phone-mockup">
                            <img src="https://www.pngkey.com/png/full/246-2467547_smartphone-outline-comments-cell-phone-vector-png.png" alt="Phone Mockup" class="w-full">
                            <div class="phone-screen bg-gray-100">
                                <img src="https://images.unsplash.com/photo-1584982751601-97dcc096659c?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Patient Mobile App" class="w-full h-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section class="py-16 benefits-gradient">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Key <span class="text-[#00B7FF]">Benefits</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">How our system transforms healthcare appointment management</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <!-- Benefit Column 1 -->
                <div>
                    <div class="mb-10">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#00B7FF]/10 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-hourglass-half text-[#00B7FF] text-xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold">Reduced Wait Times</h3>
                        </div>
                        <p class="text-gray-600 pl-16">Smart scheduling algorithms and capacity management tools reduce patient wait times by up to 40%, leading to improved patient satisfaction.</p>
                    </div>
                    
                    <div class="mb-10">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#00B7FF]/10 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-user-check text-[#00B7FF] text-xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold">Higher Attendance Rates</h3>
                        </div>
                        <p class="text-gray-600 pl-16">Automated reminders via SMS, email, and push notifications reduce no-show rates by up to 70%, maximizing doctor productivity.</p>
                    </div>
                    
                    <div>
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#00B7FF]/10 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-chart-pie text-[#00B7FF] text-xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold">Data-Driven Improvements</h3>
                        </div>
                        <p class="text-gray-600 pl-16">Comprehensive analytics and reporting help identify bottlenecks and optimize resource allocation for continual operational improvements.</p>
                    </div>
                </div>
                
                <!-- Benefit Column 2 -->
                <div>
                    <div class="mb-10">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#00B7FF]/10 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-tasks text-[#00B7FF] text-xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold">Optimized Workflows</h3>
                        </div>
                        <p class="text-gray-600 pl-16">Streamlined administrative processes reduce staff workload by up to 60%, allowing more focus on patient care and less on paperwork.</p>
                    </div>
                    
                    <div class="mb-10">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#00B7FF]/10 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-mobile-alt text-[#00B7FF] text-xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold">Enhanced Accessibility</h3>
                        </div>
                        <p class="text-gray-600 pl-16">24/7 online booking and telemedicine integration increase healthcare accessibility, particularly for remote patients or those with mobility issues.</p>
                    </div>
                    
                    <div>
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#00B7FF]/10 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-shield-alt text-[#00B7FF] text-xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold">Secure and Compliant</h3>
                        </div>
                        <p class="text-gray-600 pl-16">Fully compliant with healthcare data protection regulations, with end-to-end encryption and robust access controls for patient data security.</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-sm">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                    <div class="p-4">
                        <div class="text-4xl font-bold text-[#00B7FF] mb-2">70%</div>
                        <p class="text-gray-600">Reduction in administrative workload</p>
                    </div>
                    <div class="p-4">
                        <div class="text-4xl font-bold text-[#00B7FF] mb-2">40%</div>
                        <p class="text-gray-600">Decrease in patient wait times</p>
                    </div>
                    <div class="p-4">
                        <div class="text-4xl font-bold text-[#00B7FF] mb-2">30%</div>
                        <p class="text-gray-600">Increase in patient satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Healthcare <span class="text-[#00B7FF]">Testimonials</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Feedback from healthcare providers using our appointment system</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 p-8 rounded-lg shadow-sm">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Client" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-semibold">Dr. Ananya Mehta</h3>
                            <p class="text-gray-500 text-sm">Medical Director, City Hospital</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "This appointment system has transformed how we manage patient flow. The reduction in administrative burden allows our staff to focus more on patient care. The analytics have been eye-opening for optimizing our doctor schedules."
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
                            <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Client" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-semibold">Vikram Singh</h3>
                            <p class="text-gray-500 text-sm">Administrator, Prime Healthcare Network</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "Since implementing this system, our no-show rates have dropped by over 60%. The telemedicine integration has been particularly valuable for our rural patients, expanding our reach significantly."
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
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Choose the right package for your healthcare facility</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Basic Plan -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card border-t-4 border-gray-300">
                    <h3 class="text-xl font-semibold mb-2">Clinic</h3>
                    <div class="text-3xl font-bold mb-6">₹15,999<span class="text-gray-500 text-base font-normal">/month</span></div>
                    <p class="text-gray-600 mb-6">Ideal for small clinics with up to 5 doctors</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Basic appointment scheduling</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">SMS and email reminders</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Doctor availability management</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Basic reporting</span>
                        </li>
                        <li class="flex items-start text-gray-400">
                            <i class="fas fa-times-circle mt-1 mr-2"></i>
                            <span>Telemedicine features</span>
                        </li>
                        <li class="flex items-start text-gray-400">
                            <i class="fas fa-times-circle mt-1 mr-2"></i>
                            <span>Advanced analytics</span>
                        </li>
                    </ul>
                    <button class="open-quote-modal w-full py-3 bg-gray-200 text-gray-800 rounded-full hover:bg-gray-300 transition duration-300" data-service="hospital">Get Started</button>
                </div>
                
                <!-- Pro Plan -->
                <div class="bg-white p-8 rounded-lg shadow-md feature-card border-t-4 border-[#00B7FF] transform scale-105">
                    <div class="absolute top-0 right-0 bg-[#00B7FF] text-white text-xs font-bold px-3 py-1 rounded-bl-lg rounded-tr-lg">POPULAR</div>
                    <h3 class="text-xl font-semibold mb-2">Hospital</h3>
                    <div class="text-3xl font-bold mb-6">₹29,999<span class="text-gray-500 text-base font-normal">/month</span></div>
                    <p class="text-gray-600 mb-6">Perfect for mid-sized hospitals with up to 25 doctors</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Everything in Clinic plan</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Advanced scheduling algorithms</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Patient portal & mobile app</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Telemedicine integration</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Department management</span>
                        </li>
                        <li class="flex items-start text-gray-400">
                            <i class="fas fa-times-circle mt-1 mr-2"></i>
                            <span>Multi-location support</span>
                        </li>
                    </ul>
                    <button class="open-quote-modal w-full py-3 bg-[#00B7FF] text-white rounded-full hover:bg-[#0099cc] transition duration-300" data-service="hospital">Get Started</button>
                </div>
                
                <!-- Enterprise Plan -->
                <div class="bg-white p-8 rounded-lg shadow-sm feature-card border-t-4 border-gray-800">
                    <h3 class="text-xl font-semibold mb-2">Enterprise</h3>
                    <div class="text-3xl font-bold mb-6">₹59,999<span class="text-gray-500 text-base font-normal">/month</span></div>
                    <p class="text-gray-600 mb-6">For large hospital networks with multiple locations</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Everything in Hospital plan</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Multi-location management</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Advanced analytics & AI insights</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Custom integrations with EHR/EMR</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">White-labeled patient app</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-600">Dedicated account manager</span>
                        </li>
                    </ul>
                    <button class="open-quote-modal w-full py-3 bg-gray-800 text-white rounded-full hover:bg-gray-700 transition duration-300" data-service="hospital">Get Started</button>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-gradient-to-r from-[#00B7FF] to-[#0099CC] text-white">
        <div class="container mx-auto px-[10%] text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Transform Your Healthcare Operations?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Join hundreds of healthcare providers who have streamlined their operations and enhanced patient care with our appointment system.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <button class="open-quote-modal px-8 py-3 bg-white text-[#00B7FF] font-semibold rounded-full hover:shadow-lg transition duration-300" data-service="hospital">Request a Demo</button>
                <a href="#features" class="px-8 py-3 bg-transparent border-2 border-white text-white font-semibold rounded-full hover:bg-white hover:text-[#00B7FF] transition duration-300">Learn More</a>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Frequently Asked <span class="text-[#00B7FF]">Questions</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Answers to common questions about our Hospital Doctor Appointment System</p>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <div class="mb-6 border-b border-gray-200 pb-6">
                    <h3 class="text-xl font-semibold mb-2">Is the system compliant with healthcare data regulations?</h3>
                    <p class="text-gray-600">Yes, our system is fully compliant with healthcare data protection regulations including HIPAA standards, with end-to-end encryption and robust access controls.</p>
                </div>
                
                <div class="mb-6 border-b border-gray-200 pb-6">
                    <h3 class="text-xl font-semibold mb-2">Can the system integrate with our existing hospital management software?</h3>
                    <p class="text-gray-600">Yes, we offer integration capabilities with most popular EHR/EMR systems and hospital management software through our API. Our team can provide customized integration solutions as needed.</p>
                </div>
                
                <div class="mb-6 border-b border-gray-200 pb-6">
                    <h3 class="text-xl font-semibold mb-2">How quickly can we implement the system?</h3>
                    <p class="text-gray-600">Basic implementation can be completed within 2-4 weeks. More complex setups with custom integrations may take 6-8 weeks. Our implementation team works closely with your staff throughout the process.</p>
                </div>
                
                <div class="mb-6 border-b border-gray-200 pb-6">
                    <h3 class="text-xl font-semibold mb-2">Is training provided for our staff?</h3>
                    <p class="text-gray-600">Yes, all plans include comprehensive training for administrative staff and doctors. We provide both online and in-person training options, along with detailed documentation and video tutorials.</p>
                </div>
                
                <div>
                    <h3 class="text-xl font-semibold mb-2">What kind of support is available?</h3>
                    <p class="text-gray-600">We offer tiered support based on your plan, ranging from standard business-hours support to 24/7 premium support. All customers have access to our knowledge base, video tutorials, and community forums.</p>
                </div>
            </div>
        </div>
    </section>
@endsection