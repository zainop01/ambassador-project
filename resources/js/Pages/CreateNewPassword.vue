<template>
  <div class="min-h-screen bg-[#F0F8FF] font-poppins relative">
    <TopNav />

    <div class="flex items-center justify-center mx-auto mt-20 px-6">
      <div class="w-full max-w-full bg-white py-10 px-6 sm:px-20 rounded-2xl shadow-sm" style="width: 550px;">
        <h2 class="text-3xl font-semibold text-center text-black my-10">Create New Password</h2>

        <form @submit.prevent="validateForm">
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
                  'border border-[#C62C4E] bg-[#F4C3D3]': errors.password
                }"
                @blur="validateField('password')"
                @input="validateField('password')"
              />
              <button
                type="button"
                class="absolute inset-y-0 right-2 pr-3 flex items-center text-[#999999]"
                @click="togglePassword('password')"
              >
                <i :class="showPassword ? 'fa-regular fa-eye' : 'fa-regular fa-eye-slash'"></i>
              </button>
            </div>
            <p v-if="errors.password" class="text-red-500 text-xs mt-1">{{ errors.password }}</p>
          </div>

          <!-- Confirm Password Field -->
          <div class="mb-4 relative">
            <label class="block text-black font-semibold mb-2">Confirm Password</label>
            <div class="relative">
              <input
                v-model="form.confirmPassword"
                :type="showConfirmPassword ? 'text' : 'password'"
                class="w-full px-4 py-3 rounded-lg focus:outline-none"
                :class="{
                  'bg-[#F2F2F2]': !errors.confirmPassword,
                  'border border-[#C62C4E] bg-[#F4C3D3]': errors.confirmPassword
                }"
                @blur="validateField('confirmPassword')"
                @input="validateField('confirmPassword')"
              />
              <button
                type="button"
                class="absolute inset-y-0 right-2 pr-3 flex items-center text-[#999999]"
                @click="togglePassword('confirmPassword')"
              >
                <i :class="showConfirmPassword ? 'fa-regular fa-eye' : 'fa-regular fa-eye-slash'"></i>
              </button>
            </div>
            <p v-if="errors.confirmPassword" class="text-red-500 text-xs mt-1">{{ errors.confirmPassword }}</p>
          </div>

          <!-- Submit Button -->
          <div class="flex justify-center">
            <button
              type="submit"
              class="w-40 mt-10 bg-[#307DFF] text-white py-3 rounded-full hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300"
            >
              Continue
            </button>
          </div>
        </form>

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
        password: '',
        confirmPassword: '',
      },
      errors: {
        password: null,
        confirmPassword: null,
      },
      showPassword: false,
      showConfirmPassword: false,
    };
  },
  methods: {
    togglePassword(field) {
      if (field === 'password') {
        this.showPassword = !this.showPassword;
      } else {
        this.showConfirmPassword = !this.showConfirmPassword;
      }
    },
    validateField(field) {
      if (field === 'password') {
        const passwordRegex = /^(?=.*[0-9])[a-zA-Z0-9]{8,}$/;
        if (!this.form.password) {
          this.errors.password = 'Password is required';
        } else if (!passwordRegex.test(this.form.password)) {
          this.errors.password = 'Must be 8 characters with at least 1 number';
        } else {
          this.errors.password = null;
        }
      }
      if (field === 'confirmPassword') {
        if (!this.form.confirmPassword) {
          this.errors.confirmPassword = 'Confirm Password is required';
        } else if (this.form.confirmPassword !== this.form.password) {
          this.errors.confirmPassword = 'Passwords do not match';
        } else {
          this.errors.confirmPassword = null;
        }
      }
    },
    validateForm() {
      this.validateField('password');
      this.validateField('confirmPassword');

      if (!this.errors.password && !this.errors.confirmPassword) {
        console.log('Form Data', this.form);
        // Submit logic here...
      }
    },
  },
};
</script>

<style scoped></style>
