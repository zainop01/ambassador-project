<template>
    <div class="min-h-screen bg-[#F0F8FF] font-poppins relative">
      <TopNav />

  
      <!-- Forgot Password Form -->
      <div class="flex items-center justify-center mx-auto mt-40 px-6">
        <div class="w-full max-w-full bg-white py-10 px-6 sm:px-20 rounded-2xl shadow-sm" style="width: 550px;">
          <h2 class="text-3xl font-semibold text-center text-black my-10">Forgot Password?</h2>
          
          <form @submit.prevent="validateForm">
            <!-- Email Input -->
            <div class="mb-4">
              <label class="block text-black font-semibold mb-2">Email</label>
              <input
                v-model="form.email"
                type="email"
                class="w-full px-4 py-3 rounded-lg focus:outline-none"
                :class="{
                  'bg-[#F2F2F2]': !errors.email,
                  'border border-[#C62C4E] bg-[#F4C3D3]': errors.email
                }"
                @blur="validateField('email')"
                @input="validateField('email')"
              />
              <p v-if="errors.email" class="text-red-500 text-xs mt-1 text-end">This field is required</p>
            </div>
  
            <!-- Continue Button -->
            <div class="flex justify-center">
              <button
                type="submit"
                class="w-40 mt-10 bg-[#307DFF] text-white py-3 rounded-full hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300"
              >
                Continue
              </button>
            </div>
  
          </form>
  
          <!-- Back Link -->
          <p class="text-center mt-10 text-gray-500 mt-10">
            <a href="#" class="text-[#307DFF] hover:underline">
              <i class="fa-solid fa-arrow-left-long"></i> Back
            </a>
          </p>
        </div>
      </div>
    </div>
  </template>
  
  <script>
import TopNav from './components/TopNav.vue';

  export default {
    components: {
      TopNav,
    },
    data() {
      return {
        form: {
          email: '',
        },
        errors: {
          email: null,
        },
      };
    },
    methods: {
      validateField(field) {
        if (field === 'email') {
          this.errors.email = this.form.email ? null : true;
        }
      },
      validateForm() {
        this.validateField('email');
  
        if (!this.errors.email) {
          console.log("Form Data", this.form);
          // Submit form data here for password reset
          // e.g., Inertia.post('/forgot-password', this.form);
        }
      },
    },
  };
  </script>
  
  <style scoped>
  /* Add any additional styles here if needed */
  </style>
  