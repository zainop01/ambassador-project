<template>
    <section class="ambassador-section py-32 font-poppins bg-[#F0F8FF]">
       <div class="container mx-auto px-4" style="max-width: 1400px;">
          <!-- Main Grid -->
          <div class="grid grid-cols-12 items-center gap-8">
             
             <!-- Left Image (4 columns) -->
             <div class="col-span-12 md:col-span-3 text-center md:text-left left-image">
                <img src="/public/assets/Group 21.png" alt="Ambassador" class="rounded-xl mx-auto md:mx-0">
             </div>
             
             <!-- Right Box Content (8 columns) -->
             <div class="col-span-12 md:col-span-9 bg-[#BBD8F9] p-8 rounded-2xl md:flex justify-between items-center right-box">
                <div class="text-left">
                   <h2 class="text-3xl font-semibold mb-4">Become an Ambassador Today!</h2>
                   <p class="text-gray-700 mb-4">
                      Three membership levels, one mission — advancing T1D care with cutting-edge educational experiences, 
                      patient and clinical resources, and impactful rewards.
                   </p>
                   <p class="text-gray-700 mb-8">Together, we can make a difference!</p>
                   <button class="bg-blue-500 text-white py-2 px-6 rounded-full hover:bg-blue-600 transition">Get started</button>
                </div>
                
                <!-- Right Image -->
                <div class="right-image mt-6 md:mt-0">
                   <img src="/public/assets/mascot_figure 1.png" alt="Ambassador Image" class="mx-auto md:mx-0">
                </div>
             </div>
             
          </div>
       </div>
    </section>
 </template>
 
 <style scoped>
 .ambassador-section img {
   width: 100%;
   max-width: 300px;
   height: auto;
 }
 
 .right-box {
   position: relative;
 }
 
 .right-image img {
   width: 200px;
   height: auto;
 }
 
 @media (max-width: 768px) {
   .grid {
     grid-template-columns: 1fr;
     text-align: center;
   }
   .col-span-12 {
     width: 100%;
   }
 
   .left-image {
     order: 2;
   }
   
   .right-box {
     order: 1;
   }
   
   .right-image img {
     width: 170px;
     margin-top: 10px;
   }
 }
 </style>
 