<script setup>
import { Link } from "@inertiajs/inertia-vue3";
defineProps({
  project: Object,
});
</script>
<template>
  <section class="w-full h-full">
    <div class="w-64 py-6 pt-2  rounded-full bg-old_green scale-90 lg:scale-100">
      <div class="pt-14 group flex flex-col items-center text-center"
        v-motion:initial="{ opacity: 0, y: 100, }" :enter="{ opacity: 1, y: 0, }">
        <div class="mt-2 border-2 border-black rounded-3xl">
          <img class="rounded-3xl h-48" :src="project.image" :alt="project.name" />
        </div>
        <span class="capitalize text-lg">{{ project.skill.name }}</span>
        <h3 class=" text-xl font-bold capitalize mb-2"> {{ project.name }} </h3>
        <button
          class="px-4 py-2 transition-transform duration-100 text-xl bg-black rounded-lg text-old_green mb-4 hover:text-white hover:scale-105 font-bold">
          <a :href="project.project_url" target="_blank">
            {{$t("show")}}
          </a>
        </button>
      </div>
    </div>
  </section>
</template>