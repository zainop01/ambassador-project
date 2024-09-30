<template>
  <div class="min-h-screen bg-[#F0F8FF] font-poppins relative">
    <!-- Top Navbar -->
    <TopNav />

    <!-- Login Form Section -->
    <div class="flex items-center justify-center mx-auto mt-10 md:mt-20 px-6">
      <div class="w-full max-w-full bg-white py-10 px-6 sm:px-20 rounded-2xl shadow-sm" style="width: 550px;">
        <h2 class="text-3xl md:text-4xl font-semibold text-center text-gray-900 my-6">Log in</h2>

        <form @submit.prevent="validateForm">
          <!-- Email Field -->
          <div class="mb-4">
            <label class="block text-black font-semibold mb-2">Email</label>
            <input
              v-model="form.email"
              type="email"
              class="w-full px-4 py-3 rounded-lg focus:outline-none"
              :class="{
                'bg-[#F2F2F2]': !errors.email,
                'border border-[#C62C4E] bg-[#F4C3D3]': errors.email,
              }"
              @blur="validateField('email')"
              @input="validateField('email')"
            />
            <p v-if="errors.email" class="text-red-500 text-xs mt-1 text-end">This field is required</p>
          </div>

          <!-- Password Field -->
          <div class="mb-4 relative">
            <label class="block text-black font-semibold mb-2">Password</label>
            <div class="relative">
              <input
                v-model="form.password"
                :type="showPassword ? 'text' : 'password'"
                class="w-full px-4 py-3 rounded-lg focus:outline-none"
                :class="{
                  'bg-[#F2F2F2]': !errors.password,
                  'border border-[#C62C4E] bg-[#F4C3D3]': errors.password,
                }"
                @blur="validateField('password')"
                @input="validateField('password')"
              />
              <button type="button" class="absolute inset-y-0 right-2 pr-3 flex items-center text-[#999999]" @click="togglePassword">
                <i :class="showPassword ? 'fa-regular fa-eye' : 'fa-regular fa-eye-slash'"></i>
              </button>
            </div>
            <p v-if="errors.password" class="text-red-500 text-xs mt-1 text-end">This field is required</p>
          </div>

          <!-- Remember Me and Forgot Password -->
          <div class="flex justify-between items-center mb-6">
            <label class="inline-flex items-center text-sm md:text-base">
              <input
                type="checkbox"
                v-model="form.rememberMe"
                class="form-checkbox rounded text-blue-600"
              />
              <span class="ml-2 text-[#999999]">Remember me</span>
            </label>
            <a href="#" class="hover:underline text-sm md:text-base text-[#999999]">Forgot Password?</a>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="w-full bg-[#307DFF] text-white py-3 rounded-full hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300 mb-5">
            Log in
          </button>
        </form>

        <!-- Sign Up Link -->
        <p class="text-center text-sm md:text-base mt-10 text-gray-500">
          Don’t have an account yet? <a href="#" class="text-blue-500 hover:underline">Sign up</a>
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
        email: "",
        password: "",
        rememberMe: false,
      },
      errors: {
        email: null,
        password: null,
      },
      showPassword: false,
    };
  },
  methods: {
    togglePassword() {
      this.showPassword = !this.showPassword;
    },
    validateField(field) {
      if (field === "email") {
        if (!this.form.email) {
          this.errors.email = true;
        } else {
          this.errors.email = false;
        }
      }
      if (field === "password") {
        if (!this.form.password) {
          this.errors.password = true;
        } else {
          this.errors.password = false;
        }
      }
    },
    validateForm() {
      this.validateField("email");
      this.validateField("password");
      if (!this.errors.email && !this.errors.password) {
        console.log("Form Data", this.form);
        // Submit logic here...
      }
    },
  },
};
</script>
