<script setup>
import Projects from "./Projects.vue";
defineProps({
  skills: Object,
  projects: Object,
});
</script>
<template>
  <section  id="projects" class="min-h-screen py-12 max-w-screen-2xl bg-black text-white " >
    <div class="w-full h-full">
      <div class="w-full flex flex-col items-center justify-center">
        <div class="flex flex-col items-center text-center">
          <div class="w-full flex justify-center ">
                <h2 class="text-4xl lg:text-5xl font-anton">~ {{$t("artworks")}} ~</h2>
            </div>  
        </div>

        <div class="w-full  lg:px-6 ">
          <Projects :skills="skills" :projects="projects" />
        </div>
      </div>
    </div>
  </section>
</template>