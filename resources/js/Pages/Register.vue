<template>
    <div class="min-h-screen bg-[#F0F8FF] font-poppins relative pb-10">
        <TopNav />

        <div class="flex items-center justify-center mx-auto mt-10 px-6">
            <div
                class="w-full max-w-full bg-white py-10 px-6 sm:px-20 rounded-2xl shadow-sm"
                style="width: 550px"
            >
                <h2
                    class="text-4xl font-semibold text-center text-gray-900 my-6"
                >
                    Create Account
                </h2>

                <form @submit.prevent="validateForm">
                    <!-- First Name Input -->
                    <div class="mb-4">
                        <label class="block text-black font-semibold mb-2"
                            >First Name</label
                        >
                        <input
                            v-model="form.firstName"
                            type="text"
                            class="w-full px-4 py-3 rounded-lg focus:outline-none"
                            :class="{
                                'bg-[#F2F2F2]': !errors.firstName,
                                'border border-[#C62C4E] bg-[#F4C3D3]':
                                    errors.firstName,
                            }"
                            @blur="validateField('firstName')"
                            @input="validateField('firstName')"
                        />
                        <p
                            v-if="errors.firstName"
                            class="text-red-500 text-xs mt-1 text-end"
                        >
                            This field is required
                        </p>
                    </div>

                    <!-- Last Name Input -->
                    <div class="mb-4">
                        <label class="block text-black font-semibold mb-2"
                            >Last Name</label
                        >
                        <input
                            v-model="form.lastName"
                            type="text"
                            class="w-full px-4 py-3 rounded-lg focus:outline-none"
                            :class="{
                                'bg-[#F2F2F2]': !errors.lastName,
                                'border border-[#C62C4E] bg-[#F4C3D3]':
                                    errors.lastName,
                            }"
                            @blur="validateField('lastName')"
                            @input="validateField('lastName')"
                        />
                        <p
                            v-if="errors.lastName"
                            class="text-red-500 text-xs mt-1 text-end"
                        >
                            This field is required
                        </p>
                    </div>

                    <!-- Email Input -->
                    <div class="mb-4">
                        <label class="block text-black font-semibold mb-2"
                            >Email</label
                        >
                        <input
                            v-model="form.email"
                            type="email"
                            class="w-full px-4 py-3 rounded-lg focus:outline-none"
                            :class="{
                                'bg-[#F2F2F2]': !errors.email,
                                'border border-[#C62C4E] bg-[#F4C3D3]':
                                    errors.email,
                            }"
                            @blur="validateField('email')"
                            @input="validateField('email')"
                        />
                        <p
                            v-if="errors.email"
                            class="text-red-500 text-xs mt-1 text-end"
                        >
                            This field is required
                        </p>
                    </div>

                    <!-- Password Input with Toggle -->
                    <div class="mb-4 relative">
                        <label class="block text-black font-semibold mb-2"
                            >Password</label
                        >
                        <div class="relative">
                            <input
                                v-model="form.password"
                                :type="showPassword ? 'text' : 'password'"
                                class="w-full px-4 py-3 rounded-lg focus:outline-none"
                                :class="{
                                    'bg-[#F2F2F2]': !errors.password,
                                    'border border-[#C62C4E] bg-[#F4C3D3]':
                                        errors.password,
                                }"
                                @blur="validateField('password')"
                                @input="validateField('password')"
                            />
                            <button
                                type="button"
                                class="absolute inset-y-0 right-2 pr-3 flex items-center text-[#999999]"
                                @click="togglePassword"
                            >
                                <i
                                    :class="
                                        showPassword
                                            ? 'fa-regular fa-eye'
                                            : 'fa-regular fa-eye-slash'
                                    "
                                ></i>
                            </button>
                        </div>
                        <p
                            v-if="errors.password"
                            class="text-red-500 text-xs mt-1 text-end"
                        >
                            {{ errors.password }}
                        </p>
                    </div>

                    <!-- Password Input with Toggle -->
                    <div class="mb-4 relative">
                        <label class="block text-black font-semibold mb-2"
                            >Confirm Password</label
                        >
                        <div class="relative">
                            <input
                                v-model="form.confirmPassword"
                                :type="
                                    showConfirmPassword ? 'text' : 'password'
                                "
                                class="w-full px-4 py-3 rounded-lg focus:outline-none"
                                :class="{
                                    'bg-[#F2F2F2]': !errors.confirmPassword,
                                    'border border-[#C62C4E] bg-[#F4C3D3]':
                                        errors.confirmPassword,
                                }"
                                @blur="validateField('confirmPassword')"
                                @input="validateField('confirmPassword')"
                            />
                            <button
                                type="button"
                                class="absolute inset-y-0 right-2 pr-3 flex items-center text-[#999999]"
                                @click="toggleConfirmPassword"
                            >
                                <i
                                    :class="
                                        showConfirmPassword
                                            ? 'fa-regular fa-eye'
                                            : 'fa-regular fa-eye-slash'
                                    "
                                ></i>
                            </button>
                        </div>
                        <p
                            v-if="errors.confirmPassword"
                            class="text-red-500 text-xs mt-1 text-end"
                        >
                            {{ errors.confirmPassword }}
                        </p>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="flex items-center mb-6">
                        <input
                            type="checkbox"
                            v-model="form.agreeTerms"
                            class="form-checkbox rounded text-blue-600"
                        />
                        <label
                            class="ml-2 text-[#999999]"
                            style="font-size: 13px"
                            >I agree to the
                            <span class="text-[#307DFF]"
                                >Terms & Conditions</span
                            >
                            and acknowledge the Privacy Policy.</label
                        >
                    </div>

                    <!-- Submit Button -->
                    <button
                        type="submit"
                        class="w-full bg-[#307DFF] text-white py-3 rounded-full hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300 mb-5"
                    >
                        Sign Up
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";
import TopNav from "./components/TopNav.vue";

export default {
    components: {
        TopNav,
    },
    data() {
        return {
            form: {
                firstName: "",
                lastName: "",
                email: "",
                password: "",
                confirmPassword: "",
                agreeTerms: false,
            },
            errors: {
                firstName: null,
                lastName: null,
                email: null,
                password: null,
                confirmPassword: null,
            },
            showPassword: false,
            showConfirmPassword: false,
        };
    },
    methods: {
        togglePassword() {
            this.showPassword = !this.showPassword;
        },
        toggleConfirmPassword() {
            this.showConfirmPassword = !this.showConfirmPassword;
        },
        validateField(field) {
            if (field === "firstName") {
                this.errors.firstName = this.form.firstName ? null : true;
            }
            if (field === "lastName") {
                this.errors.lastName = this.form.lastName ? null : true;
            }
            if (field === "email") {
                this.errors.email = this.form.email ? null : true;
            }
            if (field === "password") {
                // Validate password for at least 8 characters and 1 number
                const passwordRegex = /^(?=.*\d)[a-zA-Z\d]{8,}$/;
                this.errors.password =
                    this.form.password && passwordRegex.test(this.form.password)
                        ? null
                        : "Password must be at least 8 characters with at least 1 number";
            }
            if (field === "confirmPassword") {
                // Validate confirmPassword matches password
                this.errors.confirmPassword =
                    this.form.confirmPassword === this.form.password
                        ? null
                        : "Passwords must match";
            }
        },
        validateForm() {
            this.validateField("firstName");
            this.validateField("lastName");
            this.validateField("email");
            this.validateField("password");
            this.validateField("confirmPassword");

            if (
                !this.errors.firstName &&
                !this.errors.lastName &&
                !this.errors.email &&
                !this.errors.password &&
                !this.errors.confirmPassword &&
                this.form.agreeTerms
            ) {
                console.log("Form Data", this.form);
                // Submit form data here via Inertia.js
                // Inertia.post('/register', this.form, {
                //   onError: (errors) => {
                //     this.errors = errors;
                //   },
                // });
            }
        },
    },
};
</script>
