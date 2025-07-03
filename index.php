<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>R.S Admission Zone - Your Gateway to Academic Excellence</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com/3.4.16"></script>
<script>tailwind.config={theme:{extend:{colors:{primary:'#0a2463',secondary:'#ffb627'},borderRadius:{'none':'0px','sm':'4px',DEFAULT:'8px','md':'12px','lg':'16px','xl':'20px','2xl':'24px','3xl':'32px','full':'9999px','button':'8px'}}}}</script>
<style>
:where([class^="ri-"])::before { content: "\f3c2"; }
body {
font-family: 'Inter', sans-serif;
scroll-behavior: smooth;
}
.hero-bg {
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}
.floating {
animation: float 3s ease-in-out infinite;
}
@keyframes float {
0% { transform: translateY(0px); }
50% { transform: translateY(-10px); }
100% { transform: translateY(0px); }
}
.fade-in {
opacity: 0;
transform: translateY(20px);
transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}
.fade-in.visible {
opacity: 1;
transform: translateY(0);
}
.service-card:hover {
transform: translateY(-5px);
box-shadow: 0 10px 25px -5px rgba(10, 36, 99, 0.1);
}
.service-card {
transition: all 0.3s ease;
}
.testimonial-slider {
scroll-snap-type: x mandatory;
}
.testimonial-slide {
scroll-snap-align: start;
}
input:focus + label, textarea:focus + label, input:not(:placeholder-shown) + label, textarea:not(:placeholder-shown) + label {
transform: translateY(-20px) scale(0.8);
color: #0a2463;
}
.form-label {
transition: all 0.2s ease;
transform-origin: left top;
}
.custom-checkbox {
position: relative;
padding-left: 30px;
cursor: pointer;
}
.custom-checkbox input {
position: absolute;
opacity: 0;
cursor: pointer;
}
.checkmark {
position: absolute;
top: 0;
left: 0;
height: 20px;
width: 20px;
background-color: #fff;
border: 2px solid #0a2463;
border-radius: 4px;
}
.custom-checkbox input:checked ~ .checkmark:after {
content: "";
position: absolute;
display: block;
left: 6px;
top: 2px;
width: 5px;
height: 10px;
border: solid #0a2463;
border-width: 0 2px 2px 0;
transform: rotate(45deg);
}
.custom-switch {
position: relative;
display: inline-block;
width: 50px;
height: 24px;
}
.custom-switch input {
opacity: 0;
width: 0;
height: 0;
}
.slider {
position: absolute;
cursor: pointer;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: #ccc;
transition: .4s;
border-radius: 34px;
}
.slider:before {
position: absolute;
content: "";
height: 16px;
width: 16px;
left: 4px;
bottom: 4px;
background-color: white;
transition: .4s;
border-radius: 50%;
}
input:checked + .slider {
background-color: #0a2463;
}
input:checked + .slider:before {
transform: translateX(26px);
}
</style>
</head>
<body class="bg-white">
<!-- Navigation -->
<?php include 'navbar.php' ?>
<!-- Hero Section -->
<section id="home" class="pt-16 md:pt-20 hero-bg" style="background-image: url('https://readdy.ai/api/search-image?query=modern%20educational%20environment%20with%20soft%20gradient%20background%20on%20right%20side%20showing%20diverse%20students%20studying%20together%2C%20left%20side%20completely%20white%20for%20text%20overlay%2C%20professional%20photography%2C%20soft%20lighting%2C%20clean%20minimal%20style%2C%20perfect%20for%20website%20hero%20section&width=1920&height=1080&seq=hero1&orientation=landscape');">
<div class="container mx-auto px-4 md:px-8 w-full">
<div class="flex flex-col md:flex-row items-center min-h-[calc(100vh-5rem)]">
<div class="md:w-1/2 pt-16 md:pt-0 z-10">
<h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-primary leading-tight">Your Gateway to Academic Excellence</h1>
<p class="mt-4 md:mt-6 text-lg md:text-xl text-gray-600 max-w-xl">Expert guidance for your educational journey, helping you navigate admissions and achieve your academic goals.</p>
<div class="mt-8 md:mt-10 flex flex-col sm:flex-row gap-4">
<a href="#contact" class="bg-secondary text-primary px-8 py-3 rounded-button font-semibold hover:bg-opacity-90 transition-colors text-center whitespace-nowrap">Get Free Consultation</a>
<a href="#services" class="border-2 border-primary text-primary px-8 py-3 rounded-button font-semibold hover:bg-primary hover:text-white transition-colors text-center whitespace-nowrap">Our Services</a>
</div>
<div class="mt-12 flex items-center gap-6">
<div class="flex -space-x-2">
<img src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20young%20female%20education%20consultant%2C%20smiling%2C%20business%20attire%2C%20neutral%20background%2C%20high%20quality%20portrait&width=100&height=100&seq=person1&orientation=squarish" alt="Consultant" class="w-10 h-10 rounded-full border-2 border-white object-cover object-top">
<img src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20middle-aged%20male%20education%20consultant%2C%20smiling%2C%20business%20attire%2C%20neutral%20background%2C%20high%20quality%20portrait&width=100&height=100&seq=person2&orientation=squarish" alt="Consultant" class="w-10 h-10 rounded-full border-2 border-white object-cover object-top">
<img src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20young%20male%20education%20consultant%2C%20smiling%2C%20business%20attire%2C%20neutral%20background%2C%20high%20quality%20portrait&width=100&height=100&seq=person3&orientation=squarish" alt="Consultant" class="w-10 h-10 rounded-full border-2 border-white object-cover object-top">
</div>
<p class="text-sm text-gray-600">Join <span class="font-semibold text-primary">2,500+</span> students who achieved their academic dreams</p>
</div>
</div>
<div class="md:w-1/2 mt-12 md:mt-0">
<!-- Hero image is in the background -->
</div>
</div>
<div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 w-8 h-12 flex items-center justify-center cursor-pointer floating">
<a href="#about" class="text-primary">
<i class="ri-arrow-down-line ri-2x"></i>
</a>
</div>
</div>
</section>
<!-- About Us Section -->
<section id="about" class="py-20 md:py-28 bg-gray-50">
<div class="container mx-auto px-4 md:px-8">
<div class="text-center mb-16">
<h2 class="text-3xl md:text-4xl font-bold text-primary">About R.S Admission Zone</h2>
<div class="w-20 h-1 bg-secondary mx-auto mt-4"></div>
</div>
<div class="flex flex-col md:flex-row items-center gap-12 md:gap-16">
<div class="md:w-1/2 fade-in">
<img src="https://readdy.ai/api/search-image?query=professional%20education%20consultants%20in%20modern%20office%20environment%2C%20diverse%20team%20discussing%20with%20students%2C%20bright%20clean%20workspace%2C%20educational%20materials%20visible%2C%20professional%20photography%2C%20natural%20lighting&width=600&height=500&seq=about1&orientation=landscape" alt="Our Team" class="rounded-lg shadow-lg w-full h-auto object-cover object-top">
</div>
<div class="md:w-1/2 fade-in">
<h3 class="text-2xl md:text-3xl font-semibold text-primary mb-4">Your Trusted Education Partner Since 2010</h3>
<p class="text-gray-600 mb-6">At R.S Admission Zone, we believe every student deserves access to quality education that aligns with their aspirations and potential. Our team of experienced education consultants works tirelessly to guide students through the complex admission processes of top institutions worldwide.</p>
<div class="grid grid-cols-2 gap-6 mb-8">
<div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-sm">
<span class="text-3xl font-bold text-primary" id="students-count">0</span>
<span class="text-gray-600 text-sm">Students Assisted</span>
</div>
<div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-sm">
<span class="text-3xl font-bold text-primary" id="success-rate">0</span>
<span class="text-gray-600 text-sm">Success Rate</span>
</div>
<div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-sm">
<span class="text-3xl font-bold text-primary" id="universities-count">0</span>
<span class="text-gray-600 text-sm">Partner Universities</span>
</div>
<div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-sm">
<span class="text-3xl font-bold text-primary" id="countries-count">0</span>
<span class="text-gray-600 text-sm">Countries Covered</span>
</div>
</div>
<p class="text-gray-600 mb-6">Our mission is to empower students with personalized guidance, comprehensive resources, and unwavering support to help them navigate their educational journey with confidence and achieve their academic goals.</p>
<a href="#contact" class="inline-block bg-primary text-white px-6 py-3 rounded-button font-medium hover:bg-opacity-90 transition-colors whitespace-nowrap">Learn More About Us</a>
</div>
</div>
</div>
</section>
<!-- Services Section -->
<section id="services" class="py-20 md:py-28">
<div class="container mx-auto px-4 md:px-8">
<div class="text-center mb-16">
<h2 class="text-3xl md:text-4xl font-bold text-primary">Our Services</h2>
<p class="mt-4 text-gray-600 max-w-2xl mx-auto">Comprehensive educational consulting services tailored to meet your specific needs and goals.</p>
<div class="w-20 h-1 bg-secondary mx-auto mt-4"></div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Service 1 -->
<div class="service-card bg-white p-6 rounded-lg shadow-sm border border-gray-100 fade-in">
<div class="w-14 h-14 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mb-5">
<i class="ri-building-4-line ri-lg text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-primary mb-3">College Admission Guidance</h3>
<p class="text-gray-600 mb-4">Comprehensive support for applications to universities worldwide, including profile evaluation, university selection, and application strategy.</p>
<div class="w-10 h-1 bg-secondary transition-all duration-300 group-hover:w-20"></div>
</div>
<!-- Service 2 -->
<div class="service-card bg-white p-6 rounded-lg shadow-sm border border-gray-100 fade-in">
<div class="w-14 h-14 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mb-5">
<i class="ri-book-open-line ri-lg text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-primary mb-3">Test Preparation</h3>
<p class="text-gray-600 mb-4">Expert coaching for standardized tests including SAT, ACT, GRE, GMAT, TOEFL, and IELTS with personalized study plans and practice tests.</p>
<div class="w-10 h-1 bg-secondary transition-all duration-300 group-hover:w-20"></div>
</div>
<!-- Service 3 -->
<div class="service-card bg-white p-6 rounded-lg shadow-sm border border-gray-100 fade-in">
<div class="w-14 h-14 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mb-5">
<i class="ri-user-search-line ri-lg text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-primary mb-3">Career Counseling</h3>
<p class="text-gray-600 mb-4">Personalized career guidance to help students identify their strengths, interests, and suitable career paths aligned with their academic goals.</p>
<div class="w-10 h-1 bg-secondary transition-all duration-300 group-hover:w-20"></div>
</div>
<!-- Service 4 -->
<div class="service-card bg-white p-6 rounded-lg shadow-sm border border-gray-100 fade-in">
<div class="w-14 h-14 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mb-5">
<i class="ri-file-text-line ri-lg text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-primary mb-3">Essay & SOP Writing</h3>
<p class="text-gray-600 mb-4">Expert assistance with crafting compelling personal statements, essays, and statements of purpose that highlight your unique strengths and aspirations.</p>
<div class="w-10 h-1 bg-secondary transition-all duration-300 group-hover:w-20"></div>
</div>
<!-- Service 5 -->
<div class="service-card bg-white p-6 rounded-lg shadow-sm border border-gray-100 fade-in">
<div class="w-14 h-14 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mb-5">
<i class="ri-money-dollar-circle-line ri-lg text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-primary mb-3">Scholarship Assistance</h3>
<p class="text-gray-600 mb-4">Guidance on identifying and applying for scholarships, grants, and financial aid opportunities to make your education more affordable.</p>
<div class="w-10 h-1 bg-secondary transition-all duration-300 group-hover:w-20"></div>
</div>
<!-- Service 6 -->
<div class="service-card bg-white p-6 rounded-lg shadow-sm border border-gray-100 fade-in">
<div class="w-14 h-14 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mb-5">
<i class="ri-plane-line ri-lg text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-primary mb-3">Visa & Travel Support</h3>
<p class="text-gray-600 mb-4">Comprehensive assistance with student visa applications, pre-departure orientation, and travel arrangements for international students.</p>
<div class="w-10 h-1 bg-secondary transition-all duration-300 group-hover:w-20"></div>
</div>
</div>
<div class="text-center mt-12">
<a href="#contact" class="inline-block bg-primary text-white px-8 py-3 rounded-button font-medium hover:bg-opacity-90 transition-colors whitespace-nowrap">Schedule a Consultation</a>
</div>
</div>
</section>
<!-- Why Choose Us Section -->
<section id="why-us" class="py-20 md:py-28 bg-gray-50">
<div class="container mx-auto px-4 md:px-8">
<div class="text-center mb-16">
<h2 class="text-3xl md:text-4xl font-bold text-primary">Why Choose Us</h2>
<p class="mt-4 text-gray-600 max-w-2xl mx-auto">What sets R.S Admission Zone apart from other educational consultancies.</p>
<div class="w-20 h-1 bg-secondary mx-auto mt-4"></div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
<!-- Feature 1 -->
<div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 transition-all duration-300 hover:shadow-md fade-in">
<div class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mb-5 mx-auto">
<i class="ri-team-line ri-xl text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-primary mb-3 text-center">Expert Consultants</h3>
<p class="text-gray-600 text-center">Our team consists of experienced professionals with deep knowledge of admission processes across global institutions.</p>
</div>
<!-- Feature 2 -->
<div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 transition-all duration-300 hover:shadow-md fade-in">
<div class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mb-5 mx-auto">
<i class="ri-focus-3-line ri-xl text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-primary mb-3 text-center">Personalized Approach</h3>
<p class="text-gray-600 text-center">We create customized strategies tailored to each student's unique strengths, goals, and academic background.</p>
</div>
<!-- Feature 3 -->
<div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 transition-all duration-300 hover:shadow-md fade-in">
<div class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mb-5 mx-auto">
<i class="ri-global-line ri-xl text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-primary mb-3 text-center">Global Network</h3>
<p class="text-gray-600 text-center">Strong relationships with universities worldwide, providing insider knowledge and enhanced admission chances.</p>
</div>
<!-- Feature 4 -->
<div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 transition-all duration-300 hover:shadow-md fade-in">
<div class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mb-5 mx-auto">
<i class="ri-medal-line ri-xl text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-primary mb-3 text-center">Proven Results</h3>
<p class="text-gray-600 text-center">Our track record speaks for itself with a 95% success rate in helping students secure admissions to their target institutions.</p>
</div>
</div>
<div class="mt-20 bg-white rounded-lg shadow-md overflow-hidden fade-in">
<div class="flex flex-col md:flex-row">
<div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
<h3 class="text-2xl md:text-3xl font-semibold text-primary mb-6">Our Success by Numbers</h3>
<p class="text-gray-600 mb-8">We take pride in our achievements and the success of our students. Here's a glimpse of our impact in the education consulting industry.</p>
<div class="grid grid-cols-2 gap-6">
<div>
<p class="text-4xl font-bold text-primary" id="admission-rate">0%</p>
<p class="text-gray-600">Admission Success Rate</p>
</div>
<div>
<p class="text-4xl font-bold text-primary" id="scholarship-winners">0+</p>
<p class="text-gray-600">Scholarship Recipients</p>
</div>
<div>
<p class="text-4xl font-bold text-primary" id="top-universities">0+</p>
<p class="text-gray-600">Top 100 University Placements</p>
</div>
<div>
<p class="text-4xl font-bold text-primary" id="satisfaction-rate">0%</p>
<p class="text-gray-600">Client Satisfaction</p>
</div>
</div>
</div>
<div class="md:w-1/2">
<img src="https://readdy.ai/api/search-image?query=diverse%20group%20of%20happy%20students%20celebrating%20graduation%2C%20holding%20diplomas%2C%20wearing%20graduation%20caps%20and%20gowns%2C%20campus%20background%2C%20bright%20natural%20lighting%2C%20professional%20photography%2C%20joyful%20atmosphere&width=600&height=500&seq=success1&orientation=landscape" alt="Student Success" class="w-full h-full object-cover object-top">
</div>
</div>
</div>
</div>
</section>
<!-- Testimonials Section -->

<!-- Courses Section -->
<section id="courses" class="py-20 md:py-28">
<div class="container mx-auto px-4 md:px-8">
<div class="text-center mb-16">
<h2 class="text-3xl md:text-4xl font-bold text-primary">Our Academic Programs</h2>
<p class="mt-4 text-gray-600 max-w-2xl mx-auto">Explore our comprehensive range of academic programs designed to help you achieve your career goals.</p>
<div class="w-20 h-1 bg-secondary mx-auto mt-4"></div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Diploma Programs -->
<div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-md group">
<div class="h-48 overflow-hidden">
<img src="https://readdy.ai/api/search-image?query=modern%20technical%20education%20laboratory%20with%20students%20working%20on%20engineering%20projects%2C%20bright%20and%20professional%20setting%2C%20high-quality%20equipment&width=600&height=400&seq=diploma&orientation=landscape" alt="Diploma Programs" class="w-full h-full object-cover object-top transform group-hover:scale-105 transition-transform duration-300">
</div>
<div class="p-6">
<h3 class="text-xl font-semibold text-primary mb-3">Diploma Programs</h3>
<ul class="space-y-2 mb-4">
<li class="flex items-center text-gray-600"><i class="ri-checkbox-circle-line text-secondary mr-2"></i>Mechanical Engineering</li>
<li class="flex items-center text-gray-600"><i class="ri-checkbox-circle-line text-secondary mr-2"></i>Electrical Engineering</li>
<li class="flex items-center text-gray-600"><i class="ri-checkbox-circle-line text-secondary mr-2"></i>Civil Engineering</li>
<li class="flex items-center text-gray-600"><i class="ri-checkbox-circle-line text-secondary mr-2"></i>Computer Science</li>
</ul>
<p class="text-gray-600 mb-4">3-year programs with hands-on practical training and industry exposure.</p>
<a href="#contact" class="inline-block bg-primary text-white px-6 py-2 rounded-button font-medium hover:bg-opacity-90 transition-colors whitespace-nowrap">Learn More</a>
</div>
</div>
<!-- B.Tech Programs -->
<div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-md group">
<div class="h-48 overflow-hidden">
<img src="https://readdy.ai/api/search-image?query=modern%20engineering%20classroom%20with%20students%20working%20on%20advanced%20computer%20systems%20and%20robotics%2C%20professional%20academic%20setting&width=600&height=400&seq=btech&orientation=landscape" alt="B.Tech Programs" class="w-full h-full object-cover object-top transform group-hover:scale-105 transition-transform duration-300">
</div>
<div class="p-6">
<h3 class="text-xl font-semibold text-primary mb-3">B.Tech Programs</h3>
<ul class="space-y-2 mb-4">
<li class="flex items-center text-gray-600"><i class="ri-checkbox-circle-line text-secondary mr-2"></i>Computer Science & Engineering</li>
<li class="flex items-center text-gray-600"><i class="ri-checkbox-circle-line text-secondary mr-2"></i>Electronics & Communication</li>
<li class="flex items-center text-gray-600"><i class="ri-checkbox-circle-line text-secondary mr-2"></i>Mechanical Engineering</li>
<li class="flex items-center text-gray-600"><i class="ri-checkbox-circle-line text-secondary mr-2"></i>Information Technology</li>
</ul>
<p class="text-gray-600 mb-4">4-year undergraduate programs with cutting-edge curriculum and research opportunities.</p>
<a href="#contact" class="inline-block bg-primary text-white px-6 py-2 rounded-button font-medium hover:bg-opacity-90 transition-colors whitespace-nowrap">Learn More</a>
</div>
</div>
<!-- MBA/BBA Programs -->
<div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-md group">
<div class="h-48 overflow-hidden">
<img src="https://readdy.ai/api/search-image?query=modern%20business%20school%20classroom%20with%20students%20engaged%20in%20group%20discussion%2C%20professional%20corporate%20setting&width=600&height=400&seq=mba&orientation=landscape" alt="MBA/BBA Programs" class="w-full h-full object-cover object-top transform group-hover:scale-105 transition-transform duration-300">
</div>
<div class="p-6">
<h3 class="text-xl font-semibold text-primary mb-3">MBA/BBA Programs</h3>
<ul class="space-y-2 mb-4">
<li class="flex items-center text-gray-600"><i class="ri-checkbox-circle-line text-secondary mr-2"></i>Finance Management</li>
<li class="flex items-center text-gray-600"><i class="ri-checkbox-circle-line text-secondary mr-2"></i>Marketing Management</li>
<li class="flex items-center text-gray-600"><i class="ri-checkbox-circle-line text-secondary mr-2"></i>Human Resource Management</li>
<li class="flex items-center text-gray-600"><i class="ri-checkbox-circle-line text-secondary mr-2"></i>International Business</li>
</ul>
<p class="text-gray-600 mb-4">2-year postgraduate and 3-year undergraduate programs in business administration.</p>
<a href="#contact" class="inline-block bg-primary text-white px-6 py-2 rounded-button font-medium hover:bg-opacity-90 transition-colors whitespace-nowrap">Learn More</a>
</div>
</div>
<!-- BCA/MCA Programs -->
<div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-md group">
<div class="h-48 overflow-hidden">
<img src="https://readdy.ai/api/search-image?query=modern%20computer%20lab%20with%20students%20working%20on%20programming%20and%20software%20development%2C%20professional%20IT%20setting&width=600&height=400&seq=bca&orientation=landscape" alt="BCA/MCA Programs" class="w-full h-full object-cover object-top transform group-hover:scale-105 transition-transform duration-300">
</div>
<div class="p-6">
<h3 class="text-xl font-semibold text-primary mb-3">BCA/MCA Programs</h3>
<ul class="space-y-2 mb-4">
<li class="flex items-center text-gray-600"><i class="ri-checkbox-circle-line text-secondary mr-2"></i>Software Development</li>
<li class="flex items-center text-gray-600"><i class="ri-checkbox-circle-line text-secondary mr-2"></i>Web Technologies</li>
<li class="flex items-center text-gray-600"><i class="ri-checkbox-circle-line text-secondary mr-2"></i>Database Management</li>
<li class="flex items-center text-gray-600"><i class="ri-checkbox-circle-line text-secondary mr-2"></i>Mobile Application Development</li>
</ul>
<p class="text-gray-600 mb-4">3-year undergraduate and 2-year postgraduate programs in computer applications.</p>
<a href="#contact" class="inline-block bg-primary text-white px-6 py-2 rounded-button font-medium hover:bg-opacity-90 transition-colors whitespace-nowrap">Learn More</a>
</div>
</div>
<!-- Nursing Programs -->
<div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-md group">
<div class="h-48 overflow-hidden">
<img src="https://readdy.ai/api/search-image?query=modern%20nursing%20simulation%20lab%20with%20students%20practicing%20patient%20care%2C%20professional%20healthcare%20setting&width=600&height=400&seq=nursing&orientation=landscape" alt="Nursing Programs" class="w-full h-full object-cover object-top transform group-hover:scale-105 transition-transform duration-300">
</div>
<div class="p-6">
<h3 class="text-xl font-semibold text-primary mb-3">Nursing Programs</h3>
<ul class="space-y-2 mb-4">
<li class="flex items-center text-gray-600"><i class="ri-checkbox-circle-line text-secondary mr-2"></i>B.Sc. Nursing</li>
<li class="flex items-center text-gray-600"><i class="ri-checkbox-circle-line text-secondary mr-2"></i>Post Basic B.Sc. Nursing</li>
<li class="flex items-center text-gray-600"><i class="ri-checkbox-circle-line text-secondary mr-2"></i>M.Sc. Nursing</li>
<li class="flex items-center text-gray-600"><i class="ri-checkbox-circle-line text-secondary mr-2"></i>Nursing Certification Courses</li>
</ul>
<p class="text-gray-600 mb-4">Comprehensive nursing education programs with clinical training and healthcare expertise.</p>
<a href="#contact" class="inline-block bg-primary text-white px-6 py-2 rounded-button font-medium hover:bg-opacity-90 transition-colors whitespace-nowrap">Learn More</a>
</div>
</div>
</div>

</div>
</section>
<!-- Contact Section -->
<section id="contact" class="py-20 md:py-28 bg-gray-50">
<div class="container mx-auto px-4 md:px-8">
<div class="text-center mb-16">
<h2 class="text-3xl md:text-4xl font-bold text-primary">Contact Us</h2>
<p class="mt-4 text-gray-600 max-w-2xl mx-auto">Have questions or ready to start your educational journey? Get in touch with our expert consultants.</p>
<div class="w-20 h-1 bg-secondary mx-auto mt-4"></div>
</div>
<div class="flex flex-col lg:flex-row gap-12 fade-in">
<div class="lg:w-1/2">
<div class="bg-white rounded-lg shadow-sm p-8">
<h3 class="text-2xl font-semibold text-primary mb-6">Get in Touch</h3>
<form id="contact-form">
<div class="mb-6 relative">
<input type="text" id="name" placeholder=" " class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:border-primary bg-white">
<label for="name" class="form-label absolute text-gray-500 left-4 top-3 pointer-events-none">Full Name</label>
</div>
<div class="mb-6 relative">
<input type="email" id="email" placeholder=" " class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:border-primary bg-white">
<label for="email" class="form-label absolute text-gray-500 left-4 top-3 pointer-events-none">Email Address</label>
</div>
<div class="mb-6 relative">
<input type="tel" id="phone" placeholder=" " class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:border-primary bg-white">
<label for="phone" class="form-label absolute text-gray-500 left-4 top-3 pointer-events-none">Phone Number</label>
</div>
<div class="mb-6">
<div class="relative">

<div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none">
<i class="ri-arrow-down-s-line text-gray-500"></i>
</div>
</div>
</div>
<div class="mb-6 relative">
<textarea id="message" rows="4" placeholder=" " class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:border-primary bg-white"></textarea>
<label for="message" class="form-label absolute text-gray-500 left-4 top-3 pointer-events-none">Your Message</label>
</div>
<div class="mb-6">
<label class="custom-checkbox">
<input type="checkbox" id="consent">
<span class="checkmark"></span>
<span class="ml-2 text-gray-600">I agree to receive communications from R.S Admission Zone</span>
</label>
</div>
<button type="submit" class="w-full bg-secondary text-primary px-6 py-3 rounded-button font-semibold hover:bg-opacity-90 transition-colors whitespace-nowrap">Submit Request</button>
</form>
</div>
</div>
<div class="lg:w-1/2">
<div class="bg-white rounded-lg shadow-sm p-8 mb-8">
<h3 class="text-2xl font-semibold text-primary mb-6">Contact Information</h3>
<div class="space-y-6">
<div class="flex items-start">
<div class="w-10 h-10 bg-primary bg-opacity-10 rounded-full flex items-center justify-center flex-shrink-0">
<i class="ri-map-pin-line text-primary"></i>
</div>
<div class="ml-4">
<h4 class="font-semibold text-gray-800">Our Office</h4>
<p class="text-gray-600">
402, Siddheshwar Palace 10, Mill Rd,<br>Nawada, Ara, India 802301</p>
</div>
</div>
<div class="flex items-start">
<div class="w-10 h-10 bg-primary bg-opacity-10 rounded-full flex items-center justify-center flex-shrink-0">
<i class="ri-phone-line text-primary"></i>
</div>
<div class="ml-4">
<h4 class="font-semibold text-gray-800">Phone</h4>
<p class="text-gray-600">+91 6201879696</p>
<!-- <p class="text-gray-600">+1 (555) 987-6543</p> -->
</div>
</div>
<div class="flex items-start">
<div class="w-10 h-10 bg-primary bg-opacity-10 rounded-full flex items-center justify-center flex-shrink-0">
<i class="ri-mail-line text-primary"></i>
</div>
<div class="ml-4">
<h4 class="font-semibold text-gray-800">Email</h4>
<p class="text-gray-600">rsadmissionzone@gmail.com</p>
<!-- <p class="text-gray-600">support@Rsadmissionzone.com</p> -->
</div>
</div>
<div class="flex items-start">
<div class="w-10 h-10 bg-primary bg-opacity-10 rounded-full flex items-center justify-center flex-shrink-0">
<i class="ri-time-line text-primary"></i>
</div>
<div class="ml-4">
<h4 class="font-semibold text-gray-800">Office Hours</h4>
<p class="text-gray-600">Monday - Friday: 9:00 AM - 6:00 PM</p>
<p class="text-gray-600">Saturday: 10:00 AM - 2:00 PM</p>
<p class="text-gray-600">Sunday: Closed</p>
</div>
</div>
</div>
<div class="mt-8">
<h4 class="font-semibold text-gray-800 mb-4">Connect With Us</h4>
<div class="flex space-x-4">
<a href="https://www.facebook.com/share/1ZCJopT97E/" class="w-10 h-10 bg-primary bg-opacity-10 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition-colors">
<i class="ri-facebook-fill"></i>
</a>

<a href="https://www.instagram.com/rsadmissionzone?igsh=MXN3YjM3c2Y5NmZzag==" class="w-10 h-10 bg-primary bg-opacity-10 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition-colors">
<i class="ri-instagram-line"></i>
</a>

<a href="https://youtube.com/@rsadmissionzone?si=STzxrHUnSXXKwWSJ" class="w-10 h-10 bg-primary bg-opacity-10 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition-colors">
<i class="ri-youtube-fill"></i>
</a>
</div>
</div>
</div>

</div>
</div>
</div>
</section>
<!-- Footer -->
<?php include 'footer.php' ?>
<!-- Back to Top Button -->
<button id="back-to-top" class="fixed bottom-6 right-6 w-12 h-12 bg-primary text-white rounded-full shadow-lg flex items-center justify-center opacity-0 invisible transition-all duration-300 hover:bg-opacity-90">
<i class="ri-arrow-up-line ri-lg"></i>
</button>
<!-- Success Message Modal -->
<div id="success-modal" class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50 opacity-0 invisible transition-opacity duration-300">
<div class="bg-white rounded-lg shadow-xl p-8 max-w-md mx-4 transform scale-95 transition-transform duration-300">
<div class="text-center">
<div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
<i class="ri-check-line ri-2x text-green-500"></i>
</div>
<h3 class="text-2xl font-semibold text-gray-800 mb-2">Message Sent Successfully!</h3>
<p class="text-gray-600 mb-6">Thank you for contacting us. One of our consultants will get back to you shortly.</p>
<button id="close-modal" class="bg-primary text-white px-6 py-2 rounded-button font-medium hover:bg-opacity-90 transition-colors whitespace-nowrap">Close</button>
</div>
</div>
</div>
<!-- Scripts -->

<script id="animation-script">
document.addEventListener('DOMContentLoaded', function() {
// Fade in elements on scroll
const fadeElements = document.querySelectorAll('.fade-in');
const fadeInObserver = new IntersectionObserver((entries) => {
entries.forEach(entry => {
if (entry.isIntersecting) {
entry.target.classList.add('visible');
fadeInObserver.unobserve(entry.target);
}
});
}, {
threshold: 0.1
});
fadeElements.forEach(element => {
fadeInObserver.observe(element);
});
// Counter animation
function animateCounter(element, target, duration) {
let start = 0;
const increment = target / (duration / 16);
function updateCount() {
start += increment;
if (start >= target) {
element.textContent = target.toString().includes('%') ? target : target.toLocaleString();
} else {
element.textContent = Math.floor(start).toLocaleString();
requestAnimationFrame(updateCount);
}
}
updateCount();
}
const counterObserver = new IntersectionObserver((entries) => {
entries.forEach(entry => {
if (entry.isIntersecting) {
const element = entry.target;
let target;
switch(element.id) {
case 'students-count':
target = 5000;
break;
case 'success-rate':
target = 95;
element.textContent = target + '%';
break;
case 'universities-count':
target = 250;
break;
case 'countries-count':
target = 30;
break;
case 'admission-rate':
target = 95;
element.textContent = target + '%';
break;
case 'scholarship-winners':
target = 2500;
element.textContent = target + '+';
break;
case 'top-universities':
target = 150;
element.textContent = target + '+';
break;
case 'satisfaction-rate':
target = 98;
element.textContent = target + '%';
break;
}
animateCounter(element, target, 2000);
counterObserver.unobserve(element);
}
});
}, {
threshold: 0.5
});
document.querySelectorAll('[id$="-count"], [id$="-rate"], [id$="-winners"], [id$="-universities"]').forEach(counter => {
counterObserver.observe(counter);
});
// Back to top button
const backToTopButton = document.getElementById('back-to-top');
window.addEventListener('scroll', function() {
if (window.scrollY > 500) {
backToTopButton.classList.remove('opacity-0', 'invisible');
backToTopButton.classList.add('opacity-100', 'visible');
} else {
backToTopButton.classList.remove('opacity-100', 'visible');
backToTopButton.classList.add('opacity-0', 'invisible');
}
});
backToTopButton.addEventListener('click', function() {
window.scrollTo({
top: 0,
behavior: 'smooth'
});
});
});
</script>
<script id="testimonial-slider-script">
document.addEventListener('DOMContentLoaded', function() {
const slider = document.getElementById('testimonial-slider');
const slides = document.querySelectorAll('.testimonial-slide');
const dots = document.querySelectorAll('.testimonial-dot');
const prevButton = document.getElementById('prev-testimonial');
const nextButton = document.getElementById('next-testimonial');
let currentIndex = 0;
const slideWidth = slides[0].offsetWidth;
const slidesPerView = window.innerWidth < 768 ? 1 : 3;
function updateSlider() {
const offset = -currentIndex * (slideWidth + 24); // 24px is the gap
slider.style.transform = `translateX(${offset}px)`;
slider.style.transition = 'transform 0.3s ease-in-out';
// Update dots
dots.forEach((dot, index) => {
if (index === currentIndex) {
dot.classList.remove('opacity-40');
dot.classList.add('opacity-100');
} else {
dot.classList.remove('opacity-100');
dot.classList.add('opacity-40');
}
});
// Enable/disable prev/next buttons
prevButton.style.opacity = currentIndex === 0 ? '0.5' : '1';
nextButton.style.opacity = currentIndex >= slides.length - slidesPerView ? '0.5' : '1';
}
// Initialize slider
updateSlider();
// Event listeners for prev/next buttons
prevButton.addEventListener('click', function() {
if (currentIndex > 0) {
currentIndex--;
updateSlider();
}
});
nextButton.addEventListener('click', function() {
if (currentIndex < slides.length - slidesPerView) {
currentIndex++;
updateSlider();
}
});
// Event listeners for dots
dots.forEach((dot, index) => {
dot.addEventListener('click', function() {
currentIndex = index;
updateSlider();
});
});
// Auto slide every 5 seconds
let autoSlideInterval = setInterval(function() {
if (currentIndex < slides.length - slidesPerView) {
currentIndex++;
} else {
currentIndex = 0;
}
updateSlider();
}, 5000);
// Pause auto slide on hover
slider.addEventListener('mouseenter', function() {
clearInterval(autoSlideInterval);
});
slider.addEventListener('mouseleave', function() {
autoSlideInterval = setInterval(function() {
if (currentIndex < slides.length - slidesPerView) {
currentIndex++;
} else {
currentIndex = 0;
}
updateSlider();
}, 5000);
});
// Handle touch events for mobile
let touchStartX = 0;
let touchEndX = 0;
slider.addEventListener('touchstart', function(e) {
touchStartX = e.changedTouches[0].screenX;
});
slider.addEventListener('touchend', function(e) {
touchEndX = e.changedTouches[0].screenX;
handleSwipe();
});
function handleSwipe() {
const swipeThreshold = 50;
if (touchEndX < touchStartX - swipeThreshold) {
// Swipe left
if (currentIndex < slides.length - slidesPerView) {
currentIndex++;
updateSlider();
}
} else if (touchEndX > touchStartX + swipeThreshold) {
// Swipe right
if (currentIndex > 0) {
currentIndex--;
updateSlider();
}
}
}
// Update slider on window resize
window.addEventListener('resize', function() {
const newSlidesPerView = window.innerWidth < 768 ? 1 : 3;
if (newSlidesPerView !== slidesPerView) {
// Reset slider position
currentIndex = 0;
updateSlider();
}
});
});
</script>
<script id="contact-form-script">
document.addEventListener('DOMContentLoaded', function() {
const contactForm = document.getElementById('contact-form');
const successModal = document.getElementById('success-modal');
const closeModalButton = document.getElementById('close-modal');
contactForm.addEventListener('submit', function(e) {
e.preventDefault();
// Simulate form submission (would be replaced with actual AJAX call)
setTimeout(function() {
// Show success modal
successModal.classList.remove('opacity-0', 'invisible');
successModal.classList.add('opacity-100', 'visible');
successModal.querySelector('div').classList.remove('scale-95');
successModal.querySelector('div').classList.add('scale-100');
// Reset form
contactForm.reset();
}, 1000);
});
closeModalButton.addEventListener('click', function() {
successModal.classList.remove('opacity-100', 'visible');
successModal.classList.add('opacity-0', 'invisible');
successModal.querySelector('div').classList.remove('scale-100');
successModal.querySelector('div').classList.add('scale-95');
});
// Close modal when clicking outside
successModal.addEventListener('click', function(e) {
if (e.target === successModal) {
successModal.classList.remove('opacity-100', 'visible');
successModal.classList.add('opacity-0', 'invisible');
successModal.querySelector('div').classList.remove('scale-100');
successModal.querySelector('div').classList.add('scale-95');
}
});
});
</script>
</body>
</html>