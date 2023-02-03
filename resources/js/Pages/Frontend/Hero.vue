<script setup>
</script>
<template>
    <section id="home" class="lg:h-screen flex items-center justify-center bg-black max-w-screen-2xl">
        <div class="flex flex-col lg:flex-row  items-center justify-between">
            <div class="my-28 lg:my-0 flex flex-col items-center justify-center">
                <div class=" flex items-center justify-center ">
                    <img src="/img/me.webp" alt="Hasan YILDIZ" class="w-60 rounded-full">
                </div>
                <div class="mt-6">
                    <button
                        class="py-2 px-6 bg-old_green rounded-lg lg:text-xl text-black font-extrabold hover:bg-white  hover:text-black hover:scale-105 transition-all duration-300 ">
                        <a href="/pdf/CV.pdf" target="_blank">{{ $t("downloadcv") }}</a>
                    </button>
                </div>
            </div>

            <div
                class="lg:mx-16 my-6 rounded-lg p-4 scale-90 lg:scale-100  w-64 h-64 flex flex-col items-center justify-between bg-old_green shadow-old_green hover:scale-95">
                <h2 class=" text-xl font-extrabold text-center">
                    {{ $t("developer") }}
                </h2>
                <img src="/img/code.webp" alt="Cap" class="mt-2 h-20 w-auto" loading="lazy">
                <p class="lg:text-lg text-center">{{ $t("fullstack") }}</p>
            </div>

            <div
                class="rounded-lg p-4 scale-90 lg:scale-100 w-64 h-64 flex flex-col items-center justify-between bg-old_green shadow-old_green hover:scale-95">
                <h2 class=" text-xl font-extrabold text-center">
                    {{ $t("mechatronics") }}
                </h2>
                <img src="/img/cap.webp" alt="Cap" class="my-2 h-20 w-auto" loading="lazy">
                <p class="lg:text-lg text-center">{{ $t("graduated") }}</p>
            </div>
        </div>
    </section>
</template>