<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>B.Tech Courses for a Brighter Future</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: { primary: "#1a237e", secondary: "#ffd700" },
            borderRadius: {
              none: "0px",
              sm: "4px",
              DEFAULT: "8px",
              md: "12px",
              lg: "16px",
              xl: "20px",
              "2xl": "24px",
              "3xl": "32px",
              full: "9999px",
              button: "8px",
            },
          },
        },
      };
    </script>
    <style>
      :where([class^="ri-"])::before { content: "\f3c2"; }
      body {
          font-family: 'Poppins', sans-serif;
          scroll-behavior: smooth;
      }
      .hero-bg {
          background-image: url('https://readdy.ai/api/search-image?query=modern%20educational%20environment%20with%20students%20studying%20in%20a%20bright%2C%20airy%20space%20with%20soft%20lighting%2C%20minimalist%20furniture%2C%20technology%20integration%2C%20and%20educational%20materials.%20The%20scene%20should%20have%20a%20clean%20white%20background%20on%20the%20left%20side%20transitioning%20naturally%20to%20educational%20elements%20on%20the%20right.%20Professional%20atmosphere%20with%20subtle%20educational%20icons%20and%20symbols.&width=1600&height=800&seq=hero1&orientation=landscape');
          background-size: cover;
          background-position: center;
      }
      .timeline-connector {
          height: 2px;
          background-color: #e5e7eb;
          flex-grow: 1;
          margin: 0 8px;
      }
      .timeline-step {
          position: relative;
          z-index: 1;
      }
      input[type="number"]::-webkit-inner-spin-button,
      input[type="number"]::-webkit-outer-spin-button {
          -webkit-appearance: none;
          margin: 0;
      }
      input[type="number"] {
          -moz-appearance: textfield;
      }
      .benefit-card:hover {
          transform: translateY(-5px);
          box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
      }
      .course-card:hover {
          transform: scale(1.02);
      }
      @media (max-width: 768px) {
          .timeline-container {
              flex-direction: column;
          }
          .timeline-connector {
              width: 2px;
              height: 40px;
              margin: 8px 0;
          }
      }
    </style>
  </head>
  <body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
      <div
        class="container mx-auto px-4 py-3 flex items-center justify-between"
      >
        <a href="#" class="text-2xl font-['Pacifico'] text-primary">logo</a>
        <div class="hidden md:flex items-center space-x-8">
          <a
            href="#about"
            class="text-gray-700 hover:text-primary transition-colors"
            >About</a
          >
          <a
            href="#courses"
            class="text-gray-700 hover:text-primary transition-colors"
            >Courses</a
          >
          <a
            href="#eligibility"
            class="text-gray-700 hover:text-primary transition-colors"
            >Eligibility</a
          >
          <a
            href="#process"
            class="text-gray-700 hover:text-primary transition-colors"
            >Process</a
          >
          <a
            href="#contact"
            class="text-gray-700 hover:text-primary transition-colors"
            >Contact</a
          >
        </div>
        <button
          class="md:hidden w-10 h-10 flex items-center justify-center text-gray-700"
        >
          <i class="ri-menu-line text-xl"></i>
        </button>
        <a
          href="#contact"
          class="hidden md:block bg-primary text-white px-6 py-2 !rounded-button whitespace-nowrap hover:bg-opacity-90 transition-colors"
          >Get Started</a
        >
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg relative">
      <div
        class="absolute inset-0 bg-gradient-to-r from-white via-white/90 to-white/20"
      ></div>
      <div class="container mx-auto px-4 py-20 md:py-32 relative">
        <div class="max-w-xl" data-aos="fade-right" data-aos-duration="1000">
          <h1 class="text-4xl md:text-5xl font-bold text-primary mb-6">
            B.Tech Courses for a Brighter Future
          </h1>
          <p class="text-gray-700 text-lg mb-8">
            Unlock your potential with our industry-recognized B.Tech programs
            designed to equip you with practical skills and knowledge for
            today's competitive job market.
          </p>
          <div class="flex flex-wrap gap-4">
            <a
              href="#courses"
              class="bg-primary text-white px-6 py-3 !rounded-button whitespace-nowrap hover:bg-opacity-90 transition-colors"
              >Explore Courses</a
            >
            <a
              href="#contact"
              class="bg-white border-2 border-primary text-primary px-6 py-3 !rounded-button whitespace-nowrap hover:bg-gray-50 transition-colors"
              >Contact Us</a
            >
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
  

    <!-- Benefits Section -->
   

    <!-- Courses Section -->
    <section id="courses" class="py-20 bg-white">
      <div class="container mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
          <h2 class="text-3xl font-bold text-primary mb-4">
             B.Tech Courses Offered
          </h2>
          <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
          <p class="text-gray-700 max-w-2xl mx-auto">
            Explore our comprehensive range of B.Tech programs designed to meet
            industry demands and launch successful careers.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div
            class="course-card bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="h-48 overflow-hidden">
              <img
                src="https://readdy.ai/api/search-image?query=pharmacy%20laboratory%20with%20medications%2C%20prescriptions%2C%20and%20pharmaceutical%20equipment%20in%20a%20clean%2C%20professional%20environment%20with%20white%20coats%20and%20modern%20technology%20for%20pharmaceutical%20education&width=400&height=250&seq=course1&orientation=landscape"
                alt="B.Tech in Pharmacy"
                class="w-full h-full object-cover"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-800 mb-2">
                Mechanical Engineering
              </h3>
              <p class="text-gray-600 mb-4">
               Mechanical Engineering is a diverse and dynamic branch of engineering that focuses on the design, development, and maintenance of mechanical systems. It combines principles of physics, mathematics, and materials science to create innovative solutions in areas such as energy, manufacturing, robotics, and transportation. Mechanical engineers analyze problems, design mechanical devices, and oversee the manufacturing process to ensure functionality and efficiency. Their work is essential in industries ranging from automotive and aerospace to power generation and biomedical devices. With a strong foundation in engineering fundamentals, mechanical engineers play a crucial role in advancing technology and improving the quality of everyday life.

 </p>
            
            </div>
          </div>

          <div
            class="course-card bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="h-48 overflow-hidden">
              <img
                src="https://readdy.ai/api/search-image?query=medical%20laboratory%20with%20microscopes%2C%20test%20tubes%2C%20blood%20samples%2C%20and%20modern%20diagnostic%20equipment%20in%20a%20clean%20clinical%20setting%20with%20technicians%20in%20lab%20coats%20performing%20tests&width=400&height=250&seq=course2&orientation=landscape"
                alt="B.Tech in Medical Laboratory Technology"
                class="w-full h-full object-cover"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-800 mb-2">
                Civil Engineering
              </h3>
              <p class="text-gray-600 mb-4">
              Civil Engineering is one of the oldest and most essential branches of engineering, focused on the planning, design, construction, and maintenance of infrastructure and public works. This includes roads, bridges, buildings, dams, airports, water supply systems, and more. Civil engineers apply principles of physics, mathematics, and geology to solve real-world problems and ensure structures are safe, durable, and environmentally sustainable. Their work plays a vital role in shaping the modern world and supporting communities. With a blend of technical skill and creativity, civil engineers contribute to the development of resilient cities and essential infrastructure for societal growth and progress.

 </p>
              
            </div>
          </div>

          <div
            class="course-card bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <div class="h-48 overflow-hidden">
              <img
                src="https://readdy.ai/api/search-image?query=engineering%20workshop%20with%20students%20working%20on%20mechanical%20projects%2C%20CAD%20designs%2C%20electronic%20circuits%2C%20and%20engineering%20tools%20in%20a%20modern%20technical%20education%20facility%20with%20computers%20and%20machinery&width=400&height=250&seq=course3&orientation=landscape"
                alt="B.Tech in Engineering"
                class="w-full h-full object-cover"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-800 mb-2">
                Information Technology Engineering

              </h3>
              <p class="text-gray-600 mb-4">
                Information Technology (IT) Engineering focuses on the design, development, implementation, and management of computer-based information systems. It combines principles of software engineering, networking, cybersecurity, and data management to solve complex technological problems. IT engineers work with both hardware and software to create systems that store, process, and transmit data efficiently and securely. They play a key role in developing applications, managing databases, maintaining networks, and ensuring cybersecurity. IT engineering is critical in today’s digital world, powering industries such as finance, healthcare, education, and entertainment. With constant innovation, IT engineers drive digital transformation and connect the world through technology.



              </p>
              
            </div>
          </div>

          <div
            class="course-card bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <div class="h-48 overflow-hidden">
              <img
                src="https://readdy.ai/api/search-image?query=nursing%20training%20environment%20with%20students%20practicing%20patient%20care%20on%20mannequins%2C%20monitoring%20vital%20signs%2C%20and%20learning%20medical%20procedures%20in%20a%20hospital-like%20setting%20with%20medical%20equipment%20and%20beds&width=400&height=250&seq=course4&orientation=landscape"
                alt="B.Tech in Nursing"
                class="w-full h-full object-cover"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-800 mb-2">
                Computer Science Engineering

              </h3>
              <p class="text-gray-600 mb-4">
              Computer Science Engineering (CSE) is a discipline that combines the principles of computer science and engineering to design, develop, and optimize computer systems and software. It involves programming, algorithms, data structures, artificial intelligence, machine learning, databases, and computer networks. CSE engineers build everything from operating systems and mobile apps to cloud platforms and cybersecurity solutions. They solve complex computational problems and innovate technologies that power modern digital life. With applications across all industries, from healthcare to finance, computer science engineers are at the forefront of technological advancement, shaping the future through smart, efficient, and scalable computing solutions.


              </p>
             
            </div>
          </div>

          <div
            class="course-card bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300"
            data-aos="fade-up"
            data-aos-delay="500"
          >
            <div class="h-48 overflow-hidden">
              <img
                src="https://readdy.ai/api/search-image?query=hotel%20management%20training%20facility%20with%20reception%20desk%2C%20dining%20area%2C%20kitchen%2C%20and%20housekeeping%20section%20where%20students%20learn%20hospitality%20skills%20in%20a%20professional%20environment%20with%20instructors&width=400&height=250&seq=course5&orientation=landscape"
                alt="B.Tech in Hotel Management"
                class="w-full h-full object-cover"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-800 mb-2">
                Electrical & Electronics Engineering

              </h3>
              <p class="text-gray-600 mb-4">
           Electrical and Electronics Engineering (EEE) is a core branch of engineering that deals with the study and application of electricity, electronics, and electromagnetism. It covers a wide range of topics including electric circuits, control systems, power generation and distribution, analog and digital electronics, embedded systems, and communication technologies. EEE engineers design and develop electrical equipment, electronic devices, and systems used in industries, homes, and modern infrastructure. Their work supports everything from power grids and renewable energy systems to smart devices and automation. With rapid advancements in technology, EEE plays a vital role in driving innovation and improving everyday life.



              </p>
            
            </div>
          </div>

        
        </div>
     
      </div>
    </section>

 
   




    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
      <div class="container mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
          <h2 class="text-3xl font-bold text-primary mb-4">
            Frequently Asked Questions
          </h2>
          <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
          <p class="text-gray-700 max-w-2xl mx-auto">
            Find answers to common questions about our B.Tech courses and
            admission process.
          </p>
        </div>

        <div class="max-w-3xl mx-auto" data-aos="fade-up">
          <div class="mb-4">
            <button
              class="faq-toggle w-full bg-white p-4 rounded-lg shadow-sm flex justify-between items-center"
            >
              <span class="font-medium text-gray-800"
                >What is B.Tech?</span
              >
              <i
                class="ri-arrow-down-s-line text-primary transition-transform"
              ></i>
            </button>
            <div class="faq-content bg-white px-4 pb-4 rounded-b-lg hidden">
              <p class="text-gray-600">
              B.Tech (Bachelor of Technology) is a 4-year undergraduate engineering program that focuses on practical and theoretical knowledge in various fields like Computer Science, Mechanical, Civil, Electrical, Electronics, and more.

 </p>
            </div>
          </div>

          <div class="mb-4">
            <button
              class="faq-toggle w-full bg-white p-4 rounded-lg shadow-sm flex justify-between items-center"
            >
              <span class="font-medium text-gray-800"
                >What are the top specializations in B.Tech?
</span
              >
              <i
                class="ri-arrow-down-s-line text-primary transition-transform"
              ></i>
            </button>
            <div class="faq-content bg-white px-4 pb-4 rounded-b-lg hidden">
              <p class="text-gray-600">
               Popular branches include Computer Science, Information Technology, Mechanical, Civil, Electronics & Communication, and Electrical Engineering.

 </p>
            </div>
          </div>

          <div class="mb-4">
            <button
              class="faq-toggle w-full bg-white p-4 rounded-lg shadow-sm flex justify-between items-center"
            >
              <span class="font-medium text-gray-800"
                >Does B.Tech offer placement opportunities</span
              >
              <i
                class="ri-arrow-down-s-line text-primary transition-transform"
              ></i>
            </button>
            <div class="faq-content bg-white px-4 pb-4 rounded-b-lg hidden">
              <p class="text-gray-600">
              Yes! Many engineering colleges offer campus placements, and consultancies like R.S Admission also assist with placement support and career guidance.

  </p>
            </div>
          </div>

          <div class="mb-4">
            <button
              class="faq-toggle w-full bg-white p-4 rounded-lg shadow-sm flex justify-between items-center"
            >
              <span class="font-medium text-gray-800"
                >Can you help me choose the right college/course?</span
              >
              <i
                class="ri-arrow-down-s-line text-primary transition-transform"
              ></i>
            </button>
            <div class="faq-content bg-white px-4 pb-4 rounded-b-lg hidden">
              <p class="text-gray-600">
               Absolutely! We offer career counseling and college selection support based on your marks, budget, and location preference.
              </p>
            </div>
          </div>

          <div class="mb-4">
            <button
              class="faq-toggle w-full bg-white p-4 rounded-lg shadow-sm flex justify-between items-center"
            >
              <span class="font-medium text-gray-800"
                >Do you help with the Bihar Student Credit Card application?</span
              >
              <i
                class="ri-arrow-down-s-line text-primary transition-transform"
              ></i>
            </button>
            <div class="faq-content bg-white px-4 pb-4 rounded-b-lg hidden">
              <p class="text-gray-600">
             Yes! We provide complete guidance and document support for applying to the Bihar Student Credit Card Yojana.
  </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <!-- <section id="contact" class="py-20 bg-white">
      <div class="container mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
          <h2 class="text-3xl font-bold text-primary mb-4">Get In Touch</h2>
          <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
          <p class="text-gray-700 max-w-2xl mx-auto">
            Have questions about our B.Tech courses? Our education counselors
            are here to help you make the right choice for your future.
          </p>
        </div>

        <div class="flex flex-col md:flex-row gap-12">
          <div class="md:w-1/2" data-aos="fade-right">
            <form class="bg-white p-8 rounded-lg shadow-md">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                  <label for="name" class="block text-gray-700 mb-2"
                    >Full Name</label
                  >
                  <input
                    type="text"
                    id="name"
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary/50"
                    placeholder="Your name"
                  />
                </div>
                <div>
                  <label for="email" class="block text-gray-700 mb-2"
                    >Email Address</label
                  >
                  <input
                    type="email"
                    id="email"
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary/50"
                    placeholder="Your email"
                  />
                </div>
              </div>
              <div class="mb-6">
                <label for="phone" class="block text-gray-700 mb-2"
                  >Phone Number</label
                >
                <input
                  type="tel"
                  id="phone"
                  class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary/50"
                  placeholder="Your phone number"
                />
              </div>
              <div class="mb-6">
                <label for="course" class="block text-gray-700 mb-2"
                  >Interested Course</label
                >
                <div class="relative">
                  <select
                    id="course"
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary/50 appearance-none pr-8"
                  >
                    <option value="" selected disabled>Select a course</option>
                    <option value="dpharm">
                      B.Tech in Pharmacy (D.Pharm)
                    </option>
                    <option value="dmlt">
                      B.Tech in Medical Laboratory Technology (DMLT)
                    </option>
                    <option value="engineering">B.Tech in Engineering</option>
                    <option value="nursing">B.Tech in Nursing (GNM)</option>
                    <option value="hotel">B.Tech in Hotel Management</option>
                    <option value="dca">
                      B.Tech in Computer Applications (DCA)
                    </option>
                    <option value="other">Other</option>
                  </select>
                  <div
                    class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none"
                  >
                    <i class="ri-arrow-down-s-line text-gray-500"></i>
                  </div>
                </div>
              </div>
              <div class="mb-6">
                <label for="message" class="block text-gray-700 mb-2"
                  >Message (Optional)</label
                >
                <textarea
                  id="message"
                  rows="4"
                  class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary/50"
                  placeholder="Your questions or requirements"
                ></textarea>
              </div>
              <button
                type="submit"
                class="w-full bg-primary text-white py-3 !rounded-button whitespace-nowrap hover:bg-opacity-90 transition-colors"
              >
                Submit Inquiry
              </button>
            </form>
          </div>

          <div class="md:w-1/2" data-aos="fade-left">
            <div class="bg-white p-8 rounded-lg shadow-md h-full">
              <h3 class="text-2xl font-semibold text-primary mb-6">
                Contact Information
              </h3>

              <div class="space-y-6">
                <div class="flex items-start">
                  <div
                    class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center mr-4"
                  >
                    <i class="ri-map-pin-line text-primary"></i>
                  </div>
                  <div>
                    <h4 class="font-medium text-gray-800 mb-1">Our Location</h4>
                    <p class="text-gray-600">
                      123 Education Avenue, Knowledge Park<br />New Delhi,
                      110001, India
                    </p>
                  </div>
                </div>

                <div class="flex items-start">
                  <div
                    class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center mr-4"
                  >
                    <i class="ri-phone-line text-primary"></i>
                  </div>
                  <div>
                    <h4 class="font-medium text-gray-800 mb-1">Call Us</h4>
                    <p class="text-gray-600">
                      +91 98765 43210<br />+91 87654 32109
                    </p>
                  </div>
                </div>

                <div class="flex items-start">
                  <div
                    class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center mr-4"
                  >
                    <i class="ri-mail-line text-primary"></i>
                  </div>
                  <div>
                    <h4 class="font-medium text-gray-800 mb-1">Email Us</h4>
                    <p class="text-gray-600">
                      admissions@B.Techcourses.com<br />info@B.Techcourses.com
                    </p>
                  </div>
                </div>

                <div class="flex items-start">
                  <div
                    class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center mr-4"
                  >
                    <i class="ri-time-line text-primary"></i>
                  </div>
                  <div>
                    <h4 class="font-medium text-gray-800 mb-1">
                      Working Hours
                    </h4>
                    <p class="text-gray-600">
                      Monday - Saturday: 9:00 AM - 6:00 PM<br />Sunday: Closed
                    </p>
                  </div>
                </div>
              </div>

              <div class="mt-8">
                <h4 class="font-medium text-gray-800 mb-4">Connect With Us</h4>
                <div class="flex space-x-4">
                  <a
                    href="#"
                    class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center hover:bg-primary hover:text-white transition-colors"
                  >
                    <i class="ri-facebook-fill"></i>
                  </a>
                  <a
                    href="#"
                    class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center hover:bg-primary hover:text-white transition-colors"
                  >
                    <i class="ri-instagram-line"></i>
                  </a>
                  <a
                    href="#"
                    class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center hover:bg-primary hover:text-white transition-colors"
                  >
                    <i class="ri-twitter-x-line"></i>
                  </a>
                  <a
                    href="#"
                    class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center hover:bg-primary hover:text-white transition-colors"
                  >
                    <i class="ri-linkedin-fill"></i>
                  </a>
                  <a
                    href="#"
                    class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center hover:bg-primary hover:text-white transition-colors"
                  >
                    <i class="ri-youtube-line"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- CTA Section -->
  
    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
      <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
          <div>
            <a
              href="#"
              class="text-2xl font-['Pacifico'] text-white mb-6 inline-block"
              >logo</a
            >
            <p class="text-gray-400 mb-6">
              Providing expert guidance for B.Tech courses across India since
              2010. Your trusted partner for educational success.
            </p>
            <div class="flex space-x-4">
              <a
                href="#"
                class="text-gray-400 hover:text-white transition-colors"
              >
                <i class="ri-facebook-fill"></i>
              </a>
              <a
                href="#"
                class="text-gray-400 hover:text-white transition-colors"
              >
                <i class="ri-instagram-line"></i>
              </a>
              <a
                href="#"
                class="text-gray-400 hover:text-white transition-colors"
              >
                <i class="ri-twitter-x-line"></i>
              </a>
              <a
                href="#"
                class="text-gray-400 hover:text-white transition-colors"
              >
                <i class="ri-linkedin-fill"></i>
              </a>
            </div>
          </div>
          <div>
            <h3 class="text-lg font-semibold mb-6">Quick Links</h3>
            <ul class="space-y-3">
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >Home</a
                >
              </li>
              <li>
                <a
                  href="#about"
                  class="text-gray-400 hover:text-white transition-colors"
                  >About B.Techs</a
                >
              </li>
              <li>
                <a
                  href="#courses"
                  class="text-gray-400 hover:text-white transition-colors"
                  >Our Courses</a
                >
              </li>
              <li>
                <a
                  href="#eligibility"
                  class="text-gray-400 hover:text-white transition-colors"
                  >Eligibility</a
                >
              </li>
              <li>
                <a
                  href="#process"
                  class="text-gray-400 hover:text-white transition-colors"
                  >Admission Process</a
                >
              </li>
              <li>
                <a
                  href="#contact"
                  class="text-gray-400 hover:text-white transition-colors"
                  >Contact Us</a
                >
              </li>
            </ul>
          </div>

          <div>
            <h3 class="text-lg font-semibold mb-6">Popular Courses</h3>
            <ul class="space-y-3">
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >B.Tech in Pharmacy</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >B.Tech in Engineering</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >B.Tech in Nursing</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >B.Tech in Medical Lab Technology</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >B.Tech in Hotel Management</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >B.Tech in Computer Applications</a
                >
              </li>
            </ul>
          </div>

          <div>
            <h3 class="text-lg font-semibold mb-6">Contact Info</h3>
            <ul class="space-y-3">
              <li class="flex items-start">
                <i class="ri-map-pin-line mr-3 mt-1"></i>
                <span class="text-gray-400"
                  >123 Education Avenue, Knowledge Park<br />New Delhi, 110001,
                  India</span
                >
              </li>
              <li class="flex items-start">
                <i class="ri-phone-line mr-3 mt-1"></i>
                <span class="text-gray-400">+91 98765 43210</span>
              </li>
              <li class="flex items-start">
                <i class="ri-mail-line mr-3 mt-1"></i>
                <span class="text-gray-400">admissions@B.Techcourses.com</span>
              </li>
              <li class="flex items-start">
                <i class="ri-time-line mr-3 mt-1"></i>
                <span class="text-gray-400">Mon-Sat: 9:00 AM - 6:00 PM</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="pt-8 border-t border-gray-800 text-center">
          <p class="text-gray-500">
            © 2025 B.Tech Courses. All rights reserved.
          </p>
        </div>
      </div>
    </footer>
    <!-- Back to Top Button -->
    <button
      id="backToTop"
      class="fixed bottom-6 right-6 w-12 h-12 bg-primary text-white rounded-full shadow-lg flex items-center justify-center opacity-0 invisible transition-all duration-300"
    >
      <i class="ri-arrow-up-line text-xl"></i>
    </button>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script id="animation-init">
      document.addEventListener("DOMContentLoaded", function () {
        AOS.init({
          duration: 800,
          easing: "ease-in-out",
          once: true,
        });
      });
    </script>

    <script id="faq-toggle">
      document.addEventListener("DOMContentLoaded", function () {
        const faqToggles = document.querySelectorAll(".faq-toggle");

        faqToggles.forEach((toggle) => {
          toggle.addEventListener("click", function () {
            const content = this.nextElementSibling;
            const icon = this.querySelector("i");

            if (content.classList.contains("hidden")) {
              content.classList.remove("hidden");
              icon.style.transform = "rotate(180deg)";
            } else {
              content.classList.add("hidden");
              icon.style.transform = "rotate(0)";
            }
          });
        });
      });
    </script>

    <script id="back-to-top">
      document.addEventListener("DOMContentLoaded", function () {
        const backToTopButton = document.getElementById("backToTop");

        window.addEventListener("scroll", function () {
          if (window.pageYOffset > 300) {
            backToTopButton.classList.remove("opacity-0", "invisible");
            backToTopButton.classList.add("opacity-100", "visible");
          } else {
            backToTopButton.classList.remove("opacity-100", "visible");
            backToTopButton.classList.add("opacity-0", "invisible");
          }
        });

        backToTopButton.addEventListener("click", function () {
          window.scrollTo({
            top: 0,
            behavior: "smooth",
          });
        });
      });
    </script>
    <script id="mobile-menu">
      document.addEventListener("DOMContentLoaded", function () {
        const menuButton = document.querySelector(".md\\:hidden");
        const mobileMenu = document.createElement("div");

        mobileMenu.classList.add(
          "fixed",
          "inset-0",
          "bg-white",
          "z-50",
          "p-4",
          "transform",
          "translate-x-full",
          "transition-transform",
          "duration-300",
          "ease-in-out",
        );
        mobileMenu.innerHTML = `
                      <div class="flex justify-between items-center mb-8">
                          <a href="#" class="text-2xl font-['Pacifico'] text-primary">logo</a>
                          <button class="close-menu w-10 h-10 flex items-center justify-center text-gray-700">
                              <i class="ri-close-line text-xl"></i>
                          </button>
                      </div>
                      <div class="flex flex-col space-y-4">
                          <a href="#about" class="text-gray-700 hover:text-primary transition-colors py-2 border-b border-gray-100">About</a>
                          <a href="#courses" class="text-gray-700 hover:text-primary transition-colors py-2 border-b border-gray-100">Courses</a>
                          <a href="#eligibility" class="text-gray-700 hover:text-primary transition-colors py-2 border-b border-gray-100">Eligibility</a>
                          <a href="#process" class="text-gray-700 hover:text-primary transition-colors py-2 border-b border-gray-100">Process</a>
                          <a href="#contact" class="text-gray-700 hover:text-primary transition-colors py-2 border-b border-gray-100">Contact</a>
                          <a href="#contact" class="bg-primary text-white px-6 py-2 !rounded-button whitespace-nowrap hover:bg-opacity-90 transition-colors text-center mt-4">Get Started</a>
                      </div>
                  `;

        document.body.appendChild(mobileMenu);

        menuButton.addEventListener("click", function () {
          mobileMenu.classList.remove("translate-x-full");
          mobileMenu.classList.add("translate-x-0");
          document.body.classList.add("overflow-hidden");
        });

        mobileMenu
          .querySelector(".close-menu")
          .addEventListener("click", function () {
            mobileMenu.classList.remove("translate-x-0");
            mobileMenu.classList.add("translate-x-full");
            document.body.classList.remove("overflow-hidden");
          });

        mobileMenu.querySelectorAll("a").forEach((link) => {
          link.addEventListener("click", function () {
            mobileMenu.classList.remove("translate-x-0");
            mobileMenu.classList.add("translate-x-full");
            document.body.classList.remove("overflow-hidden");
          });
        });
      });
    </script>
  </body>
</html>
