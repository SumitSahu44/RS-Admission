<!-- navbar.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Navbar with Dropdown</title>
  <script src="https://cdn.tailwindcss.com/3.4.16"></script>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <style>
    /* Dropdown arrow rotation */
    .rotate-180 {
      transform: rotate(180deg);
    }
  </style>
</head>
<body class="relative">

<!-- Navigation -->
<nav class="fixed top-0 left-0 right-0 bg-white shadow-sm z-50 transition-all duration-300">
  <div class="container mx-auto px-4 md:px-20 flex justify-between items-center h-16 md:h-20">
    <a href="#" class="text-primary text-2xl w-14 md:text-3xl font-['Pacifico']">
      <img src="./images/RS_admission.png" alt="logo">
    </a>

    <!-- Desktop Links -->
    <div class="hidden md:flex items-center space-x-8 relative">
      <a href="./index.php#home" class="text-gray-700 hover:text-primary font-medium transition-colors">Home</a>
      <a href="./index.php#about" class="text-gray-700 hover:text-primary font-medium transition-colors">About Us</a>
      <a href="./index.php#services" class="text-gray-700 hover:text-primary font-medium transition-colors">Services</a>

      <!-- Dropdown Menu for Courses -->
      <div class="relative group">
        <button class="flex items-center text-gray-700 hover:text-primary font-medium transition-colors">
          Courses <i class="ri-arrow-down-s-line ml-1"></i>
        </button>
        <div class="absolute top-6 left-0 bg-white shadow-lg rounded-md py-2 w-48 hidden group-hover:block z-50">
          <a href="./diploma.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Diploma</a>
          <a href="./btech.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Btech</a>
          <a href="./bca-mca.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">BCA/MCA</a>
          <a href="./bba-mba.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">BBA/MBA</a>
          <a href="nursing.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Nursing</a>
        </div>
      </div>

      <a href="./index.php#why-us" class="text-gray-700 hover:text-primary font-medium transition-colors">Why Choose Us</a>
      <a href="./index.php#contact" class="bg-primary text-white px-5 py-2 rounded-button font-medium hover:bg-opacity-90 transition-colors whitespace-nowrap">Contact Us</a>
    </div>

    <!-- Mobile Menu Button -->
    <button class="md:hidden w-10 h-10 flex items-center justify-center text-gray-700" id="mobile-menu-button">
      <i class="ri-menu-line ri-2x"></i>
    </button>
  </div>
</nav>

<!-- Mobile Menu Slide-in -->
<div id="mobile-menu" class="fixed inset-0 bg-white z-50 p-6 transform translate-x-full transition-transform duration-300 ease-in-out">
  <div class="flex justify-between items-center mb-8">
    <a href="#" class="text-2xl font-['Pacifico'] w-12 text-primary">
      <img src="./images/RS_admission.png" alt="logo">
    </a>
    <button id="close-menu" class="w-10 h-10 flex items-center justify-center text-gray-700">
      <i class="ri-close-line text-2xl"></i>
    </button>
  </div>
  <div class="flex flex-col space-y-4">

    <a href="./index.php#home" class="text-gray-700 hover:text-primary font-medium py-2 border-b">Home</a>
    <a href="./index.php#about" class="text-gray-700 hover:text-primary font-medium py-2 border-b">About Us</a>
    <a href="./index.php#services" class="text-gray-700 hover:text-primary font-medium py-2 border-b">Services</a>

    <!-- Mobile Dropdown -->
    <div>
      <button id="mobile-courses-toggle" class="w-full flex justify-between items-center text-gray-700 font-medium py-2 border-b focus:outline-none">
        Courses <i id="dropdown-icon" class="ri-arrow-down-s-line text-lg"></i>
      </button>
      <div id="mobile-courses-menu" class="ml-4 mt-2 space-y-2 hidden">
          <a href="./diploma.php" class="block text-gray-600 hover:text-primary">Diploma</a>
          <a href="./btech.php" class="block text-gray-600 hover:text-primary">Btech</a>
          <a href="./bca-mca.php" class="block text-gray-600 hover:text-primary">BCA/MCA</a>
          <a href="./bba-mba.php" class="block text-gray-600 hover:text-primary">BBA/MBA</a>
          <a href="./nursing.php" class="block text-gray-600 hover:text-primary">Nursing</a>
      </div>
    </div>

    <a href="./index.php#why-us" class="text-gray-700 hover:text-primary font-medium py-2 border-b">Why Choose Us</a>
    <a href="./index.php#contact" class="bg-primary text-white px-6 py-2 rounded-button text-center hover:bg-opacity-90 transition-colors mt-4">Contact Us</a>
  </div>
</div>

<!-- Script -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const menuBtn = document.getElementById("mobile-menu-button");
    const closeBtn = document.getElementById("close-menu");
    const mobileMenu = document.getElementById("mobile-menu");
    const coursesToggle = document.getElementById("mobile-courses-toggle");
    const coursesMenu = document.getElementById("mobile-courses-menu");
    const dropdownIcon = document.getElementById("dropdown-icon");

    menuBtn.addEventListener("click", () => {
      mobileMenu.classList.remove("translate-x-full");
      mobileMenu.classList.add("translate-x-0");
      document.body.classList.add("overflow-hidden");
    });

    closeBtn.addEventListener("click", () => {
      mobileMenu.classList.add("translate-x-full");
      mobileMenu.classList.remove("translate-x-0");
      document.body.classList.remove("overflow-hidden");
    });

    mobileMenu.querySelectorAll("a").forEach(link => {
      link.addEventListener("click", () => {
        mobileMenu.classList.add("translate-x-full");
        mobileMenu.classList.remove("translate-x-0");
        document.body.classList.remove("overflow-hidden");
      });
    });

    // Toggle dropdown on mobile
    coursesToggle.addEventListener("click", () => {
      coursesMenu.classList.toggle("hidden");
      dropdownIcon.classList.toggle("rotate-180");
    });
  });
</script>

</body>
</html>
