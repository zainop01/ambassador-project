<template>
  <section class="py-12 font-poppins">
    <div class="container mx-auto px-4" style="max-width: 1400px;">
      <h2 class="text-center text-4xl font-semibold mb-20 mt-10">Benefits</h2>

      <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
        
        <div class="flex flex-col bg-[#BBD8F9] rounded-3xl p-6 shadow-lg">
          <div class="flex-1 md:text-left mx-auto">
            <img src="/public/assets/Rectangle2.png" alt="Advance the Type 1D Community" class="mb-4 rounded-lg mx-auto md:mx-0">
            <h3 class="text-xl font-bold mb-2 w-full w-60">Advance the Type 1D Community:</h3>
            <p class="text-gray-600 w-full md:w-42 mt-5 md:text-sm">Educational initiatives to support early screening, detection, and treatment of T1D.</p>
          </div>
        </div>

        <div class="flex flex-col gap-8 md:col-span-2">
          
          <div class="flex flex-col bg-[#C3B2E7] rounded-lg shadow-lg relative h-72 rounded-3xl">
            <div class="flex-1">
              <h3 class="text-2xl font-semibold mb-2 w-full mx-10 mt-5  md:w-20">Free Patient Education</h3>
              <img src="/public/assets/Group3.png" alt="Free Patient Education" class="rounded-lg absolute bottom-0 transform md:transform-none right-0 max-w-xs md:max-w-none">
            </div>
          </div>

          <div class="grid grid-cols-1 gap-8 md:grid-cols-2">

            <div class="flex flex-col bg-[#F9DF8C] rounded-3xl p-6 shadow-lg relative h-80">
              <div class="flex-1 text-center">
                <img src="/public/assets/Rectangle3.png" alt="Score Some Type 1D Swag" class="mb-4 rounded-lg mx-auto absolute bottom-16 left-1/2 transform -translate-x-1/2">
                <h3 class="text-xl font-semibold absolute bottom-8 w-full text-center m-auto left-0 right-0">Score Some Type 1D Swag</h3>
              </div>
            </div>

            <div class="flex flex-col bg-[#C9DA8F] rounded-3xl p-6 shadow-lg relative h-80">
              <div class="flex-1 text-center">
                <img src="/public/assets/Group10.png" alt="Exclusive Meet the Expert Session" class="mb-4 rounded-lg mx-auto absolute bottom-0 left-1/2 transform -translate-x-1/2">
                <h3 class="text-xl font-bold absolute w-full text-center md:w-40 text-end top-0 right-0 m-5">Exclusive Meet the Expert Session</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'BenefitsSection',
};
</script>

<style scoped>
@media (min-width: 1024px) and (max-width: 1400px) {
  .relative.h-72 img {
    right: 0 !important;
    left: unset;
    width: 550px;
    max-width: unset;
  }
  .relative.h-80 img {
    width: 270px;
    max-width: unset;
  }
}

@media (max-width: 1100px) {
  .relative.h-72 img {
    right: 0 !important;
    left: unset;
    width: 500px;
    max-width: unset;
  }
  .relative.h-80 img {
    width: 220px;
    max-width: unset;
  }
}
@media (max-width: 992px) {
  .relative.h-72 img {
    right: 0 !important;
    left: unset;
    width: 450px;
    max-width: unset;
  }
  h3{
    font-size: 17px;
  }
  .relative.h-80 img {
    width: 200px;
    max-width: unset;
    height: 150px;
  }
}

@media (max-width: 768px) {
    .relative.h-72 img {
    right: 0 !important;
    left: unset;
    width: 350px;
    max-width: unset;
  }
  h3{
    font-size: 22px;
    width: 50%;
  }
  .bg-blue-100 {
    text-align: start !important;
  }

  .bg-purple-200 img {
    left: 50% !important;
    transform: translateX(-50%) !important;
  }

  .bg-yellow-100 img {
    top: 20px !important;
    left: 50% !important;
    transform: translateX(-50%) !important;
    width: 250px;
  }

  .bg-green-200 img {
    left: 150px !important;
    bottom: 10px !important;
  }
  .bg-green-200 h3 {
    top: 10px !important; 
    right: 10px !important;
    left: unset !important;
    text-align: right !important;
    width: 50%;
  }
}

</style>
