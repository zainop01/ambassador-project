<template>
  <div class="min-h-screen bg-[#F0F8FF] bg-cover bg-center relative font-poppins" style="background-image: url('/assets/background.svg'); ">
    <!-- First Line: Logo -->
    <div class="w-full flex justify-start px-4 md:px-10 py-4 z-10">
      <!-- Logo -->
      <img src="/public/assets/logo.png" alt="Logo" class="h-16 md:h-24 w-auto" />
    </div>

    <!-- Second Line: Back Arrow, Image, and Text -->
    <div class="w-full flex items-center space-x-4 px-4 md:px-10 py-4 z-10">
      <!-- Back Arrow -->
      <a href="#" class="text-[#868FA0] hover:text-blue-500">
        <i class="fa-solid fa-arrow-left-long text-[#307DFF] text-xl md:text-2xl"></i>
      </a> 

      <!-- Image and Text -->
      <div class="flex items-center space-x-2">
        <img src="/public/assets/detect new 1-03 1.png" alt="Detect Home" class="w-8 h-8 md:w-10 md:h-10" />
        <span class="text-[#868FA0] text-lg md:text-xl">Detect Home</span>
      </div>
    </div>

    <!-- Main Content -->
    <div class="flex items-center justify-center mx-auto mt-10 px-4 sm:px-6">
      <div class="w-full max-w-full bg-white py-8 sm:py-10 px-4 sm:px-8 lg:px-20 rounded-2xl shadow-sm" style="max-width: 550px;">
        <h2 class="text-sm text-start sm:text-center px-7 sm:text-2xl lg:text-3xl font-bold text-center text-gray-900 my-4 sm:my-6" style="width: 100%; max-width: 90%;">
          Congratulations!
        </h2>
        <p class="m-auto text-center" style="width: 100%; max-width: 90%;">
          It's official. You're an Ambassador, and we're going live with our new site very soon. <br> We'll contact you when we launch.
        </p>
        <div class="flex lg:flex-wrap justify-center items-center mt-6">
          <!-- Image Area -->
          <div class="mb-6 mr-6">
            <img src="/public/assets/badge-01.png" alt="Ambassador Badge" class="h-32 sm:h-40 md:h-48 lg:h-60" />
          </div>

          <!-- Text Area -->
          <div class="text-start">
            <div class="mb-4">
              <p class="text-gray-400 font-medium">STATUS</p>
              <p class="text-xl sm:text-2xl lg:text-3xl font-semibold text-[#E0B23F]">Ambassador</p>
              <p class="text-xs sm:text-sm lg:text-base text-gray-500">Since 19 August, 2024</p>
            </div>

            <div class="mt-4">
              <p class="text-gray-400 font-medium">POINTS</p>
              <p class="text-xl sm:text-2xl lg:text-3xl font-bold text-black">15</p>
            </div>

            <!-- Button -->
            <div class="flex justify-center lg:justify-start mt-6">
              <button class="px-4 sm:px-5 bg-[#307DFF] text-white py-2 rounded-full hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300">
                Download badge
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import TopNav from './components/TopNav.vue';

export default {
  components: { TopNav },
};
</script>

<style scoped>
/* Custom styles if needed */
</style>
