<template>
    <div class="min-h-screen bg-[#F0F8FF] font-poppins relative">
      <TopNav/>

  
      <div class="flex items-center justify-center mx-auto mt-40 px-6">
        <div class="w-full max-w-full bg-white py-10 px-6 sm:px-20 rounded-2xl shadow-sm" style="width: 550px;">
          <h2 class="text-3xl font-bold text-center text-gray-900 my-10">Password changed successfully</h2>
            <p class="m-auto text-center" style="width: 80%;">You can now use your new password
                to log in,</p>
         
                <div class="flex justify-center">
              <button
                class="w-40 mt-10 bg-[#307DFF] text-white py-2 rounded-full hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300"
              >
                Sign in
              </button>
            </div>
        </div>
      </div>
    </div>
  </template>

  <script>
import TopNav from './components/TopNav.vue';

export default {
    components: { TopNav },
}

</script>