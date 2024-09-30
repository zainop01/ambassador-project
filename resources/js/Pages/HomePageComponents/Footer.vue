<template>
    <footer class="bg-white py-6 font-poppins pt-20 pb-10">
      <!-- Top Section: Logo and Social Icons -->
      <div class="container mx-auto flex justify-between items-center border-b border-gray-300 pb-4">
        <!-- Logo Section -->
        <div class="flex items-center">
          <img src="/public/assets/logo.png" alt="Med Learning Group Logo" class="h-32" />
        </div>
        
        <!-- Social Icons Section -->
        <div class="flex items-center space-x-6">
          <a href="https://www.facebook.com" target="_blank" class="text-gray-600 hover:text-gray-900 text-2xl">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://www.instagram.com" target="_blank" class="text-gray-600 hover:text-gray-900 text-2xl">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://www.x.com" target="_blank" class="text-gray-600 hover:text-gray-900 text-2xl">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://www.linkedin.com" target="_blank" class="text-gray-600 hover:text-gray-900 text-2xl">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>
      </div>
  
      <!-- Bottom Section: Legal and Contact Info -->
      <div class="container mx-auto mt-4 flex justify-between items-center text-xs text-gray-500">
        <!-- Copyright Section -->
        <p>© 2024 Med Learning Group.</p>
  
        <!-- Links Section -->
        <div class="flex space-x-6">
          <a href="#" class="hover:underline">Terms of Use</a>
          <a href="#" class="hover:underline">Privacy Policy</a>
        </div>
  
        <!-- Contact Info -->
        <p>123 456 7890 | <a href="mailto:info@medlearninggroup.com" class="hover:underline">medlearninggroup.com</a></p>
      </div>
    </footer>
  </template>
  
  <script>
  export default {
    name: 'FooterComponent'
  };
  </script>
  
  <style scoped>
  /* Custom styles if needed */
  </style>
  