<template>
  <div class="bg-[#110E22] text-center flex flex-col justify-center items-center text-white font-poppins px-4 py-16 sm:py-32 relative">
    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-semibold mb-4 gradient-text">
      Be a Champion for T1D!
    </h1>

    <div class="flex flex-col items-center my-4">
      <p class="text-2xl sm:text-3xl md:text-3xl my-2 md:flex items-center justify-center gap-4">
        Join the <img src="/public/assets/hero_ambassador_logo.svg" alt="" class="h-12 mt-5"> program today!
      </p>
    </div>

    <p class="text-lg sm:text-xl my-6 mx-auto max-w-lg">
      Earn rewards and stay ahead with the latest T1D content, screenings, and patient resources.
    </p>

    <button class="bg-[#4F95FF] text-white px-6 sm:px-8 py-2 sm:py-3 rounded-full font-semibold mt-5">
      Get started for free
    </button>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.gradient-text {
  background-image: url('/public/assets/hero_champaion_gradient_color.png');
  background-clip: text;
  -webkit-background-clip: text; 
  color: transparent; 
  background-size: cover; 
  background-position: center;
}
</style>
