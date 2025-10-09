@extends('layouts.app')

@section('title', 'Careers')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container mx-auto px-[10%]">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Join Our <span class="text-[#00B7FF]">Team</span></h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">Build your career with a company that values innovation,
                growth, and people.</p>
        </div>
    </section>

    <!-- Why Join Us -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Why Join <span class="text-[#00B7FF]">Comestro?</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">We believe in creating an environment where talented
                    individuals can thrive, innovate, and make an impact.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="p-8 bg-gray-50 rounded-xl text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 bg-[#f1f8ff] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-chart-line text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Professional Growth</h3>
                    <p class="text-gray-600">
                        Continuous learning opportunities, mentorship programs, and clear career advancement paths.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="p-8 bg-gray-50 rounded-xl text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 bg-[#f1f8ff] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-lightbulb text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Innovative Projects</h3>
                    <p class="text-gray-600">
                        Work on cutting-edge technologies and challenging projects that make a real difference.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="p-8 bg-gray-50 rounded-xl text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 bg-[#f1f8ff] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-hands-helping text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Supportive Culture</h3>
                    <p class="text-gray-600">
                        A collaborative environment where teamwork is valued and everyone's voice is heard.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="p-8 bg-gray-50 rounded-xl text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 bg-[#f1f8ff] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-balance-scale text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Work-Life Balance</h3>
                    <p class="text-gray-600">
                        Flexible work arrangements, generous time off, and programs to support your wellbeing.
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="p-8 bg-gray-50 rounded-xl text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 bg-[#f1f8ff] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-trophy text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Competitive Benefits</h3>
                    <p class="text-gray-600">
                        Attractive compensation packages, health benefits, and performance-based incentives.
                    </p>
                </div>

                <!-- Feature 6 -->
                <div class="p-8 bg-gray-50 rounded-xl text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 bg-[#f1f8ff] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-globe text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Global Exposure</h3>
                    <p class="text-gray-600">
                        Opportunities to work with international clients and diverse teams across the world.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Current Openings -->
    <section class="py-16 bg-gradient-to-b from-white to-[#f8f9fa]">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Current <span class="text-[#00B7FF]">Openings</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Explore exciting career opportunities at Comestro</p>
            </div>

            <!-- Filters -->
            <div class="flex flex-wrap justify-center mb-10 gap-4">
                <a href="{{ route('careers') }}"
                    class="px-6 py-2 {{ request()->url() == route('careers') ? 'bg-[#00B7FF] text-white' : 'bg-white text-gray-700' }} rounded-full hover:bg-gray-100 transition duration-200">
                    All
                </a>

                @foreach ($categories as $cat)
                    <a href="{{ route('careers.category', $cat->id) }}"
                        class="px-6 py-2 {{ request()->url() == route('careers.category', $cat->id) ? 'bg-[#00B7FF] text-white' : 'bg-white text-gray-700' }} rounded-full hover:bg-gray-100 transition duration-200">
                        {{ $cat->name }}
                    </a>
                @endforeach
            </div>

            <!-- Job Listings -->
            <div class="space-y-6">
                @foreach ($jobs as $job)
                    <div class="bg-white p-8 rounded-[15px] border border-gray-100 hover:shadow-lg transition duration-300">
                        <div class="flex flex-col md:flex-row md:items-start md:justify-between">
                            <div>
                                <span
                                    class="inline-block px-3 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded-full mb-3">
                                    {{ $job->category->name }}
                                </span>
                                <h3 class="text-2xl font-semibold mb-2">{{ $job->title }}</h3>
                                <div class="flex flex-wrap gap-4 text-gray-600 mb-4">
                                    <span class="flex items-center"><i class="fas fa-map-marker-alt mr-2 text-[#00B7FF]"></i>
                                        {{ $job->location }}</span>
                                    <span class="flex items-center"><i class="fas fa-briefcase mr-2 text-[#00B7FF]"></i>
                                        {{ $job->type }}</span>
                                    <span class="flex items-center"><i class="fas fa-rupee-sign mr-2 text-[#00B7FF]"></i>
                                        {{ $job->salary }}</span>
                                    <span class="flex items-center"><i class="fas fa-clock mr-2 text-[#00B7FF]"></i> Posted
                                        {{ $job->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                            <div class="mt-4 md:mt-0">
                                <a href="{{ route('careers.applyForm', $job->id) }}"
                                    class="inline-block px-6 py-3 bg-[#00B7FF] text-white font-semibold rounded-full hover:bg-[#0099cc] transition duration-200">
                                    Apply Now
                                </a>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">{{ $job->description }}</p>
                        <div class="flex flex-wrap gap-2">
                            @if($job->skills)
                                @foreach(explode(',', $job->skills) as $skill)
                                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">{{ trim($skill) }}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- View More Button -->
            <div class="text-center mt-10">
                <a href=""
                    class="inline-block px-8 py-3 bg-[#00B7FF] text-white font-semibold rounded-full hover:bg-[#0099cc] transition duration-200">
                    View More Openings
                </a>
            </div>
        </div>
    </section>


    <!-- Internships -->
 @if(isset($internships) && $internships->count() > 0)      
<section class="py-16 bg-white">
    <div class="container mx-auto px-[10%]">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold">Student <span class="text-[#00B7FF]">Internships</span></h2>
            <p class="text-gray-600 mt-4 max-w-3xl mx-auto">
                Kick-start your career with hands-on experience and mentorship
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($internships as $internship)
                <div class="bg-white border border-gray-100 rounded-xl overflow-hidden hover:shadow-lg transition duration-300">
                    <div class="h-40 bg-[#f1f8ff] flex items-center justify-center">
                        <i class="fas fa-briefcase text-5xl text-[#00B7FF]"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">{{ $internship->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($internship->description, 100) }}</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">{{ $internship->duration ?? 'N/A' }}</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">{{ $internship->stipend ?? 'N/A' }}</span>
                        </div>
                        <div class="flex gap-3">
                            <a href="{{route('viewIntern', ['id' => $internship->id])}}" class="text-[#00B7FF] font-medium hover:underline">View →</a>
                            <a href="{{route('applyInternship')}}" class="bg-[#00B7FF] text-white px-4 py-1 rounded hover:bg-blue-600">Apply</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif



    <!-- Employee Stories -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Employee <span class="text-[#00B7FF]">Stories</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Hear from our team members about their journey at Comestro
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Story 1 -->
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                alt="Employee" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg">Ankit Sharma</h3>
                            <p class="text-gray-500">Senior Software Engineer, 3 years at Comestro</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "Joining Comestro was one of the best decisions of my career. The challenging projects have helped
                        me grow technically, and the supportive culture has made this journey enjoyable. I've had
                        opportunities to lead teams and contribute to innovative solutions that make a real impact."
                    </p>
                    <a href="#" class="text-[#00B7FF] font-medium hover:underline">Read Full Story →</a>
                </div>

                <!-- Story 2 -->
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                alt="Employee" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg">Priyanka Gupta</h3>
                            <p class="text-gray-500">Product Manager, 2 years at Comestro</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "What stands out to me about Comestro is how everyone's ideas are valued. As a product manager, I've
                        been able to shape our product roadmap and see my ideas come to life. The company invests in its
                        people through training programs and career development opportunities."
                    </p>
                    <a href="#" class="text-[#00B7FF] font-medium hover:underline">Read Full Story →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Hiring Process -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Our Hiring <span class="text-[#00B7FF]">Process</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">A transparent and efficient process to find the right fit
                </p>
            </div>

            <div class="relative">
                <!-- Timeline -->
                <div
                    class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-[#00B7FF] opacity-20">
                </div>

                <!-- Steps -->
                <div class="space-y-12">
                    <!-- Step 1 -->
                    <div class="relative flex flex-col md:flex-row items-center">
                        <div class="flex-1 md:text-right md:pr-12 mb-4 md:mb-0">
                            <h3 class="text-xl font-semibold mb-2">Application Review</h3>
                            <p class="text-gray-600">Our recruitment team reviews your application to assess your
                                qualifications and experience.</p>
                        </div>
                        <div
                            class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full bg-[#00B7FF] text-white items-center justify-center font-bold">
                            1</div>
                        <div
                            class="md:hidden w-12 h-12 rounded-full bg-[#00B7FF] text-white flex items-center justify-center font-bold mb-4">
                            1</div>
                        <div class="flex-1 md:pl-12">
                            <p class="text-gray-500">
                                <span class="font-semibold">Timeline:</span> 1-2 weeks<br>
                                <span class="font-semibold">Tip:</span> Ensure your resume highlights relevant skills and
                                achievements.
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="relative flex flex-col md:flex-row items-center">
                        <div class="flex-1 md:text-right md:pr-12 mb-4 md:mb-0 md:order-1">
                            <p class="text-gray-500">
                                <span class="font-semibold">Timeline:</span> 1 week<br>
                                <span class="font-semibold">Tip:</span> Be prepared to discuss your technical skills and
                                problem-solving approach.
                            </p>
                        </div>
                        <div
                            class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full bg-[#00B7FF] text-white items-center justify-center font-bold">
                            2</div>
                        <div
                            class="md:hidden w-12 h-12 rounded-full bg-[#00B7FF] text-white flex items-center justify-center font-bold mb-4">
                            2</div>
                        <div class="flex-1 md:pl-12 md:order-2">
                            <h3 class="text-xl font-semibold mb-2">Technical Assessment</h3>
                            <p class="text-gray-600">Depending on the role, you might complete a coding challenge, design
                                exercise, or case study.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="relative flex flex-col md:flex-row items-center">
                        <div class="flex-1 md:text-right md:pr-12 mb-4 md:mb-0">
                            <h3 class="text-xl font-semibold mb-2">Initial Interview</h3>
                            <p class="text-gray-600">A conversation with our recruitment team to understand your background,
                                motivations, and career goals.</p>
                        </div>
                        <div
                            class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full bg-[#00B7FF] text-white items-center justify-center font-bold">
                            3</div>
                        <div
                            class="md:hidden w-12 h-12 rounded-full bg-[#00B7FF] text-white flex items-center justify-center font-bold mb-4">
                            3</div>
                        <div class="flex-1 md:pl-12">
                            <p class="text-gray-500">
                                <span class="font-semibold">Timeline:</span> 1 week<br>
                                <span class="font-semibold">Tip:</span> Research our company and be ready to explain why
                                you're interested in the role.
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="relative flex flex-col md:flex-row items-center">
                        <div class="flex-1 md:text-right md:pr-12 mb-4 md:mb-0 md:order-1">
                            <p class="text-gray-500">
                                <span class="font-semibold">Timeline:</span> 1-2 weeks<br>
                                <span class="font-semibold">Tip:</span> Come prepared with examples of your past work and
                                questions about the team and role.
                            </p>
                        </div>
                        <div
                            class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full bg-[#00B7FF] text-white items-center justify-center font-bold">
                            4</div>
                        <div
                            class="md:hidden w-12 h-12 rounded-full bg-[#00B7FF] text-white flex items-center justify-center font-bold mb-4">
                            4</div>
                        <div class="flex-1 md:pl-12 md:order-2">
                            <h3 class="text-xl font-semibold mb-2">Team Interviews</h3>
                            <p class="text-gray-600">Meet with potential team members and managers to assess technical
                                skills and team fit.</p>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="relative flex flex-col md:flex-row items-center">
                        <div class="flex-1 md:text-right md:pr-12 mb-4 md:mb-0">
                            <h3 class="text-xl font-semibold mb-2">Offer & Onboarding</h3>
                            <p class="text-gray-600">If selected, you'll receive an offer letter followed by a structured
                                onboarding program.</p>
                        </div>
                        <div
                            class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full bg-[#00B7FF] text-white items-center justify-center font-bold">
                            5</div>
                        <div
                            class="md:hidden w-12 h-12 rounded-full bg-[#00B7FF] text-white flex items-center justify-center font-bold mb-4">
                            5</div>
                        <div class="flex-1 md:pl-12">
                            <p class="text-gray-500">
                                <span class="font-semibold">Timeline:</span> 1 week<br>
                                <span class="font-semibold">What to expect:</span> Competitive offer, detailed role
                                description, and comprehensive onboarding.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Frequently Asked <span class="text-[#00B7FF]">Questions</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Answers to common questions about careers at Comestro</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h3 class="text-xl font-semibold mb-3">What is the work culture like at Comestro?</h3>
                    <p class="text-gray-600">
                        We foster a collaborative, innovative, and inclusive culture where everyone's ideas are valued. We
                        believe in work-life balance, continuous learning, and celebrating achievements together.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h3 class="text-xl font-semibold mb-3">What benefits do you offer?</h3>
                    <p class="text-gray-600">
                        Our comprehensive benefits include health insurance, retirement plans, flexible work arrangements,
                        professional development opportunities, paid time off, and performance bonuses.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h3 class="text-xl font-semibold mb-3">Do you offer remote work options?</h3>
                    <p class="text-gray-600">
                        Yes, we have flexible work options including hybrid and fully remote arrangements for many
                        positions. This varies by role and team requirements.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h3 class="text-xl font-semibold mb-3">What growth opportunities are available?</h3>
                    <p class="text-gray-600">
                        We encourage both vertical and horizontal career growth. We provide mentorship, training programs,
                        and clear advancement paths, with regular performance reviews to support your development.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h3 class="text-xl font-semibold mb-3">How long does the hiring process take?</h3>
                    <p class="text-gray-600">
                        Typically, our hiring process takes 3-5 weeks from application to offer, though this can vary based
                        on the role and hiring urgency. We aim to keep candidates informed at each stage.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h3 class="text-xl font-semibold mb-3">What technologies do you work with?</h3>
                    <p class="text-gray-600">
                        We use a modern tech stack including React, Node.js, Python, Java, AWS, Docker, and Kubernetes.
                        We're always evaluating and adopting new technologies that help us deliver better solutions.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-gradient-to-r from-[#00B7FF] to-[#0099CC] text-white">
        <div class="container mx-auto px-[10%] text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Take the Next Step?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Join our talented team and build a rewarding career solving challenging problems and creating innovative
                solutions.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#current-openings"
                    class="px-8 py-3 bg-white text-[#00B7FF] font-semibold rounded-full hover:shadow-lg transition duration-300">
                    View Open Positions
                </a>
                <a href="{{ route('contact') }}"
                    class="px-8 py-3 bg-transparent border-2 border-white text-white font-semibold rounded-full hover:bg-white hover:text-[#00B7FF] transition duration-300">
                    Contact Recruitment
                </a>
            </div>
        </div>
    </section>
@endsection