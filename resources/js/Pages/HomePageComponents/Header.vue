<template>
  <header class="bg-[#110E22] text-white px-4 py-10 sm:px-10 md:px-20 lg:px-60 flex justify-between items-center font-poppins h-16">
    <img src="/public/assets/logo-white.png" alt="" class="w-auto">
    <nav class="hidden md:flex items-center space-x-6">
      <a href="#" class="hover:underline">Support</a>
      <a href="#" class="hover:underline">Login</a>
      <button class="bg-white text-black px-6 py-2 rounded-full">Get started for free</button>
    </nav>
    <!-- Hamburger icon for mobile -->
    <div class="md:hidden">
      <button @click="toggleMenu">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-8 w-8">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
        </svg>
      </button>
    </div>
    <!-- Mobile menu -->
    <div v-if="isMenuOpen" class="md:hidden absolute top-16 left-0 w-full bg-[#110E22] text-center py-4">
      <a href="#" class="block py-2">Support</a>
      <a href="#" class="block py-2">Login</a>
      <button class="bg-white text-black px-6 py-2 rounded-full mt-4">Get started for free</button>
    </div>
  </header>
</template>

<script>
export default {
  data() {
    return {
      isMenuOpen: false
    };
  },
  methods: {
    toggleMenu() {
      this.isMenuOpen = !this.isMenuOpen;
    }
  }
};
</script>

<style scoped>
</style>
