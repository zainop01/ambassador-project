<template>
    <!-- Top Navbar -->
    <div
        class="w-full flex flex-col md:flex-row md:justify-between px-4 md:px-10 py-4 z-10"
    >
        <!-- Logo and Info Icon on Left and Right (Stay on Same Line in Mobile View) -->
        <div class="flex justify-between items-center w-full md:w-auto">
            <!-- Logo -->
            <img
                src="/public/assets/logo.png"
                alt="Logo"
                class="h-16 md:h-24 w-auto"
            />
            <!-- Info Icon -->
            <a
                href="#"
                class="hover:text-blue-500 text-xl md:text-2xl md:hidden text-[#307DFF]"
            >
            <img src="/public/assets/Info.png" class="h-7" alt="">
            </a>
        </div>

        <!-- Arrow, Image, Detect Home Text on the Right (Desktop: All in One Line, Mobile: Below) -->
        <div
            class="flex flex-col md:flex-row items-start md:items-center md:space-x-4 w-full md:w-auto mt-4 md:mt-0"
        >
            <div class="flex items-center space-x-4">
                <!-- Back Arrow -->
                <a href="#" class="text-[#868FA0] hover:text-blue-500">
                    <i
                        class="fa-solid fa-arrow-left-long text-[#307DFF] text-xl md:text-2xl"
                    ></i>
                </a>
                <!-- Image and Text -->
                <div class="flex items-center space-x-2">
                    <img
                        src="/public/assets/detect new 1-03 1.png"
                        alt="Detect Home"
                        class="w-8 h-8 md:w-10 md:h-10"
                    />
                    <span class="text-[#868FA0] text-lg md:text-xl"
                        >Detect Home</span
                    >
                </div>
            </div>
            <!-- Info Icon (Last Element in Desktop View) -->
            <a
                href="#"
                class="hidden md:block text-gray-400 hover:text-blue-500 text-xl md:text-2xl text-[#307DFF]"
            >
                <img src="/public/assets/info.png" alt="">
            </a>
        </div>
    </div>
</template>


<script>
export default {
  name: "TopNav",
};
</script>