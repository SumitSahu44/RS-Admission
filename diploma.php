<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Diploma Courses for a Brighter Future</title>
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
  <?php include 'navbar.php' ?>

    <!-- Hero Section -->
    <section class="hero-bg relative">
      <div
        class="absolute inset-0 bg-gradient-to-r from-white via-white/90 to-white/20"
      ></div>
      <div class="container mx-auto px-4 py-20 md:py-32 relative">
        <div class="max-w-xl" data-aos="fade-right" data-aos-duration="1000">
          <h1 class="text-4xl md:text-5xl font-bold text-primary mb-6">
            Diploma Courses for a Brighter Future
          </h1>
          <p class="text-gray-700 text-lg mb-8">
            Unlock your potential with our industry-recognized diploma programs
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
             Diploma Courses Offered
          </h2>
          <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
          <p class="text-gray-700 max-w-2xl mx-auto">
            Explore our comprehensive range of diploma programs designed to meet
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
                alt="Diploma in Pharmacy"
                class="w-full h-full object-cover"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-800 mb-2">
                Mechanical Engineering
              </h3>
              <p class="text-gray-600 mb-4">
                Mechanical Engineering is one of the oldest and broadest branches of engineering, focusing on the design, analysis, manufacturing, and maintenance of mechanical systems. It applies principles of physics, mathematics, and materials science to create and improve tools, machines, engines, and systems. Mechanical engineers work in industries such as automotive, aerospace, energy, manufacturing, and robotics. They solve real-world problems by developing efficient and innovative solutions. With a strong foundation in core engineering concepts, mechanical engineering offers vast career opportunities in both public and private sectors, including roles in design, production, research, and quality control. It is a career that powers innovation.
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
                alt="Diploma in Medical Laboratory Technology"
                class="w-full h-full object-cover"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-800 mb-2">
                Civil Engineering
              </h3>
              <p class="text-gray-600 mb-4">
               Civil Engineering is a core branch of engineering focused on the planning, design, construction, and maintenance of infrastructure such as buildings, roads, bridges, dams, and water supply systems. It combines technical knowledge with creative problem-solving to develop safe, sustainable, and efficient public and private structures. Civil engineers play a vital role in shaping cities and improving the quality of life. They work in both government and private sectors, contributing to major development projects. With growing demand for smart infrastructure and urban planning, civil engineering offers diverse career opportunities in construction, project management, structural design, and environmental engineering.
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
                alt="Diploma in Engineering"
                class="w-full h-full object-cover"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-800 mb-2">
                Information Technology Engineering

              </h3>
              <p class="text-gray-600 mb-4">
                Information Technology Engineering is a specialized branch of engineering that focuses on the design, development, and management of computer-based information systems. It blends computer science, networking, software development, and database management to create efficient digital solutions. IT engineers work on building and maintaining networks, securing data, developing software, and supporting systems that power businesses, education, healthcare, and more. This field plays a crucial role in today’s digital world, offering strong career prospects in IT services, cybersecurity, cloud computing, and software engineering. With ever-evolving technology, Information Technology Engineering remains one of the most sought-after and future-proof engineering disciplines.


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
                alt="Diploma in Nursing"
                class="w-full h-full object-cover"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-800 mb-2">
                Computer Science Engineering

              </h3>
              <p class="text-gray-600 mb-4">
               Diploma in Computer Science Engineering is a 3-year technical program that provides foundational knowledge in computer systems, programming, software development, and networking. It equips students with practical skills in languages like C, C++, Python, and tools used in web development, database management, and system operations. The course is designed to make students job-ready for roles such as junior software developer, IT support technician, or system operator. With increasing demand in the IT industry, diploma holders can either start their careers early or pursue higher education like B.Tech through lateral entry. It’s an ideal path for tech-savvy students after 10th.


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
                alt="Diploma in Hotel Management"
                class="w-full h-full object-cover"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-800 mb-2">
                Electrical & Electronics Engineering

              </h3>
              <p class="text-gray-600 mb-4">
               Diploma in Electrical & Electronics Engineering (EEE) is a 3-year course that provides foundational knowledge in electrical circuits, machines, power systems, and basic electronics. Students gain hands-on training in wiring, control panels, maintenance, and troubleshooting of electrical and electronic devices. This course prepares students for jobs in power plants, manufacturing units, electrical maintenance, automation, and public sector companies. Diploma holders can work as technicians, junior engineers, or electrical supervisors. They can also pursue higher studies like B.Tech through lateral entry. It’s an ideal program for students after 10th who are interested in a technical career in the electrical or electronics field.


              </p>
            
            </div>
          </div>

        
        </div>
     
      </div>
    </section>

 
   


    <!-- Testimonials Section -->
    <section class="py-20 bg-white">
      <div class="container mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
          <h2 class="text-3xl font-bold text-primary mb-4">
            What Our Students Say
          </h2>
          <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
          <p class="text-gray-700 max-w-2xl mx-auto">
            Hear from our students about their experiences with our diploma
            courses and services.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div
            class="bg-white p-6 rounded-lg shadow-md"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="flex items-center mb-4">
              <div class="text-secondary">
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
              </div>
            </div>
            <p class="text-gray-600 mb-6">
              "The Diploma in Pharmacy program completely transformed my career
              prospects. The practical training and industry connections helped
              me secure a position at a leading hospital pharmacy right after
              graduation."
            </p>
            <div class="flex items-center">
              <div
                class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden mr-4"
              >
                <img
                  src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20a%20young%20Indian%20woman%20with%20a%20friendly%20smile%20wearing%20business%20casual%20attire%2C%20neutral%20background%2C%20professional%20portrait&width=100&height=100&seq=test1&orientation=squarish"
                  alt="Priya Sharma"
                  class="w-full h-full object-cover"
                />
              </div>
              <div>
                <h4 class="font-semibold text-gray-800">Priya Sharma</h4>
                <p class="text-gray-500 text-sm">D.Pharm Graduate, 2024</p>
              </div>
            </div>
          </div>

          <div
            class="bg-white p-6 rounded-lg shadow-md"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="flex items-center mb-4">
              <div class="text-secondary">
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
              </div>
            </div>
            <p class="text-gray-600 mb-6">
              "The counselors were incredibly helpful throughout the admission
              process. They guided me to the perfect engineering diploma program
              that matched my interests and career goals. Now I'm working at a
              top manufacturing company."
            </p>
            <div class="flex items-center">
              <div
                class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden mr-4"
              >
                <img
                  src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20a%20young%20Indian%20man%20with%20short%20hair%20and%20a%20confident%20smile%20wearing%20business%20casual%20attire%2C%20neutral%20background%2C%20professional%20portrait&width=100&height=100&seq=test2&orientation=squarish"
                  alt="Rahul Patel"
                  class="w-full h-full object-cover"
                />
              </div>
              <div>
                <h4 class="font-semibold text-gray-800">Rahul Patel</h4>
                <p class="text-gray-500 text-sm">
                  Mechanical Engineering Diploma, 2023
                </p>
              </div>
            </div>
          </div>

          <div
            class="bg-white p-6 rounded-lg shadow-md"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <div class="flex items-center mb-4">
              <div class="text-secondary">
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-half-fill"></i>
              </div>
            </div>
            <p class="text-gray-600 mb-6">
              "As someone who couldn't afford a 4-year degree, the Diploma in
              Computer Applications was perfect. The skills I learned were
              directly applicable to my job, and I was able to start earning
              much sooner than my friends in degree programs."
            </p>
            <div class="flex items-center">
              <div
                class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden mr-4"
              >
                <img
                  src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20a%20young%20South%20Indian%20woman%20with%20long%20dark%20hair%20and%20a%20friendly%20smile%20wearing%20business%20casual%20attire%2C%20neutral%20background%2C%20professional%20portrait&width=100&height=100&seq=test3&orientation=squarish"
                  alt="Ananya Krishnan"
                  class="w-full h-full object-cover"
                />
              </div>
              <div>
                <h4 class="font-semibold text-gray-800">Ananya Krishnan</h4>
                <p class="text-gray-500 text-sm">DCA Graduate, 2024</p>
              </div>
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
            Find answers to common questions about our diploma courses and
            admission process.
          </p>
        </div>

        <div class="max-w-3xl mx-auto" data-aos="fade-up">
          <div class="mb-4">
            <button
              class="faq-toggle w-full bg-white p-4 rounded-lg shadow-sm flex justify-between items-center"
            >
              <span class="font-medium text-gray-800"
                >What is a diploma course?</span
              >
              <i
                class="ri-arrow-down-s-line text-primary transition-transform"
              ></i>
            </button>
            <div class="faq-content bg-white px-4 pb-4 rounded-b-lg hidden">
              <p class="text-gray-600">
               A diploma is a short-term, skill-based technical course, typically 2–3 years long, designed to provide practical knowledge and job-ready skills in specific fields like engineering, healthcare, or IT.
              </p>
            </div>
          </div>

          <div class="mb-4">
            <button
              class="faq-toggle w-full bg-white p-4 rounded-lg shadow-sm flex justify-between items-center"
            >
              <span class="font-medium text-gray-800"
                >Can I do B.Tech after a diploma</span
              >
              <i
                class="ri-arrow-down-s-line text-primary transition-transform"
              ></i>
            </button>
            <div class="faq-content bg-white px-4 pb-4 rounded-b-lg hidden">
              <p class="text-gray-600">
               Yes, diploma holders can enter directly into the 2nd year of B.Tech through lateral entry.
              </p>
            </div>
          </div>

          <div class="mb-4">
            <button
              class="faq-toggle w-full bg-white p-4 rounded-lg shadow-sm flex justify-between items-center"
            >
              <span class="font-medium text-gray-800"
                >Does Diploma offer placement opportunities</span
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
            Have questions about our diploma courses? Our education counselors
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
                      Diploma in Pharmacy (D.Pharm)
                    </option>
                    <option value="dmlt">
                      Diploma in Medical Laboratory Technology (DMLT)
                    </option>
                    <option value="engineering">Diploma in Engineering</option>
                    <option value="nursing">Diploma in Nursing (GNM)</option>
                    <option value="hotel">Diploma in Hotel Management</option>
                    <option value="dca">
                      Diploma in Computer Applications (DCA)
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
                      admissions@diplomacourses.com<br />info@diplomacourses.com
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
    <?php include 'footer.php' ?>
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
 
  </body>
</html>
