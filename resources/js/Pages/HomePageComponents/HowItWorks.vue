<template>
    <section class="bg-gray-100 py-32 font-poppins">
      <div class="container mx-auto "  style="max-width: 1400px;">
        <!-- Heading -->
        <h2 class="text-center text-4xl font-semibold mb-10">How it works</h2>
  
        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mx-5">
          <!-- Card 1 -->
          <div class="flex flex-col items-center py-6 rounded-lg">
            <img src="/public/assets/complete steps.png" alt="Complete Steps Icon" class="mb-4">
            <h3 class="text-lg font-bold mb-2">Complete Steps</h3>
            <p class="text-black text-center mt-2">Advance through the steps to reach top status.</p>
          </div>
  
          <!-- Card 2 -->
          <div class="flex flex-col items-center py-4 rounded-lg">
            <img src="/public/assets/earn points.png" alt="Earn Points Icon" class="mb-4">
            <h3 class="text-lg font-bold mb-2">Earn Points</h3>
            <p class="text-black text-center mt-2">Learn, have fun, refer a friend, and more.</p>
          </div>
  
          <!-- Card 3 -->
          <div class="flex flex-col items-center py-6 rounded-lg">
            <img src="/public/assets/Layer 2.png" alt="Unlock Rewards Icon" class="mb-4">
            <h3 class="text-lg font-bold mb-2">Unlock Rewards</h3>
            <p class="text-black text-center mt-2">Exclusive learning opportunities, free patient education, and more.</p>
          </div>
        </div>
      </div>
    </section>
  </template>
  
  <script>
  export default {
    name: 'HowItWorksSection',
  };
  </script>
  
  <style scoped>
  </style>
  