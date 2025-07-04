<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nursing Courses for a Brighter Future</title>
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
           Nursing Courses for a Brighter Future
          </h1>
          <p class="text-gray-700 text-lg mb-8">
            Unlock your potential with our industry-recognized Nursing programs
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
    <section id="about" class="py-20 bg-white">
      <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-12">
          <div class="md:w-1/2" data-aos="fade-right" data-aos-duration="1000">
            <h2 class="text-3xl font-bold text-primary mb-4">
Bachelor of Science in Nursing


            </h2>
            <div class="w-20 h-1 bg-secondary mb-6"></div>
            <p class="text-gray-700 mb-4">
The Bachelor of Science in Nursing (B.Sc Nursing) is a four-year undergraduate program that prepares students for a professional career in healthcare. It combines theoretical knowledge with practical training in areas such as anatomy, physiology, microbiology, pharmacology, and patient care. The course emphasizes critical thinking, clinical skills, and compassionate care to promote health and manage illness. Graduates are qualified to work in hospitals, clinics, and community health settings as registered nurses. The program also lays the foundation for advanced studies in nursing and healthcare management, enabling students to contribute to the evolving needs of the medical field.



            </p>
            
          </div>
          <div class="md:w-1/2" data-aos="fade-left" data-aos-duration="1000">
            <img
              src="https://readdy.ai/api/search-image?query=diverse%20group%20of%20students%20in%20a%20modern%20classroom%20setting%20with%20digital%20devices%2C%20engaged%20in%20practical%20learning%20with%20a%20teacher%20guiding%20them%2C%20bright%20and%20airy%20educational%20environment%20with%20educational%20materials%20visible%2C%20professional%20atmosphere%20showing%20hands-on%20learning&width=600&height=400&seq=about1&orientation=landscape"
              alt="Students in classroom"
              class="rounded-lg shadow-lg w-full h-auto object-cover"
            />
          </div>
        </div>
      </div>
    </section>



     <section id="about" class="py-20 bg-white">
      <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2" data-aos="fade-left" data-aos-duration="1000">
            <img
              src="https://readdy.ai/api/search-image?query=diverse%20group%20of%20students%20in%20a%20modern%20classroom%20setting%20with%20digital%20devices%2C%20engaged%20in%20practical%20learning%20with%20a%20teacher%20guiding%20them%2C%20bright%20and%20airy%20educational%20environment%20with%20educational%20materials%20visible%2C%20professional%20atmosphere%20showing%20hands-on%20learning&width=600&height=400&seq=about1&orientation=landscape"
              alt="Students in classroom"
              class="rounded-lg shadow-lg w-full h-auto object-cover"
            />
          </div>

          <div class="md:w-1/2" data-aos="fade-right" data-aos-duration="1000">
            <h2 class="text-3xl font-bold text-primary mb-4">
         Auxiliary Nurse Midwife (ANM)



            </h2>
            <div class="w-20 h-1 bg-secondary mb-6"></div>
            <p class="text-gray-700 mb-4">
   The Auxiliary Nurse Midwife (ANM) course is a two-year diploma program focused on training students in basic healthcare, nursing, and midwifery. It prepares candidates to provide essential care to individuals, especially mothers and children, in rural and urban communities. The curriculum includes subjects like community health, nutrition, child health nursing, and first aid. ANMs are trained to assist in childbirth, immunization programs, and health education. After completion, they can work in government and private healthcare centers, primary health care units, and maternity homes. The ANM course plays a vital role in strengthening grassroots-level health services in India.



            </p>
          
          </div>
       
        </div>
      </div>
    </section>

    <!-- Benefits Section -->


    
    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
      <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-12">
          <div class="md:w-1/2" data-aos="fade-right" data-aos-duration="1000">
            <h2 class="text-3xl font-bold text-primary mb-4">
General Nursing and Midwifery (GNM)


            </h2>
            <div class="w-20 h-1 bg-secondary mb-6"></div>
            <p class="text-gray-700 mb-4">
The General Nursing and Midwifery (GNM) course is a three-and-a-half-year diploma program designed to prepare students for a career in clinical nursing and midwifery. It focuses on developing skills in patient care, medical-surgical nursing, community health, and maternity care. The program includes both classroom instruction and hands-on clinical training in hospitals and healthcare settings. GNM graduates are qualified to work as staff nurses, health workers, and midwives in hospitals, clinics, and community health centers. The course also serves as a stepping stone for higher studies in nursing, such as B.Sc Nursing or Post Basic B.Sc Nursing.



            </p>
            
          </div>
          <div class="md:w-1/2" data-aos="fade-left" data-aos-duration="1000">
            <img
              src="https://readdy.ai/api/search-image?query=diverse%20group%20of%20students%20in%20a%20modern%20classroom%20setting%20with%20digital%20devices%2C%20engaged%20in%20practical%20learning%20with%20a%20teacher%20guiding%20them%2C%20bright%20and%20airy%20educational%20environment%20with%20educational%20materials%20visible%2C%20professional%20atmosphere%20showing%20hands-on%20learning&width=600&height=400&seq=about1&orientation=landscape"
              alt="Students in classroom"
              class="rounded-lg shadow-lg w-full h-auto object-cover"
            />
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
                >What are the main types of nursing courses in India?</span
              >
              <i
                class="ri-arrow-down-s-line text-primary transition-transform"
              ></i>
            </button>
            <div class="faq-content bg-white px-4 pb-4 rounded-b-lg hidden">
              <p class="text-gray-600">
          The main courses are:
<li>
  B.Sc Nursing (4 years, undergraduate degree)
  </li>
  <li>
  GNM (General Nursing & Midwifery) (3.5 years, diploma)
  </li>
  <li>
  ANM (Auxiliary Nurse Midwifery) (2 years, diploma)
  </li>
 </p>
            </div>
          </div>

          <div class="mb-4">
            <button
              class="faq-toggle w-full bg-white p-4 rounded-lg shadow-sm flex justify-between items-center"
            >
              <span class="font-medium text-gray-800"
                >What career opportunities are available after nursing courses?</span
              >
              <i
                class="ri-arrow-down-s-line text-primary transition-transform"
              ></i>
            </button>
            <div class="faq-content bg-white px-4 pb-4 rounded-b-lg hidden">
              <p class="text-gray-600">
            Graduates can work as registered nurses, staff nurses, midwives, community health workers, or pursue higher studies and specialization.



              </p>
            </div>
          </div>

          <div class="mb-4">
            <button
              class="faq-toggle w-full bg-white p-4 rounded-lg shadow-sm flex justify-between items-center"
            >
              <span class="font-medium text-gray-800"
                >Does RS Admission Zone provide placement assistance?</span
              >
              <i
                class="ri-arrow-down-s-line text-primary transition-transform"
              ></i>
            </button>
            <div class="faq-content bg-white px-4 pb-4 rounded-b-lg hidden">
              <p class="text-gray-600">
            Yes, we offer placement support through our network of healthcare institutions and help students prepare for interviews, resume building, and job matching.




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
