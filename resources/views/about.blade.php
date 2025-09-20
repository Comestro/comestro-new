@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container mx-auto px-[10%]">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">About <span class="text-[#00B7FF]">Us</span></h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">Learn about our journey, mission, and the passionate team behind Comestro's innovative technology solutions.</p>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="flex flex-col md:flex-row items-center gap-10">
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold mb-6">Our <span class="text-[#00B7FF]">Story</span></h2>
                    <p class="mb-4 text-gray-700">
                        Comestro was founded in 2020 with a vision to bridge the gap between cutting-edge technology and business needs. What started as a small team of passionate developers has grown into a comprehensive technology company delivering solutions across multiple domains.
                    </p>
                    <p class="mb-4 text-gray-700">
                        Our journey began with web development projects for local businesses, but we quickly expanded into mobile applications, enterprise solutions, and specialized training programs to address the growing technology skill gap in the industry.
                    </p>
                    <p class="mb-4 text-gray-700">
                        Today, Comestro stands as a trusted partner for businesses looking to leverage technology for growth and students aspiring to build careers in the fast-evolving tech landscape.
                    </p>
                </div>
                <div class="md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Team Collaboration" class="rounded-lg shadow-xl w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Our Vision & <span class="text-[#00B7FF]">Mission</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <div class="w-16 h-16 bg-[#f1f8ff] rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-eye text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Our Vision</h3>
                    <p class="text-gray-700">
                        To create cutting-edge technology solutions that transform businesses and empower individuals to achieve their digital aspirations through innovation and excellence.
                    </p>
                    <ul class="mt-4">
                        <li class="flex items-center mb-2">
                            <i class="fas fa-check text-[#00B7FF] mr-2"></i>
                            <span>Global Technology Leadership</span>
                        </li>
                        <li class="flex items-center mb-2">
                            <i class="fas fa-check text-[#00B7FF] mr-2"></i>
                            <span>Digital Transformation Enablement</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00B7FF] mr-2"></i>
                            <span>Industry-Leading Training Excellence</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <div class="w-16 h-16 bg-[#f1f8ff] rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-bullseye text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Our Mission</h3>
                    <p class="text-gray-700">
                        To deliver high-quality software solutions, provide impactful training programs, and foster long-term growth for our clients and students through dedication, expertise, and commitment.
                    </p>
                    <ul class="mt-4">
                        <li class="flex items-center mb-2">
                            <i class="fas fa-check text-[#00B7FF] mr-2"></i>
                            <span>Excellence in Every Project</span>
                        </li>
                        <li class="flex items-center mb-2">
                            <i class="fas fa-check text-[#00B7FF] mr-2"></i>
                            <span>Continuous Innovation</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00B7FF] mr-2"></i>
                            <span>Client-Centered Approach</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Our Core <span class="text-[#00B7FF]">Values</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">The principles that guide our work and shape our company culture</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-6 border border-gray-100 rounded-lg hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-[#f1f8ff] rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-lightbulb text-[#00B7FF] text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Innovation</h3>
                    <p class="text-gray-700">
                        We constantly push boundaries and embrace new technologies to deliver cutting-edge solutions.
                    </p>
                </div>
                <div class="p-6 border border-gray-100 rounded-lg hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-[#f1f8ff] rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-award text-[#00B7FF] text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Excellence</h3>
                    <p class="text-gray-700">
                        We strive for the highest quality in every aspect of our work, from code to client interactions.
                    </p>
                </div>
                <div class="p-6 border border-gray-100 rounded-lg hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-[#f1f8ff] rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-handshake text-[#00B7FF] text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Integrity</h3>
                    <p class="text-gray-700">
                        We operate with transparency, honesty, and strong ethical principles in all our dealings.
                    </p>
                </div>
                <div class="p-6 border border-gray-100 rounded-lg hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-[#f1f8ff] rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-users text-[#00B7FF] text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Collaboration</h3>
                    <p class="text-gray-700">
                        We believe in the power of teamwork, both internally and with our clients and partners.
                    </p>
                </div>
                <div class="p-6 border border-gray-100 rounded-lg hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-[#f1f8ff] rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-user-graduate text-[#00B7FF] text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Continuous Learning</h3>
                    <p class="text-gray-700">
                        We foster a culture of growth and learning to stay ahead in the ever-evolving tech landscape.
                    </p>
                </div>
                <div class="p-6 border border-gray-100 rounded-lg hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-[#f1f8ff] rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-heart text-[#00B7FF] text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Client-Centricity</h3>
                    <p class="text-gray-700">
                        We put our clients' needs first, ensuring solutions that truly address their challenges.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Team Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Our <span class="text-[#00B7FF]">Leadership Team</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Meet the experts driving our vision forward</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Leader 1 -->
                <div class="text-center">
                    <div class="relative mb-6 mx-auto w-48 h-48 overflow-hidden rounded-full">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="CEO" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold">David Mitchell</h3>
                    <p class="text-[#00B7FF] mb-2">Founder & CEO</p>
                    <p class="text-gray-600 mb-4">Over 15 years of experience in software development and technology leadership.</p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="text-gray-500 hover:text-[#00B7FF]">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-[#00B7FF]">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <!-- Leader 2 -->
                <div class="text-center">
                    <div class="relative mb-6 mx-auto w-48 h-48 overflow-hidden rounded-full">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="CTO" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold">Sarah Johnson</h3>
                    <p class="text-[#00B7FF] mb-2">Chief Technology Officer</p>
                    <p class="text-gray-600 mb-4">Expert in cloud architecture and enterprise solutions with a background in machine learning.</p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="text-gray-500 hover:text-[#00B7FF]">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-[#00B7FF]">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <!-- Leader 3 -->
                <div class="text-center">
                    <div class="relative mb-6 mx-auto w-48 h-48 overflow-hidden rounded-full">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="COO" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold">Michael Rodriguez</h3>
                    <p class="text-[#00B7FF] mb-2">Chief Operations Officer</p>
                    <p class="text-gray-600 mb-4">Specialized in business optimization and scaling tech operations for efficiency.</p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="text-gray-500 hover:text-[#00B7FF]">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-[#00B7FF]">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Stats Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Our <span class="text-[#00B7FF]">Impact</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Numbers that reflect our journey and achievements</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-gray-50 rounded-lg hover:shadow-lg transition duration-300">
                    <div class="text-4xl font-bold text-[#00B7FF] mb-2">500+</div>
                    <p class="text-xl text-gray-700">Projects Completed</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-lg hover:shadow-lg transition duration-300">
                    <div class="text-4xl font-bold text-[#00B7FF] mb-2">50+</div>
                    <p class="text-xl text-gray-700">Expert Developers</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-lg hover:shadow-lg transition duration-300">
                    <div class="text-4xl font-bold text-[#00B7FF] mb-2">98%</div>
                    <p class="text-xl text-gray-700">Client Satisfaction</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-lg hover:shadow-lg transition duration-300">
                    <div class="text-4xl font-bold text-[#00B7FF] mb-2">15+</div>
                    <p class="text-xl text-gray-700">Countries Served</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-[#00B7FF] to-[#0099CC] text-white">
        <div class="container mx-auto px-[10%] text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Work With Us?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Partner with Comestro for innovative tech solutions that transform your business and drive growth.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('contact') }}" class="px-8 py-3 bg-white text-[#00B7FF] font-semibold rounded-full hover:shadow-lg transition duration-300">
                    Contact Us
                </a>
                <a href="{{ route('services') }}" class="px-8 py-3 bg-transparent border-2 border-white text-white font-semibold rounded-full hover:bg-white hover:text-[#00B7FF] transition duration-300">
                    Explore Services
                </a>
            </div>
        </div>
    </section>
@endsection