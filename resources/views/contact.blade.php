@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container mx-auto px-[10%]">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact <span class="text-[#00B7FF]">Us</span></h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">Get in touch with our team for inquiries, support, or partnership opportunities.</p>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h2 class="text-3xl font-bold mb-8">Send us a <span class="text-[#00B7FF]">Message</span></h2>
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-gray-700 mb-2 font-medium">Your Name</label>
                                <input type="text" name="name" id="name" placeholder="John Doe" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#00B7FF] focus:border-transparent transition">
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 mb-2 font-medium">Your Email</label>
                                <input type="email" name="email" id="email" placeholder="johndoe@example.com" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#00B7FF] focus:border-transparent transition">
                            </div>
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-gray-700 mb-2 font-medium">Phone Number</label>
                            <input type="tel" name="phone" id="phone" placeholder="+91 98765 43210" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#00B7FF] focus:border-transparent transition">
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-gray-700 mb-2 font-medium">Subject</label>
                            <input type="text" name="subject" id="subject" placeholder="How can we help you?" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#00B7FF] focus:border-transparent transition">
                        </div>
                        
                        <div>
                            <label for="message" class="block text-gray-700 mb-2 font-medium">Message</label>
                            <textarea name="message" id="message" rows="5" placeholder="Type your message here..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#00B7FF] focus:border-transparent transition"></textarea>
                        </div>
                        
                        <div>
                            <button type="submit" class="w-full py-3 px-6 bg-[#00B7FF] text-white font-semibold rounded-lg hover:bg-[#0099cc] transition duration-200 flex items-center justify-center">
                                Send Message <i class="fas fa-paper-plane ml-2"></i>
                            </button>
                        </div>
                    </form>
                </div>
                
                <!-- Contact Information -->
                <div class="flex flex-col space-y-10">
                    <!-- Get in Touch -->
                    <div>
                        <h2 class="text-3xl font-bold mb-6">Get in <span class="text-[#00B7FF]">Touch</span></h2>
                        <p class="text-gray-600 mb-8">
                            Have questions about our services, training programs, or partnership opportunities? Reach out to us and our team will get back to you as soon as possible.
                        </p>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-[#f1f8ff] rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marker-alt text-[#00B7FF] text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold">Our Location</h3>
                                    <p class="text-gray-600">123 Tech Park, Sector 15,<br>Gurugram, Haryana 122001</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-[#f1f8ff] rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-phone-alt text-[#00B7FF] text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold">Call Us</h3>
                                    <p class="text-gray-600">+91 1234 567890<br>+91 9876 543210</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-[#f1f8ff] rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-envelope text-[#00B7FF] text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold">Email Us</h3>
                                    <p class="text-gray-600">info@comestro.com<br>support@comestro.com</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-[#f1f8ff] rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-clock text-[#00B7FF] text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold">Working Hours</h3>
                                    <p class="text-gray-600">Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 2:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Connect With Us -->
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Connect With Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 bg-[#f1f8ff] rounded-full flex items-center justify-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white transition duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-[#f1f8ff] rounded-full flex items-center justify-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white transition duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-[#f1f8ff] rounded-full flex items-center justify-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white transition duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-[#f1f8ff] rounded-full flex items-center justify-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white transition duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-[#f1f8ff] rounded-full flex items-center justify-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white transition duration-300">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Our <span class="text-[#00B7FF]">Location</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Visit us at our office located in the heart of Gurugram's tech hub</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="aspect-w-16 aspect-h-9 h-[500px]">
                    <!-- Replace with your Google Maps embed code -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56042.54635794867!2d77.01201573476566!3d28.4594536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19d582e38859%3A0x2cf5fe8e5c64b1e!2sGurugram%2C%20Haryana!5e0!3m2!1sen!2sin!4v1690000000000!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Frequently Asked <span class="text-[#00B7FF]">Questions</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Find answers to common questions about our services and processes</p>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <!-- FAQ Item 1 -->
                <div class="mb-6">
                    <button class="flex justify-between items-center w-full text-left px-6 py-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition duration-200">
                        <span class="text-lg font-semibold">How quickly can you develop a custom software solution?</span>
                        <i class="fas fa-chevron-down text-[#00B7FF]"></i>
                    </button>
                    <div class="px-6 py-4 bg-white">
                        <p class="text-gray-600">
                            The timeline for custom software development varies based on project complexity, requirements, and scope. Simple projects might take 2-3 months, while complex enterprise solutions can take 6-12 months. During our initial consultation, we'll provide a detailed timeline based on your specific needs.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="mb-6">
                    <button class="flex justify-between items-center w-full text-left px-6 py-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition duration-200">
                        <span class="text-lg font-semibold">What training programs are available for college students?</span>
                        <i class="fas fa-chevron-down text-[#00B7FF]"></i>
                    </button>
                    <div class="px-6 py-4 bg-white">
                        <p class="text-gray-600">
                            We offer specialized training programs for BCA, B.Tech, and MCA students, as well as short-term courses in specific technologies. Our programs include hands-on projects, mentorship from industry experts, and placement assistance. Visit our Training page for detailed information about each program.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="mb-6">
                    <button class="flex justify-between items-center w-full text-left px-6 py-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition duration-200">
                        <span class="text-lg font-semibold">How can I apply for a job at Comestro?</span>
                        <i class="fas fa-chevron-down text-[#00B7FF]"></i>
                    </button>
                    <div class="px-6 py-4 bg-white">
                        <p class="text-gray-600">
                            You can apply for open positions through our Careers page. Select the role you're interested in and click the "Apply Now" button to submit your application. You can also send your resume to careers@comestro.com with the job title in the subject line.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="mb-6">
                    <button class="flex justify-between items-center w-full text-left px-6 py-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition duration-200">
                        <span class="text-lg font-semibold">Do you provide maintenance and support after project completion?</span>
                        <i class="fas fa-chevron-down text-[#00B7FF]"></i>
                    </button>
                    <div class="px-6 py-4 bg-white">
                        <p class="text-gray-600">
                            Yes, we offer comprehensive maintenance and support services after project completion. Our support packages include regular updates, bug fixes, performance optimization, security patches, and technical support. We can customize a maintenance plan based on your specific requirements.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ Item 5 -->
                <div>
                    <button class="flex justify-between items-center w-full text-left px-6 py-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition duration-200">
                        <span class="text-lg font-semibold">Can you help with an existing project that needs improvements?</span>
                        <i class="fas fa-chevron-down text-[#00B7FF]"></i>
                    </button>
                    <div class="px-6 py-4 bg-white">
                        <p class="text-gray-600">
                            Absolutely! We offer code review, refactoring, and enhancement services for existing projects. Our team can analyze your current solution, identify areas for improvement, and implement changes to enhance functionality, performance, and user experience. Contact us for a consultation to discuss your specific needs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Inquiry Options -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">How Can We <span class="text-[#00B7FF]">Help You?</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Choose the right department for faster response to your inquiry</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Sales & Business -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-16 h-16 bg-[#f1f8ff] rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-handshake text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Sales & Business Inquiries</h3>
                    <p class="text-gray-600 mb-6">
                        For questions about our services, pricing, and partnership opportunities.
                    </p>
                    <div class="space-y-2 text-gray-600">
                        <p class="flex items-center"><i class="fas fa-envelope mr-3 text-[#00B7FF]"></i> business@comestro.com</p>
                        <p class="flex items-center"><i class="fas fa-phone-alt mr-3 text-[#00B7FF]"></i> +91 9876 543210</p>
                    </div>
                </div>
                
                <!-- Support -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-16 h-16 bg-[#f1f8ff] rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-headset text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Technical Support</h3>
                    <p class="text-gray-600 mb-6">
                        For assistance with our products, services, or ongoing projects.
                    </p>
                    <div class="space-y-2 text-gray-600">
                        <p class="flex items-center"><i class="fas fa-envelope mr-3 text-[#00B7FF]"></i> support@comestro.com</p>
                        <p class="flex items-center"><i class="fas fa-phone-alt mr-3 text-[#00B7FF]"></i> +91 1234 567890</p>
                    </div>
                </div>
                
                <!-- Careers -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-16 h-16 bg-[#f1f8ff] rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-user-tie text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Careers & HR</h3>
                    <p class="text-gray-600 mb-6">
                        For job applications, internship programs, and HR-related inquiries.
                    </p>
                    <div class="space-y-2 text-gray-600">
                        <p class="flex items-center"><i class="fas fa-envelope mr-3 text-[#00B7FF]"></i> careers@comestro.com</p>
                        <p class="flex items-center"><i class="fas fa-phone-alt mr-3 text-[#00B7FF]"></i> +91 9876 543211</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-gradient-to-r from-[#00B7FF] to-[#0099CC] text-white">
        <div class="container mx-auto px-[10%] text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Start Your Project?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Whether you need a custom software solution, website development, or training programs, we're here to help you succeed.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="px-8 py-3 bg-white text-[#00B7FF] font-semibold rounded-full hover:shadow-lg transition duration-300">
                    Request a Proposal
                </a>
                <a href="tel:+911234567890" class="px-8 py-3 bg-transparent border-2 border-white text-white font-semibold rounded-full hover:bg-white hover:text-[#00B7FF] transition duration-300">
                    <i class="fas fa-phone-alt mr-2"></i> Call Us Now
                </a>
            </div>
        </div>
    </section>
@endsection